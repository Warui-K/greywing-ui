<?php function gr_testimonials_customize_section($wp_customize){
    //Settings


    $wp_customize->add_setting('gr_testimonial_1_img',
    ['default' => '']);
    $wp_customize->add_setting('gr_testimonial_1_text',
    ['default' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
    consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod
    tenetur ducimus. Minus ratione sit quaerat unde.']);
    $wp_customize->add_setting('gr_testimonial_1_author',
    ['default' => 'Author 1']);

    $wp_customize->add_setting('gr_testimonial_2_img',
    ['default' => '']);
    $wp_customize->add_setting('gr_testimonial_2_text',
    ['default' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
    consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod
    tenetur ducimus. Minus ratione sit quaerat unde.']);
    $wp_customize->add_setting('gr_testimonial_2_author',
    ['default' => 'Author 2']);

    $wp_customize->add_setting('gr_testimonial_3_img',
    ['default' => '']);
    $wp_customize->add_setting('gr_testimonial_3_text',
    ['default' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
    consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod
    tenetur ducimus. Minus ratione sit quaerat unde.']);
    $wp_customize->add_setting('gr_testimonial_3_author',
    ['default' => 'Author 3']);

    $wp_customize->add_setting('gr_testimonial_4_img',
    ['default' => '']);
    $wp_customize->add_setting('gr_testimonial_4_text',
    ['default' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
    consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod
    tenetur ducimus. Minus ratione sit quaerat unde.']);
    $wp_customize->add_setting('gr_testimonial_4_author',
    ['default' => 'Author 4']);

    //Section
    $wp_customize->add_section('gr_testimonials',
    [
        'title' => __('Testimonials Home Section', 'greywingwp'),
        'priority' => 280,
        'panel' => 'greywingwp'
    ]);

    //Testimonial 1 img control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'gr_testimonial_1_img_input',
            array(
                'label' => __('Testimonial Image 1', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_1_img'

            )
        )
            );
    //Testimonial 1 text control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_testimonial_1_text_input',
            array(
                'label' => __('Testimonial Text 1', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_1_text',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Testimonial 1', 'greywingwp'),
                )
            )
        )
                );
    //Testimonial 1 author control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_testimonial_1_author_input',
            array(
                'label' => __('Testimonial Text 1', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_1_author',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Author 1', 'greywingwp'),
                )
            )
        )
                );

        //Testimonial 2 img control
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'gr_testimonial_2_img_input',
                array(
                    'label' => __('Testimonial Image 2', 'greywingwp'),
                    'section' => 'gr_testimonials',
                    'settings' => 'gr_testimonial_2_img'
    
                )
            )
                );
        //Testimonial 2 text control
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'gr_testimonial_2_text_input',
                array(
                    'label' => __('Testimonial Text 2', 'greywingwp'),
                    'section' => 'gr_testimonials',
                    'settings' => 'gr_testimonial_2_text',
                    'type' => 'text',
                    'input_attrs' => array(
                        'placeholder' => __('Testimonial 2', 'greywingwp'),
                    )
                )
            )
                    );
        //Testimonial 2 author control
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'gr_testimonial_2_author_input',
                array(
                    'label' => __('Testimonial Text 2', 'greywingwp'),
                    'section' => 'gr_testimonials',
                    'settings' => 'gr_testimonial_2_author',
                    'type' => 'text',
                    'input_attrs' => array(
                        'placeholder' => __('Author 2', 'greywingwp'),
                    )
                )
            )
                    );

                        //Testimonial 3 img control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'gr_testimonial_3_img_input',
            array(
                'label' => __('Testimonial Image 3', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_3_img'

            )
        )
            );
    //Testimonial 3 text control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_testimonial_3_text_input',
            array(
                'label' => __('Testimonial Text 3', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_3_text',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Testimonial 3', 'greywingwp'),
                )
            )
        )
                );
    //Testimonial 3 author control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_testimonial_3_author_input',
            array(
                'label' => __('Testimonial Text 3', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_3_author',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Author 3', 'greywingwp'),
                )
            )
        )
                );

                    //Testimonial 4 img control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'gr_testimonial_4_img_input',
            array(
                'label' => __('Testimonial Image 4', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_4_img'

            )
        )
            );
    //Testimonial 4 text control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_testimonial_4_text_input',
            array(
                'label' => __('Testimonial Text 4', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_4_text',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Testimonial 4', 'greywingwp'),
                )
            )
        )
                );
    //Testimonial 4 author control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'gr_testimonial_4_author_input',
            array(
                'label' => __('Testimonial Text 4', 'greywingwp'),
                'section' => 'gr_testimonials',
                'settings' => 'gr_testimonial_4_author',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Author 4', 'greywingwp'),
                )
            )
        )
                );
    
}