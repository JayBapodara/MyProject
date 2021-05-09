<?php
/**
 * Blog Layout | Beside.
 *
 * @package Potter
 * @subpackage Template Parts
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

$template_parts        = potter_blog_layout();
$template_parts_header = $template_parts['template_parts_header'];
$template_parts_footer = $template_parts['template_parts_footer'];
$style                 = $template_parts['style'];
$post_classes          = array( 'potter-blog-layout-beside' );
$post_classes[]        = 'potter-post-style-' . $style;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_classes ); ?> itemscope="itemscope" itemtype="https://schema.org/CreativeWork">

	<?php if ( has_post_thumbnail() ) { ?>

	<div class="potter-grid potter-grid-medium">

		<header class="article-header potter-large-2-5">

			<?php get_template_part( 'inc/template-parts/blog/blog-featured' ); ?>

		</header>

		<div class="potter-large-3-5">

	<?php } ?>

		<section class="article-content">

			<?php
			if ( ! empty( $template_parts_header ) && is_array( $template_parts_header ) ) {
				foreach ( $template_parts_header as $part ) {
					if ( 'featured' !== $part ) {
						get_template_part( 'inc/template-parts/blog/blog-' . $part );
					}
				}
			}
			?>

			<div class="entry-summary" itemprop="text">

				<?php the_excerpt(); ?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'potter' ),
					'after'  => '</div>',
				) );
				?>

			</div>

		</section>

		<?php if ( $template_parts_footer != false ) { ?>

		<footer class="article-footer">

			<?php
			if ( ! empty( $template_parts_footer ) && is_array( $template_parts_footer ) ) {
				foreach ( $template_parts_footer as $part ) {
					get_template_part( 'inc/template-parts/blog/blog-' . $part );
				}
			}
			?>

		</footer>

		<?php } ?>

	<?php if ( has_post_thumbnail() ) { ?>

		</div>

	</div>

	<?php } ?>

</article>