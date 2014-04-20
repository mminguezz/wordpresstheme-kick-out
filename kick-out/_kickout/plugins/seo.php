<?php
/**
* kick-out functions for SEO
*
* @package kick-out
*/

add_action( 'wp_head', 'kickout_meta_description' );
add_action( 'wp_head', 'kickout_site_verify' );
add_action( 'wp_head', 'kickout_keywords' );
add_action( 'wp_head', 'kickout_robots' );

function kickout_meta_description(){
		$description = kickout_custom_description();
	echo '<meta name="description" content="' . esc_attr( strip_tags( stripslashes( $description ) ) ) . '" >' . "\n";
}


function kickout_site_verify(){
	if ( is_home() || is_front_page() ){
		// Alexa http://www.alexa.com/siteowners/claim
		$alexaVerifyID = '';
		if ( $alexaVerifyID !== '' ){
			echo '<meta name="alexaVerifyID" content="' . $alexaVerifyID . '" >' . "\n";
		}
		// Bing http://www.bing.com/toolbox/webmaster/
		$msvalidate = '';
		if ( $msvalidate !== '' ){
			echo '<meta name="msvalidate.01" content="' . $msvalidate. '" >' . "\n";
		}
		// Google www.google.es/webmasters/tools/
		$googlesite = '';
		if ( $googlesite !== '' ){
			echo '<meta name="google-site-verification" content="' . $googlesite . '" >' . "\n";
		}

		// Pinterest https://www.pinterest.com/
		$pdomainverify = '';
		if ( $pdomainverify !== '' ){
			echo '<meta name="p:domain_verify" content="' . $pdomainverify . '" >' . "\n";
		}
		// Yandex https://webmaster.yandex.com/
		$yandexverification = '';
		if ( $yandexverification !== '' ){
			echo '<meta name="yandex-verification" content="' . $yandexverification  . '" >' . "\n";
		}
	}
}
function kickout_keywords(){
	// Este tag que sí debe usarse es solamente para artículos de noticias. En una web o un blog cualquiera serán ignoradas
	$keywords = '';
	if ($keywords !== ''){
		echo '<meta name="keywords" content="'.$keywords.'" >';
	}
}

function kickout_robots(){
	// No he encontrado el hook para poder engancharme a la opción "Visibilidad para los buscadores"

	if ( is_paged() || is_search() || is_archive() ) {
		echo '<meta name="robots" content="noindex, follow" >';
/*
	// Si hay algo para noindex, nofollow
	} else if ( is_page( array( 42, 'about-me', 'Contact' ) ) ) {
		echo '<meta name="robots" content="noindex, nofollow" >';
*/
	} else {
		echo '<meta name="robots" content="index, follow" >';
	}
}



/*

hacer function para GoogleAnalytics.

*/



function kickout_custom_description(){
	// Personaliza la descripcion a tus necesidades
	$the_id = get_the_ID();
	if ( is_front_page() || is_home() ){
		$description =  get_bloginfo( 'description' );
	} else if ( is_singular() ) {
				// añadir meta box, si esta vacio recoger excerpt, si esta vacio, titulo

		/*
			is_single()
			is_page()
			is_attachment()
			is_post_type_archive( $post_type )
		*/
		$description = the_excerpt( $the_id );

		if ($description == ''){
			$description = get_the_title( $the_id );
		}



	} else if  ( is_404() ) {
		$description = 'Pendiente de hacer';
	} else if ( is_search() ) {
		$description = 'Pendiente de hacer';
	} else if ( is_archive() ) {
		$description = 'Pendiente de hacer';
		/*
			is_date()
			is_year()
			is_month()
			is_day()
			is_time()

			is_tax()
			is_category()
			is_tag()

			is_author()
		*/
	} else  {
		$description = get_bloginfo( 'description' );
	}

	if ( is_paged() ){
		$description .= ' > Paginado';
	}

	return $description;

	// is_sticky() // post pegajoso
	// is_new_day() // Post de Hoy
	// Para un multisite hay mas condicionales
}


?>
