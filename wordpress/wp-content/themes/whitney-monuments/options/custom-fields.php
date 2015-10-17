<?php

Carbon_Container::factory('custom_fields', __('Home Data', 'crb'))
	->show_on_post_type('page')
	->show_on_template('templates/home.php')
	->add_tab(__('Banner', 'crb'), array(
		Carbon_Field::factory('rich_text', 'crb_banner_text'),
		Carbon_Field::factory('attachment', 'crb_banner_image'),
	))
	->add_tab(__('Gallery', 'crb'), array(
		Carbon_Field::factory('text', 'crb_gallery_title'),
		Carbon_Field::factory('complex', 'crb_gallery_item')->add_fields(array(
				Carbon_Field::factory('text', 'title'),
				Carbon_Field::factory('attachment', 'image')
					->set_required(true),
				Carbon_Field::factory('rich_text', 'text'),
			)),
	))
	->add_tab(__('Testimonial', 'crb'), array(
		Carbon_Field::factory('attachment', 'crb_testimonial_image'),
		Carbon_Field::factory('rich_text', 'crb_testimonial_text'),
	));