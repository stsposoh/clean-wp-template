<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

$icon = $before_btn = $after_btn = '';
if ( $atts['icon_type']['tab_icon'] == 'icon-class' && ! empty( $atts['icon_type']['icon-class']['icon_class'] ) ) {
    $icon_size = ! empty( $atts['icon_size'] ) ? 'style="font-size:' . esc_attr( (int) $atts['icon_size'] ) . 'px;"' : '';
    $icon      = '<i class="' . $atts['icon_position'] . ' ' . $atts['icon_type']['icon-class']['icon_class'] . '" ' . $icon_size . '></i>';
} elseif ( $atts['icon_type']['tab_icon'] == 'upload-icon' && ! empty( $atts['icon_type']['upload-icon']['upload-custom-img'] ) ) {
    $icon_size = ! empty( $atts['icon_size'] ) ? 'style="width:' . esc_attr( (int) $atts['icon_size'] ) . 'px;"' : '';
    $icon      = '<img class="' . $atts['icon_position'] . '" src="' . the_core_change_original_link_with_cdn($atts['icon_type']['upload-icon']['upload-custom-img']['url']) . '" ' . $icon_size . ' alt=""/>';
}

// btn alignment
$alignment = ( isset( $atts['full_width'] ) && $atts['full_width']['selected_type'] == 'default' ) ? $atts['full_width']['default'] : '';
if ( isset( $alignment['btn_alignment'] ) ) {
	if ( $alignment['btn_alignment'] != 'fw-btn-side-by-side' ) {
		$before_btn = '<div class="' . $alignment['btn_alignment'] . '">';
		$after_btn  = '</div>';
	}
	elseif( $alignment['btn_alignment'] == 'fw-btn-side-by-side' ){
		$atts['class'] .= ' '.$alignment['btn_alignment'];
	}
}

$style = 'fw-btn-1';
if(isset($atts['style']['selected'])){
	$style = $atts['style']['selected'];
}

$span_style = '';
// btn size
$button_size = $atts['size'];
if ( $button_size['selected'] == 'custom' ) {
	$span_style = 'style="top:0;"';
	if(isset($atts['style'][$style]['border_size']) && !empty($atts['style'][$style]['border_size']) ){
		$line_height = (int)$button_size['custom']['height'] - 2*$atts['style'][$style]['border_size'];
	}
	else{
		$line_height = (int)$button_size['custom']['height'];
	}
	$btn_size_style = 'width:' . (int) esc_attr( $button_size['custom']['width'] ) . 'px; height:' . (int) esc_attr( $button_size['custom']['height'] ) . 'px; line-height:' . esc_attr($line_height) . 'px;';
	$btn_size_class = '';
} else {
	$btn_size_class = $button_size['selected'];
	$btn_size_style = '';
}

// for desktop
if( isset($atts['responsive']['desktop_display']['selected']) && $atts['responsive']['desktop_display']['selected'] == 'no' ) {
    $atts['class'] .= ' fw-desktop-hide-element';
}

// for tablet landscape
if( isset($atts['responsive']['tablet_landscape_display']['selected']) && $atts['responsive']['tablet_landscape_display']['selected'] == 'no' ) {
    $atts['class'] .= ' fw-tablet-landscape-hide-element';
}

// for tablet portrait
if( isset($atts['responsive']['tablet_display']['selected']) && $atts['responsive']['tablet_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-tablet-hide-element';
}

// for display on smartphone
if( isset($atts['responsive']['smartphone_display']['selected']) && $atts['responsive']['smartphone_display']['selected'] == 'no' ) {
	$atts['class'] .= ' fw-mobile-hide-element';
}



if (strpos($atts['link'], "#") !== false && strlen($atts['link']) > 1) {
	$atts['class'] .= ' anchor';
}

if( isset($atts['open_in_popup']['selected']) && $atts['open_in_popup']['selected'] == 'yes' ) {
    $data_animation .= ' data-rel="prettyPhoto"';
}

echo $before_btn;
if ( $atts['icon_position'] == 'pull-right-icon' ) : ?>
	<a href="<?php echo esc_attr( $atts['link'] ); ?>" target="<?php echo esc_attr( $atts['target'] ); ?>" class="fw-btn tf-sh-<?php echo esc_attr( $atts['unique_id'] ); ?> <?php echo ( $atts['full_width']['selected_type'] != 'default' ) ? esc_attr( $atts['full_width']['selected_type'] ) : ''; ?> <?php echo esc_attr( $btn_size_class ); ?> <?php echo esc_attr( $atts['class'] ); ?>"  style="<?php echo $btn_size_style; ?>">
		<span <?php echo $span_style; ?>>
			<?php echo the_core_translate( esc_attr( $atts['label'] ) ); echo $icon; ?>
		</span>
	</a>
<?php else: ?>
	<a href="<?php echo esc_attr( $atts['link'] ); ?>" target="<?php echo esc_attr( $atts['target'] ); ?>" class="fw-btn tf-sh-<?php echo esc_attr( $atts['unique_id'] ); ?> <?php echo ( $atts['full_width']['selected_type'] != 'default' ) ? esc_attr( $atts['full_width']['selected_type'] ) : ''; ?> <?php echo esc_attr( $btn_size_class ); ?>  <?php echo esc_attr( $atts['class'] ); ?> " style="<?php echo $btn_size_style; ?>">
		<span <?php echo $span_style; ?>>
			<?php echo $icon; echo the_core_translate( esc_attr( $atts['label'] ) ); ?>
		</span>
	</a>
<?php endif; ?>
<?php echo $after_btn; ?>