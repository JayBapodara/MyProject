<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Doctorial
 */
if(is_archive()): ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="archive-content-img">                   
	            <?php
	            if(has_post_thumbnail()):
	                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'doctorial-full');
	                $img_link = esc_url($img[0]);
	                ?>
		            <figure>
		                <a href="<?php the_permalink();?>">  
		                    <img src="<?php echo esc_url($img_link);?>" alt = '<?php the_title_attribute();?>' />
		                </a>    <div class="archive-date"><a href="<?php echo esc_url( get_day_link('', '', '') );?>"><span><?php the_time('d');?></span><?php the_time('M');?></a></div>
		            </figure>
	            <?php
	            endif;
	            ?>
        	<?php if( 'post' === get_post_type() ):?>
		        <div class="entry-cat-user">
		            <div class='entry-post-user'><?php 
		                echo wp_kses_post(doctorial_blog_author());
		            ?></div>
		            <div class='entry-post-cat'>
		            	<?php 
		                doctorial_blog_categories();?>	                	
	                </div>		                
		        </div>
		    <?php endif;?>
	        <div class="archive-content-wrap">
	                <?php the_title('<h4 class="archive-title"><a href="'.esc_url( get_the_permalink() ).'">','</a></h4>');?>
	            <div class="archive-content">
	                <?php the_excerpt()?>
	                <div class="archive-footer">
	                    <a class="readmore bttn ft-arrow" href="<?php the_permalink();?>"><?php echo esc_html__('Read More','doctorial');?></a>
	                    <div class="archive-footer-right"><?php comments_popup_link();?></div>         
	                </div>
	            </div>
	        </div>
	    </div>

	</article><!-- #post-## -->
<?php else:?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
?>		
    	<?php if( 'post' === get_post_type() ):?>
			<div class="entry-cat-user">
	            <div class='entry-post-cat'><?php 
	                echo wp_kses_post(doctorial_blog_author());
	            ?></div>
	            <div class='entry-post-user'><?php 
	                doctorial_blog_categories();
	            ?></div>
	        </div>
	    <?php endif;?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'doctorial' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'doctorial' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if( 'post' === get_post_type() ):?>
		<footer class="entry-footer">
			<?php doctorial_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif;?>
</article><!-- #post-<?php the_ID(); ?> -->

<?php endif;?>
