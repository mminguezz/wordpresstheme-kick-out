<?php

# THEME SUPPORT

add_action( 'after_setup_theme', 'kickout_theme_support' );
add_action( 'after_setup_theme', 'kickout_theme_menus' );
add_action( 'after_setup_theme', 'kickout_theme_setup' );

add_filter('user_contactmethods','kickout_contactmethods',10,1);


// Elimina si no los necesitas
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');


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
		'primary' => __( 'Primary Menu', "TEXT_DOMAIN" ),
		'footer' => __( 'Footer Menu', "TEXT_DOMAIN" )
	) );
}


function kickout_contactmethods( $contactmethods ) {
	$contactmethods['twitter'] = __('Twitter', "TEXT_DOMAIN" ); // Add Twitter
	$contactmethods['facebook'] = __('Facebook', "TEXT_DOMAIN" ); // Add Facebook
	$contactmethods['googleplus'] = __('Google +', "TEXT_DOMAIN" ); // Add Facebook
	//$contactmethods['skype'] = __('Skype Username', "TEXT_DOMAIN" ); // Add skype
	unset($contactmethods['yim']); // Remove Yahoo IM
	unset($contactmethods['aim']); // Remove AIM
	unset($contactmethods['jabber']); // Remove Jabber
	return $contactmethods;
}


function my_theme_setup(){
    load_theme_textdomain( "TEXT_DOMAIN", TEMPLATEPATH . '/lang');
}

?>