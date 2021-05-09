<?php
/**
 * Misc.
 *
 * @package Potter
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

/**
 * Main navigation fallback.
 *
 * Is displayed if no menu is selected and user is logged in + able to edit theme options.
 */
function potter_main_menu_fallback() {

	if ( is_user_logged_in() && current_user_can( 'edit_theme_options' ) && is_customize_preview() ) {

		?>

		<ul class="potter-menu">
		<li class="menu-item">
		<a href="javascript:void(0)" onclick="parent.wp.customize.panel( 'nav_menus' ).focus()"><?php _e( 'Add Menu', 'potter' ); ?></a>
		</li>
		</ul>

		<?php

	} elseif ( is_user_logged_in() && current_user_can( 'edit_theme_options' ) ) {

		echo '<ul class="potter-menu">';
		echo '<li class="menu-item">';
		echo '<a href="' . esc_url( admin_url( '/nav-menus.php' ) ) . '">' . __( 'Add Menu', 'potter' ) . '</a>';
		echo '</li>';
		echo '</ul>';

	}

}

/**
 * Mobile navigation fallback.
 *
 * Is displayed if no menu is selected and user is logged in + able to edit theme options.
 */
function potter_mobile_menu_fallback() {

	if ( is_user_logged_in() && current_user_can( 'edit_theme_options' ) && is_customize_preview() ) {

		?>

		<ul class="potter-mobile-menu">
		<li class="menu-item">
		<a href="javascript:void(0)" onclick="parent.wp.customize.panel( 'nav_menus' ).focus()"><?php _e( 'Add Menu', 'potter' ); ?></a>
		</li>
		</ul>

		<?php

	} elseif ( is_user_logged_in() && current_user_can( 'edit_theme_options' ) ) {

		echo '<ul class="potter-menu">';
		echo '<li class="menu-item">';
		echo '<a href="' . esc_url( admin_url( '/nav-menus.php' ) ) . '">' . __( 'Add Menu', 'potter' ) . '</a>';
		echo '</li>';
		echo '</ul>';

	}

}

/**
 * Navigation fallback.
 *
 * Is displayed if no menu is selected and user is logged in + able to edit theme options.
 */
function potter_menu_fallback() {

	if ( is_user_logged_in() && current_user_can( 'edit_theme_options' ) && is_customize_preview() ) {

		?>

		<a href="javascript:void(0)" onclick="parent.wp.customize.panel( 'nav_menus' ).focus()"><?php _e( 'Add Menu', 'potter' ); ?></a>

		<?php

	} elseif ( is_user_logged_in() && current_user_can( 'edit_theme_options' ) ) {

		echo '<a href="' . esc_url( admin_url( '/nav-menus.php' ) ) . '">' . __( 'Add Menu', 'potter' ) . '</a>';

	}

}

/**
 * Add description to main menu items.
 *
 * @param string $item_output The menu item's starting HTML output.
 * @param object $item The menu item data object.
 * @param integer $depth Depth of menu item.
 * @param object $args The arguments.
 *
 * @return string The updated menu item's starting HTML output.
 */
function potter_menu_description( $item_output, $item, $depth, $args ) {

	if ( 'main_menu' === $args->theme_location && strlen( $item->description ) > 1 ) {

		$item_output .= '<div class="potter-menu-description">' . $item->description . '</div>';

	}

	return $item_output;

}
add_filter( 'walker_nav_menu_start_el', 'potter_menu_description', 10, 4 );

/**
 * Allow HTML inside menu item description.
 *
 * @param object $menu_item The menu item object.
 *
 * @return object The updated menu item object.
 */
function potter_menu_description_html( $menu_item ) {

	if ( isset( $menu_item->post_type ) && 'nav_menu_item' === $menu_item->post_type ) {

		$menu_item->description = apply_filters( 'nav_menu_description', $menu_item->post_content );

	}

	return $menu_item;

}
remove_filter( 'nav_menu_description', 'strip_tags' );
add_filter( 'nav_menu_description', 'wp_kses_post' );
add_filter( 'wp_setup_nav_menu_item', 'potter_menu_description_html' );

/**
 * Remove Kirki telemetry.
 */
add_filter( 'kirki_telemetry', '__return_false' );