<!DOCTYPE html>
<html>

<head>

	<title>Kingsway Church - Manchester</title>
	
	<!-- Load Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
	
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap-responsive.min.css">
	
	<!-- Load LESS stylesheet -->  
   	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/style.css">
   	
	<!-- Load jQuery -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
	<!-- Load Twitter Bootstrap js  -->
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
	
	<?php //if (is_page(12)) : ?>
		<script type="text/javascript"
		      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKWfjCw0oE87QT8d8DCYbeebkI_UHul4A&sensor=true">
		    </script>
		    <script type="text/javascript">
		    
		      function initialize() {
		      	var myLatlng = new google.maps.LatLng(53.416640, -2.334664);
		        var mapOptions = {
		          center: myLatlng,
		          zoom: 12,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        };
		        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
		            
				var marker = new google.maps.Marker({
				      position: myLatlng,
				      map: map,
				      title:"LifeChurch Manchester"
				});
		      }
		      google.maps.event.addDomListener(window, 'load', initialize);
		    </script>
		 
	<?php //endif; ?>

	
	<?php wp_head(); ?>

</head>



<body <?php body_class(); ?> onload="initialize()">

<div id="wrapper">
	<div id="main">
	
	<div id="blackStrip"></div>
	
	<div class="stuff"></div>
	
	<div class="container">
		<div class="row-fluid">
			<div class="span3">
				<a href="<?php bloginfo('url'); ?>">
					<!--<img src="<?php bloginfo('template_url'); ?>/img/new-logo.png">-->
					<?php 
						$logoID = get_field('logo', 7);
						$logoSRC = wp_get_attachment_image_src($logoID, 'full');
					?>
					<img src="<?php echo $logoSRC[0]; ?>">
				</a>
			</div><!-- END OF span3 DIV -->
			<div class="span9">
			
				<?php 
				$defaults = array(
					'menu'            => 'Main Menu',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => 'nav',
					'menu_class'      => 'menu',
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
			</div><!-- END OF span8 DIV -->
		</div><!-- END OF row-fluid DIV -->
		
		
		<hr class="line" />
		
	</div><!-- END OF container DIV -->
	
	