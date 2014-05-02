<?php
/**
* kick-out functions for debug themes
*
*  Plugin : http://wordpress.org/plugins/debug-bar/
*
* @package kick-out
*/

// ppp ( $val ); -> Imprime $val legible para humanos sobre una variable

function ppp ( $val ) {
	print ( '<pre>' )  ;
	if ( is_array ( $val ) ) {
		print_r ( $val ) ;
	} else {
		var_dump ( $val ) ;
	}
	print ( '</pre><br>' ) ;
}


if ( WP_DEBUG ) {
	// Compila SASS a CSS con cada refresco de pagina.
	compile_style();
}
?>