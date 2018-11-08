<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Вкладки', 'fw' ),
		'popup-title'   => __( 'Добавить/редактировать вкладку', 'fw' ),
		'desc'          => __( 'Создать вкладку', 'fw' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title' => array(
				'type'  => 'text',
				'label' => __('Title', 'fw')
			),
			'tab_content' => array(
				'type'  => 'wp-editor',
				'label' => __('Content', 'fw')
			)
		),
	)
);