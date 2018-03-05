<?php
	
// Creating the widget 
class wpb_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'sherpa_shortcode_widget', 
		
		// Widget name will appear in UI
		__('Shortcode Widget', 'sherpa'), 
		
		// Widget description
		array( 'description' => __( 'A widget that will do a single shortcode', 'sherpa' ), ) 
		);
	}

	// Creating widget front-end
	// This is where the action happens
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$the_shortcode = $instance['the_shortcode'];

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		
		// This is where you run the code and display the output
		echo do_shortcode($the_shortcode);
		echo $args['after_widget'];
	}
			
	// Widget Backend 
	public function form( $instance ) {
		$fields = array('title' => 'Title', 'the_shortcode' => 'Shortcode');
		foreach ($fields as $field => $label) {
			if ( isset( $instance[ $field ] ) ) {
				$$field = $instance[ $field ];
			}
			else {
				$$field = __( $label, 'rincon' );
			}

		}
					// Widget admin form
			?>
			<div>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			</div>
			<div>
			<label for="<?php echo $this->get_field_id( 'the_shortcode' ); ?>"><?php _e( 'Shortcode:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'the_shortcode' ); ?>" name="<?php echo $this->get_field_name( 'the_shortcode' ); ?>" type="text" value="<?php echo esc_attr( $the_shortcode ); ?>" />
			</div>
		<?php 
	}
		
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['the_shortcode'] = ( ! empty( $new_instance['the_shortcode'] ) ) ? strip_tags( $new_instance['the_shortcode'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );