<?php

# THEME SUPPORT

add_action( 'after_setup_theme', 'kickout_theme_support' );
add_action( 'after_setup_theme', 'kickout_theme_menus' );
add_action( 'after_setup_theme', 'kickout_theme_setup' );

add_filter('user_contactmethods','kickout_contactmethods',10,1);

add_filter( 'excerpt_length', 'kickout_excerpt_long', 999 );

// Elimina si no los necesitas
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');


function kickout_theme_support() {
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'widgets' );
//	add_theme_support( 'custom-background' );
	remove_theme_support( 'custom-background' );
//	add_theme_support( 'custom-header' );
	remove_theme_support( 'custom-header' );
//	add_theme_support( 'automatic-feed-links' );
	remove_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
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


function kickout_theme_setup(){
    load_theme_textdomain( "TEXT_DOMAIN", TEMPLATEPATH . '/lang');
}


// modificamos la longitud del extracto
function kickout_excerpt_long(){
    return 21;
}


?>