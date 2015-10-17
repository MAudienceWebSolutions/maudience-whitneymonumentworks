<?php
	
	$testimonial_image = carbon_get_the_post_meta('crb_testimonial_image');
	$testimonial_text = carbon_get_the_post_meta('crb_testimonial_text');

	if ( !$testimonial_image || !$testimonial_text ) {
		return;
	}
?>

<div class="section-testimonial">
	<div class="shell">
		<div class="testimonial">
			<div class="testimonial-img"><?php echo wp_get_attachment_image( $testimonial_image, 'testimonial') ?></div><!-- /.testimonial-img -->
			<div class="testimonial-text">
				<?php echo wpautop( do_shortcode( $testimonial_text ) ); ?>
			</div><!-- /.testimonial-text -->
		</div><!-- /.testimonial -->
	</div><!-- /.shell -->
</div><!-- /.section-testimonial -->