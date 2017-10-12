<?php 
ob_start();
?>
<?php
  global $current_page;
  $current_page = "page-contact";

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
            <img src="" data-image-desktop="images_cms/contact/contact-banner.jpg">
          </div>
        </div>
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container">
            <img src="" data-image-tablet="images_cms/contact/contact-banner.jpg"
                        data-image-mobile="images_cms/contact/contact-banner-mobile.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container" class="form-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-lg-offset-6 col-md-8 col-md-offset-4">

                <div id="page-default-banner-copy">
                  <h1>Let us know if you have any questions.</h1>
                  
                  <form name="contact-form" id="contact-form" action="" class="default-form">
                    <div class="message">
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-container">
                          <input type="text" name="first_name" placeholder="First Name*" class="required">
                        </div>
                        <div class="input-container">
                          <input type="text" name="last_name" placeholder="Last Name*" required>
                        </div>
                        <div class="input-container">
                          <input type="text" name="email" placeholder="Email Address*" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Ask us here"></textarea>
                        <button type="submit" id="contact-form-send" class="square-cta border-white-version">Send</button>
                      </div>
                    </div>                    

                  </form>
                  
                </div> <!-- page-default-banner-copy -->

              </div>
            </div>
          </div>
        </div> <!-- page-default-banner-copy-container -->

      </article> <!-- page-default-banner-section -->


      <article id="page-contact-find-us-section">
        <div class="container-fluid">

          <div id="page-contact-find-us-title">
            <h2>You Can Find Us Here</h2>
          </div>

          <div id="hong-kong-map-container" class="hidden-xs hidden-sm">

            <div class="row">              
              <div class="col-md-8 map-col">
                <div id="hong-kong-map"></div>
              </div>
              <div class="col-md-4 text-col">
                <div class="page-contact-find-us-text-box-container">
                  <h2>Hong Kong</h2>
                  <div class="address">
                    <h6>Address</h6>
                    <p>2F-38, Hung Luen Road, Hung Hom Bay, Kowloon, Hung Hom, Hong Kong</p>
                    <p>(Located within Kerry Hotel, Hong Kong)</p>                
                  </div>
                  
                  <div class="email">
                    <h6>Email</h6>
                    <a href="mailto:hongkong@kafnu.com">hongkong@kafnu.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="taipei-map-container" class="hidden-xs hidden-sm">
            <div class="row">
              <div class="col-md-4 text-col hidden-xs hidden-sm">
                <div class="page-contact-find-us-text-box-container">
                  <h2>Taipei</h2>
                  <div class="address">
                    <h6>Address</h6>
                    <p>No. 101, Section 3, Minsheng East Road, Songshan District, Taipei City, Taiwan</p>
                  </div>
                  
                  <div class="email">
                    <h6>Email</h6>
                    <a href="mailto:taipei@kafnu.com">taipei@kafnu.com</a>
                  </div>
                </div>
              </div>
              <div class="col-md-8 map-col col-md-offset-4">
                <div id="taipei-map"></div>
              </div>        
            </div>
          </div>

        </div>


        <div id="hong-kong-map-container-mobile" class="visible-xs visible-sm">
          <div class="manic-expand-container mobile-open-version">
            <div class="scroll-target" data-value="hong-kong-map"></div>
            <div class="manic-expand-container-title">
                <h5>Hong Kong</h5> 
            </div>
            <div class="manic-expand-container-btn"></div>
            <div class="manic-expand-container-content">
              <div class="container-fluid reduce-padding">
                <div class="row">              
                  <div class="col-md-8 no-padding">
                    <div id="hong-kong-map-mobile"></div>
                  </div>
                  <div class="col-md-4 no-padding text-col">
                    <div class="page-contact-find-us-text-box-container">
                      <h2>Hong Kong</h2>
                      <div class="address">
                        <h6>Address</h6>
                        <p>2F-38, Hung Luen Road, Hung Hom Bay, Kowloon, Hung Hom, Hong Kong</p>
                        <p>(Located within Kerry Hotel, Hong Kong)</p>                
                      </div>
                      
                      <div class="email">
                        <h6>Email</h6>
                        <a href="mailto:hongkong@kafnu.com">hongkong@kafnu.com</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="taipei-map-container-mobile" class="visible-xs visible-sm">
         <div class="manic-expand-container mobile-open-version">
            <div class="scroll-target" data-value="taipei-map"></div>
            <div class="manic-expand-container-title">
                <h5>Taipei</h5> 
            </div>
            <div class="manic-expand-container-btn"></div>
            <div class="manic-expand-container-content">
              <div class="container-fluid reduce-padding">
                <div class="row">              
                  <div class="col-md-8 map-col">
                    <div id="taipei-map-mobile"></div>
                  </div>
                  <div class="col-md-4 text-col">
                    <div class="page-contact-find-us-text-box-container">
                      <h2>Taipei</h2>
                      <div class="address">
                        <h6>Address</h6>
                        <p>No. 101, Section 3, Minsheng East Road, Songshan District, Taipei City, Taiwan</p>
                      </div>
                      
                      <div class="email">
                        <h6>Email</h6>
                        <a href="mailto:taipei@kafnu.com">taipei@kafnu.com</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </article>


    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->

  <?php include "includes/footer_desktop.php"; ?>
  <?php include "includes/footer_mobile.php"; ?>

  <?php include "includes/script_contact.php" ?>

</body>
</html>
<?php
// saving captured output to file
file_put_contents('contact.html', ob_get_contents());
// end buffering and displaying page
ob_end_flush();
?>