<?php
// Register Custom Post Type
function register_custom_post_type_porfolio() {

	$labels = array(
		'name'                => _x( 'Porfolios', 'Post Type General Name', 'kickout' ),
		'singular_name'       => _x( 'Porfolio', 'Post Type Singular Name', 'kickout' ),
		'menu_name'           => __( 'Porfolio', 'kickout' ),
		'parent_item_colon'   => __( 'Parent Item:', 'kickout' ),
		'all_items'           => __( 'All Items', 'kickout' ),
		'view_item'           => __( 'View Item', 'kickout' ),
		'add_new_item'        => __( 'Add New Item', 'kickout' ),
		'add_new'             => __( 'Add New', 'kickout' ),
		'edit_item'           => __( 'Edit Item', 'kickout' ),
		'update_item'         => __( 'Update Item', 'kickout' ),
		'search_items'        => __( 'Search Item', 'kickout' ),
		'not_found'           => __( 'Not found', 'kickout' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'kickout' ),
	);
	$args = array(
		'label'               => __( 'porfolio', 'kickout' ),
		'description'         => __( 'Create pages of porfolio', 'kickout' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-edit',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'porfolio', $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_custom_post_type_porfolio', 0 );
?>