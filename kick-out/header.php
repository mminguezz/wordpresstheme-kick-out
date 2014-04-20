<?php
/**
*
* The header template file.
*
* @package kick-out
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge" >
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" >
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php
	wp_head();

	?>
</head>
<body <?php body_class(); ?>>