    <?php function gr_services_home_customize_section($wp_customize)
{
    //setting
        
    $wp_customize->add_setting(
        'gr_h3_text_1',
        ['default' => 'Healthcare Management Consultancy Services']
    );
    $wp_customize->add_setting(
        'gr_text_1',
        ['default' => 'We bring a panel of experienced professionals who have extensive experience in driving strategies for hospital internal branding and brand visibility']
    );
    $wp_customize->add_setting(
        'gr_icon_1',
        ['default' => 'bi bi-layout-wtf']
    );
    $wp_customize->add_setting(
        'gr_h3_link_1',
        ['default' => '']
    );

        
    $wp_customize->add_setting(
        'gr_h3_text_2',
        ['default' => 'Hospital Development Services']
    );
    $wp_customize->add_setting(
        'gr_text_2',
        ['default' => 'Our goal is to deliver a “one-stop shop” approach in hospital planning, development and management by incorporating the latest changes in healthcare']
    );
    $wp_customize->add_setting(
        'gr_icon_2',
        ['default' => 'bi bi-building']
    );
    $wp_customize->add_setting(
        'gr_h3_link_2',
        ['default' => '']
    );
    
    $wp_customize->add_setting(
        'gr_h3_text_3',
        ['default' => 'Public Health Projects Consultancy ']
    );
    $wp_customize->add_setting(
        'gr_text_3',
        ['default' => 'Greywing consultants works alongside businesses, government agencies, communities, and health care facilities to help improve the overall health of the population']
    );
    $wp_customize->add_setting(
        'gr_icon_3',
        ['default' => 'bi bi-shield-fill-plus']
    );
    $wp_customize->add_setting(
        'gr_h3_link_3',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_h3_text_4',
        ['default' => 'Medical Equipment Planning and Supplies']
    );
    $wp_customize->add_setting(
        'gr_text_4',
        ['default' => 'We’re making it easier and more affordable for every medical facility to have the very best equipment, supplies, and service']
    );
    $wp_customize->add_setting(
        'gr_icon_4',
        ['default' => 'bi bi-gem']
    );
    $wp_customize->add_setting(
        'gr_h3_link_4',
        ['default' => '']
    );



          
    
     
    //Section
    $wp_customize->add_section(
        'gr_services_home',
        [
        'title' => __('Our Scope of services section', 'greywingwp'),
        'priority' => 250,
        'panel' => 'greywingwp'
        ]
    );
    
  
    
                
    //H3 Text 1 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_h3_text_1_input',
            array(
            'label'    => __('H3 Text 1', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_text_1',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('H3 Text...', 'greywingwp'),
            )
            
            )
        )
    );
    //Text 1 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_text_1_input',
            array(
            'label'    => __('Text 1', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_text_1',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('Text 1...', 'greywingwp'),
            )
            
        )
        )
    );
        
    //Icon 1 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_icon_1_input',
            array(
            'label'    => __('Icon 1 ', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_icon_1',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('bi bi-building', 'greywingwp'),
            )
            
        )
        )
    );
        

    //H3 Link 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
            $wp_customize,
            'gr_h3_link_1_input',
            array(
            'label'    => __('H3 Link 1 URL', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_link_1',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('Insert URL...', 'greywingwp'),
            )
            
            )
        )
    );
        
    //H3 Text 2 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_h3_text_2_input',
            array(
            'label'    => __('H3 Text 2', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_text_2',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('H3 Text 2...', 'greywingwp'),
            )
            
            )
        )
    );
    //Text 2 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_text_2_input',
            array(
            'label'    => __('Text 2', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_text_2',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('Text 2...', 'greywingwp'),
            )
            
        )
        )
    );
        
    //Icon 2 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_icon_2_input',
            array(
            'label'    => __('Icon 2 ', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_icon_2',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('bi bi-shield-plus', 'greywingwp'),
            )
            
        )
        )
    );
        

    //H3 Link 2 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
            $wp_customize,
            'gr_h3_link_2_input',
            array(
            'label'    => __('H3 Link 2 URL', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_link_2',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('Insert URL...', 'greywingwp'),
            )
            
            )
        )
    );
        
    //H3 Text 3 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_h3_text_3_input',
            array(
            'label'    => __('H3 Text 3', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_text_3',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('H3 Text 3...', 'greywingwp'),
            )
            
            )
        )
    );
    //Text 3 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_text_3_input',
            array(
            'label'    => __('Text 3', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_text_3',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('Text 3...', 'greywingwp'),
            )
            
        )
        )
    );
        
    //Icon 3 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_icon_3_input',
            array(
            'label'    => __('Icon 3 ', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_icon_3',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('bi bi-layout-wtf', 'greywingwp'),
            )
            
        )
        )
    );
        

    //H3 Link 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
            $wp_customize,
            'gr_h3_link_3_input',
            array(
            'label'    => __('H3 Link 3 URL', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_link_3',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('Insert URL...', 'greywingwp'),
            )
            
            )
        )
    );


      //H3 Text 4 Control
      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_h3_text_4_input',
            array(
            'label'    => __('H3 Text 4', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_text_4',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('H3 Text 3...', 'greywingwp'),
            )
            
            )
        )
    );
    //Text 4 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_text_4_input',
            array(
            'label'    => __('Text 4', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_text_4',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('Text 3...', 'greywingwp'),
            )
            
        )
        )
    );
        
    //Icon 4 Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_icon_4_input',
            array(
            'label'    => __('Icon 4 ', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_icon_4',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('bi bi-layout-wtf', 'greywingwp'),
            )
            
        )
        )
    );
        

    //H3 Link 4 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
            $wp_customize,
            'gr_h3_link_4_input',
            array(
            'label'    => __('H3 Link 4 URL', 'greywingwp'),
            'section'  => 'gr_services_home',
            'settings' => 'gr_h3_link_4',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __('Insert URL...', 'greywingwp'),
            )
            
            )
        )
    );
        
}
