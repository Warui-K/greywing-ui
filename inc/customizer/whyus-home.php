<?php function gr_whyus_customize_section($wp_customize){
    //Settings


    
    $wp_customize->add_setting('gr_text_1',
    ['default' => 'We assist our clients in the Healthcare as well as Hospital sector with a wide array of services and products.']);
    

    
    $wp_customize->add_setting('gr_text_2',
    ['default' => 'We build a healthcare and Hospital setup that ensures higher patient safety, cost-effective and financially viable for all the stakeholders.']);



    $wp_customize->add_setting('gr_text_3',
    ['default' => 'We provide superior healthcare consultancy solutions which contribute effectively to better-quality healthcare standards by organizations in east and central Africa.']);


    //Section
    $wp_customize->add_section('gr_text',
    [
        'title' => __('Why Us Home Section', 'greywingwp'),
        'priority' => 290,
        'panel' => 'greywingwp'
    ]);

  
    //Text 1 control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_text_1_input',
            array(
                'label' => __('Text 1', 'greywingwp'),
                'section' => 'gr_text',
                'settings' => 'gr_text_1',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Text 1', 'greywingwp'),
                )
            )
        )
                );

        //Text 2 control
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'gr_text_2_input',
                array(
                    'label' => __('Text 2', 'greywingwp'),
                    'section' => 'gr_text',
                    'settings' => 'gr_text_2',
                    'type' => 'text',
                    'input_attrs' => array(
                        'placeholder' => __('Text 2', 'greywingwp'),
                    )
                )
            )
                    );
          //Text 3 control
          $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'gr_text_3_input',
                array(
                    'label' => __('Text 3', 'greywingwp'),
                    'section' => 'gr_text',
                    'settings' => 'gr_text_3',
                    'type' => 'text',
                    'input_attrs' => array(
                        'placeholder' => __('Text 3', 'greywingwp'),
                    )
                )
            )
                    );
}