<?php
	/** EightPhoto Pro Pro Woo Tweaks **/
/////////////////////// for all woo commerce pages///////////////////////////
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);	
	remove_action('woocommerce_sidebar','woocommerce_get_sidebar');
	remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',10);
    add_action('doctorial_woo_breadcrumb','woocommerce_breadcrumb',10); //for breaddcrumb
	add_action('woocommerce_before_main_content', 'doctorial_wrapper_start', 10);
	add_action('woocommerce_after_main_content', 'doctorial_wrapper_end', 10);

	add_action( 'init', 'doctorial_remove_wc_breadcrumbs' );
	function doctorial_remove_wc_breadcrumbs() {
	    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}

	add_action('woocommerce_before_shop_loop', 'doctorial_primary', 0);	// page header of  archive woocommerce page
	add_action('woocommerce_before_single_product', 'doctorial_primary', 0);// page header for single product
	
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );
	
	add_filter( 'woocommerce_breadcrumb_defaults', 'doctorial_woocommerce_breadcrumbs' );
	function doctorial_woocommerce_breadcrumbs() {
		$delimiter = get_theme_mod('doctorial_breadcrumb_setting_seperator','&#124;');
		$home = get_theme_mod('doctorial_breadcrumb_setting_home',__('Home', 'doctorial'));

	    return array(
	            'delimiter'   =>  ' '.$delimiter.' ',
	            'wrap_before' => '<div id="doctorial-breadcrumbs"><div class="ft-container">',
	            'wrap_after'  => '</div></div>',
	            'before'      => '<span>',
	            'after'       => '</span>',
	            'home'        => $home,
	        );
	}

	function doctorial_wrapper_start(){ ?>
            <header class="page-header">  
        <?php
	}

	// to add primary div after breadcrumb
	function doctorial_primary(){
			do_action('doctorial_woo_breadcrumb');
		?>
		</header>
		<div class="ft-container ft-top-margin clear">
			<div id="primary" class = "content-area">
				<div class="product">
		<?php
	}

	function doctorial_wrapper_end(){		
		echo '</div></div>';
			if(is_active_sidebar('doctorial-shop-sidebar')):
			?>

			<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'doctorial-shop-sidebar' ); ?>
			</div><!-- #secondary -->
		<?php endif;?>
		</div>
			<?php
	}


	if ( class_exists('YITH_WCWL') ) {
		if (function_exists('YITH_WCWL')) {

			add_action('woocommerce_before_shop_loop_item_title', 'doctorial_show_add_to_wishlist', 10 );
			function doctorial_show_add_to_wishlist(){
				if(class_exists( 'YITH_WCQV_Frontend' )){
					echo "<div class='whislist-quickview'>";
				}
				echo do_shortcode('[yith_wcwl_add_to_wishlist]');
			}

			add_action('woocommerce_single_product_summary', 'doctorial_add_to_wishlist_single_product', 35 );
			function doctorial_add_to_wishlist_single_product(){
				echo do_shortcode('[yith_wcwl_add_to_wishlist]');	
			}

		}
	}



	if( class_exists( 'YITH_WCQV_Frontend' ) ){

		$quick_view = YITH_WCQV_Frontend();
		remove_action('woocommerce_after_shop_loop_item', array( $quick_view, 'yith_add_quick_view_button' ), 15 );
		add_action( 'woocommerce_before_shop_loop_item_title', array( $quick_view, 'yith_add_quick_view_button' ), 10 );

		add_action( 'woocommerce_before_shop_loop_item_title',  'doctorial_div_after_yith_add_quick_view_button' , 10 );
		function doctorial_div_after_yith_add_quick_view_button(){
			if(function_exists('YITH_WCWL') ){
				echo "</div>";
			}
		}

	}


	add_filter('loop_shop_columns', 'doctorial_loop_columns');
	if (!function_exists('doctorial_loop_columns')) {
		function doctorial_loop_columns() {
				$xr = 3;
			return intval($xr); 
		}
	}


