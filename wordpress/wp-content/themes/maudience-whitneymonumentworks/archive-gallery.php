<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title">Gallery</h1>
			</header><!-- .archive-header -->

			<div class="gallery-information-output">
				<div class="categories-output">
					<?php
						$args=array(
						'post_type' => 'gallery',
						'post_status' => 'publish',
						'posts_per_page' => 1,
						'caller_get_posts'=> 1
						);
						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) :
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
								<?php
								$terms = get_terms('category', array('hide_empty' => false));
								foreach ( $terms as $term ) { echo '<a href="'.get_term_link($term).'"/><span class="category">'.$term->name.'</span></a>'; }
								?>
								<?php
							endwhile;
						endif;
						wp_reset_query();  // Restore global post data stomped by the_post().
					?>
				</div>
				<ul class='custom-post-type-list'>
					<?php
						$args=array(
						'post_type' => 'gallery',
						'post_status' => 'publish',
						'posts_per_page' => $posts_per_page,
						'caller_get_posts'=> 1
						);
						$my_query = null;
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) :
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
								<li class="custom-post-type-list-item <?php echo get_post_type() ?>">
									<a rel="lightbox" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<?php if ( has_post_thumbnail() ) : ?>
											<div class="entry-page-image">
												<?php the_post_thumbnail(); ?>
											</div><!-- .entry-page-image -->
										<?php endif; ?>
										<div class="post-content-wrap">
										</div>
									</a>
								</li>
								<?php
							endwhile;
						endif;
						wp_reset_query();  // Restore global post data stomped by the_post().
					?>
				</ul>
			</div>
		<?php endif; ?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

