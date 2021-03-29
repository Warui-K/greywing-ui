<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
<title>Greywing &mdash; A Healing Environment</title>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description');?>">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <?php wp_head();?>

</head>
<body <?php body_class();?>>
<div class="site-wrap">
    <div class="site-navbar py-2">
      <?php get_search_form();?>
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a class="navbar-brand" class="d-inline-block align-top">
                <?php
                if(has_custom_logo( )){
                  the_custom_logo( );
                }
                else{
                  ?>
                  <a class="navbar-brand" href="<?php echo esc_url(home_url( '/'));?>" class="d-inline-block align-top">
                  <?php bloginfo('name');?></a>
                  <?php
                }
                ?>
            
              </a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">

     <ul class="site-menu js-clone-nav d-none d-lg-block">
                    
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li class="has-children">
                  <a href="#">Services</a>
                  <ul class="dropdown">
                    <li><a href="#">Healthcare Consultancy</a></li>
                    <li><a href="#">PPublic Healthcare Consulting</a></li>

                    <li><a href="#">Healthcare Development Services</a></li>
                    <li><a href="#">Medical Equipment planning, procurement &amp; Supplies</a></li>
                  </ul>
                </li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li> 
              </ul> 
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>