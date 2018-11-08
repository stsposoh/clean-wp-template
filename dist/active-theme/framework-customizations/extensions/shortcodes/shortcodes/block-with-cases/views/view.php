<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<div class="case">

	<div class="case__img" style="background-image: url(<?php echo $atts['main_photo']['url']; ?>);"></div>

	<a href="<?php echo $atts['demo_link']; ?>" class="case__overlay">

		<div class="case__overlay-content">

            <div class="case__overlay-line"></div>

			<?php if ( !empty( $atts['title'] ) ) { ?>
			<div class="case__overlay-title">
				<?php echo $atts['title']; ?>
			</div>
			<?php } ?>

		</div>

	</a>

</div>
