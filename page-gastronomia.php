<?php 
// NOTE: ADD THE NEXT BLOCK COMMENT TO CREATE PAGE TEMPPLATES

/* Template Name: gastronomia */

  get_header('avia'); 
?>
<div class="gastronomia reset-typography">
  <div class="containesr">
        <!--first section-->
        <section class="main-content first-section">
            <div class="row first-section__content">
                <div class="cover-text col-xs-8">
                    <h2 class="first-section__content-title">Gastronom&iacute;a</h2>
                    <p class="first-section__content-text" style=" width: 60%;">Vive una experiencia gastron&oacute;mica &uacute;nica en el nuevo destino culinario  de la ciudad; cocina japonesa, italiana, americana y steak house, entre otros,
                         integran nuestra variada selecci&oacute;n culinaria.</p>
                </div>
                <div class="col-xs-12 col-md-8">
                    <img class=" big-image" alt="" src="../wp-content/themes/avia/images/gastronomia/7.png">
                </div>
                <img class="cover-image col-xs-12" alt="" src="../wp-content/themes/avia/images/gastronomia/6.png">
            </div>
        </section>
        <!--second section-->
        <!--carousel-->
        <section class="gallery-section">
            <div class="row gallery ">
                <h2 class="col-xs-12 first-section__content-title text-center">Directorio</h2>
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

        <section class="container">
            <div class="row title-section">
                <div class="col-xs-12 ">
                    <h2 class="title-section__title">LA TERRAZA</h2>
                </div>
            </div>
        </section>
        <!--picture-right section-->
        <section class="picture-right-section">
            <div class="section-row">
                <div class="picture-right-section__column-left">
                    <div class="picture-right-section__left row">
                        <div class="col-xs-8 col-xs-push-2 col-md-6 col-md-push-3 ">
                            <h2 class="second-section__title">MUY PRONTO</h2>
                            <p class="first-section__content-text">Descubre un nuevo pasaje culinario y vive la experiencia AVIA en un ambiente unico en Guatemala.</p>
                        </div>

                    </div>
                </div>
                <div class="picture-right-section__column-right">
                    <img class="big-image" src="../wp-content/themes/avia/images/gastronomia/1.png" alt="">
                </div>
            </div>
        </section>
        <!--container-fluid-->
        <section class="third-section" style="background-image:url(../wp-content/themes/avia/images/gastronomia/banner.png);height: 500px;">
            <div class="third-section__content col-sm-8 col-md-6 col-sm-push-2 col-md-push-3">
                <p class="third-section__title">Muy pronto en AVIA...</p>
                <div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="es-ES" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="/#wpcf7-f5-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="5">
                            <input type="hidden" name="_wpcf7_version" value="5.0.1">
                            <input type="hidden" name="_wpcf7_locale" value="es_ES">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--fourth section-->
        <section class="fourth-section">
            <div class="section-row">
                <div class="fourth-section__column-left">
                    <img class="big-image" src="../wp-content/themes/avia/images/gastronomia/3.png" alt="">
                </div>
                <div class="fourth-section__column-right">
                    <div class="fourth-section__right row">
                        <div class="col-xs-8 col-xs-push-2 col-md-6 col-md-push-3">
                            <h2 class="second-section__title">MERCADO AVIA</h2>
                            <p class="first-section__content-text">Disfruta una fusion de sabores en un solo ambiente. Te esperamos muy pronto en la terraza de
                                AVIA.</p>
                        </div>
                    </div>
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