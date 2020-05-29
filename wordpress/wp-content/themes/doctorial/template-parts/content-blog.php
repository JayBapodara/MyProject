<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Doctorial
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-content-img">                   
            <?php
            if(has_post_thumbnail()):
                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'doctorial-full');
                $img_link = esc_url($img[0]);
                ?>
            <figure>
                <a href="<?php the_permalink();?>">  
                    <img src="<?php echo esc_url($img_link);?>" alt = '<?php the_title_attribute();?>' />
                </a>    <div class="blog-date"><a href="<?php echo esc_url( get_day_link('', '', '') );?>"><span><?php the_time('d');?></span><?php the_time('M');?></a></div>
            </figure>
            <?php
            endif;
            ?>
        <div class="entry-cat-user">
            <div class='entry-post-cat'>
                <?php doctorial_blog_categories(); ?></div>
            <div class='entry-post-user'><?php 
                echo wp_kses_post( doctorial_blog_author() );
            ?></div>
        </div>
        <div class="blog-content-wrap">
                <?php the_title('<h4 class="blog-title"><a href="'.esc_url(get_the_permalink()).'">','</a></h4>');?>
            <div class="blog-content">
                <?php the_excerpt()?>
                <div class="blog-footer">
                    <a class="readmore bttn ft-arrow" href="<?php the_permalink();?>"><?php esc_html_e('Read More','doctorial')?></a>
                    <div class="blog-footer-right"><?php comments_popup_link();?></div>         
                </div>
            </div>
        </div>
    </div>

</article><!-- #post-## -->
