<?php

function gr_setup_theme(){

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'greywingwp')
    ));

  
    register_nav_menus(array(
        'footer_menu' => __('Footer Menu', 'greywingwp')
    ));

    


    //Support for HTML5
    add_theme_support( 'HTML5', array(
        'search-form', 'comment-list'
    ) );

    //Support for Logo
    add_theme_support( 'custom-logo');
//Support for RSS Feeds
add_theme_support('automatic-feed-links');


}

