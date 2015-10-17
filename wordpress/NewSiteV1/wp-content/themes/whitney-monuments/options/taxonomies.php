<?php

register_taxonomy(
	'monument_category', # Taxonomy name
	array('monument'), # Post Types
	array( # Arguments
		'labels'            => array(
			'name'              => __('Monument Categories', 'crb'),
			'singular_name'     => __('Monument Category', 'crb'),
			'search_items'      => __('Search Monument Categories', 'crb'),
			'all_items'         => __('All Monument Categories', 'crb'),
			'parent_item'       => __('Parent Monument Category', 'crb'),
			'parent_item_colon' => __('Parent Monument Category:', 'crb'),
			'view_item'         => __('View Monument Category', 'crb'),
			'edit_item'         => __('Edit Monument Category', 'crb'),
			'update_item'       => __('Update Monument Category', 'crb'),
			'add_new_item'      => __('Add New Monument Category', 'crb'),
			'new_item_name'     => __('New Monument Category Name', 'crb'),
			'menu_name'         => __('Monument Categories', 'crb'),
		),
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'monument_category' ),
	)
);