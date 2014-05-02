<?php

function kickou_style() {
	/** style.css **/
	wp_enqueue_style( 'kickou-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'kickou_style' );

require ( TEMPLATEPATH . '/_kickout/register/tools/scssphp.php');


function compile_style() {
	$header_wp_style = 'h1 a{color: green !important;}'; // aqui debemos recoger los estilos de las paginas del administrador

	scss_compile( TEMPLATEPATH . '/css/style.scss', TEMPLATEPATH . '/style.css', $header_wp_style);
}

function scss_compile($fname, $fnameout = null, $wpcss = '') {
	//$start = microtime(true);
	//if (filemtime($fname) > filemtime($fnameout)){
	if (is_readable($fname)) {
		if ($fnameout !== null) {
			$type = substr($fname, -5);
			if ($type == '.scss') {
				if (!$handle = fopen($fnameout, 'w')) {
					//echo 'Cannot open file (' . $fnameout .')';
					exit;
				}
				$scss = new scssc();
				// ver para añadir una ruta de archivos scss
				$scss->addImportPath( TEMPLATEPATH . "/css");

				if (WP_DEBUG){
					$scss->setFormatter("scss_formatter_nested");
				} else {
					$scss->setFormatter("scss_formatter_compressed");
				}

				$scssCode = $scss->compile( file_get_contents($fname) . ' ' . $wpcss);
				if ( fwrite($handle, $scssCode) === FALSE ) {
					echo 'Cannot write to file (' . $fnameout . ')';
					exit;
				}
				fclose($handle);
			}
		}
	}

}