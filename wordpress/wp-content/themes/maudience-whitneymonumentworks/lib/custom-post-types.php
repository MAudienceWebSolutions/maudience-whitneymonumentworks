<?php
/*
#
#   ADD CUSTOM CONTENT TYPES 
#
*/
		/**
	 * Custom Post Types
	 *
	 **/

		$services_option = get_option( 'ma_services_cpt_option' );
		if ( 1 == $services_option ) {
			function ma_services_cpt_creator() {
			  $labels = array(
				'name'               => _x( 'Services', 'post type general name', 'ma-theme-textdomain' ),
				'singular_name'      => _x( 'Service', 'post type singular name', 'ma-theme-textdomain' ),
				'menu_name'          => _x( 'Services', 'admin menu', 'ma-theme-textdomain' ),
				'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'ma-theme-textdomain' ),
				'add_new'            => _x( 'Add New', 'service', 'ma-theme-textdomain' ),
				'add_new_item'       => __( 'Add New Service', 'ma-theme-textdomain' ),
				'new_item'           => __( 'New Service', 'ma-theme-textdomain' ),
				'edit_item'          => __( 'Edit Service', 'ma-theme-textdomain' ),
				'view_item'          => __( 'View Service', 'ma-theme-textdomain' ),
				'all_items'          => __( 'All Services', 'ma-theme-textdomain' ),
				'search_items'       => __( 'Search Services', 'ma-theme-textdomain' ),
				'parent_item_colon'  => __( 'Parent Services:', 'ma-theme-textdomain' ),
				'not_found'          => __( 'No services found.', 'ma-theme-textdomain' ),
				'not_found_in_trash' => __( 'No services found in Trash.', 'ma-theme-textdomain' )
			  );
			  $args = array(
				'labels'             => $labels,
                'description'        => __( 'Holds our services specific data', 'ma-theme-textdomain' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'service' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 5,
				'menu_icon'			 => 'dashicons-hammer',
				'supports'           => array( 'title', 'editor', 'thumbnail')
			  );
			  register_post_type( 'services', $args ); 
			}
			add_action( 'init', 'ma_services_cpt_creator');
		}

		$testimonials_option = get_option( 'ma_testimonials_cpt_option' );
		if ( 1 == $testimonials_option ) {
			function ma_testimonials_cpt_creator() {
			  $labels = array(
				'name'               => _x( 'Testimonials', 'post type general name', 'ma-theme-textdomain' ),
				'singular_name'      => _x( 'Testimonial', 'post type singular name', 'ma-theme-textdomain' ),
				'menu_name'          => _x( 'Testimonials', 'admin menu', 'ma-theme-textdomain' ),
				'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'ma-theme-textdomain' ),
				'add_new'            => _x( 'Add New', 'book', 'ma-theme-textdomain' ),
				'add_new_item'       => __( 'Add New Testimonial', 'ma-theme-textdomain' ),
				'new_item'           => __( 'New Testimonial', 'ma-theme-textdomain' ),
				'edit_item'          => __( 'Edit Testimonial', 'ma-theme-textdomain' ),
				'view_item'          => __( 'View Testimonial', 'ma-theme-textdomain' ),
				'all_items'          => __( 'All Testimonials', 'ma-theme-textdomain' ),
				'search_items'       => __( 'Search Testimonials', 'ma-theme-textdomain' ),
				'parent_item_colon'  => __( 'Parent Testimonials:', 'ma-theme-textdomain' ),
				'not_found'          => __( 'No testimonials found.', 'ma-theme-textdomain' ),
				'not_found_in_trash' => __( 'No testimonials found in Trash.', 'ma-theme-textdomain' )
			  );
			  $args = array(
				'labels'             => $labels,
                'description'        => __( 'Holds our testimonial specific data', 'ma-theme-textdomain' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'testimonial' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 6,
				'menu_icon'			 => 'dashicons-format-quote',
				'supports'           => array( 'title', 'editor', 'thumbnail')
			  );
			  register_post_type( 'testimonials', $args ); 
			}
			add_action( 'init', 'ma_testimonials_cpt_creator');
		}

		$staff_option = get_option( 'ma_staff_cpt_option' );
		if ( 1 == $staff_option ) {
			function ma_staff_cpt_creator() {
			  $labels = array(
				'name'               => _x( 'Staff', 'post type general name', 'ma-theme-textdomain' ),
				'singular_name'      => _x( 'Staff', 'post type singular name', 'ma-theme-textdomain' ),
				'menu_name'          => _x( 'Staff', 'admin menu', 'ma-theme-textdomain' ),
				'name_admin_bar'     => _x( 'Staff', 'add new on admin bar', 'ma-theme-textdomain' ),
				'add_new'            => _x( 'Add New', 'staff member', 'ma-theme-textdomain' ),
				'add_new_item'       => __( 'Add New Staff Member', 'ma-theme-textdomain' ),
				'new_item'           => __( 'New Staff', 'ma-theme-textdomain' ),
				'edit_item'          => __( 'Edit Staff', 'ma-theme-textdomain' ),
				'view_item'          => __( 'View Staff', 'ma-theme-textdomain' ),
				'all_items'          => __( 'All Staff Members', 'ma-theme-textdomain' ),
				'search_items'       => __( 'Search Staff Members', 'ma-theme-textdomain' ),
				'parent_item_colon'  => __( 'Parent Staff:', 'ma-theme-textdomain' ),
				'not_found'          => __( 'No staff found.', 'ma-theme-textdomain' ),
				'not_found_in_trash' => __( 'No staff found in Trash.', 'ma-theme-textdomain' )
			  );
			  $args = array(
				'labels'             => $labels,
                'description'        => __( 'Holds our staff specific data', 'ma-theme-textdomain' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'staff' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 6,
				'menu_icon'			 => 'dashicons-groups',
				'supports'           => array( 'title', 'editor', 'thumbnail')
			  );
			  register_post_type( 'staff', $args ); 
			}
			add_action( 'init', 'ma_staff_cpt_creator');
		}

		$vehicles_option = get_option( 'ma_vehicles_cpt_option' );
		if ( 1 == $vehicles_option ) {
			function ma_vehicles_cpt_creator() {
			  $labels = array(
				'name'               => _x( 'Vehicles', 'post type general name', 'ma-theme-textdomain' ),
				'singular_name'      => _x( 'Vehicle', 'post type singular name', 'ma-theme-textdomain' ),
				'menu_name'          => _x( 'Vehicles', 'admin menu', 'ma-theme-textdomain' ),
				'name_admin_bar'     => _x( 'Vehicles', 'add new on admin bar', 'ma-theme-textdomain' ),
				'add_new'            => _x( 'Add New ', 'vehicle', 'ma-theme-textdomain' ),
				'add_new_item'       => __( 'Add New Vehicles', 'ma-theme-textdomain' ),
				'new_item'           => __( 'New Vehicles', 'ma-theme-textdomain' ),
				'edit_item'          => __( 'Edit Vehicles', 'ma-theme-textdomain' ),
				'view_item'          => __( 'View Vehicles', 'ma-theme-textdomain' ),
				'all_items'          => __( 'All Vehicles', 'ma-theme-textdomain' ),
				'search_items'       => __( 'Search Vehicles', 'ma-theme-textdomain' ),
				'parent_item_colon'  => __( 'Parent Vehicle:', 'ma-theme-textdomain' ),
				'not_found'          => __( 'No vehicle found.', 'ma-theme-textdomain' ),
				'not_found_in_trash' => __( 'No vehicle found in Trash.', 'ma-theme-textdomain' )
			  );
			  $args = array(
				'labels'             => $labels,
                'description'        => __( 'Holds our fleet specific data', 'ma-theme-textdomain' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'fleet' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 6,
				'menu_icon'			 => 'dashicons-admin-generic',
				'supports'           => array( 'title', 'editor', 'thumbnail')
			  );
			  register_post_type( 'vehicles', $args ); 
			}
			add_action( 'init', 'ma_vehicles_cpt_creator');
		}

		$gallery_option = get_option( 'ma_gallery_cpt_option' );
		if ( 1 == $gallery_option ) {
			function ma_gallery_cpt_creator() {
			  $labels = array(
				'name'               => _x( 'Gallery', 'post type general name', 'ma-theme-textdomain' ),
				'singular_name'      => _x( 'Gallery Item', 'post type singular name', 'ma-theme-textdomain' ),
				'menu_name'          => _x( 'Gallery', 'admin menu', 'ma-theme-textdomain' ),
				'name_admin_bar'     => _x( 'Gallery', 'add new on admin bar', 'ma-theme-textdomain' ),
				'add_new'            => _x( 'Add New ', 'gallery item', 'ma-theme-textdomain' ),
				'add_new_item'       => __( 'Add New Gallery Item', 'ma-theme-textdomain' ),
				'new_item'           => __( 'New Gallery', 'ma-theme-textdomain' ),
				'edit_item'          => __( 'Edit Gallery', 'ma-theme-textdomain' ),
				'view_item'          => __( 'View Gallery', 'ma-theme-textdomain' ),
				'all_items'          => __( 'All Gallery', 'ma-theme-textdomain' ),
				'search_items'       => __( 'Search Gallery', 'ma-theme-textdomain' ),
				'parent_item_colon'  => __( 'Parent Gallery:', 'ma-theme-textdomain' ),
				'not_found'          => __( 'No gallery found.', 'ma-theme-textdomain' ),
				'not_found_in_trash' => __( 'No gallery found in Trash.', 'ma-theme-textdomain' )
			  );
			  $args = array(
				'labels'             => $labels,
                'description'        => __( 'Holds our gallery specific data', 'ma-theme-textdomain' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'gallery' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 7,
				'menu_icon'			 => 'dashicons-images-alt',
				'taxonomies' => array('category'),
				'supports' => array('title', 'thumbnail', 'page-attributes'),
			  );
			  register_post_type( 'gallery', $args ); 
			}
			add_action( 'init', 'ma_gallery_cpt_creator');

			function ma_gallery_taxonomies_creator() {
			    $labels = array(
			        'name'              => _x( 'Categories', 'taxonomy general name' ),
			        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
			        'search_items'      => __( 'Search Categories' ),
			        'all_items'         => __( 'All Categories' ),
			        'parent_item'       => __( 'Parent Category' ),
			        'parent_item_colon' => __( 'Parent Category:' ),
			        'edit_item'         => __( 'Edit Category' ),
			        'update_item'       => __( 'Update Category' ),
			        'add_new_item'      => __( 'Add New Category' ),
			        'new_item_name'     => __( 'New Category Name' ),
			        'menu_name'         => __( 'Gallery Product Categories' ),
			    );

			    $args = array(
			        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
			        'labels'            => $labels,
			        'show_ui'           => true,
			        'show_admin_column' => true,
			        'query_var'         => true,
			        'rewrite'           => array( 'slug' => 'gallery_products' ),
			    );

			    register_taxonomy( 'gallery_categories', array( 'gallery' ), $args );
			}
			add_action( 'init', 'ma_gallery_taxonomies_creator', 0 );

			// add_action( 'init', 'create_gallery_cat' );

			// function create_gallery_cat() {
			// 	register_taxonomy(
			// 		'gallery-category',
			// 		'gallery',
			// 		array(
			// 			'label' => __( 'Gallery Category' ),
			// 			'rewrite' => array( 'slug' => 'gallery-category' ),
			// 			'hierarchical' => true,
			// 		)
			// 	);
			// }
		}
		//
	// add categories to custom post types
		// add_action( 'init', 'create_contentsliders_taxonomies', 99 );
		// function create_contentsliders_taxonomies() {
		// 	// Add new taxonomy, make it hierarchical (like categories)
		// 	$labels = array(
		// 		'name'              => _x( 'Categories', 'taxonomy general name' ),
		// 		'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
		// 		'search_items'      => __( 'Search Categories' ),
		// 		'all_items'         => __( 'All Categories' ),
		// 		'parent_item'       => __( 'Parent Category' ),
		// 		'parent_item_colon' => __( 'Parent Category:' ),
		// 		'edit_item'         => __( 'Edit Category' ),
		// 		'update_item'       => __( 'Update Category' ),
		// 		'add_new_item'      => __( 'Add New Category' ),
		// 		'new_item_name'     => __( 'New Category Name' ),
		// 		'menu_name'         => __( 'Category' ),
		// 	);
		// 	$args = array(
		// 		'hierarchical'      => true,
		// 		'labels'            => $labels,
		// 		'show_ui'           => true,
		// 		'show_admin_column' => true,
		// 		'query_var'         => true,
		// 		'rewrite'           => array( 'slug' => 'category' ),
		// 	);
		// 	register_taxonomy( 'category', array( 'posttypeslug' ), $args );
		// }

	/**
	 * Adds a box to the main column on the Post and Page edit screens.
	 */
		// function ma_add_meta_box() {
		// 	// add_meta_box(
		// 	//     'ma_vehicles_capacity',
		// 	//     __( 'Capacity', 'ma_textdomain' ),
		// 	//     'ma_meta_box_capacity',
		// 	//     'vehicles',//$screen
		// 	//     'side',
		// 	//     'high'
		// 	// );
		// 	// add_meta_box(
		// 	//     'ma_vehicles_upselltext',
		// 	//     __( 'Upsell Text', 'ma_textdomain' ),
		// 	//     'ma_meta_box_upselltext',
		// 	//     'vehicles',//$screen
		// 	//     'side',
		// 	//     'high'
		// 	// );
		// 	// add_meta_box(
		// 	//     'ma_testimonials_authormeta',
		// 	//     __( 'Author Meta', 'ma_textdomain' ),
		// 	//     'ma_meta_box_authormeta',
		// 	//     'testimonials',//$screen
		// 	//     'side',
		// 	//     'high'
		// 	// );
		// }
		//add_action( 'add_meta_boxes', 'ma_add_meta_box' );
	/**
	 * Prints the box content.
	 * 
	 * @param WP_Post $post The object for the current post/page.
	 */
		// function ma_meta_box_capacity( $post ) {
		//     // Add an nonce field so we can check for it later.
		//     wp_nonce_field( 'ma_meta_box', 'ma_meta_box_nonce' );
		//     /*
		//      * Use get_post_meta() to retrieve an existing value
		//      * from the database and use the value for the form.
		//      */
		//     $value = get_post_meta( $post->ID, '_ma_meta_value_key1', true );
		//     echo '<label for="ma_new_field1">';
		//     _e( 'How many people can this vehicle hold?', 'ma_textdomain' );
		//     echo '</label> ';
		//     echo '<input type="text" id="ma_new_field1" name="ma_new_field1" value="' . esc_attr( $value ) . '" size="25" />';
		// }
		// function ma_meta_box_upselltext( $post ) {
		//     // Add an nonce field so we can check for it later.
		//     wp_nonce_field( 'ma_meta_box', 'ma_meta_box_nonce' );
		//     /*
		//      * Use get_post_meta() to retrieve an existing value
		//      * from the database and use the value for the form.
		//      */
		//     $value = get_post_meta( $post->ID, '_ma_meta_value_key2', true );
		//     echo '<label for="ma_new_field2">';
		//     _e( 'Why is this a great choice?', 'ma_textdomain' );
		//     echo '</label> ';
		//     echo '<input type="text" id="ma_new_field2" name="ma_new_field2" value="' . esc_attr( $value ) . '" size="25" />';
		// }
		// function ma_meta_box_authormeta( $post ) {
		// 	// Add an nonce field so we can check for it later.
		// 	wp_nonce_field( 'ma_meta_box', 'ma_meta_box_nonce' );
		// 	/*
		// 	 * Use get_post_meta() to retrieve an existing value
		// 	 * from the database and use the value for the form.
		// 	 */
		// 	$value = get_post_meta( $post->ID, '_ma_meta_value_key3', true );
		// 	echo '<label for="ma_new_field3">';
		// 	_e( 'Add the author meta here (ex. John Doe, North Liberty, Iowa)', 'ma_textdomain' );
		// 	echo '</label> ';
		// 	echo '<input type="text" id="ma_new_field3" name="ma_new_field3" value="' . esc_attr( $value ) . '" size="25" />';
		// }
	/**
	 * When the post is saved, saves our custom data.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
		// function ma_save_meta_box_data( $post_id ) {
		// 	/*
		// 	 * We need to verify this came from our screen and with proper authorization,
		// 	 * because the save_post action can be triggered at other times.
		// 	 */
		// 	// Check if our nonce is set.
		// 	if ( ! isset( $_POST['ma_meta_box_nonce'] ) ) {
		// 		return;
		// 	}
		// 	// Verify that the nonce is valid.
		// 	if ( ! wp_verify_nonce( $_POST['ma_meta_box_nonce'], 'ma_meta_box' ) ) {
		// 		return;
		// 	}
		// 	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
		// 	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		// 		return;
		// 	}
		// 	// Check the user's permissions.
		// 	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
		// 		if ( ! current_user_can( 'edit_page', $post_id ) ) {
		// 			return;
		// 		}
		// 	} else {
		// 		if ( ! current_user_can( 'edit_post', $post_id ) ) {
		// 			return;
		// 		}
		// 	}
		// 	/* OK, it's safe for us to save the data now. */
		// 	// Make sure that it is set.
		// 	// if ( ! isset( $_POST['ma_new_field1'] ) || ! isset( $_POST['ma_new_field2'] ) || ! isset( $_POST['ma_new_field3'] ) ) {
		// 	//     return;
		// 	// }
		// 	// Sanitize user input.
		// 	$my_data1 = sanitize_text_field( $_POST['ma_new_field1'] );
		// 	$my_data2 = sanitize_text_field( $_POST['ma_new_field2'] );
		// 	$my_data3 = sanitize_text_field( $_POST['ma_new_field3'] );
		// 	// Update the meta field in the database.
		// 	update_post_meta( $post_id, '_ma_meta_value_key1', $my_data1 );
		// 	update_post_meta( $post_id, '_ma_meta_value_key2', $my_data2 );
		// 	update_post_meta( $post_id, '_ma_meta_value_key3', $my_data3 );
		// }
		//add_action( 'save_post', 'ma_save_meta_box_data' );