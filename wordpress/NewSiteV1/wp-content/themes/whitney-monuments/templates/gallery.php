<?php 
/**
 * Template Name: Gallery
 **/
get_header(); ?>

	<div class="main">
		<div class="shell">

			<?php 
				crb_the_title('<h2 class="page-title">', '</h2>');
				$monument_categories = get_terms('monument_category', 'orderby=id&hide_empty=0');
			?>

			<?php if ( $monument_categories ): ?>
				<div class="gallery-nav">
					<a class="current" href="#" data-filter="*">All Categories</a>
					<?php foreach ($monument_categories as $monument_category): ?>
						<a href="#" data-filter=".<?php echo 'gallery-'.$monument_category->slug; ?>"><?php echo $monument_category->name; ?></a>
					<?php endforeach; ?>
				</div><!-- /.gallery-nav -->

				<div class="gallery-container">
					<div class="isotope-container">
						<?php foreach ($monument_categories as $monument_category):
							$monuments = get_posts(array(
								'post_type' => 'monument',
								'tax_query' => array(
									array(
										'taxonomy' => 'monument_category',
										'field'    => 'slug',
										'terms'    => $monument_category->slug,
									),
								),
								'posts_per_page' => -1,
								'orderby' => 'menu_order',
							));

							if ( $monuments ):
								foreach ($monuments as $monument ): ?>
									<div class="gallery-item <?php echo 'gallery-'.$monument_category->slug; ?>">
										<?php echo get_the_post_thumbnail( $monument->ID, 'gallery') ?>
									</div><!-- /.gallery-item -->
								<?php endforeach;
							endif;
						endforeach; ?>
					</div><!-- /.isotope-container -->
				</div><!-- /.gallery-container -->
			<?php endif ?>

		</div><!-- /.shell -->
	</div><!-- /.main -->

<?php get_footer() ?>