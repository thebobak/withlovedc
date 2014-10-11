<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */


function wldc_widgets_init() {

	register_sidebar( array(
		'name' => 'Home Page Video Box',
		'id' => 'hp-video-box',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => 'Home Page Events Box',
		'id' => 'hp-events-box',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Home Page CTA Box',
		'id' => 'hp-cta-box',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );



}
add_action( 'widgets_init', 'wldc_widgets_init' );
?>