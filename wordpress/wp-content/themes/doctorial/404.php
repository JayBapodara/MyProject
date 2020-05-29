<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Doctorial
 */

get_header(); ?>
<header class="page-header">
	<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'doctorial' ); ?></h2>
	<?php do_action( 'doctorial_breadcrumb' );?>
</header><!-- .page-header -->
<div class="ft-container ft-top-margin clear">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">
					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php
get_footer();
