<?php
/**
 * kickout_Widget Class
 */


add_action( 'widgets_init', 'kickout_load_widgets' );

function kickout_load_widgets() {
	register_widget( 'kickout_Widget' );
}


class kickout_Widget extends WP_Widget {
	function kickout_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'kickout example', 'description' => __('An example widget that displays a person\'s name and sex.', 'TEXT_DOMAIN') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'kickout-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'kickout-widget', __('Kickout Widget', 'TEXT_DOMAIN'), $widget_ops, $control_ops );
	}

	function form($instance) {
		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('Kickout example widget', 'TEXT_DOMAIN'), 'name' => __('John Doe', 'TEXT_DOMAIN'), 'sex' => 'male', 'show_sex' => true );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'TEXT_DOMAIN'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<!-- Your Name: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('Your Name:', 'TEXT_DOMAIN'); ?></label>
			<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" style="width:100%;" />
		</p>

		<!-- Sex: Select Box -->
		<p>
			<label for="<?php echo $this->get_field_id( 'sex' ); ?>"><?php _e('Sex:', 'TEXT_DOMAIN'); ?></label>
			<select id="<?php echo $this->get_field_id( 'sex' ); ?>" name="<?php echo $this->get_field_name( 'sex' ); ?>" class="widefat" style="width:100%;">
				<option <?php if ( 'male' == $instance['sex'] ) echo 'selected="selected"'; ?>>male</option>
				<option <?php if ( 'female' == $instance['sex'] ) echo 'selected="selected"'; ?>>female</option>
			</select>
		</p>

		<!-- Show Sex? Checkbox -->
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['show_sex'], true ); ?> id="<?php echo $this->get_field_id( 'show_sex' ); ?>" name="<?php echo $this->get_field_name( 'show_sex' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'show_sex' ); ?>"><?php _e('Display sex publicly?', 'TEXT_DOMAIN'); ?></label>
		</p>

	<?php
	}


	function update($new_instance, $old_instance) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['name'] = strip_tags( $new_instance['name'] );

		/* No need to strip tags for sex and show_sex. */
		$instance['sex'] = $new_instance['sex'];
		$instance['show_sex'] = $new_instance['show_sex'];

		return $instance;
	}

	function widget($args, $instance) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$name = $instance['name'];
		$sex = $instance['sex'];
		$show_sex = isset( $instance['show_sex'] ) ? $instance['show_sex'] : false;

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		/* Display name from widget settings if one was input. */
		if ( $name )
			printf( '<p>' . __('Hello. My name is %1$s.', 'TEXT_DOMAIN') . '</p>', $name );

		/* If show sex was selected, display the user's sex. */
		if ( $show_sex )
			printf( '<p>' . __('I am a %1$s.', 'TEXT_DOMAIN') . '</p>', $sex );

		/* After widget (defined by themes). */
		echo $after_widget;
	}

}

?>