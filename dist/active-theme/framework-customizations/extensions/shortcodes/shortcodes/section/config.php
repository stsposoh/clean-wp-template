<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'            => __( 'Элементы макета', 'the-core' ),
		'title'          => __( 'Секция', 'the-core' ),
		'description'    => __( 'Add a Section', 'the-core' ),
		'popup_size'     => 'medium',
		'title_template' => '{{ if (!o.section_name) { }} {{- title}} {{ } }} {{ if (o.section_name) { }} {{- o.section_name}} {{ } }} {{ if (o.background_options.background == "color" && o.background_options.color.background_color.id == "fw-custom") { }} <span class="fw-theme-option-presentation-color" style="background-color:{{- o.background_options.color.background_color.color}}"></span> {{ } else if(o.background_options.background == "color"){ }} <span class="fw-theme-option-presentation-color fw_theme_bg_{{- o.background_options.color.background_color.id}}"></span> {{ } }}',
		'type'           => 'section', // WARNING: Do not edit this
		'popup_header_elements' => '<a class="fw-docs-link" target="_blank" href="http://docs.themefuse.com/the-core/your-theme/shortcodes/sections-1"><span class="fw-docs-info dashicons dashicons-editor-help"></span>'.__(' Go to Docs', 'the-core').'</a>',
	)
);