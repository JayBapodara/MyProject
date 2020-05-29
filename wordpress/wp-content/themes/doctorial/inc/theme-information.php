<?php
	/**
	 *
	 * Theme Info Doctorial
	 *
*/
	
	function doctorial_customizer_themeinfo( $wp_customize ) {
	        $wp_customize->add_section( 'theme_info' , array(
	                'title'       => __( 'Theme Information' , 'doctorial' ),
	                'priority'    => 500,
	                ));
	
	        $wp_customize->add_setting('theme_info_theme',array(
	                'default' => '',
	                'sanitize_callback' => 'doctorial_sanitize_text',
	                ));
	
	        $doctorial_desc_theme_opt = "";
	        $doctorial_desc_theme_opt .= "<strong>".__('Need help?','doctorial')."</strong><br />";
	        $doctorial_desc_theme_opt .= "<span>".__('View documentation','doctorial').' : </span> <a target="_blank" href="'.esc_url('http://webdevrajan.com/documentation/doctorial/').'">'.__('here','doctorial').'</a> <br />';
	        $doctorial_desc_theme_opt .= "<span>".__('View Video tutorials','doctorial').' : </span><a target="_blank" href="'.esc_url('https://www.youtube.com/watch?v=zEOGoSJPLIY&t=7s').'">'.__('here','doctorial').'</a> <br />';
	        $doctorial_desc_theme_opt .= "<span>".__('Email us','doctorial').' : </span><a target="_blank" href="'.esc_url('mailto:me@webdevrajan.com').'">me@webdevrajan.com</a> <br />';
	        $doctorial_desc_theme_opt .= "<span>".__('More Details','doctorial').' : </span><a target="_blank" href="'.esc_url('http://webdevrajan.com/').'">'.__('here','doctorial').'</a>';
	
	        $wp_customize->add_control( new doctorial_Theme_Info_Custom_Control( $wp_customize ,'theme_info_theme',array(
	                'label' => __( 'About Doctorial' , 'doctorial' ),
	                'section' => 'theme_info',
	                'description' => $doctorial_desc_theme_opt
	                )));
	
	        // $wp_customize->add_setting('theme_info_useful_plugins',array(
	        //         'default' => '',
	        //         'sanitize_callback' => 'doctorial_sanitize_text',
	        //         ));
	
	
	        // $wp_customize->add_control( new doctorial_Theme_Info_Custom_Control( $wp_customize ,'theme_info_useful_plugins',array(
	        //         'label' => __( 'WordPress Resources' , 'doctorial' ),
	        //         'section' => 'theme_info',
	        //         'description' => $doctorial_desc_theme_opt
	        //         )));
	
	}
	add_action( 'customize_register', 'doctorial_customizer_themeinfo' );
	
	
	if(class_exists( 'WP_Customize_control')){
	
	        class doctorial_Theme_Info_Custom_Control extends WP_Customize_Control
	        {
	        /**
	        * Render the content on the theme customizer page
	        */
	        public function render_content()
	        {
	                ?>
	                <label>
	                        <strong class="customize-text_editor"><?php echo esc_html( $this->label ); ?></strong>
	                        <br />
	                        <span class="customize-text_editor_desc">
	                                <?php echo wp_kses_post( $this->description ); ?>
	                        </span>
                </label>
	                <?php
	        }
	    }//editor close
	}//class close