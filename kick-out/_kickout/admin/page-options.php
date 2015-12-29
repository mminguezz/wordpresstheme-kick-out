<?php

	function kickout_custom_field( $value ) {
		global $post;

		$custom_field = get_post_meta( $post->ID, $value, true );
		if ( !empty( $custom_field ) ) {
			//return is_array( $custom_field ) ? stripslashes_deep( $custom_field ) : stripslashes( wp_kses_decode_entities( $custom_field ) );
			return $custom_field;
		}
		return false;
	}

	/*
		$info = array();
		$args = array();
## [TODO] - ¿? - APO: Add Page Option ?
		$info['display'] = 'CMB';  // APO o CMB
		$info['type'] = 'page';    // if CMB -> page, post ...  else if APO -> pagetitle


	add_meta_box( $id, $title, $callback, $post_type, $context, $priority, $callback_args );

		// add page
	add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function );

		// add subpage
	add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);

		$args['type'] = 'text';
		$args['name'] = 'text_item';
		$args['description'] = 'Description for this element';
		$args['label'] = 'Label text';
		$args['placeholder'] = 'demo text';

	*/

	function kickout_input_text( $args ){
		echo '<p>' . $args['description'] . '</p>';
		echo '<label for="' . $args['name'] . '">' . $args['label'] . '</label>';
		echo '<input type="text" name="' . $args['name'] . '" id ="' . $args['name'] . '" value="' . kickout_custom_field( $args['name'] ) . '" placeholder="' . $args['placeholder'] . '">';
	}




?>
