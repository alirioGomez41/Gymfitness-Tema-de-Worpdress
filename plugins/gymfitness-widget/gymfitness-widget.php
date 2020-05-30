<?php

/*
Plugin Name:  Gymfitness - Widget de Clases
Plugin URI:
Description: Añade Widget para mostrar clases
Version: 1.0.0
Author: Alirio Gomez
Author URI:
Text Domain: gymfitness

*/
if(!defined('ABSPATH')) die(); 
/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Widget Entradas', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Agrega entradas al Sidebar', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$cantidad_entradas = (int) $instance['cantidad'] ;

		if (empty( $instance['cantidad'] ) ) {
			$cantidad_entradas = 3;
		}
		
	?>

		<ul>

		<?php   
			$args = array('post_type' =>'gymfitness_clases','posts_per_page' => $cantidad_entradas);
			$the_query = new WP_Query( $args );     
			while ( $the_query->have_posts() ) :$the_query->the_post();
			?>
			<li class="clase-sidebar">
				<div class="imagen">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
				<div class="contenido-clase">
					<a href="<?php the_permalink()?>"><?php  ?>
					<h3><?php the_title() ?></h3>
					</a>

					<?php 
					$hora_inicio = get_field('hora_de_inicio');
					$hora_fin = get_field('hora_de_fin');
					?>
					
					<p><?php the_field('dias_clase') ?> - <?php echo $hora_inicio . ' a ' . $hora_fin  ?></p>
				</div>
				
			
			</li>

					
		    	<?php         
			endwhile;     
			wp_reset_postdata();
			?>
    	
		</ul>




	<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$cantidad= ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( 'Cantidad de entradas', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( 'Cuantas entradas desea mostrar?', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="number" value="<?php echo esc_attr( $cantidad ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';

		return $instance;
	}

} // class Foo_Widget
// register Foo_Widget widget
function register_foo_widget() {
    register_widget( 'Foo_Widget' );
}
add_action( 'widgets_init', 'register_foo_widget' );