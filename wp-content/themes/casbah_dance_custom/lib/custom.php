<?php

// Custom functions

// Enable Bootstrap Navigation with WP-native Nav - Roots Theme - from https://gist.github.com/2025312

class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {


	function start_lvl( &$output, $depth ) {

		//In a child UL, add the 'dropdown-menu' class
		$indent = str_repeat( "\t", $depth );
		$output    .= "\n$indent<ul class=\"dropdown-menu\">\n";

	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		//Add class and attribute to LI element that contains a submenu UL.
		if ($args->has_children){
			$classes[]      = 'dropdown';
			$li_attributes .= 'data-dropdown="dropdown"';
		}
		$classes[] = 'menu-item-' . $item->ID;
		//If we are on the current page, add the active class to that menu item.
		$classes[] = ($item->current) ? 'active' : '';

		//Make sure you still add all of the WordPress classes.
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		//Add attributes to link element.
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($args->has_children) ? ' <b class="caret"></b> ' : '';
		$item_output .= '</a>';
		$item_output .= $args->after;

		//Option to create a separator by adding an element with a label of `-` (Bootstrap 2.1.1 divider)
		// http://wordpress.stackexchange.com/questions/38241/nav-menu-separators
		if ( $item->title === '-' ) {
		    $item_output = '<li class="divider"></li>';
		}

		// //Option to create a Bootstrap `nav-header` with a WP nav item with a label of `[nav-header]` (Bootstrap 2.0 divider)
		// $find_nav_titles = '^\[nav-title\]';
		// if ( preg_match( $find_nav_titles, $item->title ) === true ) {
		//     $item->title = preg_replace( $find_nav_titles, '', $str );
		//     $item_output .= '<li class="nav-header"> ' . $item->title;
		// }

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}
