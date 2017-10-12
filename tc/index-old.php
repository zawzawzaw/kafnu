<?php 
ob_start();
?>
<?php
  global $current_page;
  $current_page = "page-home";

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

      <article id="page-default-banner-section" class="">
        <div id="page-default-banner-image" class="visible-lg visible-md">
          <div class="manic-image-container">
            <img src="" data-image-desktop="images_cms/home/home-banner.jpg">
          </div>
        </div>
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="images_cms/home/home-banner.jpg"
                        data-image-mobile="images_cms/home/home-banner.jpg">
          </div>
        </div>
        <!-- <div id="page-default-banner-video"> -->
          <!-- <video playsinline autoplay muted loop poster="images_cms/home/home-banner.jpg" id="page-default-banner-bgvid">
            <source src="videos_cms/home/home-banner-bg-vid.mp4" type="video/mp4">
          </video> -->
        <!-- </div> -->

        <div id="page-default-banner-copy-container" class="left-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">

                <div id="page-default-banner-copy">
                  <h1>為創業者與創意人打造之<br>全新工作生態系</h1>
                  <h3>社群/空間/創客平台</h3>
                  <!-- <h5></h5> -->
                  <a href="kafnuhk.html" class="square-cta border-version">KAFNU 香港 2017.10.3 開幕，了解更多</a>
                </div> <!-- page-default-banner-copy -->

              </div>
            </div>
          </div>
        </div> <!-- page-default-banner-copy-container -->

      </article> <!-- page-default-banner-section -->





      

      <article id="page-home-boxes-section">
        <div class="container-fluid reduce-padding">

          <div class="row">
            <div data-wow-offset="50" class="col-md-4 no-padding wow slideInUp">

              <div class="home-box-item">                
                <h4>生活</h4>
                <div class="manic-image-container color-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_LIVE.jpg"
                    data-image-tablet="images_cms/home/Home_LIVE.jpg"
                    data-image-mobile="images_cms/home/live-mobile.jpg" alt="">
                </div>
                <div class="manic-image-container white-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_LIVE_Black.jpg"
                    data-image-tablet="images_cms/home/Home_LIVE_Black.jpg"
                    data-image-mobile="images_cms/home/Home_LIVE_Black.jpg" alt="">
                </div>
                <div class="overlay-content live">
                  <div class="text-container">
                    <p>當工作與生活已密不可分，維持生活品質就必須提高效率同時兼顧平衡。Kafnu 為會員規劃完善空間，建立社群支援，提供實體、思維與社群需求皆能滿足之全方位創客平台。</p>
                  </div>
                  <div class="cta-container">
                    <a href="live.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="100" class="col-md-4 no-padding wow slideInUp">
              
              <div class="home-box-item">
                <h4>工作</h4>
                <div class="manic-image-container color-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_WORK.jpg"
                    data-image-tablet="images_cms/home/Home_WORK.jpg"
                    data-image-mobile="images_cms/home/work-mobile.jpg" alt="">
                </div>
                <div class="manic-image-container white-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_WORK_Black.jpg"
                    data-image-tablet="images_cms/home/Home_WORK_Black.jpg"
                    data-image-mobile="images_cms/home/Home_WORK_Black.jpg" alt="">
                </div>
                <div class="overlay-content work">
                  <div class="text-container">
                    <p>放眼城市中各種共享空間，在 Kafnu 你將體驗前所未有的嶄新模式。</p>
                  </div>
                  <div class="cta-container">
                    <a href="work.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="150" class="col-md-4 no-padding wow slideInUp">

              <div class="home-box-item">
                <h4>玩樂</h4>
                <div class="manic-image-container color-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_PLAY.jpg"
                    data-image-tablet="images_cms/home/Home_PLAY.jpg"
                    data-image-mobile="images_cms/home/play-mobile.jpg" alt="">
                </div>
                <div class="manic-image-container white-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_PLAY_Black.jpg"
                    data-image-tablet="images_cms/home/Home_PLAY_Black.jpg"
                    data-image-mobile="images_cms/home/Home_PLAY_Black.jpg" alt="">
                </div>
                <div class="overlay-content play">
                  <div class="text-container">
                    <p>玩樂帶來精采創意。Kafnu 期待你能輕鬆享受玩樂。放下手機吧！游個泳、去慢跑、唱首歌或去畫畫…總之，打破自己的界線吧！</p>
                  </div>
                  <div class="cta-container">
                    <a href="play.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
          </div> <!-- row -->

          <div class="row">
            <div data-wow-offset="50" class="col-md-4 no-padding wow slideInUp">

              <div class="home-box-item">
                <h4>學習</h4>
                <div class="manic-image-container color-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_LEARN.jpg"
                    data-image-tablet="images_cms/home/Home_LEARN.jpg"
                    data-image-mobile="images_cms/home/learn-mobile.jpg" alt="">
                </div>
                <div class="manic-image-container white-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_LEARN_Black.jpg"
                    data-image-tablet="images_cms/home/Home_LEARN_Black.jpg"
                    data-image-mobile="images_cms/home/Home_LEARN_Black.jpg" alt="">
                </div>
                <div class="overlay-content learn">
                  <div class="text-container">
                    <p>在這裡，學習成為一種日常。你能參與各種創新領域活動、加入豐富而深刻的對談、更能與帶來靈感的人們相遇。Kafnu 將給你不斷電的學習旅程。</p>
                  </div>
                  <div class="cta-container">
                    <a href="learn.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="100" class="col-md-4 no-padding wow slideInUp">
              
              <div class="home-box-item">
                <h4>休憩</h4>
                <div class="manic-image-container color-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_REST.jpg"
                    data-image-tablet="images_cms/home/Home_REST.jpg"
                    data-image-mobile="images_cms/home/rest-mobile.jpg" alt="">
                </div>
                <div class="manic-image-container white-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_REST_Black.jpg"
                    data-image-tablet="images_cms/home/Home_REST_Black.jpg"
                    data-image-mobile="images_cms/home/Home_REST_Black.jpg" alt="">
                </div>
                <div class="overlay-content rest">
                  <div class="text-container">
                    <p>這是一個能讓你完全舒展開的空間。從休憩艙到躺椅，還有讓你小睡或凝視天際線的角落，你都能在 Kafnu 找到！</p>
                  </div>
                  <div class="cta-container">
                    <a href="rest.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="150" class="col-md-4 no-padding wow slideInUp">

              <div class="home-box-item last-version">
                <h4>社群</h4>
                <div class="manic-image-container color-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_COMMUNITY.jpg"
                    data-image-tablet="images_cms/home/Home_COMMUNITY.jpg"
                    data-image-mobile="images_cms/home/our-community-mobile.jpg" alt="">
                </div>
                <div class="manic-image-container white-version">
                  <img src="" 
                    data-image-desktop="images_cms/home/Home_COMMUNITY_Black.jpg"
                    data-image-tablet="images_cms/home/Home_COMMUNITY_Black.jpg"
                    data-image-mobile="images_cms/home/Home_COMMUNITY_Black.jpg" alt="">
                </div>
                <div class="overlay-content community">
                  <div class="text-container">
                    <p>「challenge the ordinary」這個終極任 務，號召了Kafnu 的社群經理們。而無論你是程式設計師、主廚、會計師、設計師、雜耍演員、拼命三郎，或者暫時沒有明確的定位，我們都歡迎你加入Kafnu。</p>
                  </div>
                  <div class="cta-container">
                    <a href="community.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
          </div> <!-- row -->

          <div class="row">
            <div data-wow-offset="50" class="col-md-8 no-padding wow fadeInUp">
              <div class="scroll-target" data-value="location"></div>          
              <div id="home-box-slider" class="kafnu-slick-slider">
                <div class="home-box-slider-item">
                  <div class="manic-image-container">
                    <img src="" 
                      data-image-desktop="images_cms/home/Home_HK_Location1.jpg"
                      data-image-tablet="images_cms/home/Home_HK_Location1.jpg"
                      data-image-mobile="images_cms/home/Home_HK_Location1.jpg" alt="">
                  </div>
                </div>
                <div class="home-box-slider-item">
                  <div class="manic-image-container">
                    <img src="" 
                      data-image-desktop="images_cms/home/Home_HK_Location2.jpg"
                      data-image-tablet="images_cms/home/Home_HK_Location2.jpg"
                      data-image-mobile="images_cms/home/Home_HK_Location2.jpg" alt="">
                  </div>
                </div>
                <div class="home-box-slider-item">
                  <div class="manic-image-container">
                    <img src="" 
                      data-image-desktop="images_cms/home/Home_HK_Location3.jpg"
                      data-image-tablet="images_cms/home/Home_HK_Location3.jpg"
                      data-image-mobile="images_cms/home/Home_HK_Location3.jpg" alt="">
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="100" class="col-md-4 no-padding wow fadeInUp">
              
              <div class="home-box-item text-version color-version">
                <div class="text-container">
                  <h2>Kafnu 香港</h2>
                  <p><b>位在紅磡中心，維多利亞港邊，充滿動力的社群空間</b></p>                  
                </div>
                <div class="cta-container">
                  <a href="kafnuhk.html" class="plus-icon"></a>
                </div>
              </div>

            </div>            
          </div> <!-- row -->

          <div class="row">
            <div data-wow-offset="50" class="col-md-8 no-padding wow fadeInUp">

              <div id="home-box-slider-02" class="kafnu-slick-slider">
                <div class="home-box-slider-item">
                  <div class="manic-image-container">
                    <img src="" 
                      data-image-desktop="images_cms/home/Home_TP_Location1.jpg"
                      data-image-tablet="images_cms/home/Home_TP_Location1.jpg"
                      data-image-mobile="images_cms/home/Home_TP_Location1.jpg" alt="">
                  </div>
                </div>
                <div class="home-box-slider-item">
                  <div class="manic-image-container">
                    <img src="" 
                      data-image-desktop="images_cms/home/Home_TP_Location2.jpg"
                      data-image-tablet="images_cms/home/Home_TP_Location2.jpg"
                      data-image-mobile="images_cms/home/Home_TP_Location2.jpg" alt="">
                  </div>
                </div>
                <div class="home-box-slider-item">
                  <div class="manic-image-container">
                    <img src="" 
                      data-image-desktop="images_cms/home/Home_TP_Location3.jpg"
                      data-image-tablet="images_cms/home/Home_TP_Location3.jpg"
                      data-image-mobile="images_cms/home/Home_TP_Location3.jpg" alt="">
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="100" class="col-md-4 no-padding wow fadeInUp">
              
              <div class="home-box-item text-version">
                <div class="text-container">
                  <h2>Kafnu 台北</h2>
                  <p><b>位在科技、媒體與設計交叉路口的垂直部落。即將開業。</b></p>                  
                </div>
                <div class="cta-container">
                  <a href="kafnutp.html" class="plus-icon"></a>
                </div>
              </div>

            </div>            
          </div> <!-- row -->

        </div>
      </article> <!-- page-home-whatwedo-section -->



      <article id="page-default-connect-with-world-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h4 data-wow-offset="50" class="wow fadeInUp">Kafnu：實體、思維與社群需求皆能滿足之全方位創客平台</h4>
              <p data-wow-offset="100" class="wow fadeInUp">Kafnu 是一個由全亞太地區的創意人、科技從業者、設計師、藝術家…等等所組成的社群網絡，我們歡迎每一位期待挑戰平凡的你，來成為Kafnu 的會員。無論你身在本地或到其他有Kafnu 的城市旅行，都將有機會與能啟發靈感與創意的優秀Kafnu 會員雙向交流。</p>

              <!-- <ul class="social-media-links-container">
                <li data-wow-offset="150" class="wow slideInUp"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li data-wow-offset="200" class="wow slideInUp"><a href="https://www.youtube.com/channel/UCtPQ3Tmfzyenxt882Cehb-w"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li data-wow-offset="250" class="wow slideInUp"><a href="https://www.facebook.com/kafnuhk/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </article>

      <article id="page-default-social-media-masonry-section">
        <div class="container-fluid reduce-padding">
          <div class="row">
            <div class="col-md-12 no-padding">

              <div id="default-masonry-grid-container" class="hidden-xs hidden-sm">

                <div class="grid">
                  <div class="grid-sizer"></div>
                  <div data-wow-offset="50" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/videos/1943871022519532/" target="_blank" class="social-media-source-tag" target="_blank">
                      <div class="manic-image-container video-version">
                        <img src="" data-image-desktop="images_cms/home/fb-video-thumb-01.jpg" alt="">
                      </div>                      
                    </a>
                  </div>
                  <div data-wow-offset="55" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook color-version">
                      <div class="grid-item-text-container">
                        <h5>Bill - Company of Dreamers</h5>
                        <p class="minimize-text" data-length="-1" data-tablet-length="35" data-mobile-length="60">Bill Black, ex-hotelier and Director at Next Story Group, discusses what sets Kafnu apart as a...</p>                      
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="60" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-01.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="65" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-02.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="70" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-01.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="75" class="grid-item wow fadeInUp">
                    <a href="https://www.youtube.com/watch?v=Wx-O38D0WuA" target="_blank" class="social-media-source-tag youtube" target="_blank">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/youtube-thumb-01.jpg" alt="">
                      </div>
                    </a>
                  </div>

                  <div data-wow-offset="80" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-02.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="85" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-03.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="90" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-04.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="95" class="grid-item wow fadeInUp">
                    <a href="https://www.youtube.com/watch?v=FiVGdSg_pDk" target="_blank" class="social-media-source-tag youtube" target="_blank">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/youtube-thumb-02.jpg" alt="">
                      </div>
                    </a>
                  </div>                  
                  <div data-wow-offset="100" class="grid-item grid-item--width2 grid-item--height2 wow fadeInUp">
                    <a href="http://www.webintravel.com/next-story-reimagines-urban-spaces-kafnu-vertical-village/" target="_blank" class="social-media-source-tag news color-version">
                      <div class="grid-item-text-container">
                        <h5 class="minimize-text" data-length="-1" data-tablet-length="50" data-tablet-length="10">Next Story reimagines urban spaces with Kafnu, the vertical village</h5>
                        <p class="minimize-text" data-length="-1" data-tablet-length="80" data-tablet-length="10">Next Story Group, formerly Silver Needle Hospitality, will be launching two spaces in Taipei and Hong Kong under a new brand, Kafnu, by year end.</p>
                        <p class="minimize-text" data-length="-1" data-tablet-length="0" data-tablet-length="10">Seeking to reimagine urban spaces through technology and story, the company says the new spaces will synthesise “the best aspects of co-working, co-living, hotel, retail and private club”.</p>
                      </div>
                    </a>
                  </div>

                  <div data-wow-offset="105" class="grid-item wow fadeInUp">
                    <a href="https://www.youtube.com/watch?v=Q1EgmSBFql0" target="_blank" class="social-media-source-tag youtube" target="_blank">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/youtube-thumb-03.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="110" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-03.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="115" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-05.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="120" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-04.jpg" alt="">
                      </div>
                    </a>
                  </div>   

                  <div data-wow-offset="125" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-05.jpg" alt="">
                      </div>
                    </a>
                  </div>   
                  <div data-wow-offset="130" class="grid-item grid-item--width2 wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook color-version">
                      <div class="grid-item-text-container">
                        <h5 class="minimize-text" data-length="-1" data-tablet-length="50" data-tablet-length="10">Anyone curious about the space and its design for Kafnu Hong Kong?</h5>
                        <p class="minimize-text" data-length="-1" data-tablet-length="80" data-tablet-length="10">Each space is inline with our brand's innovative spirit and local elements. The most special element</p>
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="135" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-06.jpg" alt="">
                      </div>
                    </a>
                  </div>   
                  <div data-wow-offset="140" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-06.jpg" alt="">
                      </div>
                    </a>
                  </div>   
                  <div data-wow-offset="145" class="grid-item wow fadeInUp">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-07.jpg" alt="">
                      </div>
                    </a>
                  </div>   
                </div> <!-- grid -->

              </div> <!-- home-masonry-grid-container -->
              
              <div id="default-grid-container-mobile" class="visible-xs visible-sm">
                <div class="grid-item">
                  <a href="http://www.youtube.com" target="_blank" class="social-media-source-tag youtube" target="_blank">
                    <div class="manic-image-container video-version">
                      <img src="" data-image-desktop="images_cms/home/fb-video-thumb-01.jpg"
                                  data-image-tablet="images_cms/home/fb-video-thumb-01.jpg"
                                  data-image-mobile="images_cms/home/fb-video-thumb-01.jpg" alt="">
                    </div>                      
                  </a>
                </div>
                <div class="grid-item">
                  <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook color-version">
                    <div class="grid-item-text-container">
                      <h5>Bill - Company of Dreamers</h5>
                      <p>Bill Black, ex-hotelier and Director at Next Story Group...</p>                      
                    </div>
                  </a>
                </div>
                <div class="grid-item">
                  <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/home/in-image-thumb-02.jpg"
                                  data-image-tablet="images_cms/home/in-image-thumb-02.jpg"
                                  data-image-mobile="images_cms/home/in-image-thumb-02.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="grid-item">
                  <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/home/in-image-thumb-03.jpg"
                                  data-image-tablet="images_cms/home/in-image-thumb-03.jpg"
                                  data-image-mobile="images_cms/home/in-image-thumb-03.jpg"
                       alt="">
                    </div>
                  </a>
                </div>
              </div>


            </div>
          </div> <!-- row -->
        </div>
      </article> <!-- page-home-social-media-masonry-section -->


    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->

  <?php include "includes/footer_desktop.php"; ?>
  <?php include "includes/footer_mobile.php"; ?>

  <?php include "includes/script_home.php" ?>

</body>
</html>
<?php
// saving captured output to file
file_put_contents('index-old.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>