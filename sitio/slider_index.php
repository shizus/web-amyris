<div  id="video-slide"></div>

<section id="home-slider">
    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider hide-until-dom-ready">

            <div class="sl-slide" data-orientation="horizontal">

                <div class="slide-caption">
                    <div class="caption-content">
                        <h2 class="wow slideInDown animated primero centered slider-size" id="titulo1" ><?php echo $bienvenidos ?></h2>
                        <h2 class="wow slideInDown animated primero centered slider-size" id="titulo2"><?php echo $amyris ?></h2>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <h2 class="wow slideInDown animated segundo slider-size slogan" id="titulo3"><?php echo $creamos1 ?></h2>
                            </div>
                            <div class="col-md-4">
                                <h2 class="wow slideInDown animated tercero slider-size slogan" id="titulo4" ><?php echo $creamos2 ?></h2>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="sl-slide" data-orientation="horizontal">

                <div class="bg-img bg-img-2"></div>
                <div class="slide-caption">
                    <div class="caption-content">
                        <h2 class="wow slideInDown animated primero slide-titulo"><?php echo $fabricamos ?></h2>
                    </div>
                </div>

            </div>

            <div class="sl-slide" data-orientation="horizontal">

                <div class="bg-img bg-img-3"></div>
                <div class="slide-caption">
                    <div class="caption-content">
                        <h2 class="wow slideInDown animated primero slide-titulo"><?php echo $logramos ?></h2>

                    </div>
                </div>

            </div>

        </div><!-- /sl-slider -->

        <!--
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev">Previous</span>
            <span class="nav-arrow-next">Next</span>
        </nav>
        -->

        <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
            <a href="javascript:;" class="sl-prev">
                <i class="fa fa-angle-left fa-3x"></i>
            </a>
            <a href="javascript:;" class="sl-next">
                <i class="fa fa-angle-right fa-3x"></i>
            </a>
        </nav>


        <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
        </nav>

    </div><!-- /slider-wrapper -->
</section>