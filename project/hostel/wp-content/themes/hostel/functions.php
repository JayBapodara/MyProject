<?php 
add_action('wp_enqueue_scripts', 'hostel_restaurant');
function hostel_restaurant() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
}

?>