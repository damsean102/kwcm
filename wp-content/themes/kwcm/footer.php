		<div class="container">
			<div class="row-fluid">
				<div class="span3 offset9">
					<div class="connect">
						<p class="heading">Connect With Us</p>
						<ul class="unstyled">
							<li><a href="https://twitter.com/#!/KWCManchester" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/twitter.png" alt="Twitter" /></a></li>
							<li><a href="http://www.facebook.com/kingswaychurchmanchester" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/facebook.png" alt="Facebook" /></a></li>
						</ul>
					</div><!-- END OF connect DIV -->
				</div><!-- END OF span3 DIV -->
			</div><!-- END OF row-fluid DIV -->
		</div><!-- END OF container DIV -->

	</div><!-- END OF main DIV -->
</div><!-- END OF wrapper DIV -->

<div id="footerBG">

	<div class="container">
		<div class="row-fluid">
			<div class="span9">
				<?php 
				$defaults = array(
					'menu'            => 'Main Menu',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => 'footer-nav',
					'menu_class'      => 'menu unstyled',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu($defaults);
				?>
				<p>&copy; <?php echo date('Y'); ?> King's Way Church is part of Isaiah 58 Trust <br>
				Registered Charity Number 516658</p>
			</div>
			<div class="span2">
				<a href="<?php bloginfo('url'); ?>">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/new-logo.png">-->
					<?php 
						$logoID = get_field('logo', 7);
						$logoSRC = wp_get_attachment_image_src($logoID, 'full');
					?>
					<img src="<?php echo $logoSRC[0]; ?>">
				</a>
			</div>
		</div><!-- END OF row-fluid DIV -->
	</div><!-- END OF container DIV -->

</div><!-- END of footerBG DIV -->

<?php wp_footer(); ?>

</body>
</html>