<?php
		////////////////////////////////////////////////////
		/////Header Setting panel
		//////////////////////////////////////////////////////

	    $wp_customize->add_panel(
	        'doctorial_header',
	        array(
	            'priority'      => 40,
	            'capability'    =>  'edit_theme_options',
	            'description'   =>  esc_html__('Header Settings of the theme','doctorial'),
	            'theme_supports'=>  '',
	            'title'         =>  esc_html__('Header Settings','doctorial'),
	            )
	        );

            //Top header
		   	$wp_customize->add_section(
			   	'doctorial_header_top_setting', 
			   	array(
			       	'priority' => 10,
			       	'title' => esc_html__('Top Header Settings', 'doctorial'),
			       	'panel' => 'doctorial_header'
					)
			   	);
				$wp_customize->add_setting(
					'doctorial_header_top_text',
					array(
						'default' => '',
						'sanitize_callback' => 'doctorial_sanitize_textarea',
						)
					);
				$wp_customize->add_control(
					'doctorial_header_top_text',
					array(
						'type' => 'textarea',
						'label' => esc_html__('Enter text','doctorial'),
						'description' => esc_html__('Enter text to show on top header.','doctorial'),
						'section' => 'doctorial_header_top_setting'
						)
					);
		    
		    $wp_customize->add_section(
		    	'doctorial_header_contact',
		    	array(
					'title' => esc_html__('Contact Details','doctorial'),
					'priority' => '100',
					'panel' => 'doctorial_header'
					)
		    	);
				$wp_customize->add_setting(
					'doctorial_header_contact_number_title',
					array(
						'default' => '',
						'sanitize_callback' => 'sanitize_text_field',
						)
					);
				$wp_customize->add_control(
					'doctorial_header_contact_number_title',
					array(
						'type' => 'text',
						'label' => esc_html__('Contact Title','doctorial'),
						'description' => esc_html__('Enter contact title to show in header.','doctorial'),
						'section' => 'doctorial_header_contact'
						)
					);
				$wp_customize->add_setting(
					'doctorial_header_contact_number',
					array(
						'default' => '',
						'sanitize_callback' => 'sanitize_text_field',
						)
					);
				$wp_customize->add_control(
					'doctorial_header_contact_number',
					array(
						'type' => 'text',
						'label' => esc_html__('Contact no.','doctorial'),
						'description' => esc_html__('Enter contact no. to show in header.','doctorial'),
						'section' => 'doctorial_header_contact'
						)
					);
				$wp_customize->add_setting(
					'doctorial_header_contact_address_title',
					array(
						'default' => '',
						'sanitize_callback' => 'sanitize_text_field',
						)
					);
				$wp_customize->add_control(
					'doctorial_header_contact_address_title',
					array(
						'type' => 'text',
						'label' => esc_html__('Address Title','doctorial'),
						'description' => esc_html__('Enter contact address Title to show in header.','doctorial'),
						'section' => 'doctorial_header_contact'
						)
					);

				$wp_customize->add_setting(
					'doctorial_header_contact_address',
					array(
						'default' => '',
						'sanitize_callback' => 'doctorial_sanitize_textarea',
						)
					);
				$wp_customize->add_control(
					'doctorial_header_contact_address',
					array(
						'type' => 'text',
						'label' => esc_html__('Contact Address','doctorial'),
						'description' => esc_html__('Enter contact address to show in header.','doctorial'),
						'section' => 'doctorial_header_contact'
						)
					);
