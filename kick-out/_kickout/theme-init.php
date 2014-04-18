<?php

# THEME SUPPORT

add_action( 'after_setup_theme', 'kickout_theme_support' );



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



?>