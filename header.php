<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    

    <!-- WP head -->
    <?php
    wp_head();
    ?>
    

    
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="col-md-12" style="background-color:white;color:black;font-size:24px;text-align:center"><?php echo get_bloginfo('name'); ?></div>
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?php echo  site_url() ?>" class="logo">
                    <?php if(function_exists('the_custom_logo')) {
                      $custom_logo_id = get_theme_mod('custom_logo');
                      $logo = wp_get_attachment_image_src($custom_logo_id);
                     
                      
                    } ?>
                        <?php /* echo"<img src='", get_template_directory_uri(), "/assets/images/logo.png' alt='' />"; */ ?>
                        <img src="<?php echo $logo[0] ?>" alt="" />
                    </a>
                    <!-- *****  Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <!-- <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div> -->
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <?php
                      wp_nav_menu(
                          array(
                            'menu' => "primary",
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="nav">%3$s</ul>'
                          )
                      );
                    ?>
                    <!-- <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="browse.html">Browse</a></li>
                        <li><a href="details.html">Details</a></li>
                        <li><a href="streams.html">Streams</a></li>
                        <li><a href="profile.html">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>    -->
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->