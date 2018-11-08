<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<div class="ingomafab">
    <div class="ingomafab__content">
        <div class="ingomafab__container" style="background-image: url(<?php echo fw_resize( $atts['demo_img']['url'], auto, auto, true ); ?>")>
            <div class="ingomafab__center">
                <div class="ingomafab__diamond"></div>
                <?php if ( !empty( $atts['text_inside'] ) ) { ?>
                <div class="ingomafab__text"><?php echo $atts['text_inside']; ?></div>
                <?php } ?>
            </div>
            <?php if ( !empty( $atts['text_btm'] ) ) { ?>
            <div class="ingomafab__logo-text"><?php echo $atts['text_btm']; ?></div>
            <?php } ?>
        </div>
    </div>
</div>





