<?php 


if (is_page(8) || is_ancestor(8)) :
	$defaults = array(
		'menu'            => 'About Sub Menu',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => 'subNav',
		'menu_class'      => 'menu unstyled',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	wp_nav_menu($defaults);
elseif (is_page(9) || is_ancestor(9)) :
	$defaults = array(
		'menu'            => 'Media Sub Menu',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => 'subNav',
		'menu_class'      => 'menu unstyled',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	wp_nav_menu($defaults);
elseif (is_page(10) || is_ancestor(10)) :
	$defaults = array(
		'menu'            => 'Events Sub Menu',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => 'subNav',
		'menu_class'      => 'menu unstyled',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	wp_nav_menu($defaults);
elseif (is_page(11) || is_ancestor(11)) :
	$defaults = array(
		'menu'            => 'Ministries Sub Menu',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => 'subNav',
		'menu_class'      => 'menu unstyled',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	wp_nav_menu($defaults);
endif;



?>