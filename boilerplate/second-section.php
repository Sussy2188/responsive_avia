<?php
$the_query = new WP_Query( array( 'pagename'=>'homepage/section-2' ) );
?>

<section class="container-fluid second-section">
  <div class="row">
    <div class="col-xs-12 col-sm-5 second-section__left">
      <div class="row">
        <img src="<?php echo bloginfo('template_directory'); ?>/images/section-2-left.jpg" alt="">
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 second-section__middle">
      <div class="second-section__padder">
        <div class="row">
          <img src="<?php echo bloginfo('template_directory'); ?>/images/section-2-middle.jpg" alt="">
        </div>

        <?php if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-3 second-section__right">
      <div class="row">
        <img src="<?php echo bloginfo('template_directory'); ?>/images/section-2-right.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<?php wp_reset_query(); ?>
