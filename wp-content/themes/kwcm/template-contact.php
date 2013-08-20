<?php /* Template Name: Contact Page Template */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container contact-page">
	<div class="row-fluid">
		<div class="span6">
			<h1 class="heading"><?php the_title(); ?></h1>
			
			<?php the_content(); ?>  
			
		</div><!-- END OF span6 DIV -->
			
		<div class="span6">
			
			<div id="map"></div><!-- END OF map DIV -->
			
			<div class="block">
				<h3 class="heading">Email Us</h3>
				<?php the_field('contact_emails'); ?>
			</div><!-- END OF block DIV -->
			
			
		</div><!-- END OF span6 DIV -->
	</div><!-- END OF row-fluid DIV -->
</div><!-- END OF container DIV -->


	
<?php endwhile; ?>
	
<?php else : ?>

	<h2>Sorry...</h2>
	<p>No posts were found.</p>
	
<?php endif; ?>


<?php get_footer(); ?>