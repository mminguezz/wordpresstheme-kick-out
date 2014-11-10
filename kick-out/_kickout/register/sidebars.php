<?php
// Register Sidebar
function kickout_sidebar() {

	$args = array(
		'id'            => 'kickout_page',
		'name'          => __( 'Sidebar page', 'TEXT_DOMAIN' ),
		'description'   => __( 'This sidebar is display in pages', 'TEXT_DOMAIN' ),
		'class'         => 'page-sidebar',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="widget %2$a">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'kickout_sidebar' );


?>