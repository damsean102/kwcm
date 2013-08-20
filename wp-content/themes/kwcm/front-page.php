<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<p>Banners Go Here</p>
		</div><!-- END OF span12 DIV -->
	</div><!-- END OF row-fluid DIV -->
	
	<div class="row-fluid">
		<div class="span4">
			<h2 class="heading"><?php the_field('left_box_title'); ?></h2>
			<hr class="blackLine">
			<?php the_field('left_box_content'); ?>
		</div><!-- END OF span4 DIV -->
		
		<div class="span4">
			<?php 
				$middleSelect = get_field('middle_box_select');
				
				if ($middleSelect == 'events') :
				?>
					<h2 class="heading">Upcoming Events</h2>
					<hr class="blackLine">
				<?php
				
				echo "<p>SHOW MOST RECENT EVENTS</p>";
				
				
				elseif ($middleSelect == 'text') :
				?>
					<h2 class="heading"><?php the_field('middle_box_title'); ?></h2>
					<hr class="blackLine">
					<?php the_field('middle_box_text'); ?>
				<?php
				endif;
			?>
		</div><!-- END OF span4 DIV -->
		
		<div class="span4">
			<h2 class="heading"><?php the_field('right_box_title'); ?></h2>
			<hr class="blackLine">
			<?php the_field('right_box_content'); ?>
		</div><!-- END OF span4 DIV -->
		
	</div><!-- END OF row DIV -->
	
	<hr class="line" />
	
	<h3 class="heading">Recent Messages</h3>
	
	<div class="row-fluid">
		<div class="span3">
			<div id="message">
				<p><span class="messageSpeaker">Speaker:</span><br>
				Title</p>
				
			</div>
			<div class="listen"><img src="<?php bloginfo('template_url'); ?>/img/speaker.png">&nbsp;<span class="orangeBG">Listen &rarr;</span></div><!-- END of listen DIV -->
		</div><!-- END OF span3 DIV -->
		
		<div class="span3">
			<p>Recent Message Here</p>
		</div><!-- END OF span3 DIV -->
		
		<div class="span3">
			<p>Recent Message Here</p>
		</div><!-- END OF span3 DIV -->
		
		<div class="span3">
			<p>Recent Message Here</p>
		</div><!-- END OF span3 DIV -->
	</div>
	
	<hr class="line" />
	
</div><!-- END OF container DIV -->


	
<?php endwhile; ?>
	
<?php else : ?>

	<h2>Sorry...</h2>
	<p>No posts were found.</p>
	
<?php endif; ?>


<?php get_footer(); ?>