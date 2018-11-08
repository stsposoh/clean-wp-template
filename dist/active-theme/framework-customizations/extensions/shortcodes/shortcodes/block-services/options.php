<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'custom_text'   => array(
        'label' => __( 'Текст ссылки', 'fw' ),
        'type'    => 'text'
    ),
    'link_btn'   => array(
        'label' => __( 'Адрес ссылки', 'fw' ),
        'desc'  => __( '', 'fw' ),
        'type'  => 'text',
        'value' => '#'
    ),
    'target_btn' => array(
        'type'  => 'switch',
        'label'   => __( 'Открыть ссылку в новом окне?', 'fw' ),
        'desc'    => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
        'right-choice' => array(
            'value' => '_blank',
            'label' => __('Yes', 'fw'),
        ),
        'left-choice' => array(
            'value' => '_self',
            'label' => __('No', 'fw'),
        ),
    ),
    'custom_list' => array(
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