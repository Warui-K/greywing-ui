<?php
//Setup
define('GR_DEV_MODE', true);

//Includes
include(get_theme_file_path( '/inc/enqueue.php' ));
include(get_theme_file_path( '/inc/setup.php' ));
include(get_theme_file_path('./inc/theme-customizer.php'));
include(get_theme_file_path('./inc/customizer/slider.php'));
include(get_theme_file_path('./inc/customizer/services-home.php'));
include(get_theme_file_path('./inc/customizer/shop-slider.php'));
include(get_theme_file_path('./inc/customizer/testimonials-home.php'));
include(get_theme_file_path('./inc/customizer/whyus-home.php'));





//Hooks
add_action( 'wp_enqueue_scripts', 'gr_enqueue' );
add_action( 'after_setup_theme', 'gr_setup_theme' );
add_action('customize_register', 'gr_customize_register');

