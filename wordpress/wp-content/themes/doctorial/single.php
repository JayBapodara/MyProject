<?php
/**
 * Single
 *
 * @package doctorial
 */
   
global $post; 
get_header(); 
do_action('doctorial_pageheader');?>
<div class="ft-container ft-top-margin clear">
           <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                               <?php                            
                                while ( have_posts() ) : the_post();

                                    get_template_part( 'template-parts/content', 'single' );

                                    the_post_navigation();

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;

                                endwhile; // End of the loop.
                                ?>
                    </main><!-- #main -->
                </div><!-- #primary -->

    <?php 
     get_sidebar();  ?>
</div>
<?php
get_footer();