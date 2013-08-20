<?php
/*
Template Name: Events Template
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

			<h2>Our Latest Events</h2>
			<?php the_content(); ?>


			<div class="events">
				<?php 
					$events = get_posts(  array(
						'numberposts'		=>	-1,
						'offset'			=>	0,
						'orderby'			=>	'post_date',
						'order'				=>	'DESC',
						'post_type'			=>	'events' )
					);

					foreach ($events as $post): setup_postdata($post); 
						?>
						<div class="event">
							<?php

							$eventImgID = get_field('event_image'); 
							$eventImgURL = wp_get_attachment_image_src( $eventImgID, 'full' );

							echo "<hr class='orangeLine1'>";

							if ($eventImgID):
								echo "<img src='" . $eventImgURL[0] . "' class='aligncenter'>";
							endif;

							?>
							<h2 class="heading"><?php echo get_the_title(); ?></h2>
							<?php
								the_content();
							?>



							<p><strong>Help us promote this event</strong></p>
							<ul>
								<li>Share on Twitter</li>
								<li>Share on FB</li>
							</ul>
						</div><!-- END event DIV -->
					<?php 
					endforeach;
					wp_reset_postdata();
				?>
			</div><!-- END OF events DIV -->

		</div><!-- END OF span9 DIV -->
	</div><!-- END OF row-fluid DIV -->

</div><!-- END OF container DIV -->


	
<?php endwhile; ?>
	
<?php else : ?>

	<h2>Sorry...</h2>
	<p>No posts were found.</p>
	
<?php endif; ?>


<?php get_footer(); ?>