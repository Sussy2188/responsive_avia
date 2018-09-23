<?php 
// NOTE: ADD THE NEXT BLOCK COMMENT TO CREATE PAGE TEMPPLATES

/* Template Name: comercio */

  get_header('avia'); 
?>
<div class="comercio reset-typography">
<div class="containesr">
        <!--first section-->
        <section class="main-content first-section">
            <div class="row first-section__content">
                <div class="cover-text col-xs-8">
                    <h2 class="first-section__content-title">Comercio</h2>
                    <p class="first-section__content-text">Una selecta oferta comercial en 
                        espacios totalmente abiertos con 
                        jardines interiores y plazas rodeadas 
                        de obras de arte y elementos 
                        arquitect&oacute;nicos contempor&aacute;neos.</p>
                </div>
                <div class="col-xs-12 col-md-8">
                    <img class=" big-image" alt="" src="../wp-content/themes/avia/images/comercio/img-2.png">
                </div>
                <img class="cover-image col-xs-12" alt="" src="../wp-content/themes/avia/images/comercio/img-1.png">
            </div>
        </section>
        <section class="gallery-section">
            <div class="row gallery ">
                <h2 class="col-xs-12 first-section__content-title">Directorio</h2>
                <div class="col-xs-12">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/comercio/img-6.png" alt="">
                                    <p class="card__title">FS RICHARD</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/comercio/img-7.png" alt="">
                                    <p class="card__title">FETICHE</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/comercio/img-8.png" alt="">
                                    <p class="card__title">PRETTY BALLERINAS</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/comercio/img-9.png" alt="">
                                    <p class="card__title">ARTEMIS</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="col-xs-12 ">
                                    <img class="card__image" src="../wp-content/themes/avia/images/comercio/img-7.png" alt="">
                                    <p class="card__title">PAPIDU</p>
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
        
        <!--fourth section-->

        <section class="picture-right-section">
            <div class="section-row">
                <div class="picture-right-section__column-left">
                    <div class="picture-right-section__left row">
                        <div class="col-xs-8 col-xs-push-2 col-md-7 col-md-push-3">
                            <p class="first-section__content-text">Un legado de estilo y buen 
                                gusto en una atm&oacute;sfera
                                 cosmopolitana</p>
                        </div>
    
                    </div>
                </div>
                <div class="picture-right-section__column-right">
                    <img class="big-image" src="../wp-content/themes/avia/images/comercio/img-3.png" alt="">
                </div>
            </div>
        </section>
        <!--third section-->
        <section class="fourth-section">
            <div class="section-row">
                <div class="fourth-section__column-left">
                    <img class="big-image" src="../wp-content/themes/avia/images/comercio/img-4.png" alt="">
                </div>
                <div class="fourth-section__column-right">
                    <img class="big-image" src="../wp-content/themes/avia/images/comercio/img-5.png" alt="">
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