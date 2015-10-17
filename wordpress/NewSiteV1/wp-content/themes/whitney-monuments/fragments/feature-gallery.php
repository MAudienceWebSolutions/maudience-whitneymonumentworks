<?php

	$gallery = carbon_get_the_post_meta('crb_gallery_item', 'complex');

	if ( !$gallery ) {
		return;
	}
?>

<div class="section section-gallery">
	<div class="shell">
		<?php if ( $title = carbon_get_the_post_meta('crb_gallery_title') ): ?>
			<div class="section-title"><h1><?php echo $title; ?></h1></div><!-- /.section-title -->		
		<?php endif ?>

		<div class="section-body">
			<div class="features-list clearfix">
				<div class="owl-carousel">

					<?php foreach ($gallery as $gallery_item): ?>

						<div class="feature-item">
							<?php if ( $gallery_item['title'] ): ?>
								<h3 class="item-title"><?php echo $gallery_item['title']; ?></h3><!-- /.item-title -->
							<?php endif ?>
							<div class="item-box">
								<div class="item-img"><?php echo wp_get_attachment_image($gallery_item['image'], 'gallery') ?></div><!-- /.item-img -->
								<?php echo wpautop( do_shortcode( $gallery_item['text'] ) ); ?>
							</div><!-- /.item-box -->
						</div><!-- /.feature-item -->
						
					<?php endforeach ?>

				</div><!-- /.slides -->
			</div><!-- /.features-list -->
		</div><!-- /.section-body -->
	</div><!-- /.shell -->
</div><!-- /.section -->