<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image'            => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	'size'             => array(
		'type'    => 'group',
		'options' => array(
			'width'  => array(
				'type'  => 'text',
				'label' => __( 'Width', 'fw' ),
				'desc'  => __( 'Set image width', 'fw' ),
				'value' => 300
			),
			'height' => array(
				'type'  => 'text',
				'label' => __( 'Height', 'fw' ),
				'desc'  => __( 'Set image height', 'fw' ),
				'value' => 200
			)
		)
	),
);

