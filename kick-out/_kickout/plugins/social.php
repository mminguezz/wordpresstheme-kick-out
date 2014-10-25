<?php
/**
* kick-out functions for SEO
*
* @package kick-out
*/

add_action( 'wp_head', 'social' );


function social(){
	return;
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
// SI es un article añadir estas etiquetas al head
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



<link type="image/vnd.microsoft.icon" rel="shortcut icon" href="favicon.ico">
<link href="favicon.ico" rel="shortcut icon"  type="image/x-icon">
<link rel="apple-touch-icon" href="touch-icon-iphone.png"> //60x60
<link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">

*/

?>