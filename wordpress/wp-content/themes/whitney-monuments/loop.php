<?php if (have_posts()) : ?>
	<div class="articles">
		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class('article') ?>>
				<header class="article-head">
					<h2 class="article-title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo esc_attr( sprintf( __('Permanent Link to %s', 'crb'), get_the_title() ) ); ?>">
							<?php the_title(); ?>
						</a>
					</h2><!-- /.article-title -->

					<?php get_template_part('fragments/post-meta'); ?>
				</header><!-- /.article-head -->

				<div class="article-body">
					<div class="article-entry">
						<?php the_excerpt(); ?>
					</div><!-- /.article-entry -->
				</div><!-- /.article-body -->
			</div><!-- /.article -->

		<?php endwhile; ?>
	 </div><!-- /.articles -->

	<?php carbon_pagination('posts'); ?>
	
<?php else : ?>
	<div class="articles">
		<div class="article post error404 not-found">
			<div class="article-body">
				<div class="article-entry">
					<p>
						<?php if ( is_category() ) { // If this is a category archive
							printf( __("Sorry, but there aren't any posts in the %s category yet.", 'crb'), single_cat_title('',false) );
						} else if ( is_date() ) { // If this is a date archive
							_e("Sorry, but there aren't any posts with this date.", 'crb');
						} else if ( is_author() ) { // If this is a category archive
							$userdata = get_user_by('id', get_queried_object_id());
							printf( __("Sorry, but there aren't any posts by %s yet.", 'crb'), $userdata->display_name );
						} else if ( is_search() ) { // If this is a search
							_e('No posts found. Try a different search?', 'crb');
						} else {
							_e('No posts found.', 'crb');
						} ?>
					</p>
					
					<?php get_search_form(); ?>
				</div><!-- /.article-entry -->
			</div><!-- /.article-body -->
		</div><!-- /.article -->
	</div><!-- /.articles -->
<?php endif; ?>