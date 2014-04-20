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

# GENERAL
	include( TEMPLATEPATH . "/_kickout/theme-init.php" );  		// Confuguraciones de WordPress
	include( TEMPLATEPATH . "/_kickout/theme-customize.php" );   // Funciones personalizadas para el tema

# DEBUG
	if (WP_DEBUG){
		include( TEMPLATEPATH . "/_kickout/theme-debug.php" );  // Funciones usadas durante la creaccion de temas completos
	}

# ADMIN
	include( TEMPLATEPATH . "/_kickout/admin/dashboard-setup.php" );
	include( TEMPLATEPATH . "/_kickout/admin/page-options.php" );

# REGISTER
	include( TEMPLATEPATH . "/_kickout/register/scripts.php" );
	include( TEMPLATEPATH . "/_kickout/register/styles.php" );

# PLUGINS
	include( TEMPLATEPATH . "/_kickout/plugins/widget.php" );
	include( TEMPLATEPATH . "/_kickout/plugins/seo.php" )
?>
