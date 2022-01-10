<!DOCTYPE html>
<!-- Added a wordpress language attribute support for SEO/Visitors to know what language to expect -->
<html <?php language_attributes() ?>>
    <head>
        <!-- Gives website a charset of UTF-8 for nation charset used -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For mobile responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <?php wp_head(); ?>
    </head>
    <!-- Sets dynamic classes to the body tag depending on the page you are visiting. We can use the class names to style a particular page a certain way based on the page type in WP-->
    <body <?php body_class(); ?>>

    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url('/') ?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>