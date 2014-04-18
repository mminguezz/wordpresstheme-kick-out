<?php

# THEME SUPPORT

add_action( 'after_setup_theme', 'kickout_theme_support' );
add_action( 'after_setup_theme', 'kickout_theme_menus' );

add_filter('user_contactmethods','new_contactmethods',10,1);

function kickout_theme_support() {
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	add_theme_support( 'post-thumbnails' );
//	add_theme_support( 'custom-background' );
	remove_theme_support( 'custom-background' );
//	add_theme_support( 'custom-header' );
	remove_theme_support( 'custom-header' );
//	add_theme_support( 'automatic-feed-links' );
	remove_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form') );
}

function kickout_theme_menus(){
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', TEXT_DOMINE ),
		'footer' => __( 'Footer Menu', TEXT_DOMINE )
	) );
}


function kickout_contactmethods( $contactmethods ) {
	$contactmethods['twitter'] = 'Twitter'; // Add Twitter
	$contactmethods['facebook'] = 'Facebook'; // Add Facebook
	unset($contactmethods['yim']); // Remove Yahoo IM
	unset($contactmethods['aim']); // Remove AIM
	unset($contactmethods['jabber']); // Remove Jabber
	return $contactmethods;
}


?>