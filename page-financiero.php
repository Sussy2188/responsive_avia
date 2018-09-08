<?php 
// NOTE: ADD THE NEXT BLOCK COMMENT TO CREATE PAGE TEMPPLATES

/* Template Name: financiero */

  get_header('avia'); 
?>
  <!--carousel-->
  <div class="financiero reset-typography">
  <section class="main-content first-section">
        <div class="first-section__wrapper">
            <img class="card__image" src="../wp-content/themes/avia/images/banner-bg.png" alt="">  
            <div class="cover-text">
                <h2 class="first-section__content-title">Financiero</h2>
                <p class="first-section__content-text">Un espacio seguro, confiable e innovador con diferentes opciones de banca para facilitar la experiencia financiera.</p>
            </div>
            <div class="col-xs-12 gallery ">
                <h2 class="col-xs-12 first-section__content-title text-center">Directorio</h2>
                <div class="col-xs-12 col-xs-push-0 col-md-8 col-sm-push-4">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col-xs-12">
                                    <img class="card__image" src="../wp-content/themes/avia/images/bac.png" alt="">
                                    <p class="card__title">BAC CREDOMATIC</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12">
                                    <img class="card__image" src="../wp-content/themes/avia/images/industrial.png" alt="">
                                    <p class="card__title">BANCO INDUSTRIAL</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12">
                                    <img class="card__image" src="../wp-content/themes/avia/images/gyt.png" alt="">
                                    <p class="card__title">BANCO G&amp;T CONTINENTAL</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12">
                                    <img class="card__image" src="../wp-content/themes/avia/images/promerica.png" alt="">
                                    <p class="card__title">BANCO PROMERICA</p>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    window.onload= function() {
        setTimeout(function(){
            setSwiper(4);
        });
    }
</script>

<?php 
  get_footer('avia'); 
?>