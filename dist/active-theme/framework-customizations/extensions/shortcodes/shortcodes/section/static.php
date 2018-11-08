<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$shortcodes_extension = fw_ext( 'shortcodes' );

wp_enqueue_style(
	'fw-shortcode-section-background-video',
	$shortcodes_extension->get_uri( '/shortcodes/section/static/css/background.css' )
);

wp_enqueue_script(
	'fw-shortcode-section-formstone-core',
	$shortcodes_extension->get_uri( '/shortcodes/section/static/js/core.js' ),
	array( 'jquery' ),
	false,
	true
);
wp_enqueue_script(
	'fw-shortcode-section-formstone-transition',
	$shortcodes_extension->get_uri( '/shortcodes/section/static/js/transition.js' ),
	array( 'jquery' ),
	false,
	true
);
wp_enqueue_script(
	'fw-shortcode-section-formstone-background',
	$shortcodes_extension->get_uri( '/shortcodes/section/static/js/background.js' ),
	array( 'jquery' ),
	false,
	true
);
wp_enqueue_script(
	'fw-shortcode-section',
	$shortcodes_extension->get_uri( '/shortcodes/section/static/js/background.init.js' ),
	array(
		'fw-shortcode-section-formstone-core',
		'fw-shortcode-section-formstone-transition',
		'fw-shortcode-section-formstone-background'
	),
	false,
	true
);
