<?php

////////////////////////////////////////
//
// Add support for Wordpress Features //
//
////////////////////////////////////////




// Featured Images//

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'recipe', 'event' ) );
add_post_type_support('page', 'excerpt');

// Customizable Logo //

$args = array(
	'width'			=> 500,
	'height'		=> 613,
	'flex-width'    => true,
	'flex-height'   => true,
	'default-image' => get_template_directory_uri() . '/img/WLDC_500px.png',
	'uploads'       => true,
	'header-text'   => false
);
add_theme_support( 'custom-header', $args );








//////////////////////////////////////
//
// Include Additional Functionality //
//
//////////////////////////////////////

// Include Menus Areas //

include('functions/menus.php');

// Include custom post types //
include('functions/custom_post_types.php');

// Include custom widget areas //

include('functions/widgets.php');






class Circle_Walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '<br /><span class="sub">' . $item->description . '</span>';
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


?>