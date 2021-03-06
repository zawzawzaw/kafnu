<?php 
ob_start();
?>
<?php
  global $current_page;
  $current_page = "page-play";

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php include 'includes/head.php'; ?>
</head>

<body class="<?php echo $current_page; ?>"> <!-- home-expand-header-version -->
  <!-- only the home page has the class home-expand-header-version by default -->

  <?php include "includes/preloader.php"; ?>

  <?php include "includes/header_desktop.php"; ?>
  <?php include "includes/header_mobile.php"; ?>

  <div id="page-wrapper">
    <div id="page-wrapper-content">


      <div id="page-home-nav-trigger"></div>


      <!--
         ____    _    _   _ _   _ _____ ____
        | __ )  / \  | \ | | \ | | ____|  _ \
        |  _ \ / _ \ |  \| |  \| |  _| | |_) |
        | |_) / ___ \| |\  | |\  | |___|  _ <
        |____/_/   \_\_| \_|_| \_|_____|_| \_\

      -->

      <article id="page-default-banner-section">
        <div id="page-default-banner-image" class="visible-lg visible-md">
          <div class="manic-image-container">
            <img src="" data-image-desktop="images_cms/work/work-banner.jpg">
          </div>
        </div>
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="images_cms/work/work-banner.jpg"
                        data-image-mobile="images_cms/work/work-banner-mobile.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container" class="center-version medium-text-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div id="page-default-banner-copy">
                  <h1>Journeys Begin Here</h1>
                  <h3>Co-Working + Inspiration.</h3>
                </div> <!-- page-default-banner-copy -->

              </div>
            </div>
          </div>
        </div> <!-- page-default-banner-copy-container -->

      </article> <!-- page-default-banner-section -->


      <article id="page-play-slider-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">

              <div id="page-play-slider-title">
                <h3>Kafnu provides the tools, facilities and services <br class="hidden-xs hidden-sm"> to help you achieve your objectives.</h3>
              </div> <!-- page-play-slider-title -->

              <div id="page-play-slider-container">

                <div id="page-play-slider" class="kafnu-slick-slider">
                  <div class="page-play-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/work/work-slider-1.jpg"
                        data-image-tablet="images_cms/work/work-slider-1.jpg"
                        data-image-mobile="images_cms/work/work-slider-1.jpg" alt="">
                    </div>
                  </div>
                  <!-- <div class="page-play-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/play/play-slider-2.jpg"
                        data-image-tablet="images_cms/play/play-slider-2.jpg"
                        data-image-mobile="images_cms/play/play-slider-2.jpg" alt="">
                    </div>
                  </div>                  
                  <div class="page-play-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/play/play-slider-3.jpg"
                        data-image-tablet="images_cms/play/play-slider-3.jpg"
                        data-image-mobile="images_cms/play/play-slider-3.jpg" alt="">
                    </div>
                  </div> -->                                    
                </div>                

              </div> <!-- page-play-slider-container -->

            </div>
          </div> <!-- row -->
        </div>
      </article> <!-- page-play-slider-section -->

      <article id="page-play-extra-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 col-md-offset-1">
              
              <!-- <div id="page-play-extra-icons-container" class="hidden-xs hidden-sm">
                <ul>
                  <li><a href="#drink" class="drink active-icon"></a></li>
                  <li><a href="#music" class="music"></a></li>
                  <li><a href="#tennis" class="tennis"></a></li>
                  <li><a href="#swim" class="swim"></a></li>
                </ul>
              </div> -->
                    
              <div class="page-play-extra-content-container drink-tab active-tab">
                <div id="page-play-extra-content">
                  <div class="manic-image-container hidden-xs hidden-sm">
                    <img src="" data-image-desktop="images_cms/work/work-tab-1.jpg"
                                data-image-tablet="images_cms/work/work-tab-1.jpg"
                                data-image-mobile="images_cms/work/work-tab-1.jpg" alt="">
                  </div>

                  <div class="text-container">
                    <h2>Mentorship in any direction.</h2>
                    <p>At Kafnu, everyone meets and supports everyone naturally. Young members teach experienced managers, artists collaborate with technologists, media-savvy users guide entrepreneurs -- and vice versa. Openness and helpfulness are paramount.</p>
                  </div>

                  <div class="manic-image-container visible-xs visible-sm">
                    <img src="" data-image-desktop="images_cms/play/play-tab-1.jpg"
                                data-image-tablet="images_cms/play/play-tab-1.jpg"
                                data-image-mobile="images_cms/play/play-tab-1.jpg" alt="">
                  </div>
                </div>
      
              </div>

              <div class="page-play-extra-content-container music-tab">
                <div id="page-play-extra-content">
                  <div class="manic-image-container hidden-xs hidden-sm">
                    <img src="" data-image-desktop="images_cms/play/play-tab-2.jpg"
                                data-image-tablet="images_cms/play/play-tab-2.jpg"
                                data-image-mobile="images_cms/play/play-tab-2.jpg" alt="">
                  </div>

                  <div class="text-container">
                    <h2>Mentorship in any direction.</h2>
                    <p>At Kafnu, everyone meets and supports everyone naturally. Young members teach experienced managers, artists collaborate with technologists, media-savvy users guide entrepreneurs -- and vice versa. Openness and helpfulness are paramount.</p>
                  </div>

                  <div class="manic-image-container visible-xs visible-sm">
                    <img src="" data-image-desktop="images_cms/play/play-tab-2.jpg"
                                data-image-tablet="images_cms/play/play-tab-2.jpg"
                                data-image-mobile="images_cms/play/play-tab-2.jpg" alt="">
                  </div>
                </div>                
              </div>

              <div class="page-play-extra-content-container tennis-tab">
                <div id="page-play-extra-content">
                  <div class="manic-image-container hidden-xs hidden-sm">
                    <img src="" data-image-desktop="images_cms/play/play-tab-3.jpg"
                                data-image-tablet="images_cms/play/play-tab-3.jpg"
                                data-image-mobile="images_cms/play/play-tab-3.jpg" alt="">
                  </div>

                  <div class="text-container">
                    <h2>Mentorship in any direction.</h2>
                    <p>At Kafnu, everyone meets and supports everyone naturally. Young members teach experienced managers, artists collaborate with technologists, media-savvy users guide entrepreneurs -- and vice versa. Openness and helpfulness are paramount.</p>
                  </div>

                  <div class="manic-image-container visible-xs visible-sm">
                    <img src="" data-image-desktop="images_cms/play/play-tab-3.jpg"
                                data-image-tablet="images_cms/play/play-tab-3.jpg"
                                data-image-mobile="images_cms/play/play-tab-3.jpg" alt="">
                  </div>
                </div>                
              </div>

              <div class="page-play-extra-content-container swim-tab">
                <div id="page-play-extra-content">
                  <div class="manic-image-container hidden-xs hidden-sm">
                    <img src="" data-image-desktop="images_cms/play/play-tab-4.jpg"
                                data-image-tablet="images_cms/play/play-tab-4.jpg"
                                data-image-mobile="images_cms/play/play-tab-4.jpg" alt="">
                  </div>

                  <div class="text-container">
                    <h2>Mentorship in any direction.</h2>
                    <p>At Kafnu, everyone meets and supports everyone naturally. Young members teach experienced managers, artists collaborate with technologists, media-savvy users guide entrepreneurs -- and vice versa. Openness and helpfulness are paramount.</p>
                  </div>

                  <div class="manic-image-container visible-xs visible-sm">
                    <img src="" data-image-desktop="images_cms/play/play-tab-4.jpg"
                                data-image-tablet="images_cms/play/play-tab-4.jpg"
                                data-image-mobile="images_cms/play/play-tab-4.jpg" alt="">
                  </div>
                </div>                
              </div>

              <!-- <div id="page-play-extra-icons-container" class="visible-xs visible-sm">
                <ul>
                  <li><a href="#drink" class="drink active-icon"></a></li>
                  <li><a href="#music" class="music"></a></li>
                  <li><a href="#tennis" class="tennis"></a></li>
                  <li><a href="#swim" class="swim"></a></li>
                </ul>
              </div> -->

            </div>
          </div>
        </div>
      </article>

      <article id="page-play-location-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-md-offset-1 v-align-col">
                <div class="text-container">
                  <h3 class="minimize-text" data-length="-1" data-tablet-length="130" data-mobile-length="-1">Kafnu goes beyond traditional co-working spaces. Each Kafnu is designed as a blended concept from the ground up. Spaces offer an organic mix of work/play/learn/rest segments that encourage creative development for the individual but equally important as a community.</h3>                  
                </div>
                <div class="cta-container hidden-xs hidden-sm">
                  <a href="index.html#location" class="plus-cta">See our locations</a>
                </div>
            </div><!--
            --><div class="col-md-7 v-align-col">
              <div class="page-play-location-content-container">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/work/work-content.jpg"
                                data-image-tablet="images_cms/work/work-content.jpg"
                                data-image-mobile="images_cms/work/work-content.jpg" alt="">
                </div>
              </div>
              <div class="cta-container visible-sm visible-xs">
                <a href="index.html#location" class="plus-cta">our <br class="visible-sm visible-xs"> locations</a>
              </div>
            </div>
          </div>
        </div>
      </article>


    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->

  <?php include "includes/footer_desktop.php"; ?>
  <?php include "includes/footer_mobile.php"; ?>

  <?php include "includes/script_play.php" ?>

</body>
</html>
<?php
// saving captured output to file
file_put_contents('work.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>