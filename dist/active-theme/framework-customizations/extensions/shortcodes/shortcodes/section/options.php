<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

global $the_core_colors;
$the_core_admin_url          = admin_url();
$the_core_color_settings     = fw_get_db_settings_option( 'color_settings', $the_core_colors );
$the_core_template_directory = get_template_directory_uri();

$options = array(
	'unique_id'          => array(
		'type' => 'unique'
	),
	'section_name'       => array(
		'label' => __( 'Section Name', 'the-core' ),
		'desc'  => __( 'Enter a name (it is for internal use and will not appear on the front end)', 'the-core' ),
		'help'  => __( 'Use this option to name your sections. It will help you go through the structure a lot easier.', 'the-core' ),
		'type'  => 'text',
	),
	'is_fullwidth'       => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'selected' => array(
				'label'        => __( 'Full Width Content', 'the-core' ),
				'type'         => 'switch',
				'desc'         => __( 'Make the content inside this section full width?', 'the-core' ),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'the-core' ),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'the-core' ),
				),
				'value'        => 'no',
			),
		),
	),
	'vertical_align'     => array(
		'label'        => __( 'Vertical Align', 'the-core' ),
		'type'         => 'switch',
		'desc'         => __( 'Align all the columns inside this section on the middle?', 'the-core' ),
		'help'         => __( "The middle vertical align option works with any number of columns as long as they are on a single row", "the-core" ),
		'value'        => '',
		'right-choice' => array(
			'value' => 'fw-content-vertical-align-middle',
			'label' => __( 'Yes', 'the-core' ),
		),
		'left-choice'  => array(
			'value' => '',
			'label' => __( 'No', 'the-core' ),
		),
	),
	'height'             => array(
		'label'   => __( 'Height', 'the-core' ),
		'desc'    => __( "Select the section's height in px (Ex: 300)", "the-core" ),
		'help'    => __( 'Using fixed heights on sections might impact the responsive behaviour of your website in a negative way. Read', 'the-core' ) . ' <a href="http://docs.themefuse.com/the-core/your-theme/responsive/best-practices#2" target="_blank">this article</a> ' . __( 'for more information and best practices', 'the-core' ),
		'type'    => 'radio-text',
		'value'   => 'auto',
		'choices' => array(
			'auto'                 => __( 'auto', 'the-core' ),
			'fw-section-height-sm' => __( 'small', 'the-core' ),
			'fw-section-height-md' => __( 'medium', 'the-core' ),
			'fw-section-height-lg' => __( 'large', 'the-core' ),
		),
		'custom'  => 'custom_width',
	),
	'background_options' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'background' => array(
				'label'   => __( 'Background', 'the-core' ),
				'desc'    => __( 'Select the background for your section', 'the-core' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'choices' => array(
					'none'           => __( 'None', 'the-core' ),
					'image'          => __( 'Image', 'the-core' ),
					'video'          => __( 'Video', 'the-core' ),
				),
				'value'   => 'none'
			),
		),
		'choices'      => array(
			'none'           => array(),
			'image'          => array(
				'background_image' => array(
					'label'   => __( '', 'the-core' ),
					'type'    => 'background-image',
					'choices' => array(//	in future may will set predefined images
					)
				),
				'repeat'           => array(
					'label'   => __( '', 'the-core' ),
					'desc'    => __( 'Select how will the background repeat', 'the-core' ),
					'type'    => 'short-select',
					'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
					'value'   => 'no-repeat',
					'choices' => array(
						'no-repeat' => __( 'No-Repeat', 'the-core' ),
						'repeat'    => __( 'Repeat', 'the-core' ),
						'repeat-x'  => __( 'Repeat-X', 'the-core' ),
						'repeat-y'  => __( 'Repeat-Y', 'the-core' ),
					)
				),
				'bg_position_x'    => array(
					'label'   => __( 'Position', 'the-core' ),
					'desc'    => __( 'Select the horizontal background position', 'the-core' ),
					'type'    => 'short-select',
					'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
					'value'   => '',
					'choices' => array(
						'left'   => __( 'Left', 'the-core' ),
						'center' => __( 'Center', 'the-core' ),
						'right'  => __( 'Right', 'the-core' ),
					)
				),
				'bg_position_y'    => array(
					'label'   => __( '', 'the-core' ),
					'desc'    => __( 'Select the vertical background position', 'the-core' ),
					'type'    => 'short-select',
					'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
					'value'   => '',
					'choices' => array(
						'top'    => __( 'Top', 'the-core' ),
						'center' => __( 'Center', 'the-core' ),
						'bottom' => __( 'Bottom', 'the-core' ),
					)
				),
				'bg_size'          => array(
					'label'   => __( 'Size', 'the-core' ),
					'desc'    => __( 'Select the background size', 'the-core' ),
					'help'    => __( '<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'the-core' ),
					'type'    => 'short-select',
					'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
					'value'   => '',
					'choices' => array(
						'auto'    => __( 'Auto', 'the-core' ),
						'cover'   => __( 'Cover', 'the-core' ),
						'contain' => __( 'Contain', 'the-core' ),
					)
				),
			),
			'video'          => array(
				'video_type'      => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'attr'         => array( 'class' => 'fw-video-background-image' ),
					'picker'       => array(
						'selected' => array(
							'label'   => __( 'Video Type', 'the-core' ),
							'desc'    => __( 'Select the video type', 'the-core' ),
							'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
							'type'    => 'radio',
							'choices' => array(
								'youtube'  => __( 'Youtube', 'the-core' ),
								'uploaded' => __( 'Upload', 'the-core' ),
							),
							'value'   => 'youtube'
						),
					),
					'choices'      => array(
						'youtube'  => array(
							'video'  => array(
								'label' => __( '', 'the-core' ),
								'desc'  => __( 'Insert a YouTube video URL', 'the-core' ),
								'type'  => 'text',
							),
							'poster' => array(
								'label' => __( 'Replacement Image', 'the-core' ),
								'type'  => 'background-image',
								'help'  => __( 'This image will replace the video on mobile devices that disable background videos', 'the-core' ),
							),
						),
						'uploaded' => array(
							'video'  => array(
								'label'       => __( '', 'the-core' ),
								'desc'        => __( 'Upload a video', 'the-core' ),
								'images_only' => false,
								'type'        => 'upload',
							),
							'poster' => array(
								'label'   => __( 'Replacement Image', 'the-core' ),
								'type'    => 'background-image',
								'help'    => __( 'This image will replace the video on mobile devices that disable background videos', 'the-core' ),
								'choices' => array(//	in future may will set predefined images
								)
							),
						),
					),
					'show_borders' => false,
				),
				'loop_video'      => array(
					'label'        => __( 'Loop Video', 'the-core' ),
					'desc'         => __( 'Enable video loop?', 'the-core' ),
					'type'         => 'switch',
					'right-choice' => array(
						'value' => 'yes',
						'label' => __( 'Yes', 'the-core' )
					),
					'left-choice'  => array(
						'value' => 'no',
						'label' => __( 'No', 'the-core' )
					),
					'value'        => 'yes',
				),
			),
		),
		'show_borders' => false,
	),
	'link_id'            => array(
		'type'  => 'text',
		'label' => __( 'Link ID', 'the-core' ),
		'desc'  => __( 'Enter a custom CSS ID for this section (Ex: example-id)', 'the-core' ),
		'help'  => sprintf( "%s", __( 'Use this ID in any URL link in the page in order to anchor link to this section: (Ex: http://www.your-domain.com/page-name#example-id)<br> Another way to anchor link to this section is to copy/paste only the ID name in any link field on this page: (Ex: #example-id)', 'the-core' ) ),
		'value' => '',
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
						'desc'         => __( 'Display this section on desktop?', 'the-core' ),
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
				'type'   => 'multi-picker',
				'label'  => false,
				'desc'   => false,
				'picker' => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Tablet Landscape', 'the-core' ),
						'desc'         => __( 'Display this section on tablet landscape?', 'the-core' ),
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
			'tablet_display'           => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Tablet Portrait', 'the-core' ),
						'desc'         => __( 'Display this section on tablet portrait?', 'the-core' ),
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
			'smartphone_display'       => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Smartphone', 'the-core' ),
						'desc'         => __( 'Display this section on smartphone?', 'the-core' ),
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