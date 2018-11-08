<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'demo_img' => array(
        'type'  => 'upload',
        'label' => __( 'Изображение', 'fw' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
    'text_inside'   => array(
        'label'   => __('Текст внутри изображения', '{domain}'),
        'type'    => 'text',
        'help'   => ''
    ),
    'text_btm'   => array(
        'label'   => __('Текст', '{domain}'),
        'type'    => 'text',
        'help'   => ''
    ),
);