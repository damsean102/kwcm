<?php
/*
Template Name: Leaders Template
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="row-fluid">
		<div class="span3 left-sidebar">
			<?php 
				if ($post->post_parent)	{
					$ancestors = get_post_ancestors($post->ID);
					$root = count($ancestors)-1;
					$parent = $ancestors[$root];
					echo "<p class='heading'><a href='" . get_permalink($parent) . "'>"  . get_the_title($parent) . "</a></p>";
				} else {
					$parent = $post->ID;
					echo "<p class='heading'>"  . get_the_title($parent) . "</p>";
				}
				
				get_template_part('blocks/sidebar-nav'); 
			?>		  
		</div><!-- END OF span3 DIV -->
		
		<div class="span9">
			<?php get_template_part( "blocks/breadcrumb" ); ?>
			

			<h1><?php the_title(); ?></h1>

			
			<?php the_content(); ?>


			<div class="leaders">
				<?php 
					$leaders = get_posts(  array(
						'numberposts'		=>	-1,
						'offset'			=>	0,
						'orderby'			=>	'menu_order',
						'order'				=>	'ASC',
						'post_type'			=>	'leadership' )
					);

					foreach ($leaders as $post): setup_postdata($post); 

					$leaderIMGID = get_field('leadership_image');
					$leaderIMG = wp_get_attachment_image_src( $leaderIMGID, 'full' );

					?>
						
					<div class="who">
						
						<img src="<?php echo $leaderIMG[0]; ?>" class="whoPic">
						
						<div class="whoText">
							<div class="whoPerson"><h3><?php the_title(); ?></h3></div><!-- END of whoPerson DIV --> 
							<?php the_content(); ?>
						</div><!-- END of .whoText DIV --> 
					</div><!-- END of .who DIV --> 
						

					<?php
						endforeach; 
						wp_reset_postdata();
					?>
			</div><!-- END OF leaders DIV -->

		</div><!-- END OF span9 DIV -->
	</div><!-- END OF row-fluid DIV -->

</div><!-- END OF container DIV -->


	
<?php endwhile; ?>
	
<?php else : ?>

	<h2>Sorry...</h2>
	<p>No posts were found.</p>
	
<?php endif; ?>


<?php get_footer(); ?>