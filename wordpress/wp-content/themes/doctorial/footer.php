<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Doctorial
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer wow fadeInUp" data-wow-duration="2s" role="contentinfo">
	<?php if(is_active_sidebar('doctorial-footer-one') || is_active_sidebar('doctorial-footer-two') || is_active_sidebar('doctorial-footer-three') || is_active_sidebar('doctorial-footer-four') ):?>
	<div class="top-footer ">
		<div class="ft-container">
			<div class="footer-wrap clear">
				<?php
				if(is_active_sidebar('doctorial-footer-one')){
					?>
					<div class="footer-block">
						<?php dynamic_sidebar('doctorial-footer-one'); ?>
					</div>
					<?php
				}
				?>	        	
				<?php
				if(is_active_sidebar('doctorial-footer-two')){
					?>
					<div class="footer-block">
						<?php dynamic_sidebar('doctorial-footer-two'); ?>
					</div>
					<?php
				}
				?>	        	
				<?php
				if(is_active_sidebar('doctorial-footer-three')){
					?>	
					<div class="footer-block">
						<?php dynamic_sidebar('doctorial-footer-three'); ?>
					</div>
					<?php
				}
				?>	        	
				<?php
				if(is_active_sidebar('doctorial-footer-four')){
					?>	
					<div class="footer-block">
						<?php dynamic_sidebar('doctorial-footer-four'); ?>
					</div>
					<?php
				}
				?>	
			</div>
		</div>
	</div>
<?php endif?>
	<div class="site-info" >
		<div class="copyright">
			<?php 
			$copyright = get_theme_mod('doctorial_default_footer_copyright','');
			echo wp_kses_post($copyright);?> &nbsp;
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'doctorial' ) ); ?>">
				<?php /* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'doctorial' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php 
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'doctorial' ), 'doctorial', '<a href="'.esc_url("http://webdevrajan.com/").'" rel="designer">Maharjan Rajan</a>' ); ?>
		</div>
		<?php 
		if(get_theme_mod('doctorial_social_option_footer',0)==1):
			?>
		<div class="ft-social-icon">
			<?php		
			do_action('doctorial_social');
			?>
		</div>
		<?php 
		endif;
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#" id="go-to-top" class="ft-arrow" title="<?php esc_attr_e('Go to top', 'doctorial');?>"></a>
<?php wp_footer(); ?>

</body>
</html>
