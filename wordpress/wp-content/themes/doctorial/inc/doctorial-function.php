<?php
    add_action('doctorial_pageheader','doctorial_pageheader_cb');
    function doctorial_pageheader_cb() {?>

            <header class="page-header">
                <h2 class="page-title">
                    <?php
                    if ( is_category() ) :
                        single_cat_title();
                    elseif ( is_archive() ) :
                        the_archive_title();
                    elseif( is_singular() ):
                        the_title();
                    endif; ?>
                </h2>
                <?php 
                do_action('doctorial_breadcrumb');?>
            </header>

    <?php
    }
    function doctorial_web_layout($classes){
        if(get_theme_mod('doctorial_default_weblayout_layout','fullwidth') == 'boxed'){
            $classes[]= 'boxed-layout';
        }
        elseif(get_theme_mod('doctorial_default_weblayout_layout','fullwidth') == 'fullwidth'){
            $classes[]='fullwidth-layout';
        }
        return $classes;
   }   
   add_filter( 'body_class', 'doctorial_web_layout' );

    function doctorial_no_slider($classes){
        $slider_opt = get_theme_mod('doctorial_homepage_slider_option',0);
        $slider_cat = get_theme_mod('doctorial_homepage_slider_category',0);
        if(($slider_opt == 0) || empty($slider_cat)){
            $classes[]= 'no-slider';
        }        
        return $classes;
    }   
    add_filter( 'body_class', 'doctorial_no_slider' );



	function doctorial_category_lists(){
		$category 	=	get_categories();
		$cat_list 	=	array();
		$cat_list[0]=	esc_html__('Select category','doctorial');
		foreach ($category as $cat) {
			$cat_list[$cat->term_id]	=	$cat->name;
		}
		return $cat_list;
	}


function doctorial_social_cb(){
    $facebooklink = esc_url(get_theme_mod('doctorial_social_facebook',''));
    $twitterlink = esc_url(get_theme_mod('doctorial_social_twitter',''));
    $google_pluslink = esc_url(get_theme_mod('doctorial_social_googleplus',''));
    $youtubelink = esc_url(get_theme_mod('doctorial_social_youtube',''));
    $pinterestlink = esc_url(get_theme_mod('doctorial_social_pinterest',''));
    $linkedinlink = esc_url(get_theme_mod('doctorial_social_linkedin',''));
    $flickrlink = esc_url(get_theme_mod('doctorial_social_flicker',''));
    $vimeolink = esc_url(get_theme_mod('doctorial_social_vimeo',''));
    $stumbleuponlink = esc_url(get_theme_mod('doctorial_social_stumbleupon',''));
    $instagramlink = esc_url(get_theme_mod('doctorial_social_instagram',''));
    $soundcloudlink = esc_url(get_theme_mod('doctorial_social_soundcloud',''));
    $tumblrlink = esc_url(get_theme_mod('doctorial_social_tumbler',''));
    $skypelink = esc_attr(get_theme_mod('doctorial_social_skype',''));
    ?>
    <div class="social-icons ">
        <?php if(!empty($facebooklink)){ ?>
            <a href="<?php echo esc_url($facebooklink); ?>" class="facebook" data-title="<?php esc_attr_e('Facebook','doctorial');?>" target="_blank"><i class="fa fa-facebook"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($twitterlink)){ ?>
            <a href="<?php echo esc_url($twitterlink); ?>" class="twitter" data-title="<?php esc_attr_e('Twitter','doctorial');?>" target="_blank"><i class="fa fa-twitter"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($google_pluslink)){ ?>
            <a href="<?php echo esc_url($google_pluslink); ?>" class="gplus" data-title="<?php esc_attr_e('Google Plus','doctorial');?>" target="_blank"><i class="fa fa-google-plus"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($youtubelink)){ ?>
            <a href="<?php echo esc_url($youtubelink); ?>" class="youtube" data-title="<?php esc_attr_e('Youtube','doctorial');?>" target="_blank"><i class="fa fa-youtube"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($pinterestlink)){ ?>
            <a href="<?php echo esc_url($pinterestlink); ?>" class="pinterest" data-title="<?php esc_attr_e('Pinterest','doctorial');?>" target="_blank"><i class="fa fa-pinterest"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($linkedinlink)){ ?>
            <a href="<?php echo esc_url($linkedinlink); ?>" class="linkedin" data-title="<?php esc_attr_e('Linkedin','doctorial');?>" target="_blank"><i class="fa fa-linkedin"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($flickrlink)){ ?>
            <a href="<?php echo esc_url($flickrlink); ?>" class="flickr" data-title="<?php esc_attr_e('Flickr','doctorial');?>" target="_blank"><i class="fa fa-flickr"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($vimeolink)){ ?>
            <a href="<?php echo esc_url($vimeolink); ?>" class="vimeo" data-title="<?php esc_attr_e('Vimeo','doctorial');?>" target="_blank"><i class="fa fa-vimeo-square"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($instagramlink)){ ?>
            <a href="<?php echo esc_url($instagramlink); ?>" class="instagram" data-title="<?php esc_attr_e('instagram','doctorial');?>" target="_blank"><i class="fa fa-instagram"></i><span></span></a>
        <?php } ?>

        <?php if(!empty($tumblrlink)){ ?>
            <a href="<?php echo esc_url($tumblrlink); ?>" class="tumblr" data-title="<?php esc_attr_e('tumblr','doctorial');?>" target="_blank"><i class="fa fa-tumblr"></i><span></span></a>
        <?php } ?>
        
        <?php if(!empty($soundcloudlink)){ ?>
            <a href="<?php echo esc_url($soundcloudlink); ?>" class="delicious" data-title="<?php esc_attr_e('delicious','doctorial');?>" target="_blank"><i class="fa fa-delicious"></i><span></span></a>
        <?php } ?>        

        <?php if(!empty($stumbleuponlink)){ ?>
            <a href="<?php echo esc_url($stumbleuponlink); ?>" class="stumbleupon" data-title="<?php esc_attr_e('stumbleupon','doctorial');?>" target="_blank"><i class="fa fa-stumbleupon"></i><span></span></a>
        <?php } ?>
        
        <?php if(!empty($skypelink)){ ?>
            <a href="<?php echo esc_attr__('skype:', 'doctorial').esc_attr($skypelink); ?>" class="skype" data-title="<?php esc_attr_e('Skype','doctorial');?>"><i class="fa fa-skype"></i><span></span></a>
        <?php } ?>
    </div>
<?php
}
add_action('doctorial_social','doctorial_social_cb', 10);

function doctorial_slider_cb(){
    if(get_theme_mod('doctorial_homepage_slider_option','0')):
        $slider =   get_theme_mod('doctorial_homepage_slider_category', 0 );
        $slider_readmore = esc_attr(get_theme_mod('doctorial_homepage_slider_readmore',esc_html__('Get Started','doctorial')));
        $show_caption = get_theme_mod('doctorial_homepage_slider_caption',0); 

        $args = array('post_type' => 'post', 'post_status'=>'publish', 'posts_per_page' => -1, 'cat' => $slider);

        $args_query = new WP_Query($args);  
        if ($args_query->have_posts()) :        
            ?>
            <section id="slider" class="section">
                <ul class="main-slider">
                    <?php
                    while ($args_query->have_posts()):
                        $args_query->the_post();
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full',true);
                        $img_link = esc_url($img[0]);
                    ?>
                    <li class="slide" style="background-image: url('<?php echo esc_url($img_link);?>');">
                        <?php if( $show_caption ): ?>
                            <div class="slide-caption">
                                <div class="ft-container">
                                    <div class="caption-wrapper">
                                        <div class="caption-title"><?php the_title();?></div>
                                        <div class="slide-content">
                                            <?php the_excerpt();?>
                                            <?php
                                            if(!empty($slider_readmore)){
                                            ?>
                                                <a href="<?php the_permalink();?>" class="slide-readmore bttn ft-arrow"><?php echo esc_html($slider_readmore);?></a>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                    </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

                </ul>

            </section>

        <?php 
        endif;
    endif;
    
}
add_action('doctorial_slider','doctorial_slider_cb');


//adding custom scripts and styles in header for favicon and other
function doctorial_header_scripts(){
    $header_bg_v = get_header_image();
    if(($header_bg_v)){?>
        <style type='text/css' media='all'>
            .site-header { 
                background: url("<?php echo esc_url($header_bg_v);?>") no-repeat scroll left top rgba(0, 0, 0, 0); 
                position: relative; 
                z-index: 1;
                background-size: cover; 
            }
            .site-header .ed-container-home:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background: rgba(255,255,255,0.7);
                z-index: -1;
            }
        </style>
        <?php
    }
}
add_action('wp_head','doctorial_header_scripts');


// functions for blog categories
function doctorial_blog_categories(){    
    /* translators: used between list items, there is a space after the comma */
    $categories_list = get_the_category_list( esc_html__( ', ', 'doctorial' ) );
    if ( $categories_list ) {
        /* translators: 1: list of categories. */
        printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'doctorial' ) . '</span>', $categories_list ); // WPCS: XSS OK.
    }
}

// functions for blog author
function doctorial_blog_author(){ 
    $byline = sprintf(
        /* translators: %s: post author. */
        esc_html_x( ' %s', 'post author', 'doctorial' ),
        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
    );
    return $byline;
}
