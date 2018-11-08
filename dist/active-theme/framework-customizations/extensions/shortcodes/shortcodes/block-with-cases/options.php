<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title'  => array(
        'label' => __( 'Title', 'fw' ),
        'desc'  => __( '', 'fw' ),
        'type'  => 'text',
        'value' => ''
    ),
    'main_photo' => array(
        'label' => __( 'Main photo', 'fw' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
        'type'  => 'upload'
    ),
    'demo_link'   => array(
        'label'   => __('Ссылка', '{domain}'),
        'type'    => 'text'
    ),

);