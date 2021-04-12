<?php function gr_whyus_customize_section($wp_customize)
{
    //Settings


    
    $wp_customize->add_setting(
        'gr_whyus_1',
        ['default' => 'We assist our clients in the Healthcare as well as Hospital sector with a wide array of services and products.']
    );
    

    
    $wp_customize->add_setting(
        'gr_whyus_2',
        ['default' => 'We build a healthcare and Hospital setup that ensures higher patient safety, cost-effective and financially viable for all the stakeholders.']
    );



    $wp_customize->add_setting(
        'gr_whyus_3',
        ['default' => 'We provide superior healthcare consultancy solutions which contribute effectively to better-quality healthcare standards by organizations in east and central Africa.']
    );


    //Section
    $wp_customize->add_section(
        'gr_whyus',
        [
        'title' => __('Why Us Home Section', 'greywingwp'),
        'priority' => 290,
        'panel' => 'greywingwp'
    ]
    );

  
    //Text 1 control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_whyus_1_input',
            array(
                'label' => __('Text 1', 'greywingwp'),
                'section' => 'gr_whyus',
                'settings' => 'gr_whyus_1',
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
                'gr_whyus_2_input',
                array(
                    'label' => __('Text 2', 'greywingwp'),
                    'section' => 'gr_whyus',
                    'settings' => 'gr_whyus_2',
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
                'gr_whyus_3_input',
                array(
                    'label' => __('Text 3', 'greywingwp'),
                    'section' => 'gr_whyus',
                    'settings' => 'gr_whyus_3',
                    'type' => 'text',
                    'input_attrs' => array(
                        'placeholder' => __('Text 3', 'greywingwp'),
                    )
                )
            )
    );
}
