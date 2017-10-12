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
            <img src="" data-image-desktop="images_cms/learn/learn-banner.jpg">
          </div>
        </div>
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="images_cms/learn/learn-banner.jpg"
                        data-image-mobile="images_cms/learn/learn-banner-mobile.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container" class="center-version long-text-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div id="page-default-banner-copy">
                  <h1>從他人、世界、<br class="hidden-xs hidden-sm">與自己身上學習</h1>
                  <h3>一段發現之旅</h3>
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
                <h3>每一間 Kafnu，我們致力於激發在藝術、科技、媒體或商業各種領域的創意發展與表現來進行空間設計。在這裡我們會舉辦活動、研討會、雞尾酒會等活動，幫助會員們啟發靈感並持續學習。</h3>
              </div> <!-- page-play-slider-title -->

              <div id="page-play-slider-container">

                <div id="page-play-slider" class="kafnu-slick-slider">
                  <div class="page-play-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/learn/learn-slider-1.jpg"
                        data-image-tablet="images_cms/learn/learn-slider-1.jpg"
                        data-image-mobile="images_cms/learn/learn-slider-1.jpg" alt="">
                    </div>
                  </div>
                  </div>                                    
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
                    <img src="" data-image-desktop="images_cms/learn/learn-tab-1.jpg"
                                data-image-tablet="images_cms/learn/learn-tab-1.jpg"
                                data-image-mobile="images_cms/learn/learn-tab-1.jpg" alt="">
                  </div>

                  <div class="text-container">
                    <h2>強大的會員網絡</h2>
                    <p>無論你人在何處，都能透過 Kafnu 的多元網絡與我們的會員建立關係。藉由 Kafnu 的手機應用程式與網站，或者在Kafnu 中會面；這個由創業家、創意工作者、跨界工作者與實踐家組成的強大網絡，你將是其中一員！</p>
                  </div>

                  <div class="manic-image-container visible-xs visible-sm">
                    <img src="" data-image-desktop="images_cms/learn/learn-tab-1.jpg"
                                data-image-tablet="images_cms/learn/learn-tab-1.jpg"
                                data-image-mobile="images_cms/learn/learn-tab-1.jpg" alt="">
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
                    <h2>強大的會員網絡</h2>
                    <p>無論你人在何處，都能透過 Kafnu 的多元網絡與我們的會員建立關係。藉由 Kafnu 的手機應用程式與網站，或者在Kafnu 中會面；這個由創業家、創意工作者、跨界工作者與實踐家組成的強大網絡，你將是其中一員！</p>
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
                    <h2>強大的會員網絡</h2>
                    <p>無論你人在何處，都能透過 Kafnu 的多元網絡與我們的會員建立關係。藉由 Kafnu 的手機應用程式與網站，或者在Kafnu 中會面；這個由創業家、創意工作者、跨界工作者與實踐家組成的強大網絡，你將是其中一員！</p>
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
                    <h2>強大的會員網絡</h2>
                    <p>無論你人在何處，都能透過 Kafnu 的多元網絡與我們的會員建立關係。藉由 Kafnu 的手機應用程式與網站，或者在Kafnu 中會面；這個由創業家、創意工作者、跨界工作者與實踐家組成的強大網絡，你將是其中一員！</p>
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
                  <h3>連結全球社群 <br class="hidden-sm hidden-xs"> 加入 Kafnu，體驗終身學習的全新模式</h3>                  
                </div>
                <div class="cta-container hidden-xs hidden-sm">
                  <a href="index.html#location" class="plus-cta">我們的地點</a>
                </div>
            </div><!--
            --><div class="col-md-7 v-align-col">
              <div class="page-play-location-content-container">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/learn/learn-content.jpg"
                                data-image-tablet="images_cms/learn/learn-content.jpg"
                                data-image-mobile="images_cms/learn/learn-content.jpg" alt="">
                </div>
              </div>
              <div class="cta-container visible-sm visible-xs">
                <a href="index.html#location" class="plus-cta">我們的地點</a>
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
file_put_contents('learn.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>