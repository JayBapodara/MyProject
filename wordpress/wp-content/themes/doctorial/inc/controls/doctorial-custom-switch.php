<?php
//add new custom control type switch
if(class_exists( 'WP_Customize_control')):
	class Doctorial_WP_Customize_Switch_Control extends WP_Customize_Control {
		public $type = 'switch';
		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<div class="switch_options">
					<span class="switch_enable"><?php esc_html_e('Yes','doctorial'); ?></span>
					<span class="switch_disable"><?php esc_html_e('No','doctorial'); ?></span>  
					<input type="hidden" id="switch_yes_no" <?php $this->link(); ?> value="<?php echo esc_attr($this->value()); ?>" />
				</div>
			</label>
			<?php
		}
	}
	endif;
	if( is_admin() ):
	//load js to control function of switch
		function doctorial_switch_scripts() {
			wp_enqueue_style( 'doctorial-switch-css', get_template_directory_uri() . '/inc/css/admin-control.css');
			wp_enqueue_script( 'doctorial-switch-js', get_template_directory_uri().'/inc/js/admin-control.js', array( 'jquery' ), '20160623', true );
		}		
		add_action( 'admin_enqueue_scripts', 'doctorial_switch_scripts' );
	endif; ?>