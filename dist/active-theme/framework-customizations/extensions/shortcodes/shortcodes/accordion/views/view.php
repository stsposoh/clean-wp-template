<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */
?>


<?php foreach ($atts['tabs'] as $key => $tab) : ?>
<div class="accordion">
    <input id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>" type="radio" class="accordion-toggle" name="toggle" />
    <label for="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>"><?php echo do_shortcode( $tab['tab_title'] ) ?></label>

    <section>
        <div class="fw-tab-content" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
            <p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
        </div>
    </section>
</div>
<?php endforeach; ?>

