<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="main">
				<div class="shell">

					<?php crb_the_title('<h2 class="page-title">', '</h2>'); ?>

					<div class="content">
						<div class="entry">
							<?php
								the_content(__('<p class="serif">' . __('Read the rest of this page &raquo;', 'crb') . '</p>'));

								carbon_pagination('custom');
								
								edit_post_link(__('Edit this entry.', 'crb'), '<p>', '</p>'); 
							?>
						</div>
					</div><!-- /.content -->

					<?php get_sidebar(); ?>
				
				</div><!-- /.shell -->
			</div><!-- /.main -->

		<?php endwhile; ?>
	<?php endif; ?>
	
<?php get_footer(); ?>