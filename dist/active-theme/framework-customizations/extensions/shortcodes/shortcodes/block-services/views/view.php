<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<div class="service">
    <?php if ( !empty( $atts['custom_text'] ) ) { ?>
    <a href="<?php echo esc_attr($atts['link_btn']) ?>" class="service__link" target="<?php echo esc_attr($atts['target_btn']) ?>"><?php echo $atts['custom_text']; ?></a>
    <?php } ?>
    <?php if ( !empty( $atts['custom_list'] ) ) { ?>
    <div class="service__list"><?php echo $atts['custom_list']; ?></div>
    <?php } ?>
</div>