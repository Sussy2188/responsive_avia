<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="expires" content="-1" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
  </head>
  <body <?php body_class(); ?>>
    <header class="header container-fluid" class="container-fluid">
      <div class="row">
        <div class="branding col-xs-4 col-md-6">
          <div class="header__branding">
            <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                <span>
                  <?php echo esc_html( get_bloginfo( 'name' ) ); ?> | <?php bloginfo( 'description' ); ?>
                </span>
              </a>
            <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
          </div>
        </div>
        <div class="col-xs-8 col-md-6">
          <div class="row">
            <?php wp_nav_menu(array(
              'menu'           => 'main-menu'
            )); ?>
          </div>
        </div>
      </div>
    </header>