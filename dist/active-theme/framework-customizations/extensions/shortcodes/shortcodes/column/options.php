<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'unique_id'          => array(
		'type' => 'unique'
	),
	'default_padding'    => array(
		'type'         => 'switch',
		'label'        => __( 'Default Spacing', 'the-core' ),
		'desc'         => __( 'Use default left and right spacing?', 'the-core' ),
		'help'         => __( "Default left and right spacings are set to 15px", "the-core" ),
		'value'        => '',
		'right-choice' => array(
			'value' => '',
			'label' => __( 'Yes', 'the-core' ),
		),
		'left-choice'  => array(
			'value' => 'fw-col-no-padding',
			'label' => __( 'No', 'the-core' ),
		),
	),
	'column_height'      => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'selected' => array(
				'label'   => __( 'Height', 'the-core' ),
				'desc'    => __( 'Select the column height in pixels', 'the-core' ),
				'help'    => __( 'Using fixed heights on columns might impact the responsive behaviour of your website in a negative way. Read', 'the-core' ) . ' <a href="http://docs.themefuse.com/the-core/your-theme/responsive/best-practices#2" target="_blank">this article</a> ' . __( 'for more information and best practices', 'the-core' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'choices' => array(
					'auto'   => __( 'Auto', 'the-core' ),
					'custom' => __( 'Custom', 'the-core' ),
				),
				'value'   => 'auto'
			),
		),
		'choices'      => array(
			'custom' => array(
				'height' => array(
					'label' => __( '', 'the-core' ),
					'desc'  => __( 'Enter the column height in pixels', 'the-core' ),
					'type'  => 'short-text',
					'value' => ''
				),
			),
		),
		'show_borders' => false,
	),
	'responsive'         => array(
		'attr'          => array( 'class' => 'fw-advanced-button' ),
		'type'          => 'popup',
		'label'         => __( 'Responsive Behavior', 'the-core' ),
		'button'        => __( 'Settings', 'the-core' ),
		'size'          => 'medium',
		'popup-options' => array(
			'desktop_display'          => array(
				'type'   => 'multi-picker',
				'label'  => false,
				'desc'   => false,
				'picker' => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Desktop', 'the-core' ),
						'desc'         => __( 'Display this column on desktop?', 'the-core' ),
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
			'tablet_landscape_display' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Tablet Landscape', 'the-core' ),
						'desc'         => __( 'Display this column on tablet landscape?', 'the-core' ),
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
				'choices' => array(
					'yes' => array(
						'padding_group' => array(
							'attr'    => array( 'class' => 'border-bottom-none' ),
							'type'    => 'group',
							'options' => array(
								'html_label'     => array(
									'type'  => 'html',
									'value' => '',
									'label' => __( 'Additional Spacing', 'the-core' ),
									'html'  => '',
								),
								'padding_top'    => array(
									'label' => false,
									'desc'  => __( 'top', 'the-core' ),
									'type'  => 'short-text',
									'value' => '',
								),
								'padding_right'  => array(
									'label' => false,
									'desc'  => __( 'right', 'the-core' ),
									'type'  => 'short-text',
									'value' => '',
								),
								'padding_bottom' => array(
									'label' => false,
									'desc'  => __( 'bottom', 'the-core' ),
									'type'  => 'short-text',
									'value' => '',
								),
								'padding_left'   => array(
									'label' => false,
									'desc'  => __( 'left', 'the-core' ),
									'help'  => __( 'This spacing will overwrite the spacing set for the column and will be used for devices with the resolution between 992px - 1199px (tablet landscape). Leave blank for default column values.', 'the-core' ),
									'type'  => 'short-text',
									'value' => '',
								),
							)
						),
					),
				)
			),
			'tablet_display'           => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Tablet Portrait', 'the-core' ),
						'desc'         => __( 'Display this column on tablet portrait?', 'the-core' ),
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
				'choices' => array(
					'yes' => array(
						'tablet'        => array(
							'label'   => __( '', 'the-core' ),
							'desc'    => __( 'Choose the responsive tablet display for this column', 'the-core' ),
							'help'    => __( 'Use this option in order to control how this column behaves on devices with the resolution between 768px - 991px (tablet portrait). Note that on phones all the columns are 1/1 by default.', 'the-core' ),
							'type'    => 'select',
							'value'   => '',
							'choices' => array(
								''              => __( 'Automatically inherit default layout', 'the-core' ),
								'fw-col-sm-2'   => __( 'Make it a 1/6 column', 'the-core' ),
								'fw-col-sm-1-5' => __( 'Make it a 1/5 column', 'the-core' ),
								'fw-col-sm-3'   => __( 'Make it a 1/4 column', 'the-core' ),
								'fw-col-sm-4'   => __( 'Make it a 1/3 column', 'the-core' ),
								'fw-col-sm-6'   => __( 'Make it a 1/2 column', 'the-core' ),
								'fw-col-sm-8'   => __( 'Make it a 2/3 column', 'the-core' ),
								'fw-col-sm-9'   => __( 'Make it a 3/4 column', 'the-core' ),
								'fw-col-sm-12'  => __( 'Make it a 1/1 column', 'the-core' ),
							)
						),
						'padding_group' => array(
							'attr'    => array( 'class' => 'border-bottom-none' ),
							'type'    => 'group',
							'options' => array(
								'html_label'     => array(
									'type'  => 'html',
									'value' => '',
									'label' => __( 'Additional Spacing', 'the-core' ),
									'html'  => '',
								),
								'padding_top'    => array(
									'label' => false,
									'desc'  => __( 'top', 'the-core' ),
									'type'  => 'short-text',
									'value' => '',
								),
								'padding_right'  => array(
									'label' => false,
									'desc'  => __( 'right', 'the-core' ),
									'type'  => 'short-text',
									'value' => '',
								),
								'padding_bottom' => array(
									'label' => false,
									'desc'  => __( 'bottom', 'the-core' ),
									'type'  => 'short-text',
									'value' => '',
								),
								'padding_left'   => array(
									'label' => false,
									'desc'  => __( 'left', 'the-core' ),
									'help'  => __( 'This spacing will overwrite the spacing set for the column and will be used for devices with the resolution between 768px - 991px (tablet portrait). Leave blank for default column values.', 'the-core' ),
									'type'  => 'short-text',
									'value' => '',
								),
							)
						),
					),
				)
			),
			'smartphone_display'       => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Smartphone', 'the-core' ),
						'desc'         => __( 'Display this column on smartphone?', 'the-core' ),
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
				'choices' => array(
					'yes' => array(
						'padding_group' => array(
							'attr'    => array( 'class' => 'border-bottom-none' ),
							'type'    => 'group',
							'options' => array(
								'html_label'     => array(
									'type'  => 'html',
									'value' => '',
									'label' => __( 'Additional Spacing', 'the-core' ),
									'html'  => '',
								),
								'padding_top'    => array(
									'label' => false,
									'desc'  => __( 'top', 'the-core' ),
									'type'  => 'short-text',
									'value' => '0',
								),
								'padding_right'  => array(
									'label' => false,
									'desc'  => __( 'right', 'the-core' ),
									'type'  => 'short-text',
									'value' => '0',
								),
								'padding_bottom' => array(
									'label' => false,
									'desc'  => __( 'bottom', 'the-core' ),
									'type'  => 'short-text',
									'value' => '0',
								),
								'padding_left'   => array(
									'label' => false,
									'desc'  => __( 'left', 'the-core' ),
									'help'  => __( 'This spacing will overwrite the spacing set for the column and will be used for devices with the resolution up to 767px (smartphones both portrait and landscape as well as some low-resolution tablets). Leave blank for default column values.', 'the-core' ),
									'type'  => 'short-text',
									'value' => '0',
								),
							)
						),
					),
				)
			),
		),
	),
	'class'              => array(
		'label' => __( 'Custom Class', 'the-core' ),
		'desc'  => __( 'Enter custom CSS class', 'the-core' ),
		'help'  => __( 'You can use this class to further style this shortcode by adding your custom CSS in the <strong>custom.less</strong> file. This file is located on your server in the <strong>/child-theme/styles-less/</strong> folder.', 'the-core' ),
		'type'  => 'text',
		'value' => '',
	),
    'further_info'              => array(
        'label' => __( 'Дополнительные данные', 'the-core' ),
        'desc'  => __( 'Например data- артибуты. Указывать без кавычек', 'the-core' ),
        'help'  => __( 'Напр: data-parallax=scroll', 'the-core' ),
        'type'  => 'text',
        'value' => '',
    ),
);