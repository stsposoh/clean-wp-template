<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'demo_img' => array(
        'type'  => 'upload',
        'label' => __( 'Choose Image', 'fw' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
    'demo_header'   => array(
        'label'   => __('Заголовок', '{domain}'),
        'type'    => 'text'
    ),
    'demo_link'   => array(
        'label'   => __('Ссылка', '{domain}'),
        'type'    => 'text'
    ),
);