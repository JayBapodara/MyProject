<?php 
		///////////////////////////////////////////////////
		//social Settings section
		///////////////////////////////////////////////////
		
			$wp_customize->add_section(
		   	'doctorial_social', 
		   	array(
		       	'priority' => 60,
		       	'title' => esc_html__('Social Setting', 'doctorial'),
		       	//'panel' => 'doctorial_social',
				)
			);	    
		    	    
		    $wp_customize->add_setting(
		    	'doctorial_social_option_header', 
		    	array(
		      		'default' => '0',
		      		'capability' => 'edit_theme_options',
		      		'sanitize_callback' => 'doctorial_sanitize_checkbox',
		   			)
		    	);

		   	$wp_customize->add_control(	                
				new Doctorial_WP_Customize_Switch_Control(
					$wp_customize,
		   			'doctorial_social_option_header', 
			   		array(
				      	'type' => 'switch',
				      	'label' => esc_html__('Enable Disable Social Icons in header', 'doctorial'),
				      	'section' => 'doctorial_social',
				      	'setting' => 'doctorial_social_option_header',
			   			)
			   		)
		   		);	    
		    	    
		    $wp_customize->add_setting(
		    	'doctorial_social_option_footer', 
		    	array(
		      		'default' => '0',
		      		'capability' => 'edit_theme_options',
		      		'sanitize_callback' => 'doctorial_sanitize_checkbox',
		   			)
		    	);

		   	$wp_customize->add_control(	                
				new Doctorial_WP_Customize_Switch_Control(
					$wp_customize,
		   			'doctorial_social_option_footer', 
			   		array(
				      	'type' => 'switch',
				      	'label' => esc_html__('Enable Disable Social Icons in Footer', 'doctorial'),
				      	'section' => 'doctorial_social',
				      	'setting' => 'doctorial_social_option_footer',
			   			)
			   		)
		   		);
		   
		   //social facebook link
		   	$wp_customize->add_setting(
			   	'doctorial_social_facebook', 
			   	array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
			   	);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_facebook',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Facebook','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_facebook'
			    	)
		    	);
		    
		    //social twitter link
		   	$wp_customize->add_setting(
		   		'doctorial_social_twitter', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_twitter',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Twitter','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_twitter'
		    		)
		    	);
		    
		    //social googleplus link
		   	$wp_customize->add_setting(
			   	'doctorial_social_googleplus', 
			   	array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
			   	);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_googleplus',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Google Plus','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_googleplus'
			    	)
		    	);
		    
		     //social youtube link
		   	$wp_customize->add_setting(
		   		'doctorial_social_youtube', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_youtube',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('YouTube','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_youtube'
			    	)
		    	);
		    
		     //social pinterest link
		   	$wp_customize->add_setting(
			   	'doctorial_social_pinterest', 
			   	array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
			   	);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_pinterest',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Pinterest','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_pinterest'
			    	)
		    	);
		    
		    //social linkedin link
		   	$wp_customize->add_setting(
		   		'doctorial_social_linkedin', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_linkedin',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Linkedin','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_linkedin'
		    		)
		    	);
		    
		    //social flicker link
		   	$wp_customize->add_setting(
			   	'doctorial_social_flicker', 
			   	array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
			   	);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_flicker',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Flicker','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_flicker'
			    	)
		    	);
		    
		    
		    //social vimeo link
		   	$wp_customize->add_setting(
		   		'doctorial_social_vimeo', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_vimeo',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Vimeo','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_vimeo'
		    		)
		    	);
		    
		    //social stumbleupon link
		   	$wp_customize->add_setting(
		   		'doctorial_social_stumbleupon', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_flicker',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Stumbleupon','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_stumbleupon'
			    	)
		    	);
		    
		    //social instagram link
		   	$wp_customize->add_setting(
		   		'doctorial_social_instagram', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_instagram',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Instagram','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_instagram'
			    	)
		    	);
		    
		    //social soundcloud link
		   	$wp_customize->add_setting(
		   		'doctorial_social_soundcloud', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_soundcloud',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Sound Cloud','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_soundcloud'
		    		)
		    	);
		    
		    //social github link
		   	$wp_customize->add_setting(
			   	'doctorial_social_github', 
			   	array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
			   	);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_github',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Git Hub','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_github'
		    		)
		    	);
		    
		    //social tumbler link
		   	$wp_customize->add_setting(
		   		'doctorial_social_tumbler', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_tumbler',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Tumbler','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_tumbler'
			    	)
		    	);
		    
		    //social skype link
		   	$wp_customize->add_setting(
		   		'doctorial_social_skype', 
		   		array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_text',
					)
		   		);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_skype',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('Skype','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_skype'
			    	)
		    	);
		    
		    //social Rss link
		   	$wp_customize->add_setting(
			   	'doctorial_social_rss', 
			   	array(
					'default' => '',
			        'sanitize_callback' => 'doctorial_sanitize_url',
					)
			   	);
		    
		    $wp_customize->add_control(
		    	'doctorial_social_rss',
		    	array(
			        'type' => 'text',
			        'label' => esc_html__('RSS','doctorial'),
			        'section' => 'doctorial_social',
			        'setting' => 'doctorial_social_rss'
			    	)
			    );  