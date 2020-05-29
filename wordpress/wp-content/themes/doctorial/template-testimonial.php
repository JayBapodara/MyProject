<?php
/**
 * Template Name: Testimonial
 * The template for testimonial page
 *
 * @package doctorial
 */
   
get_header();
global $post; 
do_action('doctorial_pageheader');?>
<div class="ft-container ft-top-margin clear">
    <?php 
    $cat = get_theme_mod('doctorial_homepage_testimonial_category',0);
     ?>  
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">                    
                        <div class="testimonial-page">
                           <?php                            
                            $args = array('cat' => $cat, 'post_status' => 'publish',
                            );
                            $query = new WP_Query($args);   
                            while ($query->have_posts()) : 
                                $query->the_post();
                                get_template_part( 'template-parts/content', 'testimonial' );
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>      
        
                    </main><!-- #main -->
                </div><!-- #primary -->

    <?php 
     get_sidebar();  ?>
</div>
<?php
get_footer();