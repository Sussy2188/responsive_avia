<?php

define('HOMEID',custom_get_page_id('home') );
$homeCustomFields = get_post_custom(HOMEID);

function custom_get_page_id($nicename) {
    global $wpdb;
    $the_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$nicename' and post_type='page' AND post_status='publish'");
    return $the_id;
}

/* ----------- // ENQUEUE SCRIPTS // ----------- */
/* ----------- // ====== ====== // ----------- */
function wpdocs_theme_scripts() {
  if ( !is_home() ) {
    wp_enqueue_style( 'avia-styles', get_template_directory_uri() . '/styles-avia.css', array(), null, 'all'  );
  } else {
    wp_enqueue_style( 'styles', get_stylesheet_uri(), '', null, 'all' );
  }
  
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.12.4', true );
  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '4.2.2', true );
  wp_enqueue_script( 'generaljs', get_template_directory_uri() . '/js/general.js', array(), '1.0.0', true );
  // if ( is_page_template( 'page-actividades.php' ) || is_page_template( 'page-clientes.php' ) || is_page_template( 'page-hybrid-actividades.php' ) ) {
  //   wp_enqueue_style( 'swiper-styles', get_template_directory_uri() . '/ui/css/swiper.css', array(), null, 'all'  );
  //   wp_enqueue_script( 'swiper', get_template_directory_uri() . '/ui/js/swiper.jquery.js', array(), '1.0.0', true );
  // }
 
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_scripts' );
/* ----------- // ====== ====== // ----------- */

add_filter( 'document_title_separator', 'generic_document_title_separator' );
function generic_document_title_separator( $sep ) {
  $sep = "|";
  return $sep;
}

add_filter( 'the_title', 'generic_title' );
function generic_title( $title ) {
  if ( $title == '' ) {
    return '&rarr;';
  } else {
    return $title;
  }
}

function generic_read_more_link() {
  if ( ! is_admin() ) {
    return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
  }
}
add_filter( 'the_content_more_link', 'generic_read_more_link' );

function generic_excerpt_read_more_link( $more ) {
  if ( ! is_admin() ) {
    global $post;
    return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
  }
}
add_filter( 'excerpt_more', 'generic_excerpt_read_more_link' );

add_action( 'widgets_init', 'generic_widgets_init' );
function generic_widgets_init() {
  register_sidebar( array (
  'name' => esc_html__( 'Sidebar Widget Area', 'generic' ),
  'id' => 'primary-widget-area',
  'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
  'after_widget' => "</li>",
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );
}
add_action( 'comment_form_before', 'generic_enqueue_comment_reply_script' );

function generic_enqueue_comment_reply_script() {
  if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

function generic_custom_pings( $comment ) {
  ?>
  <li <?php comment_class(); ?> id="li-comment-
    <?php comment_ID(); ?>">
    <?php echo comment_author_link(); ?>
  </li>
  <?php
}

add_filter( 'get_comments_number', 'generic_comment_count', 0 );
function generic_comment_count( $count ) {
  if ( ! is_admin() ) {
    global $id;
    $get_comments = get_comments( 'status=approve&post_id=' . $id );
    $comments_by_type = separate_comments( $get_comments ); 
    return count( $comments_by_type['comment'] );
  } else {
    return $count;
  }
}

/** Thumbnails */
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' );
  
  // additional image sizes
  // delete the next line if you do not need additional image sizes
  add_image_size( 'slider', 400, 300, true ); //300 pixels wide (and unlimited height)
}


/* ----------- // CUSTOM PANELS // ----------- */
/* ----------- // ====== ====== // ----------- */

add_action('init', 'themePostTypes');

function themePostTypes() {
	
/*=== Slider ===*/
	$sliderLabels = array(
	    'name' => _x('Slider', 'post type general name'),
	    'singular_name' => _x('Slider', 'post type singular name'),
	    'add_new' => _x('Añadir Nuevo', 'Servicio'),
	    'add_new_item' => __('Añadir Nuevo Servicio'),
	    'edit_item' => __('Editar Servicio'),
	    'new_item' => __('Añadir Servicio'),
	    'view_item' => __('Ver Slider'),
	    'search_items' => __('Buscar Slider'),
	    'not_found' =>  __('Slider no existente.'),
	    'not_found_in_trash' => __('No se encontraron Slider en la papelera.'), 
	    'parent_item_colon' => '',
	    'menu_name' => 'Slider'
	);
	
	register_post_type(
    'slider', 
    array('labels' => $sliderLabels,
		'description' => 'slider',
		'publicly_queryable' => true,
		'public' => true, 
		'show_ui' => true,
		'hierarchical' => false, // like posts
		'supports' => array(
		    'title',
		    'editor',
		    'thumbnail')
		)
	);
}

function add_search_form($items, $args) {
 
  if ($args->menu == 'avia-menu') { // change your menu slug name

    // Add your html
    $items .= '<li class="menu-item nav-search">'
                  . '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'">'
                  . '<label class="nav-input-wrapper">'
                  . '<span class="screen-reader-text">' . _x( 'Buscar:', 'label' ) . '</span>'
                  . '<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Buscar …', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />'
                  . '</label>'
                  . '<input type="submit" class="search-submit" />'
                  . '<span class="lens-icon"></span>'
                  . '</form>'
                  . '</li>';
  }
  return $items;
}
add_filter( 'wp_nav_menu_items', 'add_search_form', 10, 2 );