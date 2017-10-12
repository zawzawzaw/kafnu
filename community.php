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
                  <h1>The Kafnu Community</h1>
                  <h3>Bridging the gap between individual effort and community resources</h3>
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

                <h3>Kafnu is named after a village in India at the base of the Himalayas. Visitors come to the village to meet with fellow travellers and explorers to start their treks into the mountains.</h3>
                <h3>Just like travelers, adventurers, backpackers, and explorers begin their Himalayan treks from Kafnu, so entrepreneurs, artists, and creators start and fulfil their personal and professional journeys from Kafnu.</h3>                
              </div> <!-- page-community-slider-title -->

              <div id="page-community-slider-title-2">
                <h2>Our community managers</h2>
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
                      <h5>hong kong</h5>
                      <h4>Pico Ho</h4>
                      <p>I’m a listener with respect and empathy. I also go hiking and camping with friends while we are free. If there’s an obstacle in front of you, I will be the one who stands right next to you and we solve it together.</p>
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
                      <h5>hong kong</h5>
                      <h4>Jenna Ho</h4>                      
                      <p>Music is my belief and my channel to express emotions; I started writing songs when I was 13. My life motto is: Do it if you want it.</p>
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
                      <h5>hong kong</h5>
                      <h4>Ben Ng</h4>
                      <p>Movies inspire me, no matter happy or sad. I have experienced many failures but all of them are steps to construct a better me.</p>
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
                      <h5>hong kong</h5>
                      <h4>Michelle Lui</h4>
                      <p>I have a common name but I aim to live an extraordinary life. I am a super adventurous person - I love rafting, kayaking and exploring.</p>
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
                      <h5>hong kong</h5>
                      <h4>Karl Li</h4>
                      <p>I am critical about things and always play the devil’s advocate role in the team. My favourite book is "From 0 to 1". It inspired me a lot and made me love creating new things.</p>
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
                      <h5>hong kong</h5>
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
                    <h5>hong kong</h5>
                    <h4>Pico Ho</h4>
                    <p>I'm a listener with empathy and respect. My hobbies are photography, hiking and camping.</p>
                  </div>
                </div> <!-- page-community-managers-item-mobile -->

                <div class="page-community-managers-see-more-box">
                  <div class="text-container">
                    <a href="#see-more-managers" class="see-more-managers"><h4>see more  <br>community managers</h4></a>                  
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
            <h2>What Our Members Say</h2>
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
            <h2>Kafnu Events</h2>
          </div>

          <div id="page-default-booking-item-desktop" class="center-version hidden-sm hidden-xs">
            <!-- <div class=""> -->
              <div class="page-default-booking-item inline-block-version">
                  <div class="page-default-booking-item-image">
                    <div class="manic-image-container">
                      <img src="" data-image-desktop="images_cms/community/event-01.jpg"
                      data-image-tablet="images_cms/community/event-01.jpg"
                      data-image-mobile="images_cms/community/event-01.jpg" alt="">
                    </div>
                    <div class="page-default-booking-item-image-caption">
                      <h6>upcoming events</h6>
                      <h5>Vision Board for the Future</h5>
                    </div>
                  </div>
                  <div class="page-default-booking-item-text">
                    <ul>
                      <li class="calendar icon">12 October 2017 – 6:30 PM</li>
                    <li class="map-pin icon">Kafnu Hong Kong</li>
                    </ul>
                    <p>We celebrate Kafnu’s opening with a stimulating panel discussion, tasty cocktails, and special guests.</p>
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
                    <h6>upcoming events</h6>
                    <h5>Reception for HICAP conference attendees</h5>
                  </div>
                </div>
                <div class="page-default-booking-item-text">
                  <ul>
                    <li class="calendar icon">19 October 2017 – 7:00 PM</li>
                    <li class="map-pin icon">Kafnu Hong Kong</li>
                  </ul>
                  <p>In Hong Kong for HICAP? See the world’s first Kafnu and prepare for some special surprises.</p>
                </div>                
              </div> -->

              <!-- <div class="col-md-3 no-padding page-default-booking-item">
                <div class="page-default-booking-item-image">
                  <div class="manic-image-container">
                    <img src="" data-image-desktop="images_cms/community/event-03.jpg" 
                    data-image-tablet="images_cms/community/event-03.jpg"
                    data-image-mobile="images_cms/community/event-03.jpg" alt="">
                  </div>
                  <div class="page-default-booking-item-image-caption">
                    <h6>upcoming events</h6>
                    <h5>‘Unchartered Territories’ Dinner.</h5>
                  </div>
                </div>
                <div class="page-default-booking-item-text">
                  <ul>
                    <li class="calendar icon">20 October 2017 – 6:00 PM</li>
                    <li class="map-pin icon">Kafnu Hong Kong</li>
                  </ul>
                  <p>Experience Hong Kong’s best-kept secret restaurants, in a dinner tour hosted by Kafnu for HICAP attendees.</p>      
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
                    <h6>upcoming events</h6>
                    <h5>Doing business in Taiwan</h5>
                  </div>
                </div>
                <div class="page-default-booking-item-text">
                  <ul>
                    <li class="calendar icon">30 Oct – 3 Nov</li>
                    <li class="map-pin icon">Kafnu Hong Kong</li>
                  </ul>
                  <p>A week of seminars and “office hours” with individual consultation with experts on doing business in Taiwan – from setting up a company, working with hardware factories, hiring and HR, and importing/exporting.</p>
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
              <h6>upcoming events</h6>
              <div class="page-default-booking-item-image">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/community/event-01.jpg"
                  data-image-tablet="images_cms/community/event-01.jpg"
                  data-image-mobile="images_cms/community/event-01.jpg" alt="">
                </div>                
              </div>
              <div class="page-default-booking-item-text">
                <h5>Vision Board for the Future</h5>
                <ul>
                  <li class="calendar icon">12 October 2017 – 6:30 PM</li>
                <li class="map-pin icon">Kafnu Hong Kong</li>
                </ul>
                <p>We celebrate Kafnu’s opening with a stimulating panel discussion, tasty cocktails, and special guests.</p>
              </div>
              <div class="page-default-booking-item-cta-container">
                <!-- <a href="#" class="square-cta border-version">See More</a> -->
              </div>
            </div>
            <!-- <div class="col-md-3 page-default-booking-item">
              <h6>upcoming events</h6>
              <div class="page-default-booking-item-image">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/community/event-02.jpg"
                  data-image-tablet="images_cms/community/event-02.jpg"
                  data-image-mobile="images_cms/community/event-02.jpg" alt="">
                </div>                
              </div>
              <div class="page-default-booking-item-text">
                <h5>Reception for HICAP conference attendees</h5>
                <ul>
                  <li class="calendar icon">19 October 2017 – 7:00 PM</li>
                <li class="map-pin icon">Kafnu Hong Kong</li>
                </ul>
                <p>In Hong Kong for HICAP? See the world’s first Kafnu and prepare for some special surprises.</p>
              </div>
              <div class="page-default-booking-item-cta-container">
                <!- - <a href="#" class="square-cta border-version">See More</a> - ->
              </div>
            </div> -->
            <!-- <div class="col-md-3 page-default-booking-item">
              <h6>upcoming events</h6>
              <div class="page-default-booking-item-image">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/community/event-03.jpg"
                  data-image-tablet="images_cms/community/event-03.jpg"
                  data-image-mobile="images_cms/community/event-03.jpg" alt="">
                </div>                
              </div>
              <div class="page-default-booking-item-text">
                <h5>‘Unchartered Territories’ Dinner.</h5>
                <ul>
                  <li class="calendar icon">20 October 2017 – 6:00 PM</li>
                <li class="map-pin icon">Kafnu Hong Kong</li>
                </ul>
                <p>Experience Hong Kong’s best-kept secret restaurants, in a dinner tour hosted by Kafnu for HICAP attendees.</p>
              </div>
              <div class="page-default-booking-item-cta-container">
                <!- - <a href="#" class="square-cta border-version">See More</a> - ->
              </div>
            </div> -->
            <!-- <div class="col-md-3 page-default-booking-item">
              <h6>upcoming events</h6>
              <div class="page-default-booking-item-image">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/community/event-04.jpg"
                  data-image-tablet="images_cms/community/event-04.jpg"
                  data-image-mobile="images_cms/community/event-04.jpg" alt="">
                </div>                
              </div>
              <div class="page-default-booking-item-text">
                <h5>Doing business in Taiwan</h5>
                <ul>
                  <li class="calendar icon">30 Oct – 3 Nov</li>
                <li class="map-pin icon">Kafnu Hong Kong</li>
                </ul>
                <p>A week of seminars and “office hours” with individual consultation with experts on doing business in Taiwan – from setting up a company, working with hardware factories, hiring and HR, and importing/exporting.</p>
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
                    <h5 class="country">hong kong</h5>
                    <h4 class="name">Pico Ho</h4>
                    <p class="description">I'm a listener with empathy and respect. My hobbies are photography, hiking and camping.</p>
                  </div>
                </div> <!-- page-community-managers-item-mobile -->                
              </div> <!-- page-community-managers-mobile -->              
            </div>
          </div> <!-- row -->
        </div>
        <div id="page-community-managers-thumbnails-mobile">
          <div class="community-manager manic-image-container" data-image="images_cms/community/community-slider-01-mobile.jpg" data-name="Pico Ho" data-country="Hong Kong" data-description="I'm a listener with empathy and respect. My hobbies are photography, hiking and camping.">
            <img src="images_cms/community/slider-thumbnail-01.jpg" class="img-responsive" alt="">
          </div>
          <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-02-mobile.jpg" data-name="Jenna Ho" data-country="Hong Kong" data-description="Music is my belief and my channel to express emotions; I started writing songs when I was 13. My life motto is: Do it if you want it.">
            <img src="images_cms/community/slider-thumbnail-02.jpg" class="img-responsive" alt="">
          </div>
          <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-03-mobile.jpg" data-name="Ben Ng" data-country="Hong Kong" data-description="Movies inspire me, no matter happy or sad. I have experienced many failures but all of them are steps to construct a better me.">
            <img src="images_cms/community/slider-thumbnail-03.jpg" class="img-responsive" alt="">
          </div>
          <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-04-mobile.jpg" data-name="Michelle Lui" data-country="Hong Kong" data-description="I have a common name but I aim to live an extraordinary life. I am a super adventurous person - I love rafting, kayaking and exploring.">
            <img src="images_cms/community/slider-thumbnail-04.jpg" class="img-responsive" alt="">
          </div>
          <div class="community-manager manic-image-container"  data-image="images_cms/community/community-slider-05-mobile.jpg" data-name="Karl Li" data-country="Hong Kong" data-description='I am critical about things and always play the devil’s advocate role in the team. My favourite book is "From 0 to 1". It inspired me a lot and made me love creating new things.'>
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