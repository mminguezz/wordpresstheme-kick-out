<?php
/**
* kick-out functions and definitions
*
* @package kick-out
*/

# DEFINES
	define( "TEXT_DOMINE" , 'kickout' );
	define( "SITE_URL" , get_bloginfo('url') );
	define( "THEME_URL" , get_template_directory_uri() );
	
# SUPPORT
	add_theme_support( 'menus' );
	add_theme_support( 'widgets' );
	add_theme_support( 'post-thumbnails' );

?>
