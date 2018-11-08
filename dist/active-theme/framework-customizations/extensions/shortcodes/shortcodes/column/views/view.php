<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id_to_class = array(
	'1_6' => 'fw-col-sm-2',
	'1_5' => 'fw-col-sm-1-5',
	'1_4' => 'fw-col-sm-3',
	'1_3' => 'fw-col-sm-4',
	'1_2' => 'fw-col-sm-6',
	'2_3' => 'fw-col-sm-8',
	'3_4' => 'fw-col-sm-9',
	'1_1' => 'fw-col-sm-12'
);

// height
$column_height = '';
if( isset($atts['column_height']['selected']) && $atts['column_height']['selected'] == 'custom'){
	$column_height = 'height: '.(int)$atts['column_height']['custom']['height'].'px;';
	$atts['class'] .= ' fw-column-height-custom';
}

$class = '';
// for column class on tablet
if( isset($atts['responsive']['tablet_display']['selected']) && $atts['responsive']['tablet_display']['selected'] == 'yes' ) {
	$class .= ' '.esc_attr($atts['responsive']['tablet_display']['yes']['tablet']);
	if( $atts['responsive']['tablet_display']['yes']['tablet'] != '' ) {
		$id_to_class = array(
			'1_6' => 'fw-col-md-2',
			'1_5' => 'fw-col-md-1-5',
			'1_4' => 'fw-col-md-3',
			'1_3' => 'fw-col-md-4',
			'1_2' => 'fw-col-md-6',
			'2_3' => 'fw-col-md-8',
			'3_4' => 'fw-col-md-9',
			'1_1' => 'fw-col-md-12'
		);
	}
}
elseif( isset($atts['responsive']['tablet_display']['selected']) && $atts['responsive']['tablet_display']['selected'] == 'no' ) {
	$class .= ' fw-tablet-hide-element';
}

// original column width
$class .= ' '.$id_to_class[ $atts['width'] ];

// for desktop
if( isset($atts['responsive']['desktop_display']['selected']) && $atts['responsive']['desktop_display']['selected'] == 'no' ) {
    $class .= ' fw-desktop-hide-element';
}

// for tablet landscape
if( isset($atts['responsive']['tablet_landscape_display']['selected']) && $atts['responsive']['tablet_landscape_display']['selected'] == 'no' ) {
    $class .= ' fw-tablet-landscape-hide-element';
}

// for display on smartphone
if( isset($atts['responsive']['smartphone_display']['selected']) && $atts['responsive']['smartphone_display']['selected'] == 'no' ) {
	$class .= ' fw-mobile-hide-element';
}

// for unique id
if (isset($atts['unique_id'])) {
	$class .= ' tf-sh-' . esc_attr( $atts['unique_id'] );
	$id = 'column-'.$atts['unique_id'];
}
else{
	$id = uniqid( 'column-' );
}

$class .= ' ' . esc_attr( $atts['class'] ) . ' ' . esc_attr( $atts['default_padding'] );

$column_style = trim($column_height);
if( !empty($column_style) ) {
	$column_style = 'style="' . $column_style . '"';
}
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo trim($class); ?>" <?php echo trim($column_style); ?> <?php echo esc_attr( $atts['further_info'] ); ?>>
	<div class="fw-main-row-overlay"></div>
	<div class="fw-col-inner">
		<?php echo the_core_translate( esc_textarea( do_shortcode( $content ) ) ); ?>
	</div>
</div>