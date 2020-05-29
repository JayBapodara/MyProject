<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Doctorial
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'doctorial' ); ?></a>
	<?php 
		$social_header = get_theme_mod('doctorial_social_option_header',0);
        $top_text = get_theme_mod('doctorial_header_top_text','');
            ?>
	<header id="masthead" class="site-header" role="banner">
		<?php if(!empty($top_text) || ($social_header == 1)): ?>
			<div class="top-header">
				<div class="ft-container">
				<?php if(!empty($top_text)): ?>
					<div class="top-header-text">
						<?php echo wp_kses_post($top_text);?>	
					</div>
				<?php endif;?>
				<?php
					if($social_header == 1):
						do_action('doctorial_social');
					endif
					?>
				</div>
			</div>
		<?php endif;?>	
		<div class="ft-container">
			<div class="sticky-wrapper">
				<div class="site-details clear">
					<div class="site-branding">
						<div class="site-logo">
						<?php if ( has_custom_logo() ) : ?>
								<?php the_custom_logo(); ?>
						<?php endif; // End logo check. ?>
						</div>
						<div class="site-text">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
								<p class="site-description"><?php bloginfo( 'description' ); ?></p>
							</a>
						</div>
					</div><!-- .site-branding -->
					
					<div class="contact-details">
							
						<div class="contact-number">
						<?php $contact_num = get_theme_mod('doctorial_header_contact_number','');
							$contact_title = get_theme_mod('doctorial_header_contact_number_title','' );
							if($contact_num):?>
								<i class="fa fa-phone"></i>
								<div class="contact-number-title">
									<h5><?php echo esc_html($contact_title); ?></h5>
									<p>
										<?php
										echo esc_html($contact_num); ?>
									</p>
								</div>
								<?php
							endif; ?>
						</div>
						<div class="contact-address">
						<?php $contact_add = get_theme_mod('doctorial_header_contact_address','');
							$contact_add_title = get_theme_mod('doctorial_header_contact_address_title','' );
							if($contact_add):?>
								<i class="fa fa-map-marker"></i>
								<div class="contact-number-title">
									<h5><?php echo esc_html($contact_add_title); ?></h5>
									<p>
										<?php
										echo wp_kses_post($contact_add); ?>
									</p>
								</div>
								<?php
							endif; ?>
						</div>
					</div>
		        </div>
		        <div class="menu-search clear">        	
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="toggle-btn">
							<span class="toggle-bar toggle-bar1"></span>
							<span class="toggle-bar toggle-bar2"></span>
							<span class="toggle-bar toggle-bar3"></span>
						</div>
						
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
		        </div>	
		    </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
