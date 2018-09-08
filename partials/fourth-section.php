<?php 
$the_query = new WP_Query( array( 'pagename'=>'homepage/section-4' ) ); 
?>

  <section id="contacto" class="container-fluid fourth-section">
    <div class="fourth-section__content col-xs-12 col-sm-8 col-md-6 col-sm-push-2 col-md-push-3">
      <?php if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </section>

<?php wp_reset_query(); ?>