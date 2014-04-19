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
	$description = 'Page description. No longer than 155 characters.';
	echo '<meta name="description" content="' . esc_attr( strip_tags( stripslashes( $description ) ) ) . ' >' . "\n";
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
	if ( is_paged() || is_search() || is_archive() ) {
		echo '<meta name="robots" content="noindex, follow" >';
/*
	// Si hay algo que noindex, nofollow
	} else if ( is_page( array( 42, 'about-me', 'Contact' ) ) ) {
		echo '<meta name="robots" content="noindex, nofollow" >';
*/
	} else {
		echo '<meta name="robots" content="index, follow" >';
	}
}


/*
SI es un article añadir a la etiqueta html
itemscope itemtype="http://schema.org/Article"
*/
/*
 <!-- Google Authorship and Publisher Markup -->
<link rel="author" href="https://plus.google.com/[Google+_Profile]/posts"/>
<link rel="publisher" href=”https://plus.google.com/[Google+_Page_Profile]"/>


// http://www.google.com/webmasters/tools/richsnippets
// SI es un article añadir estas etiquetas al  head
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="The Name or Title Here">
<meta itemprop="description" content="This is the page description">
<meta itemprop="image" content="http://www.example.com/image250x250.jpg">





// https://dev.twitter.com/docs/cards/validation/validator
<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="Page Title">
<meta name="twitter:description" content="Page description less than 200 characters">
<meta name="twitter:creator" content="@author_handle">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="http://www.example.com/image.html">
<meta name="twitter:domain" content="website.com"/>

// https://developers.facebook.com/tools/debug
<!-- Open Graph data -->
	<meta property="og:title" content="Title Here" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.example.com/" />
	<meta property="og:image" content="http://example.com/image.jpg" />
	<meta property="og:description" content="Description Here" />
	<meta property="og:site_name" content="Site Name, i.e. Moz" />
	<meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
	<meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
	<meta property="article:section" content="Article Section" />
	<meta property="article:tag" content="Article Tag" />
	<meta property="fb:admins" content="Facebook numberic ID" />
	<meta property="profile:first_name" content="First Name"/>
	<meta property="profile:last_name" content="Last Name"/>
	<meta property="profile:username" content=""/>
	<meta property="og:see_also" content="http://www.website.com"/>


// Pinterest Rich Pins Validator - con incluir schema.org seria suficiente
// http://developers.pinterest.com/rich_pins/validator/


// metas genericos

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="text/css" http-equiv="Content-Style-Type">
<meta content="yosoyelautor" name="Author">
<meta content="es" http-equiv="Content-Language">
<meta content="city, country" name="locality">
<meta content="es" name="lang">
<meta content="Global" name="distribution">
<meta content="my site or company" name="copyright">


<meta name="revisit-after" content="30 days">
<meta name="distribution" content="web">


<link type="image/vnd.microsoft.icon" rel="shortcut icon" href="favicon.ico">
<link href="favicon.ico" rel="shortcut icon"  type="image/x-icon">
<link rel="apple-touch-icon" href="touch-icon-iphone.png"> //60x60
<link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">

*/

/*
 // hacer una funcion para description y para title con esto
is_404()
is_search()

is_front_page() || is_home()

is_singular()  // Returns true for any is_single(), is_page(), or is_attachment().
	is_single()
	is_page()
	is_attachment()
	is_post_type_archive( $post_type )

is_paged()

is_sticky() //post pegajoso
is_new_day()

is_archive()

	is_date()
	is_year()
	is_month()
	is_day()
	is_time()

	is_tax()
	is_category()
	is_tag()

	is_author()

// Para un multisite hay mas condicionales

*/

?>
