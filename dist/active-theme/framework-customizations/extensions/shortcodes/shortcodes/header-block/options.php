<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'header_block' => array(
        'type'  => 'wp-editor',
        'value' => '',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Текст', '{domain}'),
        'size' => 'small', // small, large
        'editor_height' => 100,
        'wpautop' => true,
        'editor_type' => false, // tinymce, html
    ),
);