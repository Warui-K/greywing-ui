<?php function gr_shop_image_customize_section($wp_customize)
{
    //setting

    $wp_customize->add_setting(
        'gr_shop_image_1',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_shop_image_h3_1',
        ['default' => 'Item 1']
    );
   
    $wp_customize->add_setting(
        'gr_shop_image_link_1',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_shop_image_2',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_shop_image_h3_2',
        ['default' => 'Item 2']
    );
 
    $wp_customize->add_setting(
        'gr_shop_image_link_2',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_shop_image_3',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_shop_image_h3_3',
        ['default' => 'Item 3']
    );
  
    $wp_customize->add_setting(
        'gr_shop_image_link_3',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_shop_image_4',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_shop_image_h3_4',
        ['default' => 'Item 4']
    );
 
    $wp_customize->add_setting(
        'gr_shop_image_link_4',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_shop_image_5',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_shop_image_h3_5',
        ['default' => 'Item 5']
    );
 
    $wp_customize->add_setting(
        'gr_shop_image_link_5',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_shop_image_6',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_shop_image_h3_6',
        ['default' => 'Item 6']
    );
 
    $wp_customize->add_setting(
        'gr_shop_image_link_6',
        ['default' => '']
    );

    

    //Section
    $wp_customize->add_section(
        'gr_shop_image',
        [
'title' => __('Homapage Shop Section', 'greywingwp'),
'priority' => 270,
'panel' => 'greywingwp'
]
    );

    //Shop image 1 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_shop_image_1_input',
        array(
    'label'    => __('Shop image 1', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_1',
    )
    )
    );

    //Shop image 1 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_shop_image_h3_1_input',
        array(
    'label'    => __('Shop image 1 Heading', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_h3_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );


    //Shop image 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_shop_image_link_1_input',
        array(
    'label'    => __('Shop image 1 URL', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_link_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );

    //Shop image 2 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_shop_image_2_input',
        array(
    'label'    => __('Shop image 2', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_2',
    )
    )
    );

    //Shop image 2 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_shop_image_h3_2_input',
        array(
    'label'    => __('Shop image 2 Heading', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_h3_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );



    //Shop image 2 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_shop_image_link_2_input',
        array(
    'label'    => __('Shop image 2 URL', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_link_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );


    //Shop image 3 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_shop_image_3_input',
        array(
    'label'    => __('Shop image 3', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_3',
    )
    )
    );

    //Shop image 3 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_shop_image_h3_3_input',
        array(
    'label'    => __('Shop image 3 Heading', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_h3_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );


    //Shop image 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_shop_image_link_3_input',
        array(
    'label'    => __('Shop image 3 URL', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_link_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );

    //Shop image 4 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_shop_image_4_input',
        array(
    'label'    => __('Shop image 4', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_4',
    )
    )
    );

    //Shop image 4 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_shop_image_h3_4_input',
        array(
    'label'    => __('Shop image 4 Heading', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_h3_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );

    //Shop image 4 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_shop_image_link_4_input',
        array(
    'label'    => __('Shop image 4 URL', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_link_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );


     //Shop image 5 Control
     $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_shop_image_5_input',
        array(
    'label'    => __('Shop image 5', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_5',
    )
    )
    );

    //Shop image 5 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_shop_image_h3_5_input',
        array(
    'label'    => __('Shop image 5 Heading', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_h3_5',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );

    //Shop image 5 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_shop_image_link_5_input',
        array(
    'label'    => __('Shop image 5 URL', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_link_5',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );

     //Shop image 6 Control
     $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_shop_image_6_input',
        array(
    'label'    => __('Shop image 6', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_6',
    )
    )
    );

    //Shop image 6 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_shop_image_h3_6_input',
        array(
    'label'    => __('Shop image 6 Heading', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_h3_6',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );

    //Shop image 6 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_shop_image_link_6_input',
        array(
    'label'    => __('Shop image 6 URL', 'greywingwp'),
    'section'  => 'gr_shop_image',
    'settings' => 'gr_shop_image_link_6',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );
   
}
