<?php 
// NOTE: ADD THE NEXT BLOCK COMMENT TO CREATE PAGE TEMPPLATES

/* Template Name: nightlife */

  get_header('avia'); 
?>
<div class="nightlife reset-typography">
 <div class="containesr">
        <!--first section-->
        <section class="main-content first-section">
            <div class="row first-section__content">
                <div class="cover-text col-xs-8">
                    <h2 class="first-section__content-title">Lounges</h2>
                    <p class="first-section__content-text">Celebra cada atardecer en buena compañía con las inﬁnitas posibilidades de entretenimiento y reuniones sociales que proponen nuestras áreas lounge, ya sea interiores o al aire libre.</p>
                </div>
                <div class="col-xs-12">
                    <img class=" big-image" alt="" src="../wp-content/themes/avia/images/banner-nightlife.png">
                </div>
                <img class="cover-image col-xs-12" alt="" src="../wp-content/themes/avia/images/banner-nightlife-2.png">
            </div>
        </section>

        <section class="gallery-section">
            <div class="row gallery ">
                <h2 class="col-xs-12 first-section__content-title" style="padding-left: 4%;">Directorio</h2>
                <div class="col-xs-12">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/nightlife-1.png" alt="">
                                    <p class="card__title">SYU</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/nightlife-2.png" alt="">
                                    <p class="card__title">SUGAR</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/nightlife-3.png" alt="">
                                    <p class="card__title">BAR ZEIS</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/nightlife-4.png" alt="">
                                    <p class="card__title">ZIELO ROOFTOP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

        <!--picture-right section-->
        <section class="fourth-section">
            <div class="section-row">
                <div class="fourth-section__column-left">
                    <img class="big-image" src="../wp-content/themes/avia/images/img-nightlife-2.png" alt="">
                </div>
                <div class="fourth-section__column-right">
                    <img class="big-image" src="../wp-content/themes/avia/images/img.nightlife-3.png" alt="">
                </div>
            </div>
        </section>

        <!--fourth section-->
        <section class="picture-right-section">
            <div class="section-row">
                <div class="picture-right-section__column-left">
                    <div class="picture-right-section__left row">
                        <div class="col-xs-8 col-xs-push-2 col-md-3 col-md-push-4 ">
                            <p class="first-section__content-text">Un ambiente moderno, vibrante y seguro para la conexi&oacute;n entre amigos.</p>
                        </div>
    
                    </div>
                </div>
                <div class="picture-right-section__column-right">
                    <img class="big-image" src="../wp-content/themes/avia/images/img-nightlife-4.png" alt="">
                </div>
            </div>
        </section>
    </div>
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