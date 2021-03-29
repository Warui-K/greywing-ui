<?php function gr_shop_slider_customize_section($wp_customize){
//setting

    $wp_customize->add_setting('gr_shop_slider_1',
    ['default' => '']);
    $wp_customize->add_setting('gr_shop_slider_h3_1',
    ['default' => 'Item 1']);
    $wp_customize->add_setting('gr_shop_slider_price_1',
    ['default' => '2000']);
    $wp_customize->add_setting('gr_shop_slider_link_1',
    ['default' => '']);

    $wp_customize->add_setting('gr_shop_slider_2',
    ['default' => '']);
    $wp_customize->add_setting('gr_shop_slider_h3_2',
    ['default' => 'Item 2']);
    $wp_customize->add_setting('gr_shop_slider_price_2',
    ['default' => '2000']);
    $wp_customize->add_setting('gr_shop_slider_link_2',
    ['default' => '']);

    $wp_customize->add_setting('gr_shop_slider_3',
    ['default' => '']);
    $wp_customize->add_setting('gr_shop_slider_h3_3',
    ['default' => 'Item 3']);
    $wp_customize->add_setting('gr_shop_slider_price_3',
    ['default' => '2000']);
    $wp_customize->add_setting('gr_shop_slider_link_3',
    ['default' => '']);

    $wp_customize->add_setting('gr_shop_slider_4',
    ['default' => '']);
    $wp_customize->add_setting('gr_shop_slider_h3_4',
    ['default' => 'Item 4']);
    $wp_customize->add_setting('gr_shop_slider_price_4',
    ['default' => '2000']);
    $wp_customize->add_setting('gr_shop_slider_link_4',
    ['default' => '']);

    $wp_customize->add_setting('gr_goto_shop_text', 
    ['default' => 'Shop for medical and laboratory equipment and have them delivered to you']);
    $wp_customize->add_setting('gr_goto_shop_link',
    ['default' => '']);
    $wp_customize->add_setting('gr_goto_shop_bg_img',
    ['default' => '']);
    

    //Section
$wp_customize->add_section('gr_shop_slider', 
[
'title' => __('Home Shop Slider Section', 'greywingwp'),
'priority' => 270,
'panel' => 'greywingwp'
]);

//Shop Slider 1 Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
    $wp_customize,
    'gr_shop_slider_1_input', 
    array(
    'label'    => __( 'Shop Slider 1', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_1',
    )));

//Shop Slider 1 Header Control
$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'gr_shop_slider_h3_1_input', 
    array(
    'label'    => __( 'Shop Slider 1 Heading', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_h3_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __( 'Header Text...', 'greywingwp' ),
    )
    
)));

//Shop Slider 1 Price Control
$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'gr_shop_slider_price_1_input', 
    array(
    'label'    => __( 'Shop Slider 1 Price ', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_price_1',
    'type' => 'Text',
    'input_attrs' => array(
        'placeholder' => __( 'Price...', 'greywingwp' ),
    )
    
)));

//Shop Slider 1 URL Control
$wp_customize->add_control(
    new Wp_Customize_Control(
    $wp_customize,
    'gr_shop_slider_link_1_input', 
    array(
    'label'    => __( 'Shop Slider 1 URL', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_link_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __( 'Insert URL...', 'greywingwp' ),
    )
    
    )));

//Shop Slider 2 Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
    $wp_customize,
    'gr_shop_slider_2_input', 
    array(
    'label'    => __( 'Shop Slider 2', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_2',
    )));

//Shop Slider 2 Header Control
$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'gr_shop_slider_h3_2_input', 
    array(
    'label'    => __( 'Shop Slider 2 Heading', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_h3_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __( 'Header Text...', 'greywingwp' ),
    )
    
)));

//Shop Slider 2 Price Control
$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'gr_shop_slider_price_2_input', 
    array(
    'label'    => __( 'Shop Slider 2 Price ', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_price_2',
    'type' => 'Text',
    'input_attrs' => array(
        'placeholder' => __( 'Price...', 'greywingwp' ),
    )
    
)));

//Shop Slider 2 URL Control
$wp_customize->add_control(
    new Wp_Customize_Control(
    $wp_customize,
    'gr_shop_slider_link_2_input', 
    array(
    'label'    => __( 'Shop Slider 2 URL', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_link_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __( 'Insert URL...', 'greywingwp' ),
    )
    
    )));


//Shop Slider 3 Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
    $wp_customize,
    'gr_shop_slider_3_input', 
    array(
    'label'    => __( 'Shop Slider 3', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_3',
    )));

//Shop Slider 3 Header Control
$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'gr_shop_slider_h3_3_input', 
    array(
    'label'    => __( 'Shop Slider 3 Heading', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_h3_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __( 'Header Text...', 'greywingwp' ),
    )
    
)));

//Shop Slider 3 Price Control
$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'gr_shop_slider_price_3_input', 
    array(
    'label'    => __( 'Shop Slider 3 Price ', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_price_3',
    'type' => 'Text',
    'input_attrs' => array(
        'placeholder' => __( 'Price...', 'greywingwp' ),
    )
    
)));

//Shop Slider 3 URL Control
$wp_customize->add_control(
    new Wp_Customize_Control(
    $wp_customize,
    'gr_shop_slider_link_3_input', 
    array(
    'label'    => __( 'Shop Slider 3 URL', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_link_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __( 'Insert URL...', 'greywingwp' ),
    )
    
    )));

    //Shop Slider 4 Control
$wp_customize->add_control(
    new WP_Customize_Image_Control(
    $wp_customize,
    'gr_shop_slider_4_input', 
    array(
    'label'    => __( 'Shop Slider 4', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_4',
    )));

//Shop Slider 4 Header Control
$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'gr_shop_slider_h3_4_input', 
    array(
    'label'    => __( 'Shop Slider 4 Heading', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_h3_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __( 'Header Text...', 'greywingwp' ),
    )
    
)));

//Shop Slider 4 Price Control
$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
    'gr_shop_slider_price_4_input', 
    array(
    'label'    => __( 'Shop Slider 4 Price ', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_price_4',
    'type' => 'Text',
    'input_attrs' => array(
        'placeholder' => __( 'Price...', 'greywingwp' ),
    )
    
)));

//Shop Slider 4 URL Control
$wp_customize->add_control(
    new Wp_Customize_Control(
    $wp_customize,
    'gr_shop_slider_link_4_input', 
    array(
    'label'    => __( 'Shop Slider 4 URL', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_shop_slider_link_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __( 'Insert URL...', 'greywingwp' ),
    )
    
    )));

    //Goto Shop text
    $wp_customize->add_control(
        new wp_Customize_Control(
            $wp_customize,
            'gr_goto_shop_text_input',
            array(
                'label' => __('Goto shop text', 'greywingwp'),
                'section' => 'gr_shop_slider',
                'settings' => 'gr_goto_shop_text',
                'type' => 'text',
                'input attrs' => array(
                    'placeholder' => __('Insert text', 'greywingwp'),
                )
            )
        )
                );

//Goto Shop link
$wp_customize->add_control(
    new wp_Customize_Control(
        $wp_customize,
        'gr_goto_shop_link_input',
        array(
            'label' => __('Goto shop link', 'greywingwp'),
            'section' => 'gr_shop_slider',
            'settings' => 'gr_goto_shop_link',
            'type' => 'text',
            'input attrs' => array(
                'placeholder' => __('Insert URL', 'greywingwp'),
            )
        )
    )
            );

            //Goto Shop Bg Image
$wp_customize->add_control(
    new WP_Customize_Image_Control(
    $wp_customize,
    'gr_goto_shop_bg_img_input', 
    array(
    'label'    => __( 'Goto shop bg image', 'greywingwp' ),
    'section'  => 'gr_shop_slider',
    'settings' => 'gr_goto_shop_bg_img',
    )));
}