<?php get_header(); ?>		
<?php 
    echo do_shortcode("[metaslider id=120]"); 
?>
<br/>
		<div class="col-md-9 cont-grid">
		
		<?php // if is home and is not paged show featured post
		function random_bg() {
			$bgs = array ('F4E04D', 'E59F71', 'A9E5BB', '3BCEAC', 'D6F49D', 'D0FEF5', 'E2EFDE', 'F5E6E8', 'CFF27E', 'C7FFED');
			$n = rand( 0, 9);
			echo $bgs[$n];
		}
		/*
		if (is_home()) {
		
			if (!is_paged()) {
				global $wp_query;
				$tag = get_term_by('name', 'featured', 'post_tag');
				$tag_id = $tag->term_id;
				$wp_query->set("tag__not_in", array($tag_id));
				$wp_query->get_posts();
			}
		}*/
		?>
		
		<?php if ( is_search() ) { ?>

			<p class="result">Hasil pencarian untuk: <strong><i><?php echo $s ?></i></strong></p>
		
		<?php }  ?>

		<div class="grid" style="margin-left:0.5% ">
					
			<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 

				<div class="item" style="background-color:#<?php random_bg();?>">
				
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						
						
							<?php 
							$video = get_post_meta($post->ID, 'fullby_video', true );
							
							if($video != '') { ?>
						 			
						 		<i class="fa fa-video-camera"></i> Video
						 			
						 	<?php } else if (strpos($post->post_content,'[gallery') !== false) { ?>
						 			
						 		<i class="fa fa-th"></i> Gallery
						
								<?php } else {?>
						
								<?php } ?>
								
						
						 
						<?php $video = get_post_meta($post->ID, 'fullby_video', true );
						
						if($video != '') {?>
						
						
					    	<a href="<?php the_permalink(); ?>" class="link-video">
								<img src="http://img.youtube.com/vi/<?php echo $video ?>/hqdefault.jpg" class="grid-cop"/>
								<i class="fa fa-play-circle fa-4x"></i> 
							</a>
						
						<?php 				                 
						
							} else if ( has_post_thumbnail() ) { ?>
						
						   <a href="<?php the_permalink(); ?>">
						        <?php the_post_thumbnail('medium', array('class' => 'grid-cop')); ?>
						   </a>
						
						<?php } ?>					
						<h2 class="grid-tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p style="margin: 0 0 0 10px">Post oleh: <?php the_author() ?> </p>
						<p class="meta" style="margin: 0 0 0 10px"> <i class="fa fa-clock-o"></i> <?php the_time('j M , Y') ?> &nbsp;
						<div class="grid-text">
						
							<?php the_content('More...');?>
							
						</div>
						
						<p>
							<?php $post_tags = wp_get_post_tags($post->ID); if(!empty($post_tags)) {?>
								<span class="tag-post"> <i class="fa fa-tag"></i> <?php the_tags('', ', ', ''); ?> </span>
							<?php } ?>
						</p>
						
					</div>
					
				</div>	

			<?php endwhile; ?>
	        <?php else : ?>

	                <p>Sorry, no posts matched your criteria.</p>

	        <?php endif; ?> 

		</div>	

		<div class="pagination">
		
			<?php
			global $wp_query;
			
			$big = 999999999; // need an unlikely integer
			
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			?>
			
		</div>
			
	</div>
	
	
	
<?php get_footer(); ?>	