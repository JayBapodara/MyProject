<?php
	function doctorial_customizer( $wp_customize ) {
		require get_template_directory() . '/inc/doctorial-sanitize.php';

		$doctorial_category_lists 	=	doctorial_category_lists();

		$wp_customize->add_panel(
			'doctorial_default',
			array(
				'title' => esc_html__('Basic Setting', 'doctorial'),
				'priority'	=>	1,
				'panel'	=>	'doctorial_default'
				)
			);
			
			$wp_customize->get_section('title_tagline')->panel = 'doctorial_default'; //priority 20
			$wp_customize->get_section('colors')->panel = 'doctorial_default'; //priority 40
			$wp_customize->get_section('header_image')->panel = 'doctorial_default'; //priority 60
			$wp_customize->get_section('background_image')->panel = 'doctorial_default'; //priority 80
			$wp_customize->get_section('static_front_page')->panel = 'doctorial_default'; //priority 120

			$wp_customize->add_section(
		        'doctorial_default_weblayout',
		        array(
		            'title'         =>  esc_html__('Web Layout','doctorial'),
		            'priority'      =>  130,
		            'panel'         =>	'doctorial_default',
		            )
		        );

		        $wp_customize->add_setting(
		            'doctorial_default_weblayout_layout',
		            array(
		                'default'           =>  'fullwidth',
		                'sanitize_callback' =>  'doctorial_sanitize_weblayout',
		                )
		            );

		        $wp_customize->add_control(
		            'doctorial_default_weblayout_layout',
		            array(
		                'description'   =>  esc_html__('Do you want to enable this section?','doctorial'),
		                'section'       =>  'doctorial_default_weblayout',
		                'setting'       =>  'doctorial_default_weblayout_layout',
		                'priority'      =>  10,
		                'type'          =>  'radio',
		                'choices'        =>  array(
		                    'fullwidth'   =>  esc_html__('Fullwidth Layout','doctorial'),
		                    'boxed'    =>  esc_html__('Boxed Layout','doctorial')
		                    )
		                )                   
		            );
			$wp_customize->add_section(
		        'doctorial_default_footer',
		        array(
		            'title'         =>  esc_html__('Footer Copyright','doctorial'),
		            'priority'      =>  130,
		            'panel'         =>	'doctorial_default',
		            )
		        );

		        $wp_customize->add_setting(
		            'doctorial_default_footer_copyright',
		            array(
		                'default'           =>  '',
		                'sanitize_callback' =>  'wp_kses_post',
		                )
		            );

		        $wp_customize->add_control(
		            'doctorial_default_footer_copyright',
		            array(
		                'label'   =>  esc_html__('Footer Copyright','doctorial'),
		                'description'   =>  esc_html__('Enter text to add Copyright text on footer. ','doctorial'),
		                'section'       =>  'doctorial_default_footer',
		                'setting'       =>  'doctorial_default_footer_copyright',
		                'priority'      =>  10,
		                'type'          =>  'text',
		                )                   
		            );


	                              
		require get_template_directory().'/inc/admin-panel/doctorial-header-panel.php';
		require get_template_directory().'/inc/admin-panel/doctorial-homepage-panel.php';  
		require get_template_directory().'/inc/admin-panel/doctorial-social-panel.php';  
	
	}
	add_action( 'customize_register', 'doctorial_customizer' );

?>
