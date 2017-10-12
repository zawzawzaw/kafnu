<?php 
ob_start();
?>
<?php
  global $current_page;
  $current_page = "page-country";

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

      <div class="header-desktop-spacer hidden-xs hidden-sm"></div>


      <!--
         ____    _    _   _ _   _ _____ ____
        | __ )  / \  | \ | | \ | | ____|  _ \
        |  _ \ / _ \ |  \| |  \| |  _| | |_) |
        | |_) / ___ \| |\  | |\  | |___|  _ <
        |____/_/   \_\_| \_|_| \_|_____|_| \_\

      -->

      <article id="page-default-banner-section" class="country-version">
        <div id="page-default-banner-image" class="visible-lg visible-md">
          <div class="container-fluid reduce-padding">
            <div class="row">
              <div class="col-lg-9 col-md-8 no-padding">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country_tp/country-banner.jpg">
                </div>
              </div>
              <div class="col-lg-3 col-md-4 no-padding">
                <div id="banner-sidebar-container" class="kafnu-slick-slider">

                  <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>upcoming events</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/event-slider-01.jpg"
                        data-image-tablet="images_cms/country_tp/event-slider-01.jpg"
                        data-image-mobile="images_cms/country_tp/event-slider-01.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>Vision Board for the Future</h5>
                      <p>12 October 2017 – 6:30 PM</p>
                      <p>We celebrate Kafnu’s opening with a stimulating panel discussion, tasty cocktails, and special guests.</p>
                    </div>
                    <!-- <div class="banner-sidebar-item-cta-container">
                      <a href="community.html#events" class="square-cta border-version">See More</a>
                    </div> -->
                  </div><!-- banner-sidebar-item -->

                  <!-- <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>upcoming events</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/event-slider-02.jpg"
                        data-image-tablet="images_cms/country_tp/event-slider-02.jpg"
                        data-image-mobile="images_cms/country_tp/event-slider-02.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>Reception for HICAP conference attendees</h5>
                      <p>19 October 2017 – 7:00 PM</p>
                      <p>In Hong Kong for HICAP? See the world’s first Kafnu and prepare for some special surprises.</p>
                    </div>
                    <!- - <div class="banner-sidebar-item-cta-container">
                      <a href="community.html#events" class="square-cta border-version">See More</a>
                    </div> - ->
                  </div> --><!-- banner-sidebar-item -->

                  <!-- <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>upcoming events</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/event-slider-03.jpg"
                        data-image-tablet="images_cms/country_tp/event-slider-03.jpg"
                        data-image-mobile="images_cms/country_tp/event-slider-03.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>‘Unchartered Territories’ Dinner.</h5>
                      <p>20 October 2017 – 6:00 PM</p>
                      <p>Experience Hong Kong’s best-kept secret restaurants, in a dinner tour hosted by Kafnu for HICAP attendees.</p>
                    </div>
                    <!- - <div class="banner-sidebar-item-cta-container">
                      <a href="community.html#events" class="square-cta border-version">See More</a>
                    </div> - ->
                  </div> --><!-- banner-sidebar-item -->

                  <!-- <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>upcoming events</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/event-slider-04.jpg"
                        data-image-tablet="images_cms/country_tp/event-slider-04.jpg"
                        data-image-mobile="images_cms/country_tp/event-slider-04.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>Doing business in Taiwan</h5>
                      <p>30 Oct – 3 Nov</p>
                      <p>A week of seminars and “office hours” with individual consultation with experts on doing business in Taiwan – from setting up a company, working with hardware factories, hiring and HR, and importing/exporting.</p>
                    </div>
                    <!- - <div class="banner-sidebar-item-cta-container">
                      <a href="community.html#events" class="square-cta border-version">See More</a>
                    </div> - ->
                  </div> --><!-- banner-sidebar-item -->                  

                </div> <!-- banner-sidebar-container -->
              </div>
            </div> <!-- row -->
          </div>
        </div> <!-- page-default-banner-image -->  
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="images_cms/country_tp/country-banner.jpg"
                        data-image-mobile="images_cms/country_tp/country-banner.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container" class="left-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div id="page-default-banner-copy">
                  <h1>Kafnu Taipei</h1>
                  <h3>A vertical village at the crossroads of tech, media & design</h3>
                </div> <!-- page-default-banner-copy -->

              </div>
            </div>
          </div>
        </div> <!-- page-default-banner-copy-container -->

      </article> <!-- page-default-banner-section -->      

      <article id="page-default-booking-section">
        <div class="container-fluid reduce-padding">

          <div id="page-default-booking-item-desktop" class="hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3 no-padding page-default-booking-item tp-version">                              
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/booking-space-01.jpg"
                    data-image-tablet="images_cms/country_tp/booking-space-01.jpg"
                    data-image-mobile="images_cms/country_tp/booking-space-01-mobile.jpg" alt="">
                  </div>
                  <div class="page-default-booking-item-text">
                    <h5>Hot Desk</h5>
                    <p>Choose your favorite seat and book by hour, day or month.</p>
                    <!-- <span class="price">From HK$70/Hour</span>                 -->
                  </div>
                  <div class="page-default-booking-item-cta-container">
                    <!-- <a href="https://hongkong.kafnu.com/en/bookings/calendar" class="square-cta border-version">Book Now</a> -->
                    <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                  </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item tp-version">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country_tp/booking-space-02.jpg" 
                  data-image-tablet="images_cms/country_tp/booking-space-02.jpg"
                  data-image-mobile="images_cms/country_tp/booking-space-02.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>4 Person Meeting Room</h5>
                  <p>Comfortable seating, colorful artwork, high-quality screens.</p>
                  <!-- <span class="price">From HK$600/Hour</span>                 -->
                </div>
                <div class="page-default-booking-item-cta-container">
                  <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361933" target="_blank" class="square-cta border-version">Book Now</a> -->
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item tp-version">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country_tp/booking-space-03.jpg" 
                  data-image-tablet="images_cms/country_tp/booking-space-03.jpg"
                  data-image-mobile="images_cms/country_tp/booking-space-03.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>6 Person Meeting Room</h5>
                  <p>Digital light cubes or panels, industrial walls, wireless projection.</p>
                  <!-- <span class="price">From HK$750/Hour</span>                 -->
                </div>
                <div class="page-default-booking-item-cta-container">
                  <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361934" target="_blank" class="square-cta border-version">Book Now</a> -->
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item tp-version">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country_tp/booking-space-04.jpg" 
                  data-image-tablet="images_cms/country_tp/booking-space-04.jpg"
                  data-image-mobile="images_cms/country_tp/booking-space-04.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>8 Person Meeting Room</h5>
                  <p>80-inch screen, integrated aqua scape (coming soon).</p>
                  <!-- <span class="price">From HK$900/Hour</span>                 -->
                </div>
                <div class="page-default-booking-item-cta-container">
                  <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361935" target="_blank" class="square-cta border-version" style="display: none;">Book Now</a> -->
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                </div>
              </div>
            </div> <!-- row -->
          </div>    
          
          <!-- 
              __  _______  ____  ______    ______
             /  |/  / __ \/ __ )/  _/ /   / ____/
            / /|_/ / / / / __  |/ // /   / __/
           / /  / / /_/ / /_/ // // /___/ /___
          /_/  /_/\____/_____/___/_____/_____/

          -->

          <div id="page-default-booking-item-mobile" class="visible-sm visible-xs">
                
            <div class="row">
              <div class="col-sm-12 no-padding page-default-booking-item tp-version">
                <div class="manic-expand-container mobile-open-version">
                    <div class="scroll-target" data-value="hot-desk"></div>
                    <div class="manic-expand-container-title">
                        <h5>Hot Desk</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/booking-space-01.jpg"
                        data-image-tablet="images_cms/country_tp/booking-space-01.jpg"
                        data-image-mobile="images_cms/country_tp/booking-space-01-mobile.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>Hot Desk</h5>
                        <p>Choose your favorite seat and book by hour, day or month.</p>
                        <!-- <span class="price">From HK$70/Hour</span>                 -->
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <!-- <a href="https://hongkong.kafnu.com/en/bookings/calendar" class="square-cta border-version">Book Now</a> -->
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                      </div>                    
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item tp-version">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="4-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>4 Person Meeting Room</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/booking-space-02.jpg" 
                        data-image-tablet="images_cms/country_tp/booking-space-02.jpg"
                        data-image-mobile="images_cms/country_tp/booking-space-02.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>4 Person Meeting Room</h5>
                        <p>Comfortable seating, colorful artwork, high-quality screens.</p>
                        <!-- <span class="price">From HK$600/Hour</span>                 -->
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361933" target="_blank" class="square-cta border-version">Book Now</a> -->
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                      </div>                   
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item tp-version">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="6-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>6 Person Meeting Room</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/booking-space-03.jpg" 
                        data-image-tablet="images_cms/country_tp/booking-space-03.jpg"
                        data-image-mobile="images_cms/country_tp/booking-space-03.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>6 Person Meeting Room</h5>
                        <p>Digital light cubes or panels, industrial walls, wireless projection.</p>
                        <!-- <span class="price">From HK$750/Hour</span>                 -->
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361934" target="_blank" class="square-cta border-version">Book Now</a> -->
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                      </div>                  
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item tp-version">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="8-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>8 Person Meeting Room</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/booking-space-04.jpg" 
                        data-image-tablet="images_cms/country_tp/booking-space-04.jpg"
                        data-image-mobile="images_cms/country_tp/booking-space-04.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>8 Person Meeting Room</h5>
                        <p>80-inch screen, integrated aqua scape (coming soon).</p>
                        <!-- <span class="price">From HK$900/Hour</span>                 -->
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361935" target="_blank" class="square-cta border-version">Book Now</a> -->
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                      </div>                
                    </div>
                </div>                  
              </div>
            </div>
          </div>  
            
        </div>
      </article>

      <article id="page-country-main-content-section">
        <div class="container-fluid reduce-padding">

          <div id="page-country-main-content-item-container" class="hidden-xs hidden-sm">

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-6 no-padding v-align-col">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/live.jpg"
                    data-image-tablet="images_cms/country_tp/live.jpg"
                    data-image-mobile="images_cms/country_tp/live.jpg" alt="">
                  </div>
                </div><!--
                --><div class="col-md-4 col-md-offset-1 no-padding v-align-col">
                  <div class="page-country-main-content-item-text">
                    <h5>Live</h5>
                    <h6>Live your best life at Kafnu Taipei.</h6>
                    <ul>
                      <li class="tp-live-01">
                        <p class="title">On-demand meal delivery from Morsel</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-02">
                        <p class="title">Access to a variety of personalized courses at our fitness space</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                      </li>
                      <li class="tp-live-03">
                        <p class="title">Discounts from our lifestyle partners</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-04">
                        <p class="title">Nespresso coffee</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-05">
                        <p class="title">Ever-changing art exhibits and installations</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-06">
                        <p class="title">Co-living shared space</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-07">
                        <p class="title">Cosy kitchen areas</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-4 no-padding v-align-col left-col">
                  <div class="page-country-main-content-item-text">
                    <h5>Work</h5>
                    <h6>An ecosystem that inspires creativity.</h6>
                    <ul>
                      <li class="tp-work-01">
                        <p class="title">Biophilic design</p>                      
                      </li>
                      <li class="tp-work-02">
                        <p class="title">Adjustable-height desks</p>
                      </li>
                      <li class="tp-work-03">
                        <p class="title">Printing, copying, scanning</p>
                      </li>
                      <li class="tp-work-04">
                        <p class="title">Beautiful meeting rooms</p>
                      </li>
                      <li class="tp-work-05">
                        <p class="title">Sound proof phone booth for privacy</p>
                      </li>
                      <li class="tp-work-06">
                        <p class="title">Natural light throughout</p>
                      </li>
                      <li class="tp-work-07">
                        <p class="title">Professional recording studio</p>
                      </li>
                      <li class="tp-work-08">
                        <p class="title">Dynamic filming & photography green room</p>
                      </li>
                      <li class="tp-work-09">
                        <p class="title">Convenient parking spaces</p>
                      </li>
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div><!--
                --><div class="col-md-8 no-padding v-align-col">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/work.jpg"
                    data-image-tablet="images_cms/country_tp/work.jpg"
                    data-image-mobile="images_cms/country_tp/work.jpg" alt="">
                  </div>
                </div>
              </div>
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-8 no-padding v-align-col">
                  <div class="two-col-image-container">
                    <div class="manic-image-container two-col-image">
                      <img src="" data-image-desktop="images_cms/country_tp/play-01.jpg"
                      data-image-tablet="images_cms/country_tp/play-01.jpg"
                      data-image-mobile="images_cms/country_tp/play-01.jpg" alt="">
                    </div><!--
                    --><div class="manic-image-container two-col-image">
                      <img src="" data-image-desktop="images_cms/country_tp/play-02.jpg"
                      data-image-tablet="images_cms/country_tp/play-02.jpg"
                      data-image-mobile="images_cms/country_tp/play-02.jpg" alt="">
                    </div>
                  </div>
                </div><!--
                --><div class="col-md-4 no-padding v-align-col right-col">
                  <div class="page-country-main-content-item-text">
                    <h5>Play</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, consectetur lorem adipiscing elit ipsum.</h6> -->
                    <ul>
                      <li class="tp-play-01">
                        <p class="title">Comfortable rest facilities</p>                      
                      </li>
                      <li class="tp-play-02">
                        <p class="title">Use of fitness space and events</p>
                      </li>
                      <li class="tp-play-03">
                        <p class="title">Member-only events</p>
                      </li>
                      <li class="tp-play-04">
                        <p class="title">Weekly member happy hour</p>
                      </li>
                      <li class="tp-play-05">
                        <p class="title">K2 Bar</p>
                      </li>
                      <li class="tp-play-06">
                        <p class="title">Roof-top activity space</p>
                      </li>                      
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div>
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-4 col-md-offset-1 no-padding v-align-col">
                  <div class="page-country-main-content-item-text">
                    <h5>Learn</h5>
                    <h6>Nonstop learning opportunities.</h6>
                    <ul>
                      <li class="tp-learn-01">
                        <p class="title">Events & mentorship</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>
                      <li class="tp-learn-02">
                        <p class="title">Office hours with experts</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>   
                      <li class="tp-learn-03">
                        <p class="title">Member access to partner tools and discounts</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>
                      <li class="tp-learn-04">
                        <p class="title">Educational books and magazines</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>
                      <li class="tp-learn-05">
                        <p class="title">Networking with community managers and members</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>                    
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div><!--
                --><div class="col-md-6 col-md-offset-1 no-padding v-align-col">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/learn.jpg"
                    data-image-tablet="images_cms/country_tp/learn.jpg"
                    data-image-mobile="images_cms/country_tp/learn.jpg" alt="">
                  </div>
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-6 no-padding v-align-col">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/rest.jpg"
                    data-image-tablet="images_cms/country_tp/rest.jpg"
                    data-image-mobile="images_cms/country_tp/rest.jpg" alt="">
                  </div>
                </div><!--
                --><div class="col-md-4 col-md-offset-1 no-padding v-align-col">
                  <div class="page-country-main-content-item-text">
                    <h5>Rest</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, icesac cumsan.</h6> -->
                    <ul>
                      <li class="tp-rest-01">
                        <p class="title">Lounge areas & rest spaces</p>                      
                      </li>
                      <li class="tp-rest-02">                  
                        <p class="title">Member discounts on spa treatments and other lifestyle partners</p>
                      </li>
                      <li class="tp-rest-03">                  
                        <p class="title">Vibrant city views</p>
                      </li>                    
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

          </div>

          <div id="page-country-main-content-item-container-mobile" class="kafnu-slick-slider visible-xs visible-sm">
            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-sm-12">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/live.jpg"
                    data-image-tablet="images_cms/country_tp/live.jpg"
                    data-image-mobile="images_cms/country_tp/live-mobile.jpg" alt="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="page-country-main-content-item-text">
                    <h5>Live</h5>
                    <h6>Live your best life at Kafnu Taipei.</h6>
                    <ul>
                      <li>
                        <i class="tp-live-01"></i>
                        <p class="title">On-demand meal delivery from Morsel</p>
                      </li>
                      <li>
                        <i class="tp-live-02"></i>
                        <p class="title">Access to a variety of personalized courses at our fitness space</p>
                      </li>
                      <li>
                        <i class="tp-live-03"></i>
                        <p class="title">Discounts from our lifestyle partners</p>                        
                      </li>
                      <li>
                        <i class="tp-live-04"></i>
                        <p class="title">Nespresso coffee</p>                        
                      </li>
                      <li>
                        <i class="tp-live-05"></i>
                        <p class="title">Ever-changing art exhibits and installations</p>                        
                      </li>
                      <li>
                        <i class="tp-live-06"></i>
                        <p class="title">Co-living shared space</p>                        
                      </li>
                      <li>
                        <i class="tp-live-07"></i>
                        <p class="title">Cosy kitchen areas</p>                        
                      </li>
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-sm-12">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/work.jpg"
                    data-image-tablet="images_cms/country_tp/work.jpg"
                    data-image-mobile="images_cms/country_tp/work.jpg" alt="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="page-country-main-content-item-text">
                    <h5>Work</h5>
                    <h6>An ecosystem that inspires creativity.</h6>
                    <ul>  
                      <li>
                        <i class="tp-work-01"></i>
                        <p class="title">Biophilic design</p>                      
                      </li>
                      <li>
                        <i class="tp-work-02"></i>
                        <p class="title">Adjustable-height desks</p>
                      </li>
                      <li>
                        <i class="tp-work-03"></i>
                        <p class="title">Printing, copying, scanning</p>
                      </li>
                      <li>
                        <i class="tp-work-04"></i>
                        <p class="title">Beautiful meeting rooms</p>
                      </li>
                      <li>
                        <i class="tp-work-05"></i>
                        <p class="title">Sound proof phone booth for privacy</p>
                      </li>
                      <li>
                        <i class="tp-work-06"></i>
                        <p class="title">Natural light throughout</p>
                      </li>
                      <li>
                        <i class="tp-work-07"></i>
                        <p class="title">Professional recording studio</p>
                      </li>
                      <li>
                        <i class="tp-work-08"></i>
                        <p class="title">Dynamic filming & photography green room</p>
                      </li>
                      <li>
                        <i class="tp-work-09"></i>
                        <p class="title">Convenient parking spaces</p>
                      </li>
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div>
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-12">
                  <div class="two-col-image-container">
                    <div class="manic-image-container two-col-image">
                      <img src="" data-image-desktop="images_cms/country_tp/play-01.jpg"
                      data-image-tablet="images_cms/country_tp/play-01.jpg"
                      data-image-mobile="images_cms/country_tp/play-01.jpg" alt="">
                    </div><!--
                    --><div class="manic-image-container two-col-image">
                      <img src="" data-image-desktop="images_cms/country_tp/play-02.jpg"
                      data-image-tablet="images_cms/country_tp/play-02.jpg"
                      data-image-mobile="images_cms/country_tp/play-02.jpg" alt="">
                    </div>
                  </div>
                </div><!--
                --><div class="col-md-12">
                  <div class="page-country-main-content-item-text">
                    <h5>Play</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, consectetur lorem adipiscing elit ipsum.</h6> -->
                    <ul>
                      <li>
                        <i class="tp-play-01"></i>
                        <p class="title">Comfortable rest facilities</p>                      
                      </li>
                      <li>
                        <i class="tp-play-02"></i>
                        <p class="title">Use of fitness space and events</p>
                      </li>
                      <li>
                        <i class="tp-play-03"></i>
                        <p class="title">Member-only events</p>
                      </li>
                      <li>
                        <i class="tp-play-04"></i>
                        <p class="title">Weekly member happy hour</p>
                      </li>
                      <li>
                        <i class="tp-play-05"></i>
                        <p class="title">K2 Bar</p>
                      </li>
                      <li>
                        <i class="tp-play-06"></i>
                        <p class="title">Roof-top activity space</p>
                      </li>                      
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div>
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-12">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/live.jpg"
                    data-image-tablet="images_cms/country_tp/live.jpg"
                    data-image-mobile="images_cms/country_tp/live.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="page-country-main-content-item-text">
                    <h5>Learn</h5>
                    <h6>Nonstop learning opportunities.</h6>
                    <ul>
                      <li>
                        <i class="tp-learn-01"></i>
                        <p class="title">Events & mentorship</p>                        
                      </li>
                      <li>
                        <i class="tp-learn-02"></i>
                        <p class="title">Office hours with experts</p>                        
                      </li>   
                      <li>
                        <i class="tp-learn-03"></i>
                        <p class="title">Member access to partner tools and discounts</p>                        
                      </li>
                      <li>
                        <i class="tp-learn-04"></i>
                        <p class="title">Educational books and magazines</p>                        
                      </li> 
                      <li>
                        <i class="tp-learn-03"></i>
                        <p class="title">Networking with community managers and members</p>                        
                      </li>                    

                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-sm-12">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/rest.jpg"
                    data-image-tablet="images_cms/country_tp/rest.jpg"
                    data-image-mobile="images_cms/country_tp/rest.jpg" alt="">
                  </div>
                </div><!--
                --><div class="col-sm-12">
                  <div class="page-country-main-content-item-text">
                    <h5>Rest</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, icesac cumsan.</h6> -->
                    <ul>
                      <li>
                        <i class="tp-rest-01"></i>
                        <p class="title">Lounge areas & rest spaces</p>                      
                      </li>
                      <li>                  
                        <i class="tp-rest-02"></i>
                        <p class="title">Member discounts on spa treatments and other lifestyle partners</p>
                      </li>
                      <li>                  
                        <i class="tp-rest-03"></i>
                        <p class="title">Vibrant city views</p>
                      </li>                    
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

          </div>

        </div> <!-- container-fluid -->
      </article>

      <article id="page-country-event-content-section-mobile" class="visible-sm visible-xs">
        <div id="banner-sidebar-container-mobile" class="kafnu-slick-slider">

          <div class="banner-sidebar-item">
            <div class="banner-sidebar-item-title">
              <h6>upcoming events</h6>                  
            </div>
            <div class="banner-sidebar-item-image">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/country_tp/event-slider-01.jpg"
                data-image-tablet="images_cms/country_tp/event-slider-01.jpg"
                data-image-mobile="images_cms/country_tp/event-slider-01-mobile.jpg" alt="">
              </div>
            </div>
            <div class="banner-sidebar-item-text">
              <h5>Vision Board for the Future</h5>
              <p>12 October 2017 – 6:30 PM</p>
              <p class="minimize-text" data-length="-1" data-tablet-length="-1" data-mobile-length="-1">We celebrate Kafnu’s opening with a stimulating panel discussion, tasty cocktails, and special guests.</p>
            </div>
            <!-- <div class="banner-sidebar-item-cta-container">
              <a href="community.html#events" class="square-cta border-version">See More</a>
            </div> -->
          </div><!-- banner-sidebar-item -->

          <!-- <div class="banner-sidebar-item">
            <div class="banner-sidebar-item-title">
              <h6>upcoming events</h6>                  
            </div>
            <div class="banner-sidebar-item-image">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/country_tp/event-slider-02.jpg"
                data-image-tablet="images_cms/country_tp/event-slider-02.jpg"
                data-image-mobile="images_cms/country_tp/event-slider-02.jpg" alt="">
              </div>
            </div>
            <div class="banner-sidebar-item-text">
              <h5>Reception for HICAP conference attendees</h5>
              <p>19 October 2017 – 7:00 PM</p>
              <p class="minimize-text" data-length="-1" data-tablet-length="100" data-mobile-length="100">In Hong Kong for HICAP? See the world’s first Kafnu and prepare for some special surprises.</p>
            </div>
            <!- - <div class="banner-sidebar-item-cta-container">
              <a href="community.html#events" class="square-cta border-version">See More</a>
            </div> - ->
          </div> --><!-- banner-sidebar-item -->

          <!-- <div class="banner-sidebar-item">
            <div class="banner-sidebar-item-title">
              <h6>upcoming events</h6>                  
            </div>
            <div class="banner-sidebar-item-image">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/country_tp/event-slider-03.jpg"
                data-image-tablet="images_cms/country_tp/event-slider-03.jpg"
                data-image-mobile="images_cms/country_tp/event-slider-03.jpg" alt="">
              </div>
            </div>
            <div class="banner-sidebar-item-text">
              <h5>‘Unchartered Territories’ Dinner.</h5>
              <p>20 October 2017 – 6:00 PM</p>
              <p class="minimize-text" data-length="-1" data-tablet-length="100" data-mobile-length="100">Experience Hong Kong’s best-kept secret restaurants, in a dinner tour hosted by Kafnu for HICAP attendees.</p>
            </div>
            <!- - <div class="banner-sidebar-item-cta-container">
              <a href="community.html#events" class="square-cta border-version">See More</a>
            </div> - ->
          </div> --><!-- banner-sidebar-item -->

          <!-- <div class="banner-sidebar-item">
            <div class="banner-sidebar-item-title">
              <h6>upcoming events</h6>                  
            </div>
            <div class="banner-sidebar-item-image">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/country_tp/event-slider-04.jpg"
                data-image-tablet="images_cms/country_tp/event-slider-04.jpg"
                data-image-mobile="images_cms/country_tp/event-slider-04.jpg" alt="">
              </div>
            </div>
            <div class="banner-sidebar-item-text">
              <h5>Doing business in Taiwan</h5>
              <p>30 Oct – 3 Nov</p>
              <p class="minimize-text" data-length="-1" data-tablet-length="-1" data-mobile-length="-1">A week of seminars and “office hours” with individual consultation with experts on doing business in Taiwan – from setting up a company, working with hardware factories, hiring and HR, and importing/exporting.</p>
            </div>
            <!- - <div class="banner-sidebar-item-cta-container">
              <a href="community.html#events" class="square-cta border-version">See More</a>
            </div> - ->
          </div> --><!-- banner-sidebar-item -->                  

        </div> <!-- banner-sidebar-container -->
      </article>

      <article id="page-country-extra-content-section">
        <div class="container-fluid reduce-padding">
          <div class="page-country-extra-content-item taipei-version">
            <div class="row">
              <div class="col-md-6 no-padding v-align-col">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country_tp/community-manager.jpg"
                  data-image-tablet="images_cms/country_tp/community-manager.jpg"
                  data-image-mobile="images_cms/country_tp/community-manager.jpg" alt="">
                </div>
              </div><!--
              --><div class="col-md-4 col-md-offset-1 no-padding v-align-col">
                <div class="page-country-main-content-item-text">
                  <h4>Taipei <br class="hidden-sm hidden-xs"> Community Managers</h4>
                  <!-- <h4>justin lorem</h4> -->
                  <p>Our Taipei Community Managers are a diverse and energetic group with a wide variety of backgrounds. Stop by Kafnu, take a tour, and meet them!</p>
                  <ul>
                    <li><span>Leo Chen</span></li>
                    <li><span>Ron Chen </span></li>
                    <li><span>Jenny Shen</span></li>
                    <li><span>Roy Huang</span></li>                    
                    <li><span>Skylar Yang</span></li>
                  </ul>
                  <ul>                    
                    <li><span>Hong Wang</span></li>
                    <li><span>Mimo Lee</span></li>
                    <li><span>Evelyn Chen</span></li>
                    <li><span>Simon Yu</span></li>
                    <li><span>Jeff Liang</span></li>
                  </ul>
                  <ul>                                        
                    <li><span>Carol Chen</span></li>
                    <li><span>Eva Yang</span></li>
                    <li><span>Luca Lui</span></li>
                  </ul>        
                </div> <!-- page-country-main-content-item-text -->
                <div class="page-country-main-content-item-cta-container">
                  <a href="community.html" class="square-cta border-white-version">Learn more</a>
                </div>
              </div>
            </div> <!-- row -->
          </div> <!-- page-country-extra-content-item -->
        </div>
      </article>

      <article id="page-default-connect-with-world-section" class="country-version">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h4 data-wow-offset="50" class="">Join Kafnu Taipei & <br class="hidden-xs hidden-sm"> connect with the world</h4>              

              <!-- <ul class="social-media-links-container">
                <li data-wow-offset="150" class=""><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li data-wow-offset="250" class=""><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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
                  <div data-wow-offset="80" class="grid-item">
                    <a href="https://www.instagram.com/kafnu_hk/?hl=en" target="_blank" class="social-media-source-tag instagram">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-02.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="85" class="grid-item">
                    <a href="https://www.instagram.com/kafnu_hk/?hl=en" target="_blank" class="social-media-source-tag instagram">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-03.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="90" class="grid-item">
                    <a href="https://www.instagram.com/kafnu_hk/?hl=en" target="_blank" class="social-media-source-tag instagram">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-04.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="95" class="grid-item">
                    <a href="http://www.youtube.com" target="_blank" class="social-media-source-tag youtube" target="_blank">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/youtube-thumb-02.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="60" class="grid-item">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-01.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="75" class="grid-item">
                    <a href="http://www.youtube.com" target="_blank" class="social-media-source-tag youtube" target="_blank">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/youtube-thumb-01.jpg" alt="">
                      </div>
                    </a>
                  </div>                                
                                                                  

                  <div data-wow-offset="100" class="grid-item">
                    <a href="http://www.youtube.com" target="_blank" class="social-media-source-tag youtube" target="_blank">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/youtube-thumb-03.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="105" class="grid-item">
                    <a href="https://www.instagram.com/kafnu_hk/?hl=en" target="_blank" class="social-media-source-tag instagram">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-05.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="65" class="grid-item">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-02.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <div data-wow-offset="120" class="grid-item">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-04.jpg" alt="">
                      </div>
                    </a>
                  </div>                  
                  <div data-wow-offset="140" class="grid-item">
                    <a href="https://www.facebook.com/kafnuhk/" target="_blank" class="social-media-source-tag facebook">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/fb-image-thumb-06.jpg" alt="">
                      </div>
                    </a>
                  </div>   
                  <div data-wow-offset="145" class="grid-item">
                    <a href="https://www.instagram.com/kafnu_hk/?hl=en" target="_blank" class="social-media-source-tag instagram">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/home/in-image-thumb-06.jpg" alt="">
                      </div>
                    </a>
                  </div>                  
                </div> <!-- grid -->

              </div> <!-- default-masonry-grid-container -->
              
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
                  <a href="https://www.instagram.com/kafnu_hk/?hl=en" target="_blank" class="social-media-source-tag instagram">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/home/in-image-thumb-02.jpg"
                                  data-image-tablet="images_cms/home/in-image-thumb-02.jpg"
                                  data-image-mobile="images_cms/home/in-image-thumb-02.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="grid-item">
                  <a href="https://www.instagram.com/kafnu_hk/?hl=en" target="_blank" class="social-media-source-tag instagram">
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

  <?php include "includes/script_country.php" ?>

</body>
</html>
<?php
// saving captured output to file
file_put_contents('kafnutp.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>