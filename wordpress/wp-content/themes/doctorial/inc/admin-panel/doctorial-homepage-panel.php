<?php
	//////////////////////////////////////////////////////	
	///// Add Hompeage setting Panel
	/////////////////////////////////////////////////////

$wp_customize->add_panel(
'doctorial_homepage',
array(
    'priority'      => 50,
    'capability'    =>  'edit_theme_options',
    'description'   =>  esc_html__('Homepage Settings for the theme','doctorial'),
    'theme_supports'=>  '',
    'title'         =>  esc_html__('Homepage Section','doctorial'),
    )
);

	//Slider section

    $wp_customize->add_section(
        'doctorial_homepage_slider',
        array(
            'title'         =>  esc_html__('Slider Section','doctorial'),
            'description'   =>  esc_html__('Setup Slider Settings','doctorial'),
            'priority'      =>  1,
            'panel'         =>	'doctorial_homepage',
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_slider_option',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
            'doctorial_homepage_slider_option',
	            array(
	                'type'          =>  'switch',
	                'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
	                'section'       =>  'doctorial_homepage_slider',
	                'setting'       =>  'doctorial_homepage_slider_option',
	                'priority'      =>  10,
                    )
                )                   
            );
        
        $wp_customize->add_setting(
            'doctorial_homepage_slider_category',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_category_select',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_slider_category',
            array(
                'priority'      =>  20,
                'label'         =>  esc_html__('Select category','doctorial'),
                'section'       =>  'doctorial_homepage_slider',
                'setting'       =>  'doctorial_homepage_slider_category',
                'type'          =>  'select',  
                'choices'       =>  $doctorial_category_lists
                )                                     
            );     

        $wp_customize->add_setting(
            'doctorial_homepage_slider_readmore',
            array(
                'default'           =>  '',
                'sanitize_callback' =>  'doctorial_sanitize_text',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_slider_readmore',
            array(
                'priority'      =>  30,
                'label'         =>  esc_html__('Read more text','doctorial'),
                'section'       =>  'doctorial_homepage_slider',
                'setting'       =>  'doctorial_homepage_slider_readmore',
                'type'          =>  'text',  
                )                                     
            );

        $wp_customize->add_setting(
            'doctorial_homepage_slider_control',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
	            'doctorial_homepage_slider_control',
	            array(
	                'label'   =>  esc_html__('Show control','doctorial'),
	                'section'       =>  'doctorial_homepage_slider',
	                'setting'       =>  'doctorial_homepage_slider_control',
	                'priority'      =>  40,
	                'type'          =>  'switch',	                
                    )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_slider_pager',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
	            'doctorial_homepage_slider_pager',
	            array(
	                'label'   =>  esc_html__('Show pager','doctorial'),
	                'section'       =>  'doctorial_homepage_slider',
	                'setting'       =>  'doctorial_homepage_slider_pager',
	                'priority'      =>  50,
	                'type'          =>  'switch',
                    )
                )                   
            );

			$wp_customize->add_setting(
				'doctorial_homepage_slider_transition_auto',
				array(
					'default' => '0',
					'sanitize_callback' => 'doctorial_sanitize_checkbox'
					)
				);

			$wp_customize->add_control(
				new Doctorial_WP_Customize_Switch_Control(
					$wp_customize,
					'doctorial_homepage_slider_transition_auto',
					array(
						'type' => 'switch',
                        'priority' => 55,
						'label' => esc_html__('Auto Transition', 'doctorial'),
						'section' => 'doctorial_homepage_slider',
						)
					)
				);
			//transition type
			$wp_customize->add_setting(
				'doctorial_homepage_slider_transition_type', 
				array(
					'default' => 'horizontal',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'doctorial_sanitize_transition_type'
					)
				);

			$wp_customize->add_control(
				'doctorial_homepage_slider_transition_type', 
				array(
					'type' => 'select',
	                'priority'      =>  60,
					'label' => esc_html__('Transition Type(Slide/Fade)', 'doctorial'),
					'section' => 'doctorial_homepage_slider',
					'choices' => array(
				         	'fade' => esc_html__('Fade', 'doctorial'),
				          	'horizontal' => esc_html__('Horizontal', 'doctorial'),
				          	'vertical' => esc_html__('Vertical', 'doctorial'),
				      	)
					)
				);

			$wp_customize->add_setting(
				'doctorial_homepage_slider_transition_speed',
				array(
					'default'       =>      '1000',
					'sanitize_callback' => 'doctorial_sanitize_integer'
					)
				);

			$wp_customize->add_control(
				'doctorial_homepage_slider_transition_speed',
				array(
					'type' => 'number',
	                'priority'      =>  70,
					'label' => esc_html__('Transition Speed', 'doctorial'),
					'section' => 'doctorial_homepage_slider',
					)
				);

			//slider pause
		   	$wp_customize->add_setting(
			   	'doctorial_homepage_slider_pause', 
			   	array(
			    	'default' => '5000',
			        'sanitize_callback' => 'doctorial_sanitize_integer',
			  		)
			   	);
		    
		    $wp_customize->add_control(
		    	'doctorial_homepage_slider_pause',
		    	array(
			        'type' => 'number',
	                'priority'      =>  80,
			        'label' => esc_html__('Slider Pause','doctorial'),
			        'section' => 'doctorial_homepage_slider',
			        'setting' => 'doctorial_homepage_slider_pause',
			    	)
		    	);

			$wp_customize->add_setting(
				'doctorial_homepage_slider_caption',
				array(
					'default' => '0',
					'sanitize_callback' => 'doctorial_sanitize_checkbox'
					)
				);

			$wp_customize->add_control(
				new Doctorial_WP_Customize_Switch_Control(
					$wp_customize,
					'doctorial_homepage_slider_caption',
					array(
						'type' => 'switch',
                        'priority'      =>  55,
						'label' => esc_html__('Slider Caption', 'doctorial'),
						'description' => esc_html__('Select Yes to show titles and description over Slider', 'doctorial'),
						'section' => 'doctorial_homepage_slider',
						)
					)
				);

    // featured section and thier controls
    $wp_customize->add_section(
        'doctorial_homepage_featured',
        array(
            'title'         =>  esc_html__('Featured Section','doctorial'),
            'description'   =>  esc_html__('Setup Featured Settings.','doctorial'),
            'priority'      =>  20,
            'panel'         =>  'doctorial_homepage'        
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_featured_option',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control( 
            new Doctorial_WP_Customize_Switch_Control(
            $wp_customize,
                'doctorial_homepage_featured_option',
                array(
                    'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
                    'section'       =>  'doctorial_homepage_featured',
                    'setting'       =>  'doctorial_homepage_featured_option',
                    'priority'      =>  10,
                    'type'          =>  'switch',
                        )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_featured_category',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_category_select',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_featured_category',
            array(
                'priority'=>    40,
                'label'   =>    esc_html__('Select category','doctorial'),
                'section' =>    'doctorial_homepage_featured',
                'setting' =>    'doctorial_homepage_featured_category',
                'type'    =>    'select',
                'choices' =>    $doctorial_category_lists,           
                )                                     
            );

    // About section and thier controls
    $wp_customize->add_section(
        'doctorial_homepage_about',
        array(
            'title'         =>  esc_html__('About Section','doctorial'),
            'description'   =>  esc_html__('Setup About Settings.','doctorial'),
            'priority'      =>  20,
            'panel'         =>  'doctorial_homepage'        
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_about_option',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
	            'doctorial_homepage_about_option',
	            array(
	                'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
	                'section'       =>  'doctorial_homepage_about',
	                'setting'       =>  'doctorial_homepage_about_option',
	                'priority'      =>  10,
	                'type'          =>  'switch',
	                    )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_about_page',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_integer',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_about_page',
            array(
                'priority'      =>  30,
                'label'         =>  esc_html__('Section Page','doctorial'),
                'section'       =>  'doctorial_homepage_about',
                'type'          =>  'dropdown-pages',  
                )                                     
            );

        $wp_customize->add_setting(
            'doctorial_homepage_about_category',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_category_select',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_about_category',
            array(
                'priority'=>    40,
                'label'   =>    esc_html__('Select category','doctorial'),
                'section' =>    'doctorial_homepage_about',
                'setting' =>    'doctorial_homepage_about_category',
                'type'    =>    'select',
                'choices' =>    $doctorial_category_lists,           
                )                                     
            );

    // Service section and thier controls
    $wp_customize->add_section(
        'doctorial_homepage_service',
        array(
            'title'         =>  esc_html__('Service Section','doctorial'),
            'description'   =>  esc_html__('Setup Service Settings.','doctorial'),
            'priority'      =>  20,
            'panel'         =>  'doctorial_homepage'        
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_service_option',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control( 
            new Doctorial_WP_Customize_Switch_Control(
            $wp_customize,
                'doctorial_homepage_service_option',
                array(
                    'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
                    'section'       =>  'doctorial_homepage_service',
                    'setting'       =>  'doctorial_homepage_service_option',
                    'priority'      =>  10,
                    'type'          =>  'switch',
                        )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_service_page',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_integer',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_service_page',
            array(
                'priority'      =>  30,
                'label'         =>  esc_html__('Section Page','doctorial'),
                'section'       =>  'doctorial_homepage_service',
                'type'          =>  'dropdown-pages',  
                )                                     
            );

        $wp_customize->add_setting(
            'doctorial_homepage_service_category',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_category_select',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_service_category',
            array(
                'priority'=>    40,
                'label'   =>    esc_html__('Select category','doctorial'),
                'section' =>    'doctorial_homepage_service',
                'setting' =>    'doctorial_homepage_service_category',
                'type'    =>    'select',
                'choices' =>    $doctorial_category_lists,           
                )                                     
            );

    //Add Blog section and their controls

    $wp_customize->add_section(
        'doctorial_homepage_blog',
        array(
            'title'         =>  esc_html__('Blog Section','doctorial'),
            'description'   =>  esc_html__('Setup Blog Settings','doctorial'),
            'priority'      =>  75,
            'panel'         =>  'doctorial_homepage'        
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_blog_option',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
	            'doctorial_homepage_blog_option',
	            array(
	                'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
	                'section'       =>  'doctorial_homepage_blog',
	                'setting'       =>  'doctorial_homepage_blog_option',
	                'priority'      =>  10,
	                'type'          =>  'switch',
                    )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_blog_page',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_integer',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_blog_page',
            array(
                'priority'      =>  30,
                'label'         =>  esc_html__('Section Page','doctorial'),
                'section'       =>  'doctorial_homepage_blog',
                'type'          =>  'dropdown-pages',  
                )                                     
            );

        $wp_customize->add_setting(
            'doctorial_homepage_blog_category',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_category_select',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_blog_category',
            array(
                'priority'=>    40,
                'label'   =>    esc_html__('Select category','doctorial'),
                'section' =>    'doctorial_homepage_blog',
                'setting' =>    'doctorial_homepage_blog_category',
                'type'    =>    'select',
                'choices' =>    $doctorial_category_lists,           
                )                                     
            );

        $wp_customize->add_setting(
            'doctorial_homepage_blog_readmore',
            array(
                'default'           =>  '',
                'sanitize_callback' =>  'doctorial_sanitize_text',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_blog_readmore',
            array(
                'priority'=>    45,
                'label'   =>    esc_html__('Readmore button text','doctorial'),
                'section' =>    'doctorial_homepage_blog',
                'setting' =>    'doctorial_homepage_blog_readmore',
                'type'    =>    'text',
                )                                     
            );

        

    // Call to Action Section and their configuations

    $wp_customize->add_section(
        'doctorial_homepage_cta',
        array(
            'title'         =>  esc_html__('Call to Action Section','doctorial'),
            'description'   =>  esc_html__('Setup Call to Action(CTA) Settings.','doctorial'),
            'priority'      =>  50,
            'panel'         =>  'doctorial_homepage'        
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_cta_option',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
	            'doctorial_homepage_cta_option',
	            array(
	                'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
	                'section'       =>  'doctorial_homepage_cta',
	                'setting'       =>  'doctorial_homepage_cta_option',
	                'priority'      =>  10,
	                'type'          =>  'switch',
                    )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_cta_page',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_integer',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_cta_page',
            array(
                'priority'      =>  30,
                'label'         =>  esc_html__('Section Page','doctorial'),
                'section'       =>  'doctorial_homepage_cta',
                'type'          =>  'dropdown-pages',  
                )                                     
            );

        
        $wp_customize->add_setting(
            'doctorial_homepage_cta_button_text',
            array(
                'default'           =>  '',
                'sanitize_callback' =>  'doctorial_sanitize_textarea',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_cta_button_text',
            array(
                'priority'      =>  40,
                'label'         =>  esc_html__('Button text','doctorial'),
                'section'       =>  'doctorial_homepage_cta',
                'setting'       =>  'doctorial_homepage_cta_button_text',
                'type'          =>  'text',  
                )                                     
            );

        $wp_customize->add_setting(
            'doctorial_homepage_cta_button_link',
            array(
                'default'           =>  '',
                'sanitize_callback' =>  'esc_url_raw',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_cta_button_link',
            array(
                'priority'      =>  40,
                'label'         =>  esc_html__('Button link','doctorial'),
                'section'       =>  'doctorial_homepage_cta',
                'setting'       =>  'doctorial_homepage_cta_button_link',
                'type'          =>  'text',  
                )                                     
            );


        

    //Add Team section and their controls

    $wp_customize->add_section(
        'doctorial_homepage_team',
        array(
            'title'         =>  esc_html__('Doctorial Section','doctorial'),
            'description'   =>  esc_html__('Setup Doctorial Settings.','doctorial'),
            'priority'      =>  60,
            'panel'         =>  'doctorial_homepage'        
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_team_option',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
	            'doctorial_homepage_team_option',
	            array(
	                'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
	                'section'       =>  'doctorial_homepage_team',
	                'setting'       =>  'doctorial_homepage_team_option',
	                'priority'      =>  10,
	                'type'          =>  'switch',
                    )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_team_page',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_integer',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_team_page',
            array(
                'priority'      =>  30,
                'label'         =>  esc_html__('Section Page','doctorial'),
                'section'       =>  'doctorial_homepage_team',
                'type'          =>  'dropdown-pages',  
                )                                     
            );

        $wp_customize->add_setting(
            'doctorial_homepage_team_category',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_category_select',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_team_category',
            array(
                'priority'=>    40,
                'label'   =>    esc_html__('Select category','doctorial'),
                'section' =>    'doctorial_homepage_team',
                'setting' =>    'doctorial_homepage_team_category',
                'type'    =>    'select',
                'choices' =>    $doctorial_category_lists,           
                )                                     
            );
        
        
    //Add Testimonial section and their controls

    $wp_customize->add_section(
        'doctorial_homepage_testimonial',
        array(
            'title'         =>  esc_html__('Testimonial Section','doctorial'),
            'description'   =>  esc_html__('Setup Testimonial Settings.','doctorial'),
            'priority'      =>  70,
            'panel'         =>  'doctorial_homepage'        
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_testimonial_option',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
	            'doctorial_homepage_testimonial_option',
	            array(
	                'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
	                'section'       =>  'doctorial_homepage_testimonial',
	                'setting'       =>  'doctorial_homepage_testimonial_option',
	                'priority'      =>  10,
	                'type'          =>  'switch',
                    )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_testimonial_page',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_integer',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_testimonial_page',
            array(
                'priority'      =>  30,
                'label'         =>  esc_html__('Section Page','doctorial'),
                'section'       =>  'doctorial_homepage_testimonial',
                'setting'       =>  'doctorial_homepage_testimonial_page',
                'type'          =>  'dropdown-pages',  
                )                                     
            );

        $wp_customize->add_setting(
            'doctorial_homepage_testimonial_category',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_category_select',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_testimonial_category',
            array(
                'priority'=>    40,
                'label'   =>    esc_html__('Select category','doctorial'),
                'section' =>    'doctorial_homepage_testimonial',
                'setting' =>    'doctorial_homepage_testimonial_category',
                'type'    =>    'select',
                'choices' =>    $doctorial_category_lists,           
                )                                     
            );

        
        

    //Add Contact section and their controls

    $wp_customize->add_section(
        'doctorial_homepage_contact',
        array(
            'title'         =>  esc_html__('Contact Section','doctorial'),
            'description'   =>  esc_html__('Setup Contact Settings.','doctorial'),
            'priority'      =>  80,
            'panel'         =>  'doctorial_homepage'        
            )
        );

        $wp_customize->add_setting(
            'doctorial_homepage_contact_option',
            array(
                'default'           =>  '0',
                'sanitize_callback' =>  'doctorial_sanitize_checkbox',
                )
            );

        $wp_customize->add_control(	
			new Doctorial_WP_Customize_Switch_Control(
			$wp_customize,
	            'doctorial_homepage_contact_option',
	            array(
	                'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
	                'section'       =>  'doctorial_homepage_contact',
	                'setting'       =>  'doctorial_homepage_contact_option',
	                'priority'      =>  1,
	                'type'          =>  'switch',
                    )
                )                   
            );

        $wp_customize->add_setting(
            'doctorial_homepage_contact_page',
            array(
                'default'           =>  0,
                'sanitize_callback' =>  'doctorial_sanitize_integer',
                )
            );

        $wp_customize->add_control(
            'doctorial_homepage_contact_page',
            array(
                'priority'      =>  30,
                'label'         =>  esc_html__('Section Page','doctorial'),
                'section'       =>  'doctorial_homepage_contact',
                'type'          =>  'dropdown-pages',  
                )                                     
            );

        // contact form 
		$wp_customize->add_setting('doctorial_homepage_contact_form',
			array(
		        'default' => '',
		        'sanitize_callback' => 'wp_kses_post',
		   		)
		   	);
	   
	    $wp_customize->add_control( 
	    	'doctorial_homepage_contact_form', 
    		array(
    			'type' 	=> 'text',
		        'label' => esc_html__('Enter Shortcode.','doctorial'),
		        'section' => 'doctorial_homepage_contact',
	    		'priority'=>	40,
	    		)			    	
	    	);
        $wp_customize->add_setting('doctorial_homepage_contact_image',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
                )
            );
       
        $wp_customize->add_control( 
            new WP_Customize_Image_Control(
                $wp_customize,
                'doctorial_homepage_contact_image', 
                array(
                    'label' => esc_html__('Upload Image','doctorial'),
                    'section' => 'doctorial_homepage_contact',
                    'priority'=>    40,
                    )           
                )        
            );