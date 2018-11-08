<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'General', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'General Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'favicon' => array(
						'label' => __( 'Иконка сайта', 'unyson' ),
						'desc'  => __( 'Upload a favicon image', 'unyson' ),
						'type'  => 'upload'
					),
					'logo_img' => array(
						'label' => __( 'Логотип', 'unyson' ),
						'desc'  => __( 'Upload a logo image', 'unyson' ),
						'type'  => 'upload'
					),
                    'demo_title'    => array(
                        'label' => __( 'Заголовок в шапке', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'demo_under_title'    => array(
                        'label' => __( 'Текст под заголовком в шапке', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),



                    'nav_big_1_2'    => array(
                        'label' => __( 'Текст меню 1', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'nav_big_2'    => array(
                        'label' => __( 'Текст меню большой 2', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'nav_big_2_2'    => array(
                        'label' => __( 'Текст меню 2', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'nav_big_3'    => array(
                        'label' => __( 'Текст меню большой 3', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'nav_big_3_2'    => array(
                        'label' => __( 'Текст меню 3', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'nav_big_4'    => array(
                        'label' => __( 'Текст меню большой 4', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'nav_big_4_2'    => array(
                        'label' => __( 'Текст меню 4', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'nav_big_5'    => array(
                        'label' => __( 'Текст меню большой 5', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'nav_big_5_2'    => array(
                        'label' => __( 'Текст меню 5', 'unyson' ),
                        'desc'  => __( '', 'unyson' ),
                        'type'  => 'text',
                        'value' => ''
                    ),
                    'menu_bg' => array(
                        'label' => __( 'Фоновая картинка для меню', 'unyson' ),
                        'desc'  => __( 'Upload a logo image', 'unyson' ),
                        'type'  => 'upload'
                    )
				)
			),
		)
	)
);