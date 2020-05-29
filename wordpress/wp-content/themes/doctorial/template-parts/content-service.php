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
	<div class="service-page-content">		
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
			<div class="service-content-wrap">
				<?php the_title('<h4 class="service-title"><a href="' . esc_url( get_the_permalink() ) . '">','</a></h4>');?>
			</div>	
	</div><!-- .service-content-wrap -->

