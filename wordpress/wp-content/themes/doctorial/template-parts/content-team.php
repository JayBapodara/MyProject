
<div class="team-page-content">
	<?php
	if(has_post_thumbnail()){
		$img_src = wp_get_attachment_image_src(get_post_thumbnail_id(),'doctorial-square-image');
		$img_link = $img_src[0];
	?>
		<figure class="entry-image">
			<img src= "<?php echo esc_url($img_link);?>" alt='<?php the_title_attribute();?>'/>
		</figure>
	<?php
	}
	?>
	<div class="team-content-wrap">
		<header class="team-header">
			<h4 class="team-title"><?php the_title();?></h4> 
        	<?php the_excerpt()?>
		</header><!-- .entry-header -->
		<div class="ft-readmore">
            <a class="bttn" href="<?php the_permalink();?>"><?php esc_html_e('Read More','doctorial');?></a> 
	    </div>
	</div>

</div><!-- #post-## -->
