<?php
/*
#
#   ADD CUSTOM CONTENT TYPES 
#
*/
	/**
	 * Custom Post Types, on the fly creation
	 *
	 **/
		function ma_custom_post_type_creator($post_type_name, $description, $public, $menu_position, $supports, $has_archive, $irreg_plural, $slug) {
		  if ($irreg_plural) {$plural = 's';} else {$plural = '';}
		  $labels = array(
			'name'               => _x( $post_type_name, 'post type general name' ),
			'singular_name'      => _x( strtolower($post_type_name), 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'book' ),
			'add_new_item'       => __( 'Add New '.$post_type_name),
			'edit_item'          => __( 'Edit '.$post_type_name ),
			'new_item'           => __( 'New '.$post_type_name ),
			'all_items'          => __( 'All '.$post_type_name.$plural ),
			'view_item'          => __( 'View '.$post_type_name ),
			'search_items'       => __( 'Search'.$post_type_name.$plural ),
			'not_found'          => __( 'No '.$post_type_name.$plural.' found' ),
			'not_found_in_trash' => __( 'No '.$post_type_name.$plural.' found in the Trash' ), 
			'parent_item_colon'  => '',
			'menu_name'          => $post_type_name
		  );
		  $args = array(
			'labels'        => $labels,
			'description'   => $description,
			'public'        => $public,
			'menu_position' => $menu_position,
			'supports'      => $supports,
			'rewrite' => array('slug' => $slug),
			'has_archive'   => $has_archive,
		  );
		  register_post_type( $post_type_name, $args ); 
		}
		//add_action( 'init', ma_custom_post_type_creator('Post_type_name', 'Post_type_description', public_truefalse, menu_position_number, array( 'title', 'editor', 'thumbnail' ), has_archive, irreg_plural, 'slug'));
		//add_action( 'init', ma_custom_post_type_creator('Vehicles', 'Holds our fleet vehicles', true, 4, array( 'title', 'editor', 'thumbnail' ), true, false, 'fleet'));
		//add_action( 'init', ma_custom_post_type_creator('Services', 'Holds our data specific to our services', true, 5, array( 'title', 'editor', 'thumbnail' ), true, false, 'services'));
		//add_action( 'init', ma_custom_post_type_creator('Testimonials', 'Holds our testimonial specific data', true, 5, array( 'title', 'editor', 'thumbnail' ), true, false, 'testimonials'));
		// add_action( 'init', ma_custom_post_type_creator('Staff', 'Holds our staff specific data', true, 5, array( 'title', 'editor', 'thumbnail' ), true, false));
		// add_action( 'init', ma_custom_post_type_creator('Car Care Tips', 'Holds our car care tips.', true, 6, array( 'title', 'editor', 'thumbnail', 'excerpt' ), true, false));
		// add_action( 'init', ma_custom_post_type_creator('Car Care Videos', 'Holds our car care videos.', true, 7, array( 'title', 'editor', 'thumbnail' ), true, false));
	
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
		function ma_add_meta_box() {
			// add_meta_box(
			//     'ma_vehicles_capacity',
			//     __( 'Capacity', 'ma_textdomain' ),
			//     'ma_meta_box_capacity',
			//     'vehicles',//$screen
			//     'side',
			//     'high'
			// );
			// add_meta_box(
			//     'ma_vehicles_upselltext',
			//     __( 'Upsell Text', 'ma_textdomain' ),
			//     'ma_meta_box_upselltext',
			//     'vehicles',//$screen
			//     'side',
			//     'high'
			// );
			// add_meta_box(
			//     'ma_testimonials_authormeta',
			//     __( 'Author Meta', 'ma_textdomain' ),
			//     'ma_meta_box_authormeta',
			//     'testimonials',//$screen
			//     'side',
			//     'high'
			// );
		}
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
		function ma_meta_box_authormeta( $post ) {
			// Add an nonce field so we can check for it later.
			wp_nonce_field( 'ma_meta_box', 'ma_meta_box_nonce' );
			/*
			 * Use get_post_meta() to retrieve an existing value
			 * from the database and use the value for the form.
			 */
			$value = get_post_meta( $post->ID, '_ma_meta_value_key3', true );
			echo '<label for="ma_new_field3">';
			_e( 'Add the author meta here (ex. John Doe, North Liberty, Iowa)', 'ma_textdomain' );
			echo '</label> ';
			echo '<input type="text" id="ma_new_field3" name="ma_new_field3" value="' . esc_attr( $value ) . '" size="25" />';
		}
	/**
	 * When the post is saved, saves our custom data.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
		function ma_save_meta_box_data( $post_id ) {
			/*
			 * We need to verify this came from our screen and with proper authorization,
			 * because the save_post action can be triggered at other times.
			 */
			// Check if our nonce is set.
			if ( ! isset( $_POST['ma_meta_box_nonce'] ) ) {
				return;
			}
			// Verify that the nonce is valid.
			if ( ! wp_verify_nonce( $_POST['ma_meta_box_nonce'], 'ma_meta_box' ) ) {
				return;
			}
			// If this is an autosave, our form has not been submitted, so we don't want to do anything.
			if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
				return;
			}
			// Check the user's permissions.
			if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
				if ( ! current_user_can( 'edit_page', $post_id ) ) {
					return;
				}
			} else {
				if ( ! current_user_can( 'edit_post', $post_id ) ) {
					return;
				}
			}
			/* OK, it's safe for us to save the data now. */
			// Make sure that it is set.
			// if ( ! isset( $_POST['ma_new_field1'] ) || ! isset( $_POST['ma_new_field2'] ) || ! isset( $_POST['ma_new_field3'] ) ) {
			//     return;
			// }
			// Sanitize user input.
			$my_data1 = sanitize_text_field( $_POST['ma_new_field1'] );
			$my_data2 = sanitize_text_field( $_POST['ma_new_field2'] );
			$my_data3 = sanitize_text_field( $_POST['ma_new_field3'] );
			// Update the meta field in the database.
			update_post_meta( $post_id, '_ma_meta_value_key1', $my_data1 );
			update_post_meta( $post_id, '_ma_meta_value_key2', $my_data2 );
			update_post_meta( $post_id, '_ma_meta_value_key3', $my_data3 );
		}
		//add_action( 'save_post', 'ma_save_meta_box_data' );