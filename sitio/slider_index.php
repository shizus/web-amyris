<?php
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");

if (!($iPad || $iPhone || $iPod || $Android)) {
    ?>
    <div id="video-slide"></div>
<?php

} else {

}

?>



<section id="home-slider">
    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider hide-until-dom-ready">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
              <?php
              if (($iPad || $iPhone || $iPod || $Android)) {
                ?>
                  <div class="bg-img bg-img-1"></div>
                <?php
  
              }

              ?>
                <div class="slide-caption">
                    <div class="caption-content">
                        <h2 class="wow fadeInDown animated primero centered slider-size" id="titulo1" ><?php echo $bienvenidos ?></h2>
                        <h2 class="wow fadeInDown animated primero centered slider-size" id="titulo2"><?php echo $amyris ?></h2>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 col-xs-12 col-xs-offset-0">
                                <h2 class="wow fadeInDown animated segundo slider-size slogan" id="titulo3"><?php echo $creamos_fragancias ?></h2>
                            </div>
                            <div class="col-md-4 col-xs-12 col-xs-offset-0">
                                <h2 class="wow fadeInDown animated tercero slider-size slogan" id="titulo4" ><?php echo $creamos_sensaciones ?></h2>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

                <div class="bg-img bg-img-2"></div>
                <div class="slide-caption">
                    <div class="caption-content">
                        <h2 class="wow fadeInDown animated primero slide-titulo"><?php echo $fabricamos ?></h2>
                    </div>
                </div>

            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

                <div class="bg-img bg-img-3"></div>
                <div class="slide-caption">
                    <div class="caption-content">
                        <h2 class="wow fadeInDown animated primero slide-titulo"><?php echo $logramos ?></h2>

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

        <nav id="nav-arrows" class="nav-arrows visible-xs visible-sm visible-md visible-lg">
            <a href="javascript:;" class="sl-prev">
                <i class="fa fa-angle-left fa-3x"></i>
            </a>
            <a href="javascript:;" class="sl-next">
                <i class="fa fa-angle-right fa-3x"></i>
            </a>
        </nav>
        <nav id="nav-dots" class="nav-dots hidden-xs hidden-sm hidden-md hidden-lg">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
        </nav>

    </div><!-- /slider-wrapper -->
</section>