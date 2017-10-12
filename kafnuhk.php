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
                  <img src="" data-image-desktop="images_cms/country/hong-kong-banner.jpg">
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
                        <img src="" data-image-desktop="images_cms/country/event-slider-01.jpg"
                        data-image-tablet="images_cms/country/event-slider-01.jpg"
                        data-image-mobile="images_cms/country/event-slider-01.jpg" alt="">
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
                        <img src="" data-image-desktop="images_cms/country/event-slider-02.jpg"
                        data-image-tablet="images_cms/country/event-slider-02.jpg"
                        data-image-mobile="images_cms/country/event-slider-02.jpg" alt="">
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
                        <img src="" data-image-desktop="images_cms/country/event-slider-03.jpg"
                        data-image-tablet="images_cms/country/event-slider-03.jpg"
                        data-image-mobile="images_cms/country/event-slider-03.jpg" alt="">
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
                        <img src="" data-image-desktop="images_cms/country/event-slider-04.jpg"
                        data-image-tablet="images_cms/country/event-slider-04.jpg"
                        data-image-mobile="images_cms/country/event-slider-04.jpg" alt="">
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
            <img src="" data-image-tablet="images_cms/country/hong-kong-banner.jpg"
                        data-image-mobile="images_cms/country/hong-kong-banner.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container" class="left-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div id="page-default-banner-copy">
                  <h1>Kafnu Hong Kong</h1>
                  <h3>A vibrant community on Victoria Harbour in the heart of Hung Hom</h3>
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
              <div class="col-md-3 no-padding page-default-booking-item">                              
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country/booking-space-01.jpg"
                    data-image-tablet="images_cms/country/booking-space-01.jpg"
                    data-image-mobile="images_cms/country/booking-space-01-mobile.jpg" alt="">
                  </div>
                  <div class="page-default-booking-item-text">
                    <h5>Hot Desk</h5>
                    <p>Choose your favorite seat and book by hour, day or month.</p>
                    <span id="price-changes" class="price">From HK$70/Hour</span>                
                  </div>
                  <div class="page-default-booking-item-cta-container dropdown-version">
                    <a href="javascript:void(0);" class="square-cta border-version">Book Now</a>
                    <ul id="book-now-dropdown">
                      <li><a href="https://hongkong.kafnu.com/en/bookings/search?type=435361936" data-price="From HK$70/Hour" target="_blank">Hourly</a></li>
                      <li><a href="https://hongkong.kafnu.com/en/signup?returnUrl=/en/store/signupproducts?productid=435575149" data-price="HK$550/Day" target="_blank">Daily</a></li>
                      <li><a href="https://hongkong.kafnu.com/en/signup/priceplan/60da246c-9686-4342-8cef-6ea4fd12604f?startdate=" data-price="HK$2,500/Month" target="_blank">5-Day Pass</a></li>
                      <li><a href="https://hongkong.kafnu.com/en/tour" data-price="" target="_blank">Monthly</a></li>
                    </ul>
                    <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                  </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/booking-space-02.jpg" 
                  data-image-tablet="images_cms/country/booking-space-02.jpg"
                  data-image-mobile="images_cms/country/booking-space-02.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>4 Person Meeting Room</h5>
                  <p>Comfortable seating, colorful artwork, high-quality screens.</p>
                  <span class="price">From HK$600/Hour</span>                
                </div>
                <div class="page-default-booking-item-cta-container">
                  <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361933" target="_blank" class="square-cta border-version">Book Now</a>
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/booking-space-03.jpg" 
                  data-image-tablet="images_cms/country/booking-space-03.jpg"
                  data-image-mobile="images_cms/country/booking-space-03.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>6 Person Meeting Room</h5>
                  <p>Digital light cubes or panels, industrial walls, wireless projection.</p>
                  <span class="price">From HK$750/Hour</span>                
                </div>
                <div class="page-default-booking-item-cta-container">
                  <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361934" target="_blank" class="square-cta border-version">Book Now</a>
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/booking-space-04.jpg" 
                  data-image-tablet="images_cms/country/booking-space-04.jpg"
                  data-image-mobile="images_cms/country/booking-space-04.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>8 Person Meeting Room</h5>
                  <p>80-inch screen, integrated aqua scape (coming soon).</p>
                  <span class="price">From HK$900/Hour</span>                
                </div>
                <div class="page-default-booking-item-cta-container">
                  <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361935" target="_blank" class="square-cta border-version">Book Now</a>
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
              <div class="col-sm-12 no-padding page-default-booking-item">
                <div class="manic-expand-container mobile-open-version">
                    <div class="scroll-target" data-value="hot-desk"></div>
                    <div class="manic-expand-container-title">
                        <h5>Hot Desk</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country/booking-space-01.jpg"
                        data-image-tablet="images_cms/country/booking-space-01.jpg"
                        data-image-mobile="images_cms/country/booking-space-01-mobile.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>Hot Desk</h5>
                        <p>Choose your favorite seat and book by hour, day or month.</p>                        
                        <!-- <span class="price">From HK$70/Hour</span>                 -->
                      </div>
                      <div class="booknow-slider kafnu-slick-slider">
                        <div class="booknow-slider-item">
                          <span class="time">Hourly</span>
                          <span class="price">From HK$70/Hour</span>                
                          <div class="page-default-booking-item-cta-container">
                            <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361936" target="_blank" class="square-cta border-version">Book Now</a>
                          </div>
                        </div>
                        <div class="booknow-slider-item">
                          <span class="time">Daily</span>
                          <span class="price">HK$550/Day</span>                
                          <div class="page-default-booking-item-cta-container">
                            <a href="https://hongkong.kafnu.com/en/signup?returnUrl=/en/store/signupproducts?productid=435575149" target="_blank" class="square-cta border-version">Book Now</a>
                          </div>
                        </div>
                        <div class="booknow-slider-item">
                          <span class="time">5-Day Pass</span>
                          <span class="price">HK$2,500/Month</span>                
                          <div class="page-default-booking-item-cta-container">
                            <a href="https://hongkong.kafnu.com/en/signup/priceplan/60da246c-9686-4342-8cef-6ea4fd12604f?startdate=" target="_blank" class="square-cta border-version">Book Now</a>
                          </div>
                        </div>
                        <div class="booknow-slider-item">
                          <span class="time">Monthly</span>
                          <!-- <span class="price">From HK$70/Hour</span>                 -->
                          <div class="page-default-booking-item-cta-container">
                            <a href="https://hongkong.kafnu.com/en/tour" target="_blank" class="square-cta border-version">Book Now</a>
                          </div>
                        </div>
                      </div>    
                      <!-- <div class="page-default-booking-item-cta-container">                        
                        <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a>
                      </div> -->                  
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="4-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>4 Person Meeting Room</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country/booking-space-02.jpg" 
                        data-image-tablet="images_cms/country/booking-space-02.jpg"
                        data-image-mobile="images_cms/country/booking-space-02.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>4 Person Meeting Room</h5>
                        <p>Comfortable seating, colorful artwork, high-quality screens.</p>
                        <span class="price">From HK$600/Hour</span>                
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361933" target="_blank" class="square-cta border-version">Book Now</a>
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                      </div>                   
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="6-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>6 Person Meeting Room</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country/booking-space-03.jpg" 
                        data-image-tablet="images_cms/country/booking-space-03.jpg"
                        data-image-mobile="images_cms/country/booking-space-03.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>6 Person Meeting Room</h5>
                        <p>Digital light cubes or panels, industrial walls, wireless projection.</p>
                        <span class="price">From HK$750/Hour</span>                
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361934" target="_blank" class="square-cta border-version">Book Now</a>
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                      </div>                  
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="8-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>8 Person Meeting Room</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country/booking-space-04.jpg" 
                        data-image-tablet="images_cms/country/booking-space-04.jpg"
                        data-image-mobile="images_cms/country/booking-space-04.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>8 Person Meeting Room</h5>
                        <p>80-inch screen, integrated aqua scape (coming soon).</p>
                        <span class="price">From HK$900/Hour</span>                
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361935" target="_blank" class="square-cta border-version">Book Now</a>
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
                    <img src="" data-image-desktop="images_cms/country/live.jpg"
                    data-image-tablet="images_cms/country/live.jpg"
                    data-image-mobile="images_cms/country/live.jpg" alt="">
                  </div>
                </div><!--
                --><div class="col-md-4 col-md-offset-1 no-padding v-align-col">
                  <div class="page-country-main-content-item-text">
                    <h5>Live</h5>
                    <h6>Life at its best at Kafnu Hong Kong.</h6>
                    <ul>
                      <li class="hk-live-01">
                        <p class="title">On-demand meal delivery from Morsel or Dockyard (nine restaurants and bar)</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="hk-live-02">
                        <p class="title">Member access to fitness centre & pool</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                      </li>
                      <li class="hk-live-03">
                        <p class="title">Discounts on hotel rooms</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="hk-live-04">
                        <p class="title">Pantry facilities</p>
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
                      <li class="hk-work-01">
                        <p class="title">Biophilic design</p>                      
                      </li>
                      <li class="hk-work-02">
                        <p class="title">Adjustable-height desks</p>
                      </li>
                      <li class="hk-work-03">
                        <p class="title">Printing, copying, scanning</p>
                      </li>
                      <li class="hk-work-04">
                        <p class="title">Flexible meeting spaces</p>
                      </li>
                      <li class="hk-work-05">
                        <p class="title">Sound proof phone booth for privacy</p>
                      </li>
                      <li class="hk-work-06">
                        <p class="title">Natural light throughout</p>
                      </li>
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div><!--
                --><div class="col-md-8 no-padding v-align-col">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country/work.jpg"
                    data-image-tablet="images_cms/country/work.jpg"
                    data-image-mobile="images_cms/country/work.jpg" alt="">
                  </div>
                </div>
              </div>
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-8 no-padding v-align-col">
                  <div class="two-col-image-container">
                    <div class="manic-image-container two-col-image">
                      <img src="" data-image-desktop="images_cms/country/play-01.jpg"
                      data-image-tablet="images_cms/country/play-01.jpg"
                      data-image-mobile="images_cms/country/play-01.jpg" alt="">
                    </div><!--
                    --><div class="manic-image-container two-col-image">
                      <img src="" data-image-desktop="images_cms/country/play-02.jpg"
                      data-image-tablet="images_cms/country/play-02.jpg"
                      data-image-mobile="images_cms/country/play-02.jpg" alt="">
                    </div>
                  </div>
                </div><!--
                --><div class="col-md-4 no-padding v-align-col right-col">
                  <div class="page-country-main-content-item-text">
                    <h5>Play</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, consectetur lorem adipiscing elit ipsum.</h6> -->
                    <ul>
                      <li class="hk-play-01">
                        <p class="title">Comfortable rest facilities</p>                      
                      </li>
                      <li class="hk-play-02">
                        <p class="title">Use of Kerry’s Fitness Centre & Pool</p>
                      </li>
                      <li class="hk-play-03">
                        <p class="title">Daily member happy hour (M-F)</p>
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
                      <li class="hk-learn-01">
                        <p class="title">Events & mentorship</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>
                      <li class="hk-learn-02">
                        <p class="title">Office hours with experts</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>   
                      <li class="hk-learn-03">
                        <p class="title">Member access to partner tools and discounts</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>                    
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div><!--
                --><div class="col-md-6 col-md-offset-1 no-padding v-align-col">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country/learn.jpg"
                    data-image-tablet="images_cms/country/learn.jpg"
                    data-image-mobile="images_cms/country/learn.jpg" alt="">
                  </div>
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row">
                <div class="col-md-6 no-padding v-align-col">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country/rest.jpg"
                    data-image-tablet="images_cms/country/rest.jpg"
                    data-image-mobile="images_cms/country/rest.jpg" alt="">
                  </div>
                </div><!--
                --><div class="col-md-4 col-md-offset-1 no-padding v-align-col">
                  <div class="page-country-main-content-item-text">
                    <h5>Rest</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, icesac cumsan.</h6> -->
                    <ul>
                      <li class="hk-rest-01">
                        <p class="title">Lounge chairs & day beds</p>                      
                      </li>
                      <li class="hk-rest-02">                  
                        <p class="title">Member discounts on spa treatments</p>
                      </li>
                      <li class="hk-rest-03">                  
                        <p class="title">Harbour views</p>
                      </li>                    
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

          </div>

          <div id="page-country-main-content-item-container-mobile" class="kafnu-slick-slider visible-xs visible-sm">
            <div class="page-country-main-content-item">
              <div class="row no-margin">
                <div class="col-sm-12 no-padding">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country/live.jpg"
                    data-image-tablet="images_cms/country/live.jpg"
                    data-image-mobile="images_cms/country/live-mobile.jpg" alt="">
                  </div>
                </div>
                <div class="col-sm-12 no-padding">
                  <div class="page-country-main-content-item-text">
                    <h5>Live</h5>
                    <h6>Live your best life at Kafnu Hong Kong.</h6>
                    <ul>
                      <li>
                        <i class="hk-live-01"></i>
                        <p class="title">On-demand meal delivery from Morsel or Dockyard</p>
                      </li>
                      <li>
                        <i class="hk-live-02"></i>
                        <p class="title">Member access to fitness centre & pool</p>
                      </li>
                      <li>
                        <i class="hk-live-03"></i>
                        <p class="title">Discounts on hotel rooms</p>                        
                      </li>
                      <li>
                        <i class="hk-live-04"></i>
                        <p class="title">Pantry facilities</p>                        
                      </li>
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row no-margin">
                <div class="col-sm-12 no-padding">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country/work.jpg"
                    data-image-tablet="images_cms/country/work.jpg"
                    data-image-mobile="images_cms/country/work.jpg" alt="">
                  </div>
                </div>
                <div class="col-sm-12 no-padding">
                  <div class="page-country-main-content-item-text">
                    <h5>Work</h5>
                    <h6>An ecosystem that inspires creativity.</h6>
                    <ul>  
                      <li>
                        <i class="hk-work-01"></i>
                        <p class="title">Biophilic design</p>                      
                      </li>
                      <!-- <li>
                        <i class="hk-work-02"></i>
                        <p class="title">Adjustable-height desks</p>
                      </li> -->
                      <li>
                        <i class="hk-work-03"></i>
                        <p class="title">Printing, copying, scanning</p>
                      </li>
                      <li>
                        <i class="hk-work-04"></i>
                        <p class="title">Flexible meeting spaces</p>
                      </li>
                      <li>
                        <i class="hk-work-05"></i>
                        <p class="title">Sound proof phone booth for privacy</p>
                      </li>
                      <!-- <li>
                        <i class="hk-work-06"></i>
                        <p class="title">Natural light throughout</p>
                      </li> -->
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div>
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row no-margin">
                <div class="col-md-12 no-padding">
                  <div class="two-col-image-container">
                    <div class="manic-image-container two-col-image">
                      <img src="" data-image-desktop="images_cms/country/play-01.jpg"
                      data-image-tablet="images_cms/country/play-01.jpg"
                      data-image-mobile="images_cms/country/play-01.jpg" alt="">
                    </div><!--
                    --><div class="manic-image-container two-col-image">
                      <img src="" data-image-desktop="images_cms/country/play-02.jpg"
                      data-image-tablet="images_cms/country/play-02.jpg"
                      data-image-mobile="images_cms/country/play-02.jpg" alt="">
                    </div>
                  </div>
                </div><!--
                --><div class="col-md-12 no-padding">
                  <div class="page-country-main-content-item-text">
                    <h5>Play</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, consectetur lorem adipiscing elit ipsum.</h6> -->
                    <ul>
                      <li>
                        <i class="hk-play-01"></i>
                        <p class="title">Comfortable rest facilities</p>                      
                      </li>
                      <li>
                        <i class="hk-play-02"></i>
                        <p class="title">Use of Kerry’s Fitness Centre & Pool</p>
                      </li>
                      <li>
                        <i class="hk-play-03"></i>
                        <p class="title">Daily member happy hour (M-F)</p>
                      </li>                      
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div>
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row no-margin">
                <div class="col-md-12 no-padding">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country/live.jpg"
                    data-image-tablet="images_cms/country/live.jpg"
                    data-image-mobile="images_cms/country/live.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-12 no-padding">
                  <div class="page-country-main-content-item-text">
                    <h5>Learn</h5>
                    <h6>Nonstop learning opportunities.</h6>
                    <ul>
                      <li>
                        <i class="hk-learn-01"></i>
                        <p class="title">Events & mentorship</p>                        
                      </li>
                      <li>
                        <i class="hk-learn-02"></i>
                        <p class="title">Office hours with experts</p>                        
                      </li>   
                      <li>
                        <i class="hk-learn-03"></i>
                        <p class="title">Member access to partner tools and discounts</p>                        
                      </li>                    
                    </ul>
                  </div> <!-- page-country-main-content-item-text -->
                </div>
              </div> <!-- row -->
            </div> <!-- page-country-main-content-item -->

            <div class="page-country-main-content-item">
              <div class="row no-margin">
                <div class="col-sm-12 no-padding">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country/rest.jpg"
                    data-image-tablet="images_cms/country/rest.jpg"
                    data-image-mobile="images_cms/country/rest.jpg" alt="">
                  </div>
                </div><!--
                --><div class="col-sm-12 no-padding">
                  <div class="page-country-main-content-item-text">
                    <h5>Rest</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, icesac cumsan.</h6> -->
                    <ul>
                      <li>
                        <i class="hk-rest-01"></i>
                        <p class="title">Lounge chairs & day beds</p>                      
                      </li>
                      <li>                  
                        <i class="hk-rest-02"></i>
                        <p class="title">Member discounts on spa treatments</p>
                      </li>
                      <li>                  
                        <i class="hk-rest-03"></i>
                        <p class="title">Harbour views</p>
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
                <img src="" data-image-desktop="images_cms/country/event-slider-01.jpg"
                data-image-tablet="images_cms/country/event-slider-01.jpg"
                data-image-mobile="images_cms/country/event-slider-01-mobile.jpg" alt="">
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
                <img src="" data-image-desktop="images_cms/country/event-slider-02.jpg"
                data-image-tablet="images_cms/country/event-slider-02.jpg"
                data-image-mobile="images_cms/country/event-slider-02.jpg" alt="">
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
                <img src="" data-image-desktop="images_cms/country/event-slider-03.jpg"
                data-image-tablet="images_cms/country/event-slider-03.jpg"
                data-image-mobile="images_cms/country/event-slider-03.jpg" alt="">
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
                <img src="" data-image-desktop="images_cms/country/event-slider-04.jpg"
                data-image-tablet="images_cms/country/event-slider-04.jpg"
                data-image-mobile="images_cms/country/event-slider-04.jpg" alt="">
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
          <div class="page-country-extra-content-item">
            <div class="row">
              <div class="col-md-6 no-padding v-align-col">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/community-manager.jpg"
                  data-image-tablet="images_cms/country/community-manager.jpg"
                  data-image-mobile="images_cms/country/community-manager.jpg" alt="">
                </div>
              </div><!--
              --><div class="col-md-4 col-md-offset-1 no-padding v-align-col">
                <div class="page-country-main-content-item-text">
                  <h4>Hong Kong <br class="hidden-sm hidden-xs"> Community Managers</h4>
                  <!-- <h4>justin lorem</h4> -->
                  <p>Our Hong Kong Community Managers are a diverse and energetic group with a wide variety of backgrounds. Stop by Kafnu, take a tour, and meet them!</p>
                  <ul>
                    <li><span>Pico Ho</span></li>
                    <li><span>Karl Li </span></li>
                    <li><span>Jenna Ho</span></li>
                  </ul>
                  <ul>
                    <li><span>Michelle Lui</span></li>
                    <li><span>Ben Ng</span></li>
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
              <h4 data-wow-offset="50" class="">Join Kafnu Hong kong & <br class="hidden-xs hidden-sm"> connect with the world</h4>              

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

  <script type='application/ld+json'>
  {
    "@context": "http://www.schema.org",
    "@type": "LocalBusiness",
    "name": "Kafnu Hong Kong",
    "email": "hongkong@kafnu.com",
    "image": "https://www.kafnu.com/images_cms/country/hong-kong-banner.jpg",
    "telephone": "+852-39745125",
    "url": "https://www.kafnu.com/kafnuhk.html",
    "description": "Kafnu is a living ecosystem, and filled with artistic reminders of this concept. The design and architecture inspires our members to visualize the beauty of the Kafnu community in different, abstract ways. Music playing is an eclectic, curated mix of undiscovered artists and nostalgic classics. Art throughout the space is designed to get members talking to one another, asking questions and encouraging debate. Biophlilic design embraces nature and inspires new thinking. A vibrant community on Victoria Harbour in the heart of Hung Hom.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "2F-38, Hung Luen Road",
      "addressLocality": "Hung Hom",
      "addressRegion": "Kowloon",
      "addressCountry": "Hong Kong"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "22.3014472",
      "longitude": "114.1883008"
    },
    "openingHours": "Mo-Su 08:00-20:00",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "telephone": "+852-39745125"
    }
  }
  </script>

</body>
</html>
<?php
// saving captured output to file
file_put_contents('kafnuhk.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>