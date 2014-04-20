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
	<header id="masthead" class="site-header" role="banner">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php _e('Go to home page', TEXT_DOMINE); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle seen-mobile"><?php _e( 'Menu', TEXT_DOMINE ); ?></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
	</header>
	<main id="content" class="site-content" role="main">