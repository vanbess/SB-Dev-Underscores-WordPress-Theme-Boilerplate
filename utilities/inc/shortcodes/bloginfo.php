<?php

/**
 * Display bloginfo through shortcode.
 */

add_shortcode( 'bloginfo', 'bloginfo_shortcode' );
function bloginfo_shortcode( $attr = [] ) {
	if ( isset($attr[0]) ) $attr = [ 'show' => $attr[0] ];

	$atts = shortcode_atts( array(
		'show' => '',
		'filter' => 'display'
	), $attr, 'bloginfo' );

	return get_bloginfo( $atts['show'], $atts['filter'] );
}

