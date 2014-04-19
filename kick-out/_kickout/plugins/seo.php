<?php
/**
* kick-out functions for SEO
*
* @package kick-out
*/

add_action('wp_head', 'kickout_meta_description');


function kickout_meta_description(){
	$description = 'esto es una descripcion';

	echo '<meta name="description" content="' . esc_attr( strip_tags( stripslashes( $description ) ) ) . ' >' . "\n";
}

?>