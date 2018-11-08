<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'unique_id'       => array(
		'type' => 'unique'
	),
	'label-group'     => array(
		'type'    => 'group',
		'options' => array(
			'label'                  => array(
				'label' => __( 'Label', 'the-core' ),
				'attr'  => array( 'class' => 'button-advanced' ),
				'desc'  => __( 'This is the text that appears on your button', 'the-core' ),
				'type'  => 'text',
				'value' => 'Submit'
			),
		)
	),
	'btn_link_group'  => array(
		'type'    => 'group',
		'options' => array(
			'link'   => array(
				'label' => __( 'Link', 'the-core' ),
				'desc'  => __( 'Where should your button link to?', 'the-core' ),
				'type'  => 'text',
				'value' => '#'
			),
			'target' => array(
				'type'         => 'switch',
				'label'        => __( '', 'the-core' ),
				'desc'         => __( 'Open link in new window?', 'the-core' ),
				'value'        => '_self',
				'right-choice' => array(
					'value' => '_blank',
					'label' => __( 'Yes', 'the-core' ),
				),
				'left-choice'  => array(
					'value' => '_self',
					'label' => __( 'No', 'the-core' ),
				),
			),
		)
	),
	'icon_group'      => array(
		'type'    => 'group',
		'options' => array(
			'icon_type'     => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'tab_icon' => array(
						'label'   => __( 'Icon', 'the-core' ),
						'desc'    => __( 'Select icon type', 'the-core' ),
						'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
						'type'    => 'radio',
						'value'   => 'icon-class',
						'choices' => array(
							'icon-class'  => __( 'Font Awesome', 'the-core' ),
							'upload-icon' => __( 'Custom Upload', 'the-core' ),
						),
					),
				),
				'choices' => array(
					'icon-class'  => array(
						'icon_class' => array(
							'type'  => 'icon',
							'value' => '',
							'label' => '',
						),
					),
					'upload-icon' => array(
						'upload-custom-img' => array(
							'label' => '',
							'type'  => 'upload',
						),
					),
				)
			),
			'icon_position' => array(
				'type'         => 'switch',
				'label'        => __( '', 'the-core' ),
				'desc'         => __( 'Choose the icon position', 'the-core' ),
				'value'        => 'pull-left-icon',
				'right-choice' => array(
					'value' => 'pull-right-icon',
					'label' => __( 'Right', 'the-core' ),
				),
				'left-choice'  => array(
					'value' => 'pull-left-icon',
					'label' => __( 'Left', 'the-core' ),
				),
			),
			'icon_size'     => array(
				'label' => __( 'Icon Size', 'the-core' ),
				'desc'  => __( 'Enter the icon size in pixels', 'the-core' ),
				'value' => '12',
				'type'  => 'short-text'
			),
		)
	),
	'responsive'         => array(
		'attr'          => array( 'class' => 'fw-advanced-button' ),
		'type'          => 'popup',
		'label'         => __( 'Responsive Behavior', 'the-core' ),
		'button'        => __( 'Settings', 'the-core' ),
		'size'          => 'medium',
		'popup-options' => array(
            'desktop_display'     => array(
                'type'    => 'multi-picker',
                'label'   => false,
                'desc'    => false,
                'picker'  => array(
                    'selected' => array(
                        'type'         => 'switch',
                        'value'        => 'yes',
                        'label'        => __( 'Desktop', 'the-core' ),
                        'desc'         => __( 'Display this shortcode on desktop?', 'the-core' ),
                        'help'         => __( 'Applies to devices with the resolution higher then 1200px (desktops and laptops)', 'the-core' ),
                        'left-choice'  => array(
                            'value' => 'no',
                            'label' => __( 'No', 'the-core' ),
                        ),
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => __( 'Yes', 'the-core' ),
                        )
                    ),
                ),
            ),
            'tablet_landscape_display'     => array(
                'type'    => 'multi-picker',
                'label'   => false,
                'desc'    => false,
                'picker'  => array(
                    'selected' => array(
                        'type'         => 'switch',
                        'value'        => 'yes',
                        'label'        => __( 'Tablet Landscape', 'the-core' ),
                        'desc'         => __( 'Display this shortcode on tablet landscape?', 'the-core' ),
                        'help'         => __( 'Applies to devices with the resolution between 992px - 1199px (tablet landscape)', 'the-core' ),
                        'left-choice'  => array(
                            'value' => 'no',
                            'label' => __( 'No', 'the-core' ),
                        ),
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => __( 'Yes', 'the-core' ),
                        )
                    ),
                ),
            ),
            'tablet_display'     => array(
                'type'    => 'multi-picker',
                'label'   => false,
                'desc'    => false,
                'picker'  => array(
                    'selected' => array(
                        'type'         => 'switch',
                        'value'        => 'yes',
                        'label'        => __( 'Tablet Portrait', 'the-core' ),
                        'desc'         => __( 'Display this shortcode on tablet portrait?', 'the-core' ),
                        'help'         => __( 'Applies to devices with the resolution between 768px - 991px (tablet portrait)', 'the-core' ),
                        'left-choice'  => array(
                            'value' => 'no',
                            'label' => __( 'No', 'the-core' ),
                        ),
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => __( 'Yes', 'the-core' ),
                        )
                    ),
                ),
                'choices' => array(),
            ),
            'smartphone_display' => array(
                'type'    => 'multi-picker',
                'label'   => false,
                'desc'    => false,
                'picker'  => array(
                    'selected' => array(
                        'type'         => 'switch',
                        'value'        => 'yes',
                        'label'        => __( 'Smartphone', 'the-core' ),
                        'desc'         => __( 'Display this shortcode on smartphone?', 'the-core' ),
                        'help'         => __( 'Applies to devices with the resolution up to 767px (smartphones both portrait and landscape as well as some low-resolution tablets)', 'the-core' ),
                        'left-choice'  => array(
                            'value' => 'no',
                            'label' => __( 'No', 'the-core' ),
                        ),
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => __( 'Yes', 'the-core' ),
                        )
                    ),
                ),
                'choices' => array(),
            ),
		),
	),
	'class'           => array(
		'label' => __( 'Custom Class', 'the-core' ),
		'desc'  => __( 'Enter custom CSS class', 'the-core' ),
		'help'  => __( 'You can use this class to further style this shortcode by adding your custom CSS in the <strong>custom.less</strong> file. This file is located on your server in the <strong>/child-theme/styles-less/</strong> folder.', 'the-core' ),
		'type'  => 'text',
		'value' => '',
	),
);