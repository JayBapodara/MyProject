<?php
/**
 * Template Name: Team
 * The template for team page
 *
 * @package doctorial
 */
   
global $post; 
get_header(); 
do_action('doctorial_pageheader');?>
<div class="ft-container ft-top-margin clear">
    <?php 
    $layout = get_theme_mod('doctorial_innerpage_team_post_layout','list');
    $cat = get_theme_mod('doctorial_homepage_team_category',0);
 
     ?>
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div class="team-page <?php echo esc_attr($layout);?>">       
                               <?php                            
                                $args = array('cat' => $cat, 'posts_per_page' => -1, 'post_status' => 'publish',
                                );
                                $query = new WP_Query($args);   
                                while ($query->have_posts()) : 
                                    $query->the_post();
                                    get_template_part( 'template-parts/content', 'team' );
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