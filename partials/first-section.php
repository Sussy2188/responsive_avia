<?php 
$the_query = new WP_Query( array( 'pagename'=>'homepage/section-1' ) ); 
?>

<section class="main-content container-fluid first-section">
  <div class="first-section__wrapper">
    <div class="cover-text col-sm-4">
      <?php if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-xs-12 col-xs-push-0 col-sm-push-2 col-sm-10 big-image" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/cover.jpg);"></div>
  </div>
</section>

<?php wp_reset_query(); ?>