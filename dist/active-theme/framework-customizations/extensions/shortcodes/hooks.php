<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


if ( ! function_exists( 'fw_disable_default_shortcodes' ) ) :
	function fw_disable_default_shortcodes( $to_disabled ) {
		$to_disabled[] = 'call_to_action';
		$to_disabled[] = 'notification';

		return $to_disabled;
	}

	add_filter( 'fw_ext_shortcodes_disable_shortcodes', 'fw_disable_default_shortcodes', 10, 2 );
endif;