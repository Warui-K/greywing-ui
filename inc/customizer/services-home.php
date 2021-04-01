<?php function gr_services_home_customize_section($wp_customize){
    //setting
    
        $wp_customize->add_setting('gr_h3_text_1',
        ['default' => 'Hospital planning, design, construction and development services']);
        $wp_customize->add_setting('gr_text_1',
        ['default' => 'We provide managerial and operational consulting services to healthcare facilities of all sizes.']);
        $wp_customize->add_setting('gr_icon_1',
        ['default' => 'bi bi-building']);
        $wp_customize->add_setting('gr_p_link_1',
        ['default' => '']);
        $wp_customize->add_setting('gr_h3_link_1',
        ['default' => '']);
    
        $wp_customize->add_setting('gr_h3_text_2',
        ['default' => 'Healthcare or Hospital strategy and policy development']
        );
        $wp_customize->add_setting('gr_text_2',
        ['default' => 'Healthcare strategic planning can create a direction for your practice and maximize your options for
        influencing your environment.']
        );
        $wp_customize->add_setting('gr_icon_2',
        ['default' => 'bi bi-shield-plus']);
        $wp_customize->add_setting('gr_p_link_2',
        ['default' => '']);
        $wp_customize->add_setting('gr_h3_link_2',
        ['default' => '']);
    
        $wp_customize->add_setting('gr_h3_text_3',
        ['default' => 'Comprehensive Strategic and Business Planning Services']
        );
        $wp_customize->add_setting('gr_text_3',
        ['default' => 'With our collaborative client-focused approach, national perspective, and analytic rigor, we can help
        you prepare for your success with range of planning services.']
        );
        $wp_customize->add_setting('gr_icon_3',
        ['default' => 'bi bi-layout-wtf']);
        $wp_customize->add_setting('gr_p_link_3',
        ['default' => '']);
        $wp_customize->add_setting('gr_h3_link_3',
        ['default' => '']);
    
        $wp_customize->add_setting('gr_h3_text_4',
        ['default' => 'Hospital Business Concepts & Models']);
        $wp_customize->add_setting('gr_text_4',
        ['default' => 'Our approach is comprehensive and thorough, providing you with specific implementable strategies to
        help you achieve success.']);
        $wp_customize->add_setting('gr_icon_4',
        ['default' => 'bi bi-hexagon-half']);
        $wp_customize->add_setting('gr_p_link_4',
        ['default' => '']);
        $wp_customize->add_setting('gr_h3_link_4',
        ['default' => '']);
    
        $wp_customize->add_setting('gr_h3_text_5',
        ['default' => 'Service Re-engineering & Turnarounds']
        );
        $wp_customize->add_setting('gr_text_5',
        ['default' => 'Our multidisciplinary team of strategic, financial, clinical, and operational leaders has experience
        turning around even the most troubled of hospitals.']
        );
        $wp_customize->add_setting('gr_icon_5',
        ['default' => 'bi bi-exclude']);
        $wp_customize->add_setting('gr_p_link_5',
        ['default' => '']);
        $wp_customize->add_setting('gr_h3_link_5',
        ['default' => '']);
    
        $wp_customize->add_setting('gr_h3_text_6',
        ['default' => 'Fund Syndication & Partner Search']
        );
        $wp_customize->add_setting('gr_text_6',
        ['default' => 'We will collaborate with you to help determine capital capacity, debt structure, and product mix within
        the context of your capital capacities or financial targets.']
        );
        $wp_customize->add_setting('gr_icon_6',
        ['default' => 'bi bi-diamond-half']);
        $wp_customize->add_setting('gr_p_link_6',
        ['default' => '']);
        $wp_customize->add_setting('gr_h3_link_6',
        ['default' => '']);
    
        $wp_customize->add_setting('gr_h3_text_7',
        ['default' => 'Public Healthcare Consulting']
        );
        $wp_customize->add_setting('gr_text_7',
        ['default' => 'Greywing has on its panel public and community health experts, 
        social scientists and statistical experts for resourcing research teams for various projects.']
        );
        $wp_customize->add_setting('gr_icon_7',
        ['default' => 'bi bi-shield-fill-plus']);
        $wp_customize->add_setting('gr_p_link_7',
        ['default' => '']);
        $wp_customize->add_setting('gr_h3_link_7',
        ['default' => '']);
        
    
        //Section
    $wp_customize->add_section('gr_services_home', 
    [
    'title' => __('Our Scope of services section', 'greywingwp'),
    'priority' => 250,
    'panel' => 'greywingwp'
    ]);
    
    //H3 Text 1 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_h3_text_1_input', 
        array(
        'label'    => __( 'H3 Text 1', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_text_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'H3 Text...', 'greywingwp' ),
        )
        
        )));
    //Text 1 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_text_1_input', 
        array(
        'label'    => __( 'Text 1', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_text_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Text 1...', 'greywingwp' ),
        )
        
    )));
    
    //Icon 1 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_icon_1_input', 
        array(
        'label'    => __( 'Icon 1 ', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_icon_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'fas fa-search-dollar', 'greywingwp' ),
        )
        
    )));
    
    //P Link 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_p_link_1_input', 
        array(
        'label'    => __( 'P Link 1 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_p_link_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
            //H3 Link 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_h3_link_1_input', 
        array(
        'label'    => __( 'H3 Link 1 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_link_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
    //H3 Text 2 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_h3_text_2_input', 
        array(
        'label'    => __( 'H3 Text 2', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_text_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'H3 Text 2...', 'greywingwp' ),
        )
        
        )));
    //Text 2 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_text_2_input', 
        array(
        'label'    => __( 'Text 2', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_text_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Text 2...', 'greywingwp' ),
        )
        
    )));
    
    //Icon 2 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_icon_2_input', 
        array(
        'label'    => __( 'Icon 2 ', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_icon_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'fas fa-search-dollar', 'greywingwp' ),
        )
        
    )));
    
    //P Link 2 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_p_link_2_input', 
        array(
        'label'    => __( 'P Link 2 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_p_link_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
            //H3 Link 2 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_h3_link_2_input', 
        array(
        'label'    => __( 'H3 Link 2 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_link_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
        //H3 Text 3 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_h3_text_3_input', 
        array(
        'label'    => __( 'H3 Text 3', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_text_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'H3 Text 3...', 'greywingwp' ),
        )
        
        )));
    //Text 3 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_text_3_input', 
        array(
        'label'    => __( 'Text 3', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_text_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Text 3...', 'greywingwp' ),
        )
        
    )));
    
    //Icon 3 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_icon_3_input', 
        array(
        'label'    => __( 'Icon 3 ', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_icon_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'fas fa-search-dollar', 'greywingwp' ),
        )
        
    )));
    
    //P Link 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_p_link_3_input', 
        array(
        'label'    => __( 'P Link 3 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_p_link_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
            //H3 Link 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_h3_link_3_input', 
        array(
        'label'    => __( 'H3 Link 3 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_link_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
        //H3 Text 4 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_h3_text_4_input', 
        array(
        'label'    => __( 'H3 Text 4', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_text_4',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'H3 Text 4...', 'greywingwp' ),
        )
        
        )));
    //Text 4 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_text_4_input', 
        array(
        'label'    => __( 'Text 4', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_text_4',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Text 4...', 'greywingwp' ),
        )
        
    )));
    
    //Icon 4 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_icon_4_input', 
        array(
        'label'    => __( 'Icon 4 ', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_icon_4',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'fas fa-search-dollar', 'greywingwp' ),
        )
        
    )));
    
    //P Link 4 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_p_link_4_input', 
        array(
        'label'    => __( 'P Link 4 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_p_link_4',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
        //H3 Link 4 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'gr_h3_link_4_input', 
            array(
            'label'    => __( 'H3 Link 4 URL', 'greywingwp' ),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_link_4',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'Insert URL...', 'greywingwp' ),
            )
            
            )));
        //H3 Text 5 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_h3_text_5_input', 
        array(
        'label'    => __( 'H3 Text 5', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_text_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'H3 Text 5...', 'greywingwp' ),
        )
        
        )));
    //Text 5 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_text_5_input', 
        array(
        'label'    => __( 'Text 5', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_text_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Text 5...', 'greywingwp' ),
        )
        
    )));
    
    //Icon 5 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_icon_5_input', 
        array(
        'label'    => __( 'Icon 5 ', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_icon_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'fas fa-search-dollar', 'greywingwp' ),
        )
        
    )));
    
    //P Link 5 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_p_link_5_input', 
        array(
        'label'    => __( 'P Link 5 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_p_link_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
            //H3 Link 5 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_h3_link_5_input', 
        array(
        'label'    => __( 'H3 Link 5 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_link_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
        //H3 Text 6 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_h3_text_6_input', 
        array(
        'label'    => __( 'H3 Text 6', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_text_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'H3 Text 6...', 'greywingwp' ),
        )
        
        )));
    //Text 6 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_text_6_input', 
        array(
        'label'    => __( 'Text 6', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_text_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Text 6...', 'greywingwp' ),
        )
        
    )));
    
    //Icon 6 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_icon_6_input', 
        array(
        'label'    => __( 'Icon 6 ', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_icon_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'fas fa-search-dollar', 'greywingwp' ),
        )
        
    )));
    
    //P Link 6 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_p_link_6_input', 
        array(
        'label'    => __( 'P Link 6 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_p_link_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
        //H3 Link 6 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_h3_link_6_input', 
        array(
        'label'    => __( 'H3 Link 6 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_link_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));

              //H3 Text 7 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'gr_h3_text_7_input', 
        array(
        'label'    => __( 'H3 Text 7', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_text_7',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'H3 Text 7...', 'greywingwp' ),
        )
        
        )));
    //Text 7 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_text_7_input', 
        array(
        'label'    => __( 'Text 7', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_text_7',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Text 7...', 'greywingwp' ),
        )
        
    )));
    
    //Icon 7 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'gr_icon_7_input', 
        array(
        'label'    => __( 'Icon 7 ', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_icon_7',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'fas fa-search-dollar', 'greywingwp' ),
        )
        
    )));
    
    //P Link 7 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_p_link_7_input', 
        array(
        'label'    => __( 'P Link 7 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_p_link_7',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
        //H3 Link 7 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'gr_h3_link_7_input', 
        array(
        'label'    => __( 'H3 Link 7 URL', 'greywingwp' ),
        'section'  => 'gr_services_home',
        'settings' => 'gr_h3_link_7',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'Insert URL...', 'greywingwp' ),
        )
        
        )));
    
    }