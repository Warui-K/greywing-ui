<?php function gr_slider_customize_section($wp_customize)
{
    //setting

    $wp_customize->add_setting(
        'gr_slider_1',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_slider_h_1',
        ['default' => 'Healthcare Management Consultancy Services']
    );
    $wp_customize->add_setting(
        'gr_slider_t_1',
        ['default' => 'Build a healthcare setup that ensures higher patient safety, cost-effective and
    financially viability for all the stakeholders']
    );
    $wp_customize->add_setting(
        'gr_slider_l_1',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_slider_2',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_slider_h_2',
        ['default' => 'Hospital Development Services']
    );
    $wp_customize->add_setting(
        'gr_slider_t_2',
        ['default' => 'One of our key areas of focus is facility planning, design, construction and development']
    );
    $wp_customize->add_setting(
        'gr_slider_l_2',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_slider_3',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_slider_h_3',
        ['default' => 'Public Healthcare Consulting']
    );
    $wp_customize->add_setting(
        'gr_slider_t_3',
        ['default' => 'We help our public health and healthcare clients better understand their organization or the stakeholder organizations with which they work.
    ']
    );
    $wp_customize->add_setting(
        'gr_slider_l_3',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_slider_4',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_slider_h_4',
        ['default' => 'Medical Equipment Supplies']
    );
    $wp_customize->add_setting(
        'gr_slider_t_4',
        ['default' => 'Shop for high quality products at the most affordable and sustainable prices
    ']
    );
    $wp_customize->add_setting(
        'gr_slider_l_4',
        ['default' => '']
    );
    

    //Section
    $wp_customize->add_section(
        'gr_slider',
        [
'title' => __('Homepage Slider Section', 'greywingwp'),
'priority' => 250,
'panel' => 'greywingwp'
]
    );

    //Slider 1 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_slider_1_input',
        array(
    'label'    => __('Slider 1', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_1',
    )
    )
    );

    //Slider 1 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_slider_h_1_input',
        array(
    'label'    => __('Slider 1 Heading', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_h_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );

    //Slider 1 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_slider_t_1_input',
        array(
    'label'    => __('Slider 1 Text ', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_t_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'greywingwp'),
    )
    
)
    )
    );

    //Slider 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_slider_l_1_input',
        array(
    'label'    => __('Slider 1 URL', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_l_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );

    //Slider 2 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_slider_2_input',
        array(
    'label'    => __('Slider 2', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_2',
    )
    )
    );

    //Slider 2 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_slider_h_2_input',
        array(
    'label'    => __('Slider 2 Heading', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_h_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );

    //Slider 2 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_slider_t_2_input',
        array(
    'label'    => __('Slider 2 Text ', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_t_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'greywingwp'),
    )
    
)
    )
    );


    //Slider 2 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_slider_l_2_input',
        array(
    'label'    => __('Slider 2 URL', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_l_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );

    //Slider 3 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_slider_3_input',
        array(
    'label'    => __('Slider 3', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_3',
    )
    )
    );

    //Slider 3 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_slider_h_3_input',
        array(
    'label'    => __('Slider 3 Heading', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_h_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );

    //Slider 3 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_slider_t_3_input',
        array(
    'label'    => __('Slider 3 Text ', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_t_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'greywingwp'),
    )
    
)
    )
    );


    //Slider 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_slider_l_3_input',
        array(
    'label'    => __('Slider 3 URL', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_l_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );


    //Slider 4 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_slider_4_input',
        array(
    'label'    => __('Slider 4', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_4',
    )
    )
    );

    //Slider 4 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_slider_h_4_input',
        array(
    'label'    => __('Slider 4 Heading', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_h_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'greywingwp'),
    )
    
)
    )
    );

    //Slider 4 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_slider_t_4_input',
        array(
    'label'    => __('Slider 4 Text ', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_t_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'greywingwp'),
    )
    
)
    )
    );


    //Slider 4 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_slider_l_4_input',
        array(
    'label'    => __('Slider 4 URL', 'greywingwp'),
    'section'  => 'gr_slider',
    'settings' => 'gr_slider_l_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'greywingwp'),
    )
    
    )
    )
    );
}
