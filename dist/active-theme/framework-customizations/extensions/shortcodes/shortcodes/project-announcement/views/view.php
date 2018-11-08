<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<div class="announce">
    <a class="announce__link" href="<?php echo $atts['demo_link']; ?>">
        <?php if ( !empty( $atts['demo_img'] ) ) { ?>
        <img src="<?php echo fw_resize( $atts['demo_img']['url'], auto, auto, true ); ?>" alt="" >
        <?php } ?>
    </a>

    <div class="announce__footer">
        <div class="announce__footer-title">
            <?php if ( !empty( $atts['demo_header'] ) ) { ?>
            <span><?php echo $atts['demo_header']; ?></span>
            <?php } ?>
        </div>
    </div>
</div>