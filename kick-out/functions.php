<?php
/**
* kick-out functions and definitions
*
* @package kick-out
*/

# DEFINES
	define( "SITE_URL" , get_bloginfo('url') );
	define( "THEME_URL" , get_template_directory_uri() );

# GENERAL
	include( TEMPLATEPATH . "/_kickout/theme-init.php" );				// Configuraciones de WordPress
	include( TEMPLATEPATH . "/_kickout/theme-customize.php" );			// Funciones personalizadas para el tema

# ADMIN
	include( TEMPLATEPATH . "/_kickout/admin/dashboard-setup.php" );
	include( TEMPLATEPATH . "/_kickout/admin/page-options.php" );

# REGISTER
	include( TEMPLATEPATH . "/_kickout/register/scripts.php" );
	include( TEMPLATEPATH . "/_kickout/register/styles.php" );

# CUSTOM POST TYPE
	include( TEMPLATEPATH . "/_kickout/post_types/porfolio.php" );

# PLUGINS
	include( TEMPLATEPATH . "/_kickout/plugins/widget.php" );
	include( TEMPLATEPATH . "/_kickout/plugins/seo.php" );


# DEBUG
	if (WP_DEBUG){
		include( TEMPLATEPATH . "/_kickout/theme-debug.php" );  // Funciones usadas durante la creaccion de temas completos
	}

?>
