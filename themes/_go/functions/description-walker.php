<?php
class Menu_With_Description extends Walker_Nav_Menu {
	function start_el( &$output, $object, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $object->classes ) ? array() : (array) $object->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $object->ID . '"' . $value . $class_names .'>';

		$attributes = ! empty( $object->attr_title ) ? ' title="' . esc_attr( $object->attr_title ) .'"' : '';
		$attributes .= ! empty( $object->target ) ? ' target="' . esc_attr( $object->target ) .'"' : '';
		$attributes .= ! empty( $object->xfn ) ? ' rel="' . esc_attr( $object->xfn ) .'"' : '';
		$attributes .= ! empty( $object->url ) ? ' href="' . esc_attr( $object->url ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $object->title, $object->ID ) . $args->link_after;
		$item_output .= '<span class="sub">' . $object->description . '</span>';
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $object, $depth, $args );
	}
}



?>
