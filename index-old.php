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
                  <h1>The Ecosystem for Entrepreneurs <br class="hidden-xs hidden-sm"> & Creative Minds</h1>
                  <h3>Community / Spaces / Launch Pad</h3>
                  <!-- <h5></h5> -->
                  <a href="kafnuhk.html" class="square-cta border-version">Kafnu Hong Kong opens 3rd October, learn more</a>
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
                <h4>Live</h4>
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
                    <p>As our lives become more hectic, living well is about efficiency and balance. Kafnu empowers its members with spaces and community providing a physical, intellectual and social launch pad.</p>
                  </div>
                  <div class="cta-container">
                    <a href="live.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="100" class="col-md-4 no-padding wow slideInUp">
              
              <div class="home-box-item">
                <h4>Work</h4>
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
                    <p>Co-Working is everywhere. At Kafnu, we do take it a step further.</p>
                  </div>
                  <div class="cta-container">
                    <a href="work.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="150" class="col-md-4 no-padding wow slideInUp">

              <div class="home-box-item">
                <h4>Play</h4>
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
                    <p>Playing is the key to creativity. Kafnu encourages you to do it. Unplug. Relax. Set down the phone. Swim. Run. Sing. Paint. Break something.</p>
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
                <h4>Learn</h4>
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
                    <p>At Kafnu, learning never stops. From events to spontaneous conversations to unexpected insights to eye-opening inspiration – learning is our constant.</p>
                  </div>
                  <div class="cta-container">
                    <a href="learn.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="100" class="col-md-4 no-padding wow slideInUp">
              
              <div class="home-box-item">
                <h4>Rest</h4>
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
                    <p>Our spaces let you unwind. From crash pods to lounge chairs to hidden corners to nap or gaze at the skyline, you’ll find it here.</p>
                  </div>
                  <div class="cta-container">
                    <a href="rest.html" class="plus-icon"></a>
                  </div>
                </div>
              </div>

            </div>
            <div data-wow-offset="150" class="col-md-4 no-padding wow slideInUp">

              <div class="home-box-item last-version">
                <h4>Our <br class="visible-xs visible-sm"> Community</h4>
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
                    <p>We’re united by our mission to challenge the ordinary. Whether you’re a coder, chef, accountant, designer, acrobat, hustler, or still figuring it out – you’re invited to Kafnu.</p>
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
                  <h2>Kafnu <br class="visible-xs visible-sm"> Hong Kong</h2>
                  <p><b>A vibrant community on Victoria Harbour in the heart of Hung Hom</b></p>                  
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
                  <h2>Kafnu <br class="visible-xs visible-sm"> Taipei</h2>
                  <p><b>Opening soon. A vertical village at the crossroads of tech, media & design.</b></p>                  
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
              <h4 data-wow-offset="50" class="wow fadeInUp">Kafnu: A Physical, Intellectual, & Social Launch Pad</h4>
              <p data-wow-offset="100" class="wow fadeInUp">Our community is a network of creative talent, technologists, designers, and artists from across the world. Kafnu membership is open to anyone challenging the ordinary. Whether you’re at your home location or travelling to a Kafnu abroad, you can meet other inspiring and creative individuals.</p>

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
file_put_contents('index.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>