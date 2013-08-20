<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Register Custom Post Type
function register_banners() {
	$labels = array(
		'name'                => _x( 'Banners', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Banners', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Banner:', 'text_domain' ),
		'all_items'           => __( 'All Banners', 'text_domain' ),
		'view_item'           => __( 'View Banner', 'text_domain' ),
		'add_new_item'        => __( 'Add New Banner', 'text_domain' ),
		'add_new'             => __( 'New Banner', 'text_domain' ),
		'edit_item'           => __( 'Edit Banner', 'text_domain' ),
		'update_item'         => __( 'Update Banner', 'text_domain' ),
		'search_items'        => __( 'Search banners', 'text_domain' ),
		'not_found'           => __( 'No banners found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No banners found in Trash', 'text_domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'banners', $args );
}

// Hook into the 'init' action
add_action( 'init', 'register_banners', 0 );


// Register Custom Post Type
function audio_post_type() {
	$labels = array(
		'name'                => _x( 'Audio', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Audio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Audio', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Audio:', 'text_domain' ),
		'all_items'           => __( 'All Audio', 'text_domain' ),
		'view_item'           => __( 'View Audio', 'text_domain' ),
		'add_new_item'        => __( 'Add New Audio', 'text_domain' ),
		'add_new'             => __( 'New Audio', 'text_domain' ),
		'edit_item'           => __( 'Edit Audio', 'text_domain' ),
		'update_item'         => __( 'Update Audio', 'text_domain' ),
		'search_items'        => __( 'Search Audio', 'text_domain' ),
		'not_found'           => __( 'No Audio found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Audio found in Trash', 'text_domain' ),
	);

	$args = array(
		'label'               => __( 'audio', 'text_domain' ),
		'description'         => __( 'Audio messges', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'page-attributes', ),
		'taxonomies'          => array( 'category', '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'audio', $args );
}

// Hook into the 'init' action
add_action( 'init', 'audio_post_type', 0 );


// Register Custom Post Type
function events_post_type() {
	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Events', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Event:', 'text_domain' ),
		'all_items'           => __( 'All Events', 'text_domain' ),
		'view_item'           => __( 'View Event', 'text_domain' ),
		'add_new_item'        => __( 'Add New Event', 'text_domain' ),
		'add_new'             => __( 'New Event', 'text_domain' ),
		'edit_item'           => __( 'Edit Event', 'text_domain' ),
		'update_item'         => __( 'Update Event', 'text_domain' ),
		'search_items'        => __( 'Search Events', 'text_domain' ),
		'not_found'           => __( 'No Events found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Events found in Trash', 'text_domain' ),
	);

	$args = array(
		'label'               => __( 'events', 'text_domain' ),
		'description'         => __( 'Event pages', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'Events', $args );
}

// Hook into the 'init' action
add_action( 'init', 'events_post_type', 0 );

// Register Custom Post Type
function leadership_custom_post_type() {

	$labels = array(
		'name'                => 'Leaders',
		'singular_name'       => 'Leader',
		'menu_name'           => 'Leaders',
		'parent_item_colon'   => 'Parent Leader:',
		'all_items'           => 'All Leaders',
		'view_item'           => 'View Leader',
		'add_new_item'        => 'Add New Leader',
		'add_new'             => 'New Leader',
		'edit_item'           => 'Edit Leader',
		'update_item'         => 'Update Leader',
		'search_items'        => 'Search Leaders',
		'not_found'           => 'No leaders found',
		'not_found_in_trash'  => 'No leaders found in Trash',
	);
	$args = array(
		'label'               => 'leadership',
		'description'         => 'Leadership information pages',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'leadership', $args );

}

// Hook into the 'init' action
add_action( 'init', 'leadership_custom_post_type', 0 );

function is_ancestor($post_id) {
    global $wp_query;
    $ancestors = $wp_query->post->ancestors;
    if ( in_array($post_id, $ancestors) ) {
        return true;
    } else {
        return false;
    }
}

function top_most_parent() {
	global $post;
	if ($post->post_parent)	{
		$ancestors=get_post_ancestors($post->ID);
		$root=count($ancestors)-1;
		return $ancestors[$root];
	} else {
		return $post->ID;
	}	
}


function lifeCentreMap($att) {
	extract(shortcode_atts(array(
		'height' => '350',
	), $att));
	//$height = 750;

	$map = "<div id='map' style='height:" . $height . "px;'></div><!-- END OF map DIV -->";

	return $map;

}
add_shortcode( 'lcmap','lifeCentreMap');

?>