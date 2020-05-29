<?php
/**
 * @package Doctorial
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'doctorial' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

	<?php if( 'post' === get_post_type() ):?>
		<footer class="entry-footer">
			<?php doctorial_posted_on(); ?>
			<?php doctorial_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif;?>
</article><!-- #post-## -->