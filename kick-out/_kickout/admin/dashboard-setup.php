<?php
/**
 * Personaliza el Dashboard
 *
 */


add_action('wp_dashboard_setup', 'kickout_remove_dashboard_widgets' );


add_action('wp_dashboard_setup', 'kickout_add_dashboard_widgets');


// Funcion para quitar elementos del dashboard
function kickout_remove_dashboard_widgets() {
	// array global metaboxes array, contiene todos los widgets para  wp-admin
	global $wp_meta_boxes;

	//ppp($wp_meta_boxes);
	// Elimina el widget de "incomming links"
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);

	// Elimina el widget "right now
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['icl_dashboard_widget']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}



function kickout_add_dashboard_widgets() {
	add_meta_box('ida', 'Texto', 'kickout_text_dashboard_widget_function', 'dashboard', 'normal', 'high');
	add_meta_box('ide', 'Otro texto', 'kickout_moretext_dashboard_widget_function', 'dashboard', 'normal', 'high');

}

function kickout_text_dashboard_widget_function(){
	echo 'Hey chipiron!!';
}

function kickout_moretext_dashboard_widget_function(){
	echo 'Todos los dias sale el sol';
}
?>


