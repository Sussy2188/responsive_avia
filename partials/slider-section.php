<?php $slider = new WP_Query ('post_type=slider&post_per_page=-1&status=publish&orderby=menu_order&order=ASC'); ?>
<?php if ($slider->have_posts()) : ?>
<section class="slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php while ($slider->have_posts()) : ?>
        <?php $slider->the_post(); ?>
        <div class="swiper-slide">
          <div class="col-xs-12">
            <div class="row ">
              <div class="slider__text col-md-push-3  col-md-9">
                <h2 class="slider__title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <div class="col-md-5 slider__image">
                  <div class="slider__image-content">
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail( 'slider' );
                    } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>
<?php endif; ?>