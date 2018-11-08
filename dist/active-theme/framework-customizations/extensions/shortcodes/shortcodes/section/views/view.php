<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id              = ( isset($atts['link_id']) && !empty($atts['link_id']) ) ? $atts['link_id'] : uniqid( 'section-' );
$bg_color        = $bg_image = $bg_image_set = $bg_video_data_attr = $extra_classes = $margin_bottom = $data_height = $the_core_overlay_style = $custom_shape_top = $custom_shape_bottom = '';
$container_class = ( isset( $atts['is_fullwidth']['selected'] ) && $atts['is_fullwidth']['selected'] == 'yes' ) ? 'fw-container-fluid' : 'fw-container';
$container_style = '';

if(( isset( $atts['is_fullwidth']['selected'] ) && $atts['is_fullwidth']['selected'] == 'no' ) ){
	// container color
	if( isset($atts['is_fullwidth']['no']['container_color']['id']) && $atts['is_fullwidth']['no']['container_color']['id'] != 'fw-custom' ){
		$container_class .= ' fw_theme_bg_' . $atts['is_fullwidth']['no']['container_color']['id'];
	}
	elseif( isset($atts['is_fullwidth']['no']['container_color']['color']) && !empty($atts['is_fullwidth']['no']['container_color']['color']) ){
		$container_style = 'style="background-color:' . $atts['is_fullwidth']['no']['container_color']['color'] . ';"';
	}
}

if ( isset( $atts['background_options']['background'] ) && $atts['background_options']['background'] == 'default' ) {
	$extra_classes .= ' fw-main-row';
} elseif ( isset( $atts['is_fullwidth'] ) && isset( $atts['auto_generated'] ) && $atts['auto_generated'] == '' ) {
	$extra_classes .= ' fw-main-row-custom';
} else {
	$extra_classes .= ' fw-main-row';
}

if ( isset( $atts['first_in_builder'] ) && $atts['first_in_builder'] ) {
	$extra_classes .= ' fw-main-row-top';
}

if ( isset( $atts['default_spacing'] ) && $atts['default_spacing'] != '' ) {
	$extra_classes .= ' ' . $atts['default_spacing'];
}

if ( isset( $atts['margin_bottom'] ) && $atts['margin_bottom'] != '' && $atts['margin_bottom'] != 'fw-content-overlay-sm' && $atts['margin_bottom'] != 'fw-content-overlay-md' && $atts['margin_bottom'] != 'fw-content-overlay-lg' ) {
	$margin_bottom = 'margin-bottom:' . - (int) $atts['margin_bottom'] . 'px;';
	$extra_classes .= ' fw-content-overlay-custom';
} elseif ( isset( $atts['margin_bottom'] ) ) {
	$extra_classes .= ' ' . $atts['margin_bottom'];
}

if ( $atts['background_options']['background'] == 'image' && ! empty( $atts['background_options']['image']['background_image']['data'] ) ) {
	//$bg_image_set = 'data-bgset="' . $atts['background_options']['image']['background_image']['data']['icon'] . '"';
	$bg_image .= ' background-image:url(' . $atts['background_options']['image']['background_image']['data']['icon'] . ');';
	$bg_image .= ' background-repeat: ' . $atts['background_options']['image']['repeat'] . ';';
	$bg_image .= ' background-position: ' . $atts['background_options']['image']['bg_position_x'] . ' ' . $atts['background_options']['image']['bg_position_y'] . ';';
	$bg_image .= ' background-size: ' . $atts['background_options']['image']['bg_size'] . ';';

	if ( isset( $atts['background_options']['image']['background_color']['id'] ) && $atts['background_options']['image']['background_color']['id'] == 'fw-custom' && ! empty( $atts['background_options']['image']['background_color']['color'] ) ) {
		$bg_color = 'background-color:' . $atts['background_options']['image']['background_color']['color'] . ';';
	} elseif ( isset( $atts['background_options']['image']['background_color']['id'] ) ) {
		$extra_classes .= ' fw_theme_bg_' . $atts['background_options']['image']['background_color']['id'];
	}
	$extra_classes .= ' fw-section-image';
} elseif ( $atts['background_options']['background'] == 'video' ) {
	$poster = '';
	if($atts['background_options']['video']['video_type']['selected'] == 'uploaded' ){
		$video_url = $atts['background_options']['video']['video_type']['uploaded']['video']['url'];
		if( isset($atts['background_options']['video']['video_type']['uploaded']['poster']['data']['icon']) ) {
			$poster = $atts['background_options']['video']['video_type']['uploaded']['poster']['data']['icon'];
		}
	}
	else{
		$video_url = $atts['background_options']['video']['video_type']['youtube']['video'];
		if( isset($atts['background_options']['video']['video_type']['youtube']['poster']['data']['icon']) && !empty($atts['background_options']['video']['video_type']['youtube']['poster']['data']['icon']) ) {
			$poster = $atts['background_options']['video']['video_type']['youtube']['poster']['data']['icon'];
		}
	}

	if( isset($atts['background_options']['video']['loop_video']) && $atts['background_options']['video']['loop_video'] == 'no' ) {
		$loop = false;
	}
	else {
		$loop = true;
	}

	$filetype  = wp_check_filetype( $video_url );
	$filetypes = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype  = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$bg_video_data_attr = 'data-background-options="' . fw_htmlspecialchars( json_encode( array( 'loop' => $loop, 'source' => array( $filetype => $video_url, 'poster' => $poster ) ) ) ) . '"';
	$extra_classes .= ' background-video';
} elseif ( $atts['background_options']['background'] == 'default' ) {
	$extra_classes .= ' background-default';
} elseif ( $atts['background_options']['background'] == 'color' ) {
	if ( isset( $atts['background_options']['color']['background_color']['id'] ) && $atts['background_options']['color']['background_color']['id'] == 'fw-custom' ) {
		if ( ! empty( $atts['background_options']['color']['background_color']['color'] ) ) {
			$bg_color = 'background-color:' . $atts['background_options']['color']['background_color']['color'] . ';';
		}
	} elseif ( isset( $atts['background_options']['color']['background_color']['id'] ) ) {
		$extra_classes .= ' fw_theme_bg_' . $atts['background_options']['color']['background_color']['id'];
	}
}

// overlay
if ( $atts['background_options']['background'] == 'image' || $atts['background_options']['background'] == 'video' ) {
	$type    = $atts['background_options']['background'];
	$overlay = $atts['background_options'][ $type ]['overlay_options']['overlay'];
	if ( $overlay == 'yes' ) {
		$the_core_overlay_bg    = $atts['background_options'][ $type ]['overlay_options']['yes']['background']['id'];
		$the_core_opacity_param = 'overlay_opacity_' . $atts['background_options']['background'];
		$the_core_opacity       = $atts['background_options'][ $type ]['overlay_options']['yes'][ $the_core_opacity_param ] / 100;
		if ( $the_core_overlay_bg == 'fw-custom' ) {
			$the_core_overlay_style .= '<div class="fw-main-row-overlay" style="background-color: ' . $atts['background_options'][ $type ]['overlay_options']['yes']['background']['color'] . '; opacity: ' . $the_core_opacity . ';"></div>';
		} else {
			$the_core_overlay_style .= '<div class="fw-main-row-overlay fw_theme_bg_' . $the_core_overlay_bg . '" style="opacity: ' . $the_core_opacity . ';"></div>';
		}
	}
}

if ( $atts['height'] != 'auto' && $atts['height'] != 'fw-section-height-sm' && $atts['height'] != 'fw-section-height-md' && $atts['height'] != 'fw-section-height-lg' ) {
	$height      = (int) $atts['height'];
	$data_height = 'height: ' . $height . 'px;';
	$extra_classes .= ' fw-section-height-custom';
} else {
	$extra_classes .= ' ' . $atts['height'];
}

// custom shape option
if( isset($atts['custom_shape']) && $atts['custom_shape'] == 'yes' ) {
	$extra_classes .= ' custom-shape';

	if( $atts['custom_shape_styling']['custom_shape_top'] != 'custom-shape-top-type-none' ) {
		$shape_top_bg = '';
		$shape_top_id = $atts['custom_shape_styling']['custom_shape_top'].'-'.$atts['unique_id'];
		$shape_top_color = the_core_get_color_palette_color_and_class($atts['custom_shape_styling']['custom_shape_color_top'], array('return_color' => true) );
		if( !empty($shape_top_color['color']) ) $shape_top_bg = 'fill="'.$shape_top_color['color'].'"';
		$custom_shape_top .= '<div class="custom-shape-wrap ' . $atts['custom_shape_styling']['custom_shape_top'] . '"><div class="shape-container">';
		if ( $atts['custom_shape_styling']['custom_shape_top'] == 'custom-shape-top-type-1' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '130px';
			}
			$custom_shape_top .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_top_id.'" preserveAspectRatio="none" style="background-repeat: no-repeat;" patternUnits="userSpaceOnUse" x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 100 130"><polygon ' . $shape_top_bg . ' points="100,130 100,0 49,0 "></polygon><polygon ' . $shape_top_bg . ' points="0,130 0,0 51,0 "></polygon></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_top_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_top'] == 'custom-shape-top-type-2' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '130px';
			}
			$custom_shape_top .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_top_id.'" preserveAspectRatio="none" style="background-repeat: no-repeat;" patternUnits="userSpaceOnUse" x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 100 130"><polygon ' . $shape_top_bg . ' points="100,1 0,130 0,0 100,0 "></polygon></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_top_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_top'] == 'custom-shape-top-type-3' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '130px';
			}
			$custom_shape_top .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_top_id.'" preserveAspectRatio="none" style="background-repeat: no-repeat;" patternUnits="userSpaceOnUse" x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 100 130"><polygon ' . $shape_top_bg . ' points="0,1 100,130 100,0 0,0 "></polygon></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_top_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_top'] == 'custom-shape-top-type-4' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '191px';
			}
			$custom_shape_top .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_top_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0px" y="0px" width="100%" height="'.$height.'" viewBox="0 0 100 191"><polygon ' . $shape_top_bg . ' points="100,191 72.3,11 0,191 0,0 100,0 "/></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_top_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_top'] == 'custom-shape-top-type-5' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '191px';
			}
			$custom_shape_top .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_top_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0px" y="0px" width="100%" height="'.$height.'" viewBox="0 0 100 191"><polygon ' . $shape_top_bg . ' points="0,191 28.7,11 100,191 100,0 0,0 "/></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_top_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_top'] == 'custom-shape-top-type-6' ) {
			if( wp_is_mobile() ) {
				$height = '40px';
			}
			else {
				$height = '120px';
			}
			$custom_shape_top .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_top_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 1920 192"><path ' . $shape_top_bg . ' d="M1920,103.916c-39.924,58.224-43.636-81.627-86.058-49.686c-22.961,17.288-28.423,140.669-63.67,132.4 c-29.69-6.963-46.923-44.963-62.128-72.205c-31.87-50.352-80.334,24.84-134.72,4.505c-43.687-16.334-35.42-36.493-70.842-0.401 c-38.085,38.805-65.343-59.752-92.63-51.585c-52.535,15.724-66.523,177.012-107.387,83.964 c-21.395-48.717-68.874-122.572-103.424-46.162c-45.148,99.85-54.337,15.104-73.936-37.224 c-27.286-72.854-47.56,51.146-90.996,61.786c-25.521,6.251-43.74-24.594-56.396-47.57c-50.189-68.07-72.222,38.758-105.804,43.181 c-33.582,4.423-43.953-41.189-78.171-31.452c-38.656,11-44.729,100.248-75.704,99.201c-32.066-1.084-10.475-114-58.262-132.809 c-37.053-14.583-44.995,46.795-87.281,46.001c-42.285-0.794-53.14-138.587-95.082-45.167 c-9.374,20.879-16.322,104.269-43.433,110.09c-35.062,7.527-43.858-81.873-90.924-82.225c-68.327,5.109-61.932,82.615-96.709,70.775 c-29.869-10.169-49.188-132.369-72.778-123.57c-26.432,9.858-29.216,120.633-77.917,71.066 C72.629,83.297,61.38,24.131,26.401,70.246C5.238,98.146,22.397,78.093,0,105.667V0h1920V103.916z"/></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_top_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_top'] == 'custom-shape-top-type-7' ) {
			$custom_shape_top .= '<svg width="100%" height="20px"><defs><pattern id="'.$shape_top_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0" y="0" width="30px" height="20px" viewBox="0 0 106 67"><path ' . $shape_top_bg . ' d="M108.082,43.624c-27.02,0-27.02,22.293-54.039,22.293C27.021,65.916,27.021,43.624,0,43.624L0-1h107.941"/></pattern></defs><rect x="0" y="0" width="100%" height="20px" fill="url(#'.$shape_top_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_top'] == 'custom-shape-top-type-8' ) {
			$custom_shape_top .= '<svg width="100%" height="11px"><defs><pattern id="'.$shape_top_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0" y="0" width="22px" height="11px" viewBox="0 0 100 45"><polygon ' . $shape_top_bg . ' points="100,16 50,45 0,16 0,0  100,0"/></pattern></defs><rect x="0" y="0" width="100%" height="11px" fill="url(#'.$shape_top_id.')"></rect></svg>';
		}
		$custom_shape_top .= '</div></div>';
	}

	if( $atts['custom_shape_styling']['custom_shape_bottom'] != 'custom-shape-bottom-type-none' ) {
		$shape_bottom_bg = '';
		$shape_bottom_id = $atts['custom_shape_styling']['custom_shape_bottom'].'-'.$atts['unique_id'];
		$shape_bottom_color = the_core_get_color_palette_color_and_class($atts['custom_shape_styling']['custom_shape_color_bottom'], array('return_color' => true) );
		if( !empty($shape_bottom_color['color']) ) $shape_bottom_bg = 'fill="'.$shape_bottom_color['color'].'""';
		$custom_shape_bottom .= '<div class="custom-shape-wrap ' . $atts['custom_shape_styling']['custom_shape_bottom'] . '"><div class="shape-container">';
		if ( $atts['custom_shape_styling']['custom_shape_bottom'] == 'custom-shape-bottom-type-1' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '130px';
			}
			$custom_shape_bottom .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_bottom_id.'" preserveAspectRatio="none" style="background-repeat: no-repeat;" patternUnits="userSpaceOnUse" x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 100 130"><polygon ' . $shape_bottom_bg . ' points="0,0 0,130 51,130 "></polygon><polygon ' . $shape_bottom_bg . ' points="100,0 100,130 49,130 "></polygon></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_bottom_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_bottom'] == 'custom-shape-bottom-type-2' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '130px';
			}
			$custom_shape_bottom .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_bottom_id.'" preserveAspectRatio="none" style="background-repeat: no-repeat;" patternUnits="userSpaceOnUse" x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 100 130"><polygon ' . $shape_bottom_bg . ' points="100,129 0,0 0,130 100,130 "></polygon></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_bottom_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_bottom'] == 'custom-shape-bottom-type-3' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '130px';
			}
			$custom_shape_bottom .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_bottom_id.'" preserveAspectRatio="none" style="background-repeat: no-repeat;" patternUnits="userSpaceOnUse" x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 100 130"><polygon ' . $shape_bottom_bg . ' points="100,0 100,130 -1,130 "></polygon></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_bottom_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_bottom'] == 'custom-shape-bottom-type-4' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '191px';
			}
			$custom_shape_bottom .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_bottom_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 100 191"><polygon ' . $shape_bottom_bg . ' points="0,0 72.3,180 100,4 100,191 0,191 "/></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_bottom_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_bottom'] == 'custom-shape-bottom-type-5' ) {
			if( wp_is_mobile() ) {
				$height = '50px';
			}
			else {
				$height = '191px';
			}
			$custom_shape_bottom .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_bottom_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 100 191"><polygon ' . $shape_bottom_bg . ' points="0,0 28.7,180 100,4 100,191 0,191 "/></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_bottom_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_bottom'] == 'custom-shape-bottom-type-6' ) {
			if( wp_is_mobile() ) {
				$height = '40px';
			}
			else {
				$height = '120px';
			}
			$custom_shape_bottom .= '<svg width="100%" height="'.$height.'"><defs><pattern id="'.$shape_bottom_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0" y="0" width="100%" height="'.$height.'" viewBox="0 0 1920 192"><path ' . $shape_bottom_bg . ' d="M1920,88.761c-39.924-58.224-43.636,81.627-86.058,49.686c-22.961-17.288-28.423-140.669-63.67-132.4  c-29.69,6.963-46.923,44.963-62.128,72.205c-31.87,50.352-80.334-24.84-134.72-4.505c-43.687,16.334-35.42,36.493-70.842,0.401  c-38.085-38.805-65.343,59.752-92.63,51.585c-52.535-15.724-66.523-177.012-107.387-83.964  c-21.395,48.717-68.874,122.572-103.424,46.162c-45.148-99.85-54.337-15.104-73.936,37.224  c-27.286,72.854-47.56-51.146-90.996-61.786c-25.521-6.251-43.74,24.594-56.396,47.57c-50.189,68.07-72.222-38.758-105.804-43.181  c-33.582-4.423-43.953,41.189-78.171,31.452c-38.656-11-44.729-100.248-75.704-99.201c-32.066,1.084-10.475,114-58.262,132.809  c-37.053,14.583-44.995-46.795-87.281-46.001c-42.285,0.794-53.14,138.587-95.082,45.167  c-9.374-20.879-16.322-104.269-43.433-110.09c-35.062-7.527-43.858,81.873-90.924,82.225c-68.327-5.109-61.932-82.615-96.709-70.775  c-29.869,10.169-49.188,132.369-72.778,123.57c-26.432-9.858-29.216-120.633-77.917-71.066  c-23.123,23.532-34.372,82.698-69.351,36.584C5.238,94.531,22.397,114.583,0,87.009v105.667h1920V88.761z"/></pattern></defs><rect x="0" y="0" width="100%" height="'.$height.'" fill="url(#'.$shape_bottom_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_bottom'] == 'custom-shape-bottom-type-7' ) {
			$custom_shape_bottom .= '<svg width="100%" height="20px"><defs><pattern id="'.$shape_bottom_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0" y="0" width="30px" height="20px" viewBox="0 0 106 67"><path ' . $shape_bottom_bg . ' d="M-1.082,23.293C25.938,23.293,25.938,1,52.958,1C79.979,1,79.979,23.293,107,23.293v44.624H-0.941"/></pattern></defs><rect x="0" y="0" width="100%" height="20px" fill="url(#'.$shape_bottom_id.')"></rect></svg>';
		} elseif ( $atts['custom_shape_styling']['custom_shape_bottom'] == 'custom-shape-bottom-type-8' ) {
			$custom_shape_bottom .= '<svg width="100%" height="11px"><defs><pattern id="'.$shape_bottom_id.'" preserveAspectRatio="none" patternUnits="userSpaceOnUse"  x="0" y="0" width="22px" height="11px" viewBox="0 0 100 45"><polygon ' . $shape_bottom_bg . ' points="0,29 50,0 100,29 100,45 0,45 "/></pattern></defs><rect x="0" y="0" width="100%" height="11px" fill="url(#'.$shape_bottom_id.')"></rect></svg>';
		}
		$custom_shape_bottom .= '</div></div>';
	}

}

// vertical align middle
if( isset($atts['vertical_align']) ){
	$extra_classes .= ' '.$atts['vertical_align'];
}

$data_parallax = '';
if ( $atts['background_options']['background'] == 'image' && isset($atts['background_options']['image']['parallax']['selected']) && $atts['background_options']['image']['parallax']['selected'] == 'yes' ) :
	$extra_classes .= ' parallax-section';
	$data_parallax = 'data-stellar-background-ratio="'.( (int)$atts['background_options']['image']['parallax']['yes']['parallax_speed']/10).'"';
endif;

// for desktop
if( isset($atts['responsive']['desktop_display']['selected']) && $atts['responsive']['desktop_display']['selected'] == 'no' ) {
	$extra_classes .= ' fw-desktop-hide-element';
}

// for tablet landscape
if( isset($atts['responsive']['tablet_landscape_display']['selected']) && $atts['responsive']['tablet_landscape_display']['selected'] == 'no' ) {
	$extra_classes .= ' fw-tablet-landscape-hide-element';
}

// for tablet portrait
if( isset($atts['responsive']['tablet_display']['selected']) && $atts['responsive']['tablet_display']['selected'] == 'no' ) {
	$extra_classes .= ' fw-tablet-hide-element';
}

// for display on smartphone
if( isset($atts['responsive']['smartphone_display']['selected']) && $atts['responsive']['smartphone_display']['selected'] == 'no' ) {
	$extra_classes .= ' fw-mobile-hide-element';
}

if( isset($atts['unique_id']) ) {
	$extra_classes .= ' tf-sh-'.$atts['unique_id'];
}
?>
<section <?php echo $data_parallax; ?> id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr( $extra_classes ); ?> <?php echo esc_attr( $atts['class'] ); ?>" <?php echo $bg_image_set; ?> style="<?php echo $bg_color; ?> <?php echo $bg_image; ?> <?php echo $margin_bottom; ?> <?php echo $data_height; ?>" <?php echo esc_attr( $atts['further_info'] ); ?> >
	<?php echo $custom_shape_top; ?>
	<?php echo $the_core_overlay_style; ?>
	<div class="<?php echo esc_attr( $container_class ); ?>" <?php echo $container_style; ?>>
		<?php echo do_shortcode( $content ); ?>
	</div>
	<?php echo $custom_shape_bottom; ?>
</section>