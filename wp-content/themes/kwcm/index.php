<?php get_header(); ?>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<a href=""><?php the_title(); ?></a>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

		</div><!-- END OF span12 DIV -->
	</div><!-- END of row-fluid DIV -->
</div><!-- END of container DIV -->
<?php get_footer(); ?>
