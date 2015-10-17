<?php

/**
 * Returns current year
 *
 * @uses [year]
 */
add_shortcode('year', 'crb_shortcode_year');
function crb_shortcode_year() {
	return date('Y');
}

/**
 * Returns Button
 *
 * @uses [button link="" text=""]
 */
add_shortcode('button', 'crb_shortcode_button');
function crb_shortcode_button( $atts ) {
	$a = shortcode_atts( array(
    	'link' => '',
    	'text' => 'Learn More',
    ), $atts );

    return '<a href="' . esc_url($a['link']) .'" class="btn">' . $a['text'] . '</a>';
}