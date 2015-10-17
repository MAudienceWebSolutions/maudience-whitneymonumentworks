<?php

register_post_type('monument', array(
	'labels' => array(
		'name' => __('Monuments', 'crb'),
		'singular_name' => __('Monument', 'crb'),
		'add_new' => __('Add New', 'crb'),
		'add_new_item' => __('Add new Monument', 'crb'),
		'view_item' => __('View Monument', 'crb'),
		'edit_item' => __('Edit Monument', 'crb'),
		'new_item' => __('New Monument', 'crb'),
		'view_item' => __('View Monument', 'crb'),
		'search_items' => __('Search Monuments', 'crb'),
		'not_found' =>  __('No Monuments found', 'crb'),
		'not_found_in_trash' => __('No Monuments found in trash', 'crb'),
	),
	'public' => true,
	'exclude_from_search' => false,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'_edit_link' => 'post.php?post=%d',
	'rewrite' => array(
		'slug' => 'monuments',
		'with_front' => false,
	),
	'query_var' => true,
	'menu_icon' => 'dashicons-format-gallery',
	'supports' => array('title', 'thumbnail'),
));