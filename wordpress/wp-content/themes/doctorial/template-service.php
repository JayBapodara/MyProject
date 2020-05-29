 <?php
/**
 * Template Name: Service
 *
 * @package doctorial
 */
  
global $post;
get_header(); 
do_action('doctorial_pageheader');?>
<div class="ft-container ft-top-margin clear">
    <?php 
    $layout = get_theme_mod('doctorial_innerpage_service_layout','grid');
    $cat = get_theme_mod('doctorial_homepage_service_category',0);
   
     ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">  
            <div class="service-page <?php echo esc_attr($layout); ?>">
                                       
                <?php
                $args = array('cat' => $cat, 'post_status' => 'publish',
                    );
                $query = new WP_Query($args);   
                while ($query->have_posts()) : 
                    $query->the_post();
                    get_template_part( 'template-parts/content', 'service' );
                endwhile;

                ?>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->
   <?php 
     get_sidebar();  ?>
</div>
<?php
get_footer();