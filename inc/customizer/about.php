<?php function gr_about_page_customize($wp_customize)
{
    $wp_customize->add_setting(
        'gr_bg_image',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_about_text_main',
        ['default' => 'A limited company based in Nairobi, Kenya that provides professionally managed consultancy
organization in hospitals and the healthcare sector.']
    );
    $wp_customize->add_setting(
        'gr_core_focus_image',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_core_focus_1',
        ['default' => 'Hospital planning, Healthcare facilities planning and design, Hospital architecture, and hospital project management.']
    );

    $wp_customize->add_setting(
        'gr_core_focus_2',
        ['default' => 'Healthcare facilities audits, market studies, commissioning of hospitals, re-engineering process, quality accreditations.']
    );

    $wp_customize->add_setting(
        'gr_core_focus_3',
        ['default' => 'Human resources management contracts, turnkey operations, hospital management, feasibility & business models, hospital financial management, supply chain management.']
    );

    $wp_customize->add_setting(
        'gr_core_focus_4',
        ['default' => 'Medical Equipment planning, procurement and Supplies, turnaround strategist and public and private partnership.']
    );

    $wp_customize->add_setting(
        'gr_vision_text',
        ['default' => 'To be a leader in providing superior healthcare consultancy solutions which contribute effectively to better-quality healthcare standards by organizations in east and central Africa.']
    );

    $wp_customize->add_setting(
        'gr_vision_image',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'gr_values_text',
        ['default' => 'Our core values are the principles that guide us in what we do and help shape our culture. We are passionate about living these values, which is proven through the work we do and through our interactions with the people we work with.']
    );


    $wp_customize->add_setting(
        'gr_values_image',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'gr_values_icon_text_1',
        ['default' => 'Customer Commitment']
    );
    $wp_customize->add_setting(
        'gr_values_icon_text_2',
        ['default' => 'Quality and Integrity']
    );
    $wp_customize->add_setting(
        'gr_values_icon_text_3',
        ['default' => 'Teamwork']
    );
    $wp_customize->add_setting(
        'gr_values_icon_text_4',
        ['default' => 'Respect for People']
    );
    $wp_customize->add_setting(
        'gr_values_icon_text_5',
        ['default' => 'Good Citizenship']
    );
    $wp_customize->add_setting(
        'gr_values_icon_text_6',
        ['default' => 'A Will to Win']
    );
    $wp_customize->add_setting(
        'gr_values_icon_text_7',
        ['default' => 'Personal Accountability']
    );
    $wp_customize->add_setting(
        'gr_values_icon_text_8',
        ['default' => 'Innovation']
    );

    //Section
    $wp_customize->add_section(
        'gr_about_page',
        [
'title' => __('About Us Page Edits', 'greywingwp'),
'priority' => 290,
'panel' => 'greywingwp'
]
    );

    //Image Background
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
    $wp_customize,
    'gr_bg_image_input',
    array(
'label' => __('Background Image Main', 'greywingwp'),
'section' => 'gr_about_page',
'settings' => 'gr_bg_image'
)
)
    );

    //About Text
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_about_text_main_input',
    array(
'label'    => __('About Text', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_about_text_main',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('About Text...', 'greywingwp'),
)

)
)
    );

    //Core focus Image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
    $wp_customize,
    'gr_core_focus_image_input',
    array(
'label' => __('Core Focus Image', 'greywingwp'),
'section' => 'gr_about_page',
'settings' => 'gr_core_focus_image'
)
)
    );

    //core  focus Text 1
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_core_focus_1_input',
    array(
'label'    => __('Core focus Text 1', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_core_focus_1',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Core focus Text 1...', 'greywingwp'),
)

)
)
    );
    //core  focus Text 2
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_core_focus_2_input',
    array(
'label'    => __('Core focus Text 2', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_core_focus_2',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Core focus Text 2...', 'greywingwp'),
)

)
)
    );
    //core  focus Text 3
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_core_focus_3_input',
    array(
'label'    => __('Core focus Text 3', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_core_focus_3',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Core focus Text 3...', 'greywingwp'),
)

)
)
    );
    //core  focus Text 4
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_core_focus_4_input',
    array(
'label'    => __('Core focus Text 4', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_core_focus_4',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Core focus Text 4...', 'greywingwp'),
)

)
)
    );

    //Vision Text
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_vision_text_input',
    array(
'label'    => __('Vision Text', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_vision_text',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Vision Text...', 'greywingwp'),
)

)
)
    );
    //Our Vision Image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
    $wp_customize,
    'gr_vision_image_input',
    array(
'label' => __('Our Vision Image', 'greywingwp'),
'section' => 'gr_about_page',
'settings' => 'gr_vision_image'
)
)
    );
    //Values Text
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_text_input',
    array(
'label'    => __('Our Values Text', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_text',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Our Values Text...', 'greywingwp'),
)

)
)
    );
    //Our Values Image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
    $wp_customize,
    'gr_values_image_input',
    array(
'label' => __('Our Vision Image', 'greywingwp'),
'section' => 'gr_about_page',
'settings' => 'gr_values_image'
)
)
    );

    //Values Icon Text 1
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_icon_text_1_input',
    array(
'label'    => __('Values Icon Text 1 ', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_icon_text_1',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Values Icon Text 1...', 'greywingwp'),
)

)
)
    );

    //Values Icon Text 2
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_icon_text_2_input',
    array(
'label'    => __('Values Icon Text 2 ', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_icon_text_2',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Values Icon Text 2...', 'greywingwp'),
)

)
)
    );

    //Values Icon Text 3
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_icon_text_3_input',
    array(
'label'    => __('Values Icon Text 3 ', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_icon_text_3',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Values Icon Text 3...', 'greywingwp'),
)

)
)
    );

    //Values Icon Text 4
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_icon_text_4_input',
    array(
'label'    => __('Values Icon Text 4 ', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_icon_text_4',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Values Icon Text 4...', 'greywingwp'),
)

)
)
    );

    //Values Icon Text 5
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_icon_text_5_input',
    array(
'label'    => __('Values Icon Text 5 ', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_icon_text_5',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Values Icon Text 5...', 'greywingwp'),
)

)
)
    );

    //Values Icon Text 6
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_icon_text_6_input',
    array(
'label'    => __('Values Icon Text 6 ', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_icon_text_6',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Values Icon Text 6...', 'greywingwp'),
)

)
)
    );
    //Values Icon Text 7
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_icon_text_7_input',
    array(
'label'    => __('Values Icon Text 7 ', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_icon_text_7',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Values Icon Text 7...', 'greywingwp'),
)

)
)
    );
    //Values Icon Text 8
    $wp_customize->add_control(
        new WP_Customize_Control(
    $wp_customize,
    'gr_values_icon_text_8_input',
    array(
'label'    => __('Values Icon Text 8 ', 'greywingwp'),
'section'  => 'gr_about_page',
'settings' => 'gr_values_icon_text_8',
'type' => 'text',
'input_attrs' => array(
'placeholder' => __('Values Icon Text 8...', 'greywingwp'),
)

)
)
    );
}
