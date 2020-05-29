<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Doctorial
 */

		$img_size = 'doctorial-square-image';

?>


	<div class="testimonial-content-wrap">		
						
			<div class="testimonial-content">
                <?php the_content()?>
			</div>		 
			<header class="entry-header">
				<?php
				if(has_post_thumbnail()){
					$img_src = wp_get_attachment_image_src(get_post_thumbnail_id(),$img_size);
					$img_link = $img_src[0];
				?>
					<figure>
						<img src= "<?php echo esc_url($img_link);?>" alt='<?php the_title_attribute();?>' />
					</figure>
				<?php
				}
				?>		
				<div class="testimonial-title-wrap">
					<?php the_title('<h4 class="testimonial-title">','</h4>');?>
	                <h5><?php echo esc_html(get_the_excerpt());?></h5>
                </div>
			</header><!-- .entry-header -->
		
	</div><!-- .testimonial-content-wrap -->

