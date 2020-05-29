<?php
/**
* Template Name: Homepage
* 
* @package Doctorial
*
*/ 
get_header();
do_action('doctorial_slider');

if(get_theme_mod('doctorial_homepage_featured_option',0)):
    $featured_cat  =   get_theme_mod('doctorial_homepage_featured_category',0);
    $featured_readmore = get_theme_mod('doctorial_homepage_featured_readmore',esc_html__('Read more','doctorial'));
    $featured_page =   esc_attr(get_theme_mod('doctorial_homepage_featured_page',0));
    if( (!empty($featured_page) && ($featured_page != 0)) || ($featured_cat != 0) ):
        if($featured_page!=0){
            $featured_data = get_post($featured_page);
        }
        $args = array('post_type' => 'post', 'cat' => $featured_cat, 'posts_per_page' => 4);
        $args_query =   new WP_Query($args);
?>
        <section id="featured" class="featured-section section">               
            <div class="ft-container">
                <?php if(isset($featured_data)):?>
                    <div class="section-header">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo wp_kses_post($featured_data->post_title);?></h2>
                        <div class="featured-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <?php echo wp_kses_post($featured_data->post_content);?>
                        </div> 
                    </div>
                <?php endif;?>
                <?php if($featured_cat != 0):?>
                    <div class="featured-wrap clear wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <?php
                            while($args_query->have_posts()):
                                $args_query->the_post();
                                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');

                            ?>
                            <div class="featured-content-img">  
                                <?php
                                if(has_post_thumbnail()):
                                    ?>
                                <div class="featured-title">
                                        <img src="<?php echo esc_url($img[0]);?>" alt = '<?php the_title_attribute();?>' /> 
                                        <?php the_title('<h4 class="featured-post-title">','</h4>');?>
                                </div>
                                <?php
                                endif;
                                ?>
                                <div class="featured-content">
                                    <?php the_excerpt();?>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>  
                    <?php endif;?>         
            </div>
        </section>

<?php 
    endif;
endif;


if(get_theme_mod('doctorial_homepage_about_option',0)):
    $about_cat  =   get_theme_mod('doctorial_homepage_about_category',0);
    $about_readmore = get_theme_mod('doctorial_homepage_about_readmore',esc_html__('Read more','doctorial'));
    $about_page =   esc_attr(get_theme_mod('doctorial_homepage_about_page',0));
    if( (!empty($about_page) && ($about_page != 0)) || ($about_cat != 0) ):
        if($about_page!=0)
            $about_data = get_post($about_page);
        $args = array('post_type' => 'post', 'cat' => $about_cat, 'posts_per_page' => 6);
        $args_query =   new WP_Query($args);

?>
        <section id="about" class="about-section section">               
            <div class="ft-container">
                <?php if(isset($about_data)):?>
                    <div class="section-header">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo wp_kses_post($about_data->post_title);?></h2>
                        <div class="about-description section-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <?php echo wp_kses_post($about_data->post_content);?>
                        </div> 
                    </div>
                <?php endif;?>
                <?php if($about_cat != 0):?>
                    <div class="about-wrap clear wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <?php
                            while($args_query->have_posts()):
                                $args_query->the_post();
                                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'doctorial-square-image');

                            ?>
                            <div class="about-content-img">  
                                <?php
                                if(has_post_thumbnail()):
                                    ?>
                                <figure>
                                    <div class="about-img-outter">
                                        <div class="about-img-inner">
                                            <img src="<?php echo esc_url($img[0]);?>" alt = '<?php the_title_attribute();?>' />   
                                        </div>
                                    </div>                             
                                </figure>
                                <?php
                                endif;
                                ?>
                                <div class="about-content-wrap">
                                        <?php the_title('<h4 class="about-title">','</h4>');?>
                                    <div class="about-content">
                                        <?php the_excerpt();?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>  
                    <?php endif;?>         
            </div>
        </section>

<?php 
    endif;
endif;


if(get_theme_mod('doctorial_homepage_service_option',0)):
    $service_cat  =   get_theme_mod('doctorial_homepage_service_category',0);
    $service_readmore = get_theme_mod('doctorial_homepage_service_readmore',esc_html__('Read more','doctorial'));
    $service_page =   esc_attr(get_theme_mod('doctorial_homepage_service_page',0));
    if( (!empty($service_page) && ($service_page != 0)) || ($service_cat != 0) ):
        if($service_page!=0)
            $service_data = get_post($service_page);
        $args = array('post_type' => 'post', 'cat' => $service_cat, 'posts_per_page' => 6);
        $args_query =   new WP_Query($args);

?>
        <section id="service" class="service-section section">               
            <div class="ft-container">
                <?php if(isset($service_data)):?>
                    <div class="section-header">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo wp_kses_post($service_data->post_title);?></h2>
                        <div class="service-description section-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <?php echo wp_kses_post($service_data->post_content);?>
                        </div> 
                    </div>
                <?php endif;?>
                <?php if($service_cat != 0):?>
                    <div class="service-wrap clear wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <?php
                            while($args_query->have_posts()):
                                $args_query->the_post();
                                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'doctorial-square-image');
                                $img_link = $img[0];

                            ?>
                            <div class="service-content-img">  
                                <?php
                                if(has_post_thumbnail()):
                                    ?>
                                <figure>
                                        <img src="<?php echo esc_url($img_link);?>" alt = '<?php the_title_attribute();?>' />                                
                                </figure>
                                <?php
                                endif;
                                ?>
                                <div class="service-content-wrap">
                                        <?php the_title('<h4 class="service-title"><a href="'.esc_url( get_the_permalink() ).'">','</a></h4>');?>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>  
                    <?php endif;?>         
            </div>
        </section>

<?php 
    endif;
endif;



 
if(get_theme_mod('doctorial_homepage_cta_option',0)):
    $cta_page =   get_theme_mod('doctorial_homepage_cta_page',0);
    if( (!empty($cta_page) && ($cta_page != 0)) ):
        $cta_data = get_post($cta_page);
    $cta_button_text = get_theme_mod('doctorial_homepage_cta_button_text',esc_html__('Hire us','doctorial'));
    $cta_button_link = get_theme_mod('doctorial_homepage_cta_button_link','#');
    $cta_image = get_the_post_thumbnail_url( $cta_page );
    ?>
        <section id="cta" class="cta-section section" style="background-image: url('<?php echo esc_url($cta_image)?>');background-size: cover;">
            <div class="ft-container">
                <div class="section-content">
                    <h2 class="cta-section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo wp_kses_post($cta_data->post_title);?></h2>
                    <div class="cta-description section-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" ><?php echo wp_kses_post($cta_data->post_content);?></div>
                <a class="ft-arrow bttn cta-readmore wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" href="<?php echo esc_url($cta_button_link);?>"><?php echo esc_html($cta_button_text);?></a>   
                </div>
            </div>
        </section>

    <?php 
    endif;
endif;


    if(get_theme_mod('doctorial_homepage_team_option',0)):
        $team_cat   =   get_theme_mod('doctorial_homepage_team_category',0);
        $team_page =   get_theme_mod('doctorial_homepage_team_page',0);
        if( (!empty($team_page) && ($team_page != 0)) || ($team_cat != 0) ):
            if($team_page!=0)
                $team_data = get_post($team_page);
            $args = array('post_type' => 'post', 'posts_per_page' => 5, 'cat' => $team_cat);
            $args_query = new WP_Query($args);  
    ?>
            <section id="team" class="team-section section">
                    <?php if(isset($team_data)):?>
                        <div class="ft-container">
                            <div class="section-header">
                                <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo wp_kses_post($team_data->post_title);?></h2>
                                <div class="team-description section-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" ><?php echo wp_kses_post($team_data->post_content);?></div>
                            </div>                        
                        </div>
                    <?php endif;?>
                    <?php if( $team_cat != 0 ):?>
                        <div class="team-wrap clear wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <?php
                            while($args_query->have_posts()):
                                $args_query->the_post();
                                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'doctorial-square-image');
                                $img_link = $img[0];

                            ?>
                            <div class="team-content-img">                   
                                    <?php
                                    if(has_post_thumbnail()):
                                        ?>
                                    <figure>
                                        <a href="<?php the_permalink();?>">  
                                            <img src="<?php echo esc_url($img_link);?>" alt = '<?php the_title_attribute();?>' />
                                        </a>  
                                    </figure>
                                    <?php
                                    endif;
                                    ?>  
                                <div class="team-content-wrap">
                                    <div class="team-details">
                                        <?php the_title('<h4 class="team-title">','</h4>');?>
                                        <?php the_excerpt();?>                                    
                                    </div>
                                    <div class="readmore">
                                        <a class="bttn" href="<?php the_permalink();?>"><?php esc_html_e('Read More','doctorial');?></a>         
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    <?php endif;?>
            </section>
        <?php 
        endif;
    endif;

    if(get_theme_mod('doctorial_homepage_blog_option',0)):
        $blog_cat   =   get_theme_mod('doctorial_homepage_blog_category',0);
        $blog_page =   get_theme_mod('doctorial_homepage_blog_page',0);
        if( (!empty($blog_page) && ($blog_page != 0)) || $blog_cat!= 0):
            if($blog_page!=0)
                $blog_data = get_post($blog_page);
            $blog_readmore = get_theme_mod('doctorial_homepage_blog_readmore',esc_html__('Read more','doctorial'));
            $args = array('post_type' => 'post', 'posts_per_page' => 3, 'cat' => $blog_cat);
            $args_query = new WP_Query($args);  
                ?>
            <section id="blog" class="blog-section section">
                <div class="ft-container">
                    <?php if(isset($blog_data)):?>
                        <div class="section-header">
                            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo wp_kses_post($blog_data->post_title);?></h2>       
                            <div class="blog-description section-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" ><?php echo wp_kses_post($blog_data->post_content);?></div>
                        </div>   
                    <?php endif;?>    
                    <?php if($blog_cat != 0):?>
                        <div class="blog-wrap clear wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <?php
                            while($args_query->have_posts()):
                                $args_query->the_post();
                                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'doctorial-full');
                                $img_link = $img[0];

                                ?>
                                <div class="blog-content-img">                   
                                        <?php
                                        if(has_post_thumbnail()):
                                            ?>
                                            <figure>
                                                <a href="<?php the_permalink();?>">  
                                                    <img src="<?php echo esc_url($img_link);?>" alt = '<?php the_title_attribute();?>' />
                                                </a>    
                                                <a href="<?php echo esc_url( get_day_link('', '', '') );?>">
                                                    <div class="blog-date">
                                                        <span><?php the_time('d');?></span><?php the_time('M');?>
                                                    </div>
                                                </a>
                                            </figure>
                                        <?php
                                        endif;
                                        ?>
                                    <div class="entry-cat-user">
                                        <div class='entry-post-user'><?php                                            
                                            echo wp_kses_post( doctorial_blog_author() );
                                        ?></div>
                                        <div class='entry-post-cat'>
                                            <?php doctorial_blog_categories();?>
                                        </div>
                                    </div>
                                    <div class="blog-content-wrap">
                                            <?php the_title('<h4 class="blog-title"><a href="'. esc_url( get_the_permalink() ) .'">','</a></h4>');?>
                                        <div class="blog-content">
                                            <?php the_excerpt()?>
                                            <div class="blog-footer">
                                                <a class="readmore bttn ft-arrow" href="<?php the_permalink();?>"><?php echo esc_html($blog_readmore);?></a>
                                                <div class="blog-footer-right"><?php comments_popup_link();?></div>         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            ?>
                        </div>
                    <?php endif;?>
                </div>
            </section>

            <?php 
        endif;
    endif;


if(get_theme_mod('doctorial_homepage_testimonial_option',0)):
    $testimonial_cat    =   get_theme_mod('doctorial_homepage_testimonial_category',0);
    $test_page =   get_theme_mod('doctorial_homepage_testimonial_page',0);
        if( (!empty($test_page) && ($test_page != 0)) || $testimonial_cat!= 0):
            if( $test_page != 0 )
                $test_data = get_post($test_page);
            $args = array('post_type' => 'post', 'posts_per_page' => 4, 'cat' => $testimonial_cat);
            $args_query = new WP_Query($args);  
    ?>
            <section id="testimonial" class="testimonial-section section">
                <div class="ft-container">
                    <?php if(isset($test_page)):?>
                        <div class="section-header">
                            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo wp_kses_post($test_data->post_title);?></h2>     
                            <div class="testimonial-description section-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" ><?php echo wp_kses_post($test_data->post_content);?></div>
                        </div>
                    <?php endif;?>
                    <ul class="testimonial-slider">
                        <?php
                        while($args_query->have_posts()):
                            $args_query->the_post();
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'doctorial-square-image');
                            $img_link = esc_url($img[0]);

                            ?>
                            <li class="slides"> 
                                <div class="testimonial-wrapper">
                                                    
                                    <div class="testimonial-content">   
                                    <?php the_content()?>
                                        
                                    </div>   
                                    <div class="testimonial-img-title">            
                                        <?php
                                        if(has_post_thumbnail()):
                                            ?>
                                        <figure>
                                                <img src="<?php echo esc_url($img_link);?>" alt = "<?php the_title_attribute();?>"/>
                                        </figure>
                                        <?php
                                        endif;
                                        ?>   
                                        <div class="testimonial-title-wrap">
                                            <?php the_title('<h4 class="testimonial-title">','</h4>');?>
                                            <h5><?php echo esc_html(get_the_excerpt());?></h5>
                                        </div>
                                        
                                    </div> 
                                </div>    
                            </li>
                        <?php
                        endwhile;
                        ?>
                    </ul>

                </div>
            </section>

    <?php 
    endif;
endif;

    if(get_theme_mod('doctorial_homepage_contact_option',0)):?>

            <section id="contact" class="contact-section section">
                <div class="ft-container">
                    <?php 
                    $contact_page =   get_theme_mod('doctorial_homepage_contact_page',0); 
                    $contact_image =   get_theme_mod('doctorial_homepage_contact_image',''); 
                    $contact_form =   get_theme_mod('doctorial_homepage_contact_form','');
                    if( $contact_page != 0 ):
                        $contact_data = get_post($contact_page);?>
                        <div class="section-header">
                            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><?php echo wp_kses_post($contact_data->post_title);?></h2>     
                            <div class="contact-description section-description wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" ><?php echo wp_kses_post($contact_data->post_content);?></div>
                        </div>
                        <?php 
                    endif;?>
                    <?php if( !empty($contact_form) || !empty($contact_image)):?>
                        <div class="contact-form-wrap ">
                            <?php
                            if(!empty($contact_form)):?>
                                <div class="contact-form clear">
                                    <?php echo do_shortcode(wp_kses_post($contact_form));?>
                                </div>

                            <?php
                            endif;
                            if(!empty($contact_image)):?>
                                <div class="contact-image wow fadeInRight" data-wow-duration = "2s">
                                    <img src="<?php echo esc_url($contact_image);?>">
                                </div>
                                <?php
                            endif;
                            ?>
                        </div>
                        <?php 
                    endif;
                    ?>                    
                </div>
            </section>

<?php 
    endif;

get_footer();

?>