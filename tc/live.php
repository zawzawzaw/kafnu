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
            <img src="" data-image-desktop="images_cms/live/live-banner.jpg">
          </div>
        </div>
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="images_cms/live/live-banner.jpg"
                        data-image-mobile="images_cms/live/live-banner-mobile.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container" class="center-version medium-text-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div id="page-default-banner-copy">
                  <h1>Kafnu 生活方式</h1>
                  <h3>來自 Kafnu 村落的啟發</h3>
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
                <h3>在 Kafnu 中，從一天工作後需要舒適放鬆空間與健身房，發揮創意的錄音室，與朋友相聚的小酒吧，到舉辦各類型活動所需要的空間，全部都能一次滿足。</h3>
              </div> <!-- page-play-slider-title -->

              <div id="page-play-slider-container">

                <div id="page-play-slider" class="kafnu-slick-slider">
                  <div class="page-play-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/live/live-slider-1.jpg"
                        data-image-tablet="images_cms/live/live-slider-1.jpg"
                        data-image-mobile="images_cms/live/live-slider-1.jpg" alt="">
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
                    <img src="" data-image-desktop="images_cms/live/live-tab-1.jpg"
                                data-image-tablet="images_cms/live/live-tab-1.jpg"
                                data-image-mobile="images_cms/live/live-tab-1.jpg" alt="">
                  </div>

                  <div class="text-container">
                    <h2>工作生態系</h2>
                    <p>Kafnu 是個工作生態系，整個空間以藝術裝點其設計概念。細節設計和建築風格以一種能讓會員們感受 Kafnu 社群魅力和充滿想像空間來表現。背景音樂經過精心設計，混合電子音樂、新生代音樂家與經典樂曲。Kafnu 的空間設計模式，期待能引發對話並帶起深入議題探討。生態設計風格則體現了Kafnu 面向自然的理念，更是新想法的靈感觸發器。</p>
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
                    <h2>工作生態系</h2>
                    <p>Kafnu 是個工作生態系，整個空間以藝術裝點其設計概念。細節設計和建築風格以一種能讓會員們感受 Kafnu 社群魅力和充滿想像空間來表現。背景音樂經過精心設計，混合電子音樂、新生代音樂家與經典樂曲。Kafnu 的空間設計模式，期待能引發對話並帶起深入議題探討。生態設計風格則體現了Kafnu 面向自然的理念，更是新想法的靈感觸發器。</p>
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
                    <h2>工作生態系</h2>
                    <p>Kafnu 是個工作生態系，整個空間以藝術裝點其設計概念。細節設計和建築風格以一種能讓會員們感受 Kafnu 社群魅力和充滿想像空間來表現。背景音樂經過精心設計，混合電子音樂、新生代音樂家與經典樂曲。Kafnu 的空間設計模式，期待能引發對話並帶起深入議題探討。生態設計風格則體現了Kafnu 面向自然的理念，更是新想法的靈感觸發器。</p>
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
                    <h2>工作生態系</h2>
                    <p>Kafnu 是個工作生態系，整個空間以藝術裝點其設計概念。細節設計和建築風格以一種能讓會員們感受 Kafnu 社群魅力和充滿想像空間來表現。背景音樂經過精心設計，混合電子音樂、新生代音樂家與經典樂曲。Kafnu 的空間設計模式，期待能引發對話並帶起深入議題探討。生態設計風格則體現了Kafnu 面向自然的理念，更是新想法的靈感觸發器。</p>
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
                  <h3 class="minimize-text" data-length="-1" data-tablet-length="130" data-mobile-length="-1">可用 iPhone 控制的機器人、科技藝術裝置、啟發想法的摺紙巧拼，在 Kafnu 中是隨處可見的驚喜，幫助會員隨時產生新想法。我們相信這個將生活、工作與玩樂完美結合的社群空間，本身就是個絕佳的藝術作品。</h3>
                </div>
                <div class="cta-container hidden-xs hidden-sm">
                  <a href="index.html#location" class="plus-cta">我們的地點</a>
                </div>
            </div><!--
            --><div class="col-md-7 v-align-col">
              <div class="page-play-location-content-container">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/live/live-content.jpg"
                                data-image-tablet="images_cms/live/live-content.jpg"
                                data-image-mobile="images_cms/live/live-content.jpg" alt="">
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
file_put_contents('live.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>  