<?php

function gr_customize_register($wp_customize){
    //Add a panel on Customizer

    $wp_customize->add_panel('greywingwp',
    [
        'title' => __('Greywing customizer settings', 'greywingwp'),
        'description' => '<p>Greywing Customizer Settings</p>',
        'priority' => 160
    ]);

    gr_slider_customize_section($wp_customize);
    gr_services_home_customize_section($wp_customize);
    gr_shop_slider_customize_section($wp_customize);
    gr_testimonials_customize_section($wp_customize);
    gr_whyus_customize_section($wp_customize);




    

}