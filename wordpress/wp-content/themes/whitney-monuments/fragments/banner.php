<?php
	$banner_text = carbon_get_the_post_meta('crb_banner_text');

	if ( !$banner_text ) {
		return;
	}
?>

<div class="banner">
	<?php if ( $banner_image = carbon_get_the_post_meta('crb_banner_image') ): ?>
		<div class="banner-img">
			<?php echo wp_get_attachment_image( $banner_image, 'banner' ) ?>
		</div><!-- /.banner-img -->
	<?php endif ?>
	<div class="banner-text">
		<div class="shell">
			<?php echo wpautop( do_shortcode( $banner_text ) ); ?>
		</div><!-- /.shell -->
	</div><!-- /.banner-text -->
</div><!-- /.banner -->