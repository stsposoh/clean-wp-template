<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'        => __( 'Layout Elements', 'the-core' ),
		'title'      => __( 'Column', 'the-core' ),
		'popup_size' => 'medium',
		'type'       => 'column',
		'popup_header_elements' => '<a class="fw-docs-link" target="_blank" href="http://docs.themefuse.com/the-core/your-theme/shortcodes/columns-1"><span class="fw-docs-info dashicons dashicons-editor-help"></span>'.__('Go to Docs', 'the-core').'</a>',
	)
);