<?php function gr_services_intro_customize_section($wp_customize)
{
    //setting


    $wp_customize->add_setting(
        'gr_service_bg_main',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_service_text_1',
        ['default' => 'The key to public Health Consulting']
    );
    $wp_customize->add_setting(
        'gr_service_link_1',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_service_bg_1',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_service_text_2',
        ['default' => 'Medical Equipment Supplies']
    );
    $wp_customize->add_setting(
        'gr_service_link_2',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_service_bg_2',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_service_bg_about',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_about_text',
        ['default' => 'Greywing Hospital and Healthcare consultants are well endowed with technical expertise and experience to comprehensively assimilate and handle projects in Hospital and Healthcare activities from conceptualization, execution, operational management to turn key project management.']
    );
    $wp_customize->add_setting(
        'gr_about_link',
        ['default' => '']
    );


     
    //Section
    $wp_customize->add_section(
        'gr_services_intro',
        [
            'title' => __('Services Intro', 'greywingwp'),
            'priority' => 250,
            'panel' => 'greywingwp'
            ]
    );
        

    //Service Intro
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'gr_service_bg_main_input',
            array(
                'label' => __('Background Image Main', 'greywingwp'),
                'section' => 'gr_services_intro',
                'settings' => 'gr_service_bg_main'
            )
        )
    );
    
        
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'gr_service_bg_1_input',
            array(
                        'label' => __('Background Image 1', 'greywingwp'),
                        'section' => 'gr_services_intro',
                        'settings' => 'gr_service_bg_1'
                    )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_service_text_1_input',
            array(
                'label'    => __('Service Text 1', 'greywingwp'),
                'section'  => 'gr_services_intro',
                'settings' => 'gr_service_text_1',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Service Text...', 'greywingwp'),
                )
                
                )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_service_link_1_input',
            array(
                    'label'    => __('Service Link 1', 'greywingwp'),
                    'section'  => 'gr_services_intro',
                    'settings' => 'gr_service_link_1',
                    'type' => 'text',
                    'input_attrs' => array(
                        'placeholder' => __('Service Link...', 'greywingwp'),
                    )
                    
                    )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'gr_service_bg_2_input',
            array(
                        'label' => __('Background Image 2', 'greywingwp'),
                        'section' => 'gr_services_intro',
                        'settings' => 'gr_service_bg_2'
                    )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_service_text_2_input',
            array(
                        'label'    => __('Service Text 2', 'greywingwp'),
                        'section'  => 'gr_services_intro',
                        'settings' => 'gr_service_text_2',
                        'type' => 'text',
                        'input_attrs' => array(
                            'placeholder' => __('Service Text...', 'greywingwp'),
                        )
                        
                        )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_service_link_2_input',
            array(
                            'label'    => __('Service Link 2', 'greywingwp'),
                            'section'  => 'gr_services_intro',
                            'settings' => 'gr_service_link_2',
                            'type' => 'text',
                            'input_attrs' => array(
                                'placeholder' => __('Service Link...', 'greywingwp'),
                            )
                            
                            )
        )
    );
        




    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'gr_service_bg_about_input',
            array(
                                        'label' => __('Background Image about', 'greywingwp'),
                                        'section' => 'gr_services_intro',
                                        'settings' => 'gr_service_bg_about'
                                    )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_about_text_input',
            array(
                                        'label'    => __('About Text', 'greywingwp'),
                                        'section'  => 'gr_services_intro',
                                        'settings' => 'gr_about_text',
                                        'type' => 'text',
                                        'input_attrs' => array(
                                            'placeholder' => __('About Text...', 'greywingwp'),
                                        )
                                        
                                        )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_about_link_input',
            array(
                                        'label'    => __('About Link', 'greywingwp'),
                                        'section'  => 'gr_services_intro',
                                        'settings' => 'gr_about_link',
                                        'type' => 'text',
                                        'input_attrs' => array(
                                            'placeholder' => __('About Link...', 'greywingwp'),
                                        )
                                        
                                        )
        )
    );
}
