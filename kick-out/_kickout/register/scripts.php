<?php


##### Llamamos a los script necesarios
function kickout_scripts() {
	/** mobile-nav.min.js **/
	wp_enqueue_script( 'mobile-navigation', THEME_URL . '/js/mobile-nav.min.js', array('jquery'), '201401', true );
	/** custom js **/
	wp_enqueue_script( 'kickout', THEME_URL . '/js/kickout.min.js', array('jquery'), '201401', true );
	/**  Modernizr 2.7.1 **/
}
add_action( 'wp_enqueue_scripts', 'kickout_scripts' );



require ( TEMPLATEPATH . '/_kickout/register/tools/jsmin.php' );

function minify_javascript(){
	js_minify( TEMPLATEPATH .'/js/mobile-nav.js', TEMPLATEPATH . '/js/mobile-nav.min.js');
	js_minify( TEMPLATEPATH .'/js/kickout.js', TEMPLATEPATH . '/js/kickout.min.js');
}

function js_minify($fname, $fnameout = null) {

	if (is_readable($fname)) {
		if ($fnameout !== null) {
			$type = substr($fname, -3);
			if ($type == '.js') {
				if (!$handle = fopen($fnameout, 'w')) {
					exit;
				}
				$output = JSMin::minify(file_get_contents($fname));

				if (fwrite($handle, $output) === FALSE) {
					echo 'Cannot write to file (' . $fnameout . ')';
					exit;
				}
				fclose($handle);
			}
		}
	}
}