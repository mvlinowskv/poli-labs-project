<!DOCTYPE html>
<html lang="en">
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

  <?php wp_head();?>
</head>
<body>

<!-- Fixed navbar -->
  <nav class="nav" id="mainNav">
      <div class="nav__container">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">
        <?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
<img src="<?php echo $image[0]; ?>" alt="" class="logo">
        </a>
     
          
          <?php
            wp_nav_menu( array(
              'menu'              =>  'main menu',
              'theme_location'    => 'primary',
              'container'         => 'div',
              'container_class'   => 'nav__menu',
              'container_id'      => 'navbarResponsive',
              'menu_class'        => 'nav__menu__ul',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            ) );
          ?>


<button class="nav__btn">
  <svg width="30" fill="currentColor" height="30" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100 80">
      <g>
        <path class="line line-1" d="M5,10h90v10H5V10z"></path>
        <path class="line line-2" d="M5,35h90v10H5V35z"></path>
        <path class="line line-3" d="M5,60h90v10H5V60z"></path>
      </g>
    </svg>
</button>
      </div>
    </nav>