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
                      <h6>近期活動</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/event-slider-01.jpg"
                        data-image-tablet="images_cms/country_tp/event-slider-01.jpg"
                        data-image-mobile="images_cms/country_tp/event-slider-01.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>邁向未來的願景擘畫</h5>
                      <p>2017.10.12 - 06:30PM</p>
                      <p>Kafnu開幕活動將舉辦雞尾酒會與創意論壇，歡慶Kafnu正式營運。</p>
                    </div>
                    <!-- <div class="banner-sidebar-item-cta-container">
                      <a href="community.html#events" class="square-cta border-version">See More</a>
                    </div> -->
                  </div><!-- banner-sidebar-item -->

                  <!-- <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>近期活動</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/event-slider-02.jpg"
                        data-image-tablet="images_cms/country_tp/event-slider-02.jpg"
                        data-image-mobile="images_cms/country_tp/event-slider-02.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>HICAP論壇歡迎酒會</h5>
                      <p>2017.10.19 - 07:00PM</p>
                      <p>前來香港參加HICAP活動嗎? 歡迎參觀Kafnu全球第一個據點，並體驗我們精心準備的驚喜吧！</p>
                    </div>
                    <!- - <div class="banner-sidebar-item-cta-container">
                      <a href="community.html#events" class="square-cta border-version">See More</a>
                    </div> - ->
                  </div> --><!-- banner-sidebar-item -->

                  <!-- <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>近期活動</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/event-slider-03.jpg"
                        data-image-tablet="images_cms/country_tp/event-slider-03.jpg"
                        data-image-mobile="images_cms/country_tp/event-slider-03.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>“未知領域”晚宴</h5>
                      <p>2017.10.20 - 06:00PM</p>
                      <p>Experience Hong Kong’s best-kept secret restaurants, in a dinner tour hosted by Kafnu for HICAP attendees.</p>
                    </div>
                    <!- - <div class="banner-sidebar-item-cta-container">
                      <a href="community.html#events" class="square-cta border-version">See More</a>
                    </div> - ->
                  </div> --><!-- banner-sidebar-item -->

                  <!-- <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>近期活動</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/event-slider-04.jpg"
                        data-image-tablet="images_cms/country_tp/event-slider-04.jpg"
                        data-image-mobile="images_cms/country_tp/event-slider-04.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>商務發展在台灣</h5>
                      <p>2017.10.30 - 2017.11.03</p>
                      <p>規劃為期一周的研討會，包含個別顧問諮詢時間，教你如何在台灣設立公司，與硬體大場合作，招募與人資規範，以及進出口相關規定。</p>
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
                  <h1>Kafnu台北</h1>
                  <h3>位在科技、媒體與設計交叉路口的垂直部落</h3>
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
              <div class="col-md-3 no-padding page-default-booking-item tp-verison">                              
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/country_tp/booking-space-01.jpg"
                    data-image-tablet="images_cms/country_tp/booking-space-01.jpg"
                    data-image-mobile="images_cms/country_tp/booking-space-01-mobile.jpg" alt="">
                  </div>
                  <div class="page-default-booking-item-text">
                    <h5>辦公空間</h5>
                    <p>選擇你最喜愛的座位，按照需求預訂。費用可以小時計，亦可以日租或月租形式預訂。</p>
                    <!-- <span class="price">費用: HK$70/小時 起</span>    -->             
                  </div>
                  <div class="page-default-booking-item-cta-container">
                    <!-- <a href="https://hongkong.kafnu.com/en/bookings/calendar" class="square-cta border-version">按此預約</a> -->
                    <!-- <a href="javascript:void(0);" class="open-soon"><span>2017.10.3 開幕</span></a> -->
                  </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item tp-verison">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country_tp/booking-space-02.jpg" 
                  data-image-tablet="images_cms/country_tp/booking-space-02.jpg"
                  data-image-mobile="images_cms/country_tp/booking-space-02.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>會議空間</h5>
                  <p>提供4人、6人及8人以上的會議空間，可依照人數需求，選擇適合的空間進行會議。</p>
                  <!-- <span class="price">費用: HK$600/小時 起</span> -->                
                </div>
                <div class="page-default-booking-item-cta-container">
                  <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361933" target="_blank" class="square-cta border-version">按此預約</a> -->
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>2017.10.3 開幕</span></a> -->
                </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item tp-verison">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country_tp/booking-space-03-a.jpg" 
                  data-image-tablet="images_cms/country_tp/booking-space-03-a.jpg"
                  data-image-mobile="images_cms/country_tp/booking-space-03-a.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>獨立辦公室</h5>
                  <p>適合2~4人的小型團隊進駐，保有隱私的空間可讓你專注於工作。</p>
                  <!-- <span class="price">費用: HK$750/小時 起</span>                 -->
                </div>
                <div class="page-default-booking-item-cta-container">
                  <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361934" target="_blank" class="square-cta border-version">按此預約</a> -->
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>2017.10.3 開幕</span></a> -->
                </div>
              </div>

              <div class="col-md-3 no-padding page-default-booking-item tp-verison">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country_tp/booking-space-04-a.jpg" 
                  data-image-tablet="images_cms/country_tp/booking-space-04-a.jpg"
                  data-image-mobile="images_cms/country_tp/booking-space-04-a.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>錄音室及攝影棚</h5>
                  <p>提供專業錄音室及攝影棚設備，讓你輕鬆滿足製作影音的需求。</p>
                  <!-- <span class="price">費用: HK$900/小時 起</span>                 -->
                </div>
                <div class="page-default-booking-item-cta-container">
                  <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361935" target="_blank" class="square-cta border-version" style="display: none;">按此預約</a> -->
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>2017.10.3 開幕</span></a> -->
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
                        <h5>辦公空間</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/booking-space-01.jpg"
                        data-image-tablet="images_cms/country_tp/booking-space-01.jpg"
                        data-image-mobile="images_cms/country_tp/booking-space-01-mobile.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>辦公空間</h5>
                        <p>選擇你最喜愛的座位，按照需求預訂。費用可以小時計，亦可以日租或月租形式預訂。</p>
                        <!-- <span class="price">費用: HK$70/小時 起</span>    -->             
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <!-- <a href="https://hongkong.kafnu.com/en/bookings/calendar" class="square-cta border-version">按此預約</a> -->
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>2017.10.3 開幕</span></a> -->
                      </div>                    
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item tp-version">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="4-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>會議空間</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/booking-space-02.jpg" 
                        data-image-tablet="images_cms/country_tp/booking-space-02.jpg"
                        data-image-mobile="images_cms/country_tp/booking-space-02.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>會議空間</h5>
                        <p>提供4人、6人及8人以上的會議空間，可依照人數需求，選擇適合的空間進行會議。</p>
                        <!-- <span class="price">費用: HK$600/小時 起</span> -->                
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361933" target="_blank" class="square-cta border-version">按此預約</a> -->
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>2017.10.3 開幕</span></a> -->
                      </div>                   
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item tp-version">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="6-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>獨立辦公室</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/booking-space-03.jpg" 
                        data-image-tablet="images_cms/country_tp/booking-space-03.jpg"
                        data-image-mobile="images_cms/country_tp/booking-space-03.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>獨立辦公室</h5>
                        <p>適合2~4人的小型團隊進駐，保有隱私的空間可讓你專注於工作。</p>
                        <!-- <span class="price">費用: HK$750/小時 起</span>                 -->
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361934" target="_blank" class="square-cta border-version">按此預約</a> -->
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>2017.10.3 開幕</span></a> -->
                      </div>                  
                    </div>
                </div>                  
              </div>

              <div class="col-sm-12 no-padding page-default-booking-item tp-version">
                <div class="manic-expand-container">
                    <div class="scroll-target" data-value="8-person"></div>
                    <div class="manic-expand-container-title">
                        <h5>錄音室及攝影棚</h5> 
                    </div>
                    <div class="manic-expand-container-btn"></div>
                    <div class="manic-expand-container-content">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country_tp/booking-space-04.jpg" 
                        data-image-tablet="images_cms/country_tp/booking-space-04.jpg"
                        data-image-mobile="images_cms/country_tp/booking-space-04.jpg" alt="">
                      </div>
                      <div class="page-default-booking-item-text">
                        <h5>錄音室及攝影棚</h5>
                        <p>提供專業錄音室及攝影棚設備，讓你輕鬆滿足製作影音的需求。</p>
                        <!-- <span class="price">費用: HK$900/小時 起</span>                 -->
                      </div>
                      <div class="page-default-booking-item-cta-container">
                        <!-- <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361935" target="_blank" class="square-cta border-version">按此預約</a> -->
                        <!-- <a href="javascript:void(0);" class="open-soon"><span>2017.10.3 開幕</span></a> -->
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
                    <h5>生活</h5>
                    <h6>在 Kafnu 台北，體驗工作與生活的完美結合。</h6>
                    <ul>
                      <li class="tp-live-01">
                        <p class="title">Morsel 北歐式輕食餐廳</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-02">
                        <p class="title">多元化課程健身中心</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                      </li>
                      <li class="tp-live-03">
                        <p class="title">生活合作夥伴會員優惠</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-04">
                        <p class="title">Nespresso 咖啡</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-05">
                        <p class="title">藝術品與裝置藝術展演</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-06">
                        <p class="title">共享生活空間</p>
                        <!-- <p>Maecenas mollis enim finibus.</p> -->
                      </li>
                      <li class="tp-live-07">
                        <p class="title">簡易廚房設備</p>
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
                    <h5>工作</h5>
                    <h6>啟發靈感的工作生態系</h6>
                    <ul>
                      <li class="tp-work-01">
                        <p class="title">生態設計空間</p>                      
                      </li>
                      <li class="tp-work-02">
                        <p class="title">高度可調式工作桌</p>
                      </li>
                      <li class="tp-work-03">
                        <p class="title">事務機服務</p>
                      </li>
                      <li class="tp-work-04">
                        <p class="title">設計風格會議室</p>
                      </li>
                      <li class="tp-work-05">
                        <p class="title">隔音電話亭</p>
                      </li>
                      <li class="tp-work-06">
                        <p class="title">自然採光環境</p>
                      </li>
                      <li class="tp-work-07">
                        <p class="title">專業錄音室</p>
                      </li>
                      <li class="tp-work-08">
                        <p class="title">多元化攝影綠幕房</p>
                      </li>
                      <li class="tp-work-09">
                        <p class="title">可租用停車場</p>
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
                    <h5>玩樂</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, consectetur lorem adipiscing elit ipsum.</h6> -->
                    <ul>
                      <li class="tp-play-01">
                        <p class="title">舒適的休閒設施</p>                      
                      </li>
                      <li class="tp-play-02">
                        <p class="title">多元化課程健身中心</p>
                      </li>
                      <li class="tp-play-03">
                        <p class="title">會員專屬活動</p>
                      </li>
                      <li class="tp-play-04">
                        <p class="title">會員周間歡樂時光</p>
                      </li>
                      <li class="tp-play-05">
                        <p class="title">K2 酒吧</p>
                      </li>
                      <li class="tp-play-06">
                        <p class="title">頂樓露天活動場地</p>
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
                    <h5>學習</h5>
                    <h6>不斷電的學習旅程</h6>
                    <ul>
                      <li class="tp-learn-01">
                        <p class="title">活動及業師諮詢</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>
                      <li class="tp-learn-02">
                        <p class="title">專家諮詢</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>   
                      <li class="tp-learn-03">
                        <p class="title">會員夥伴工具與優惠</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>
                      <li class="tp-learn-04">
                        <p class="title">各類書刊與雜誌</p>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis enim. </p> -->
                      </li>
                      <li class="tp-learn-05">
                        <p class="title">會員與社群經理交流分享</p>
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
                    <h5>休憩</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, icesac cumsan.</h6> -->
                    <ul>
                      <li class="tp-rest-01">
                        <p class="title">休憩區和放鬆空間</p>                      
                      </li>
                      <li class="tp-rest-02">                  
                        <p class="title">SPA 療程和生活合作夥伴會員優惠</p>
                      </li>
                      <li class="tp-rest-03">                  
                        <p class="title">城市景觀</p>
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
                    <h5>生活</h5>
                    <h6>在 Kafnu 台北，體驗工作與生活的完美結合。</h6>
                    <ul>
                      <li>
                        <i class="tp-live-01"></i>
                        <p class="title">Morsel 北歐式輕食餐廳</p>
                      </li>
                      <li>
                        <i class="tp-live-02"></i>
                        <p class="title">多元化課程健身中心</p>
                      </li>
                      <li>
                        <i class="tp-live-03"></i>
                        <p class="title">生活合作夥伴會員優惠</p>                        
                      </li>
                      <li>
                        <i class="tp-live-04"></i>
                        <p class="title">Nespresso 咖啡</p>                        
                      </li>
                      <li>
                        <i class="tp-live-05"></i>
                        <p class="title">藝術品與裝置藝術展演</p>                        
                      </li>
                      <li>
                        <i class="tp-live-06"></i>
                        <p class="title">共享生活空間</p>                        
                      </li>
                      <li>
                        <i class="tp-live-07"></i>
                        <p class="title">簡易廚房設備</p>                        
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
                    <h5>工作</h5>
                    <h6>啟發靈感的工作生態系</h6>
                    <ul>  
                      <li>
                        <i class="tp-work-01"></i>
                        <p class="title">生態設計空間</p>                      
                      </li>
                      <li>
                        <i class="tp-work-02"></i>
                        <p class="title">高度可調式工作桌</p>
                      </li>
                      <li>
                        <i class="tp-work-03"></i>
                        <p class="title">事務機服務</p>
                      </li>
                      <li>
                        <i class="tp-work-04"></i>
                        <p class="title">設計風格會議室</p>
                      </li>
                      <li>
                        <i class="tp-work-05"></i>
                        <p class="title">隔音電話亭</p>
                      </li>
                      <li>
                        <i class="tp-work-06"></i>
                        <p class="title">自然採光環境</p>
                      </li>
                      <li>
                        <i class="tp-work-07"></i>
                        <p class="title">專業錄音室</p>
                      </li>
                      <li>
                        <i class="tp-work-08"></i>
                        <p class="title">多元化攝影綠幕房</p>
                      </li>
                      <li>
                        <i class="tp-work-09"></i>
                        <p class="title">可租用停車場</p>
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
                    <h5>玩樂</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, consectetur lorem adipiscing elit ipsum.</h6> -->
                    <ul>
                      <li>
                        <i class="tp-play-01"></i>
                        <p class="title">舒適的休閒設施</p>                      
                      </li>
                      <li>
                        <i class="tp-play-02"></i>
                        <p class="title">多元化課程健身中心</p>
                      </li>
                      <li>
                        <i class="tp-play-03"></i>
                        <p class="title">會員專屬活動</p>
                      </li>
                      <li>
                        <i class="tp-play-04"></i>
                        <p class="title">會員周間歡樂時光</p>
                      </li>
                      <li>
                        <i class="tp-play-05"></i>
                        <p class="title">K2 酒吧</p>
                      </li>
                      <li>
                        <i class="tp-play-06"></i>
                        <p class="title">頂樓露天活動場地</p>
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
                    <h5>學習</h5>
                    <h6>不斷電的學習旅程</h6>
                    <ul>
                      <li>
                        <i class="tp-learn-01"></i>
                        <p class="title">活動及業師諮詢</p>                        
                      </li>
                      <li>
                        <i class="tp-learn-02"></i>
                        <p class="title">專家諮詢</p>                        
                      </li>   
                      <li>
                        <i class="tp-learn-03"></i>
                        <p class="title">會員夥伴工具與優惠</p>                        
                      </li>
                      <li>
                        <i class="tp-learn-04"></i>
                        <p class="title">各類書刊與雜誌</p>                        
                      </li> 
                      <li>
                        <i class="tp-learn-03"></i>
                        <p class="title">會員與社群經理交流分享</p>                        
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
                    <h5>休憩</h5>
                    <!-- <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas mollis lorem in enim finibus, icesac cumsan.</h6> -->
                    <ul>
                      <li>
                        <i class="tp-rest-01"></i>
                        <p class="title">休憩區和放鬆空間</p>                      
                      </li>
                      <li>                  
                        <i class="tp-rest-02"></i>
                        <p class="title">SPA 療程和生活合作夥伴會員優惠</p>
                      </li>
                      <li>                  
                        <i class="tp-rest-03"></i>
                        <p class="title">城市景觀</p>
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
              <h6>近期活動</h6>                  
            </div>
            <div class="banner-sidebar-item-image">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/country_tp/event-slider-01.jpg"
                data-image-tablet="images_cms/country_tp/event-slider-01.jpg"
                data-image-mobile="images_cms/country_tp/event-slider-01-mobile.jpg" alt="">
              </div>
            </div>
            <div class="banner-sidebar-item-text">
              <h5>邁向未來的願景擘畫</h5>
              <p>2017.10.12 - 06:30PM</p>
              <p class="minimize-text" data-length="-1" data-tablet-length="-1" data-mobile-length="-1">Kafnu開幕活動將舉辦雞尾酒會與創意論壇，歡慶Kafnu正式營運。</p>
            </div>
            <!-- <div class="banner-sidebar-item-cta-container">
              <a href="community.html#events" class="square-cta border-version">See More</a>
            </div> -->
          </div><!-- banner-sidebar-item -->

          <!-- <div class="banner-sidebar-item">
            <div class="banner-sidebar-item-title">
              <h6>近期活動</h6>                  
            </div>
            <div class="banner-sidebar-item-image">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/country_tp/event-slider-02.jpg"
                data-image-tablet="images_cms/country_tp/event-slider-02.jpg"
                data-image-mobile="images_cms/country_tp/event-slider-02.jpg" alt="">
              </div>
            </div>
            <div class="banner-sidebar-item-text">
              <h5>HICAP論壇歡迎酒會</h5>
              <p>2017.10.19 - 07:00PM</p>
              <p class="minimize-text" data-length="-1" data-tablet-length="100" data-mobile-length="100">前來香港參加HICAP活動嗎? 歡迎參觀Kafnu全球第一個據點，並體驗我們精心準備的驚喜吧！</p>
            </div>
            <!- - <div class="banner-sidebar-item-cta-container">
              <a href="community.html#events" class="square-cta border-version">See More</a>
            </div> - ->
          </div> --><!-- banner-sidebar-item -->

          <!-- <div class="banner-sidebar-item">
            <div class="banner-sidebar-item-title">
              <h6>近期活動</h6>                  
            </div>
            <div class="banner-sidebar-item-image">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/country_tp/event-slider-03.jpg"
                data-image-tablet="images_cms/country_tp/event-slider-03.jpg"
                data-image-mobile="images_cms/country_tp/event-slider-03.jpg" alt="">
              </div>
            </div>
            <div class="banner-sidebar-item-text">
              <h5>“未知領域”晚宴</h5>
              <p>2017.10.20 - 06:00PM</p>
              <p class="minimize-text" data-length="-1" data-tablet-length="100" data-mobile-length="100">Kafnu作東，邀請你與HICAP參與者共同體驗香港最隱密的私房餐廳。</p>
            </div>
            <!- - <div class="banner-sidebar-item-cta-container">
              <a href="community.html#events" class="square-cta border-version">See More</a>
            </div> - ->
          </div> --><!-- banner-sidebar-item -->

          <!-- <div class="banner-sidebar-item">
            <div class="banner-sidebar-item-title">
              <h6>近期活動</h6>                  
            </div>
            <div class="banner-sidebar-item-image">
              <div class="manic-image-container">
                <img src="" data-image-desktop="images_cms/country_tp/event-slider-04.jpg"
                data-image-tablet="images_cms/country_tp/event-slider-04.jpg"
                data-image-mobile="images_cms/country_tp/event-slider-04.jpg" alt="">
              </div>
            </div>
            <div class="banner-sidebar-item-text">
              <h5>商務發展在台灣</h5>
              <p>2017.10.30 - 2017.11.03</p>
              <p class="minimize-text" data-length="-1" data-tablet-length="-1" data-mobile-length="-1">規劃為期一周的研討會，包含個別顧問諮詢時間，教你如何在台灣設立公司，與硬體大場合作，招募與人資規範，以及進出口相關規定。</p>
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
                  <h4>台北社群經理團隊</h4>
                  <!-- <h4>justin lorem</h4> -->
                  <p>Kafnu 台北社群經理團隊，擁有多元背景，充滿熱情活力。來 Kafnu 走走，和我們聊聊吧！</p>
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
                  <a href="community.html" class="square-cta border-white-version">了解更多</a>
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
              <h4 data-wow-offset="50" class="">與 Kafnu 台北一起聯繫世界</h4>              

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