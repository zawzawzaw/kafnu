<?php 
ob_start();
?>
<?php
  global $current_page;
  $current_page = "page-community";

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

      <div class="header-mobile-spacer hidden-lg hidden-md"></div>


      <!--
         ____    _    _   _ _   _ _____ ____
        | __ )  / \  | \ | | \ | | ____|  _ \
        |  _ \ / _ \ |  \| |  \| |  _| | |_) |
        | |_) / ___ \| |\  | |\  | |___|  _ <
        |____/_/   \_\_| \_|_| \_|_____|_| \_\

      -->

      <article id="page-default-banner-section" class="community-page-1">
        <div id="page-default-banner-image" class="visible-lg visible-md">
          <div class="manic-image-container">
            <img src="" data-image-desktop="images_cms/community/community-banner.jpg">
          </div>
        </div>
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="images_cms/community/community-banner.jpg"
                        data-image-mobile="images_cms/community/community-banner-mobile.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container" class="center-version medium-text-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div id="page-default-banner-copy">
                  <h1>Kafnu 社群</h1>
                  <h3>串接個人實力與社群資源的橋梁</h3>
                </div> <!-- page-default-banner-copy -->

              </div>
            </div>
          </div>
        </div> <!-- page-default-banner-copy-container -->

      </article> <!-- page-default-banner-section -->


      <article id="page-community-slider-section" class="community-page-1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">

              <div id="page-community-slider-title">
                <!-- <div class="manic-image-container"> -->
                  <img src="kafnu_assets/images/logo/logo-kafnu-color-vertical.svg" alt="">
                <!-- </div> -->

                <h3>Kafnu 是以印度喜馬拉雅山腳一個小村落來命名。旅客在攻頂前，會先到這個村落與其他的旅者相聚，再一起展開探索喜馬拉雅山的旅程。</h3>
                <h3>這些旅人、冒險家、背包客與探險者們，將從Kafnu 村落開始攀登喜馬拉雅山的挑戰；而落腳於 Kafnu 的創業者、藝術家與創意工作者，也將從這裡開始一步步開展人生與專業領域的旅程。</h3>                
              </div> <!-- page-community-slider-title -->

              <div id="page-community-slider-title-2">
                <h2>社群經理團隊</h2>
              </div>

              <div id="page-community-slider-container" class="hidden-xs hidden-sm">

                <div id="page-community-slider" class="kafnu-slick-slider">
                  <div class="page-community-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/community/community-slider-01.jpg"
                        data-image-tablet="images_cms/community/community-slider-01.jpg"
                        data-image-mobile="images_cms/community/community-slider-01.jpg" alt="">
                    </div>
                    <div class="page-community-slider-item-caption">
                      <h5>香港</h5>
                      <h4>Pico Ho</h4>
                      <p>我是一名具尊重及同理心的聆聽者。我喜歡在空餘時跟朋友遠足和露營。當你遇到困難，我將會陪在你身旁跟你一起解決。</p>
                    </div>
                  </div>
                  <div class="page-community-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/community/community-slider-02.jpg"
                        data-image-tablet="images_cms/community/community-slider-02.jpg"
                        data-image-mobile="images_cms/community/community-slider-02.jpg" alt="">
                    </div>
                    <div class="page-community-slider-item-caption">
                      <h5>香港</h5>
                      <h4>Jenna Ho</h4>                      
                      <p>音樂是我的信仰，也是我抒發情感的渠道；我13歲的時候便可以創作歌曲。我的座右銘是：想做便去做。</p>
                    </div>
                  </div>                  
                  <div class="page-community-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/community/community-slider-03.jpg"
                        data-image-tablet="images_cms/community/community-slider-03.jpg"
                        data-image-mobile="images_cms/community/community-slider-03.jpg" alt="">
                    </div>
                    <div class="page-community-slider-item-caption">
                      <h5>香港</h5>
                      <h4>Ben Ng</h4>
                      <p>電影是我的靈感泉源，不管是令人愉快的故事，還是讓人掉淚的情節。我曾遇過許多挫折，但正因為這些經歷，才能成就今天的我。</p>
                    </div>
                  </div>
                  <div class="page-community-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/community/community-slider-04.jpg"
                        data-image-tablet="images_cms/community/community-slider-04.jpg"
                        data-image-mobile="images_cms/community/community-slider-04.jpg" alt="">
                    </div>
                    <div class="page-community-slider-item-caption">
                      <h5>香港</h5>
                      <h4>Michelle Lui</h4>
                      <p>一個平凡的名字亦可以活出一個非同凡享的生命。我是一個超級喜歡冒險的人—我熱愛激流、獨木舟、探險。</p>
                    </div>
                  </div>
                  <div class="page-community-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/community/community-slider-05.jpg"
                        data-image-tablet="images_cms/community/community-slider-05.jpg"
                        data-image-mobile="images_cms/community/community-slider-05.jpg" alt="">
                    </div>
                    <div class="page-community-slider-item-caption">
                      <h5>香港</h5>
                      <h4>Karl Li</h4>
                      <p>我經常持批判性的思維，在團隊中常擔任”魔鬼的倡導者”角色。我最喜歡的書是"From 0 to 1"。它啟發了我的思維，激發我不斷創新。</p>                      
                    </div>
                  </div>
                  <!-- <div class="page-community-slider-item">
                    <div class="manic-image-container">
                      <img src="" 
                        data-image-desktop="images_cms/community/community-slider-03.jpg"
                        data-image-tablet="images_cms/community/community-slider-03.jpg"
                        data-image-mobile="images_cms/community/community-slider-03.jpg" alt="">
                    </div>
                    <div class="page-community-slider-item-caption">
                      <h5>香港</h5>
                      <h4>Ben Ng</h4>
                      <p>I am critical about things and always play the devil’s advocate role in the team. My favourite book is "From 0 to 1". It inspired me a lot and made me love creating new things.</p>
                    </div>
                  </div> -->
                </div>   

                <div id="page-community-thumbnail-slider" class="kafnu-slick-slider">                  
                  <div class="page-community-thumbnail-slider-item">
                    <img src="images_cms/community/slider-thumbnail-01.jpg" class="img-responsive" alt="">                    
                  </div>
                  <div class="page-community-thumbnail-slider-item">
                    <img src="images_cms/community/slider-thumbnail-02.jpg" class="img-responsive" alt="">                    
                  </div>
                  <div class="page-community-thumbnail-slider-item">
                    <img src="images_cms/community/slider-thumbnail-03.jpg" class="img-responsive" alt="">                    
                  </div>
                  <div class="page-community-thumbnail-slider-item">
                    <img src="images_cms/community/slider-thumbnail-04.jpg" class="img-responsive" alt="">                    
                  </div>
                  <div class="page-community-thumbnail-slider-item">
                    <img src="images_cms/community/slider-thumbnail-05.jpg" class="img-responsive" alt="">                    
                  </div>                  
                  <!-- <div class="page-community-thumbnail-slider-item">
                    <img src="images_cms/community/slider-thumbnail-03.jpg" class="img-responsive" alt="">                    
                  </div> -->    
                </div>

              </div> <!-- page-community-slider-container -->           

              <div id="page-community-managers-mobile" class="visible-xs visible-sm">
                <div class="page-community-managers-item-mobile">
                  <div class="manic-image-container has-full-width">
                    <img src="" data-image-tablet="images_cms/community/community-slider-01.jpg" 
                                data-image-mobile="images_cms/community/community-slider-01-mobile.jpg" alt="">
                  </div>
                  <div class="text-container">
                    <h5>香港</h5>
                    <h4>Pico Ho</h4>
                    <p>我是一名具尊重及同理心的聆聽者。我喜歡在空餘時跟朋友遠足和露營。當你遇到困難，我將會陪在你身旁跟你一起解決。</p>
                  </div>
                </div> <!-- page-community-managers-item-mobile -->

                <div class="page-community-managers-see-more-box">
                  <div class="text-container">
                    <a href="#see-more-managers" class="see-more-managers"><h4>更多  <br>社群經理團隊</h4></a>                  
                  </div>
                  <div class="cta-container">
                    <a href="#see-more-managers" class="see-more-managers plus-icon"></a>
                  </div>
                </div>
              </div>   

            </div>
          </div> 
        </div> <!-- container-fluid-->
      </article> <!-- page-community-slider-section -->    

      <article id="page-community-memeber-section" class="">
        <div class="container-fluid">
              
          <div id="page-community-member-title">
            <h2>會員心得分享</h2>
          </div>

          <div id="page-community-member-slider" class="kafnu-slick-slider hidden-xs hidden-sm">
            <div class="page-community-member-slider-item">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-01-color.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-02-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-03-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-04-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-05-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-06-white.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div> <!-- page-community-member-slider-item -->
            <div class="page-community-member-slider-item">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-01-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-02-color.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-03-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-04-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-05-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-06-white.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
            <div class="page-community-member-slider-item">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-01-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-02-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-03-color.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-04-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-05-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-06-white.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
            <div class="page-community-member-slider-item">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-01-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-02-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-03-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-04-color.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-05-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-06-white.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
            <div class="page-community-member-slider-item">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-01-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-02-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-03-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-04-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-05-color.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-06-white.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
            <div class="page-community-member-slider-item">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-01-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-02-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-03-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-04-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-05-white.jpg" alt="">
                    </div>
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/member-slider-desktop-06-color.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </div>

        </div>

        <div class="container-fluid reduce-padding">

          <div id="page-community-member-slider-mobile" class="kafnu-slick-slider visible-xs visible-sm">
            <div class="page-community-member-slider-item-mobile">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="images_cms/community/member-slider-desktop-01-color.jpg"
                      data-image-mobile="images_cms/community/member-slider-desktop-01-color-mobile.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div> <!-- page-community-member-slider-item -->
            <div class="page-community-member-slider-item-mobile">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="images_cms/community/member-slider-desktop-02-color.jpg"
                      data-image-mobile="images_cms/community/member-slider-desktop-02-color.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
            <div class="page-community-member-slider-item-mobile">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="images_cms/community/member-slider-desktop-03-color.jpg" data-image-mobile="images_cms/community/member-slider-desktop-03-color.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
            <div class="page-community-member-slider-item-mobile">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="images_cms/community/member-slider-desktop-04-color.jpg" data-image-mobile="images_cms/community/member-slider-desktop-04-color.jpg" alt="">
                    </div>                  
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
            <div class="page-community-member-slider-item-mobile">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">                    
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="images_cms/community/member-slider-desktop-05-color.jpg"  data-image-mobile="images_cms/community/member-slider-desktop-05-color.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
            <div class="page-community-member-slider-item-mobile">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-community-member-slider-item-image-container">                    
                    <div class="manic-image-container">
                      <img src="" data-image-tablet="images_cms/community/member-slider-desktop-05-color.jpg"   data-image-mobile="images_cms/community/member-slider-desktop-06-color.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-col">
                  <div class="text-box-container">
                    <p>“Lorem ipsum dolor sit amet, cons ectetur adipscing elit. Maecenas mollis lorem in enim finibus, quis ultrices dui accumsna. Nulla facilisi. Fusce at aliquam mangna, quis condimentum.”</p>
                    <span class="name">Lorem Ipsum, <br>from Kafnu Hong Kong</span>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </div>

        </div>
      </article>
    
      <article id="page-default-booking-section" class="community-page-1 community-version">
        <div class="container-fluid">
          <div class="scroll-target" data-value="events"></div>          
          <div class="page-default-booking-item-title">
            <h2>Kafnu 活動</h2>
          </div>

          <div id="page-default-booking-item-desktop" class="center-version hidden-sm hidden-xs">
            <!-- <div class="row"> -->
              <div class="page-default-booking-item inline-block-version">
                  <div class="page-default-booking-item-image">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/event-01.jpg"
                      data-image-tablet="images_cms/community/event-01.jpg"
                      data-image-mobile="images_cms/community/event-01.jpg" alt="">
                    </div>
                    <div class="page-default-booking-item-image-caption">
                      <h6>近期活動</h6>
                      <h5>邁向未來的願景擘畫</h5>
                    </div>
                  </div>
                  <div class="page-default-booking-item-text">
                    <ul>
                      <li class="calendar icon">2017.10.12 - 06:30PM</li>
                    <li class="map-pin icon">Kafnu 香港</li>
                    </ul>
                    <p>Kafnu開幕活動將舉辦雞尾酒會與創意論壇，歡慶Kafnu正式營運。</p>
                  </div>
                  <!-- <div class="page-default-booking-item-cta-container">
                    <a href="#" class="square-cta border-version">See More</a>
                  </div> -->
              </div>

              <!-- <div class="col-md-3 no-padding page-default-booking-item">
                <div class="page-default-booking-item-image">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/community/event-02.jpg" 
                    data-image-tablet="images_cms/community/event-02.jpg"
                    data-image-mobile="images_cms/community/event-02.jpg" alt="">
                  </div>
                  <div class="page-default-booking-item-image-caption">
                    <h6>近期活動</h6>
                    <h5>HICAP論壇歡迎酒會</h5>
                  </div>
                </div>
                <div class="page-default-booking-item-text">
                  <ul>
                    <li class="calendar icon">2017.10.19 - 07:00PM</li>
                    <li class="map-pin icon">Kafnu 香港</li>
                  </ul>
                  <p>前來香港參加HICAP活動嗎? 歡迎參觀Kafnu全球第一個據點，並體驗我們精心準備的驚喜吧！</p>
                </div>                
              </div>

              <div class="col-md-3 no-padding page-default-booking-item">
                <div class="page-default-booking-item-image">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/community/event-03.jpg" 
                    data-image-tablet="images_cms/community/event-03.jpg"
                    data-image-mobile="images_cms/community/event-03.jpg" alt="">
                  </div>
                  <div class="page-default-booking-item-image-caption">
                    <h6>近期活動</h6>
                    <h5>“未知領域”晚宴</h5>
                  </div>
                </div>
                <div class="page-default-booking-item-text">
                  <ul>
                    <li class="calendar icon">2017.10.20 - 06:00PM</li>
                    <li class="map-pin icon">Kafnu 香港</li>
                  </ul>
                  <p>Kafnu作東，邀請你與HICAP參與者共同體驗香港最隱密的私房餐廳。</p>      
                </div>
                <!- - <div class="page-default-booking-item-cta-container">
                  <a href="javascript:void(0);" class="square-cta border-version fade-out-version">Expired</a>
                </div> - ->
              </div> -->

              <!-- <div class="page-default-booking-item inline-block-version">
                <div class="page-default-booking-item-image">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/community/event-04.jpg" 
                    data-image-tablet="images_cms/community/event-04.jpg"
                    data-image-mobile="images_cms/community/event-04.jpg" alt="">
                  </div>
                  <div class="page-default-booking-item-image-caption">
                    <h6>近期活動</h6>
                    <h5>商務發展在台灣</h5>
                  </div>
                </div>
                <div class="page-default-booking-item-text">
                  <ul>
                    <li class="calendar icon">2017.10.30 - 2017.11.03</li>
                    <li class="map-pin icon">Kafnu 香港</li>
                  </ul>
                  <p>規劃為期一周的研討會，包含個別顧問諮詢時間，教你如何在台灣設立公司，與硬體大場合作，招募與人資規範，以及進出口相關規定。</p>
                </div>
                <!- - <div class="page-default-booking-item-cta-container">
                  <a href="javascript:void(0);" class="square-cta border-version fade-out-version">Expired</a>
                </div> - ->
              </div> -->
            <!-- </div> --> <!-- row -->
          </div>    
          
          <!-- 
              __  _______  ____  ______    ______
             /  |/  / __ \/ __ )/  _/ /   / ____/
            / /|_/ / / / / __  |/ // /   / __/
           / /  / / /_/ / /_/ // // /___/ /___
          /_/  /_/\____/_____/___/_____/_____/

          -->          
          <div id="page-default-booking-item-mobile" class="visible-sm visible-xs kafnu-slick-slider">
            <div class="col-md-3 page-default-booking-item">
              <h6>近期活動</h6>
              <div class="page-default-booking-item-image">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/community/event-01.jpg"
                  data-image-tablet="images_cms/community/event-01.jpg"
                  data-image-mobile="images_cms/community/event-01.jpg" alt="">
                </div>                
              </div>
              <div class="page-default-booking-item-text">
                <h5>邁向未來的願景擘畫</h5>
                <ul>
                  <li class="calendar icon">2017.10.12 - 06:30PM</li>
                <li class="map-pin icon">Kafnu 香港</li>
                </ul>
                <p>Kafnu開幕活動將舉辦雞尾酒會與創意論壇，歡慶Kafnu正式營運。</p>
              </div>
              <div class="page-default-booking-item-cta-container">
                <!-- <a href="#" class="square-cta border-version">See More</a> -->
              </div>
            </div>
            <!-- <div class="col-md-3 page-default-booking-item">
              <h6>近期活動</h6>
              <div class="page-default-booking-item-image">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/community/event-02.jpg"
                  data-image-tablet="images_cms/community/event-02.jpg"
                  data-image-mobile="images_cms/community/event-02.jpg" alt="">
                </div>                
              </div>
              <div class="page-default-booking-item-text">
                <h5>HICAP論壇歡迎酒會</h5>
                <ul>
                  <li class="calendar icon">2017.10.19 - 07:00PM</li>
                <li class="map-pin icon">Kafnu 香港</li>
                </ul>
                <p>前來香港參加HICAP活動嗎? 歡迎參觀Kafnu全球第一個據點，並體驗我們精心準備的驚喜吧！</p>
              </div>
              <div class="page-default-booking-item-cta-container">
                <!- - <a href="#" class="square-cta border-version">See More</a> - ->
              </div>
            </div> -->
            <!-- <div class="col-md-3 page-default-booking-item">
              <h6>近期活動</h6>
              <div class="page-default-booking-item-image">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/community/event-03.jpg"
                  data-image-tablet="images_cms/community/event-03.jpg"
                  data-image-mobile="images_cms/community/event-03.jpg" alt="">
                </div>                
              </div>
              <div class="page-default-booking-item-text">
                <h5>“未知領域”晚宴</h5>
                <ul>
                  <li class="calendar icon">2017.10.20 - 06:00PM</li>
                <li class="map-pin icon">Kafnu 香港</li>
                </ul>
                <p>Kafnu作東，邀請你與HICAP參與者共同體驗香港最隱密的私房餐廳。</p>
              </div>
              <div class="page-default-booking-item-cta-container">
                <!- - <a href="#" class="square-cta border-version">See More</a> - ->
              </div>
            </div> -->
            <!-- <div class="col-md-3 page-default-booking-item">
              <h6>近期活動</h6>
              <div class="page-default-booking-item-image">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/community/event-04.jpg"
                  data-image-tablet="images_cms/community/event-04.jpg"
                  data-image-mobile="images_cms/community/event-04.jpg" alt="">
                </div>                
              </div>
              <div class="page-default-booking-item-text">
                <h5>商務發展在台灣</h5>
                <ul>
                  <li class="calendar icon">2017.10.30 - 2017.11.03</li>
                <li class="map-pin icon">Kafnu 香港</li>
                </ul>
                <p>規劃為期一周的研討會，包含個別顧問諮詢時間，教你如何在台灣設立公司，與硬體大場合作，招募與人資規範，以及進出口相關規定。</p>
              </div>
              <div class="page-default-booking-item-cta-container">
                <!- - <a href="#" class="square-cta border-version">See More</a> - ->
              </div>
            </div> -->
          </div>
        </div>
      </article>  


      <article class="community-page-2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div id="page-2-community-managers-mobile">
                <div class="page-community-managers-item-mobile">
                  <div class="manic-image-container has-full-width">
                    <img class="image" src="" data-image-tablet="images_cms/community/community-slider-01-mobile.jpg" 
                                data-image-mobile="images_cms/community/community-slider-01-mobile.jpg" alt="">
                  </div>
                  <div class="text-container">
                    <h5 class="country">香港</h5>
                    <h4 class="name">Pico Ho</h4>
                    <p class="description">我是一名具尊重及同理心的聆聽者 我喜歡在空餘時跟朋友遠足和露營 當你遇到困難，我將會陪在你身旁跟你一起解決</p>
                  </div>
                </div> <!-- page-community-managers-item-mobile -->                
              </div> <!-- page-community-managers-mobile -->              
            </div>
          </div> <!-- row -->
        </div>
        <div id="page-community-managers-thumbnails-mobile">
          <div class="community-manager manic-image-container" data-image="images_cms/community/community-slider-01-mobile.jpg" data-name="Pico Ho" data-country="香港" data-description="我是一名具尊重及同理心的聆聽者。我喜歡在空餘時跟朋友遠足和露營。當你遇到困難，我將會陪在你身旁跟你一起解決。">
            <img src="images_cms/community/slider-thumbnail-01.jpg" class="img-responsive" alt="">
          </div>
          <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-02-mobile.jpg" data-name="Jenna Ho" data-country="香港" data-description="音樂是我的信仰，也是我抒發情感的渠道；我13歲的時候便可以創作歌曲。我的座右銘是：想做便去做。">
            <img src="images_cms/community/slider-thumbnail-02.jpg" class="img-responsive" alt="">
          </div>
          <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-03-mobile.jpg" data-name="Ben Ng" data-country="香港" data-description='電影是我的靈感泉源，不管是令人愉快的故事，還是讓人掉淚的情節。我曾遇過許多挫折，但正因為這些經歷，才能成就今天的我。'>
            <img src="images_cms/community/slider-thumbnail-03.jpg" class="img-responsive" alt="">
          </div>
          <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-04-mobile.jpg" data-name="Michelle Lui" data-country="香港" data-description="一個平凡的名字亦可以活出一個非同凡享的生命。我是一個超級喜歡冒險的人—我熱愛激流、獨木舟、探險。">
            <img src="images_cms/community/slider-thumbnail-04.jpg" class="img-responsive" alt="">
          </div>
          <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-05-mobile.jpg" data-name="Karl Li" data-country="香港" data-description='我經常持批判性的思維，在團隊中常擔任”魔鬼的倡導者”角色。我最喜歡的書是"From 0 to 1"。它啟發了我的思維，激發我不斷創新。'>
            <img src="images_cms/community/slider-thumbnail-05.jpg" class="img-responsive" alt="">
          </div>          
          <!-- <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-01-mobile.jpg" data-name="Pico Ho" data-country="Hong Kong" data-description="I'm a listener with empathy and respect. My hobbies are photography, hiking and camping.">
            <img src="images_cms/community/slider-thumbnail-01.jpg" class="img-responsive" alt="">
          </div> -->
        </div>
      </article>


    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->

  <?php include "includes/footer_desktop.php"; ?>
  <?php include "includes/footer_mobile.php"; ?>

  <?php include "includes/script_community.php" ?>

</body>
</html>
<?php
// saving captured output to file
file_put_contents('community.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>