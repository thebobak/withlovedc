<?php
// Register Custom Post Types



// Recipes //

function wldc_recipe() {

	$labels = array(
		'name'                => 'Recipes',
		'singular_name'       => 'Recipe',
		'menu_name'           => 'Recipes',
		'parent_item_colon'   => 'Recipe:',
		'all_items'           => 'All Recipes',
		'view_item'           => 'View Recipe',
		'add_new_item'        => 'Add New Recipe',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Recipe',
		'update_item'         => 'Update Recipe',
		'search_items'        => 'Search Recipes',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'recipe',
		'description'         => 'Post type to store recipes',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'recipe' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'recipe', $args );

}

// Hook into the 'init' action
add_action( 'init', 'wldc_recipe', 0 );








?>