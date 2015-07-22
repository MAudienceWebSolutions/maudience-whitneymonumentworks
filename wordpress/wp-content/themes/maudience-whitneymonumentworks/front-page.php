<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header();

?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- TOP SECTION -->
						<section id="top-section" class="top-section home-section">
							<!-- CONTENT SECTION -->
							<div id="home-content" class="home-content column-centerfull section-column">
								<div class="inner-wrap"><?php the_content(); ?></div>
							</div>
							<!-- TOP FULL SECTION -->
							<div id="top-centerfull" class="column-centerfull section-column">
								<?php if ( is_active_sidebar( 'home-top-centerfull' ) ) : ?>
									<div id="home-top-centerfull" class="home-top-centerfull" role="complementary">
										<?php dynamic_sidebar( 'home-top-centerfull' ); ?>
									</div><!-- #home-top-right -->
								<?php endif; ?>
							</div>
							<div class="top-left-right-wrap">
								<div class="inner-wrap">
									<!-- TOP LEFT SECTION -->
									<div id="top-left-half" class="column-left section-column">
										<div class="slider-wrap">
											<?php if ( is_active_sidebar( 'home-top-left' ) ) : ?>
												<div id="home-top-left" class="home-top-left" role="complementary">
													<?php dynamic_sidebar( 'home-top-left' ); ?>
												</div><!-- #home-top-right -->
											<?php endif; ?>
										</div>
									</div>
									<!-- TOP RIGHT SECTION -->
									<div id="top-right-half" class="column-right section-column">
										<?php if ( is_active_sidebar( 'home-top-right' ) ) : ?>
											<div id="home-top-right" class="home-top-right widget-area" role="complementary">
												<?php dynamic_sidebar( 'home-top-right' ); ?>
											</div><!-- #home-top-right -->
										<?php endif; ?>
									</div>
								</div>
							</div>
						</section>

					<!-- MIDDLE SECTION -->
						<section id="middle-section" class="middle-section home-section">
							<div class="services-information-output">
								<?php if ( is_active_sidebar( 'home-middle' ) ) : ?>
									<div id="home-middle" class="home-middle inner-wrap" role="complementary">
										<?php dynamic_sidebar( 'home-middle' ); ?>
									</div><!-- #footer-widget-left -->
								<?php endif; ?>
							</div>
						</section>

					<!-- BOTTOM SECTION -->
						<section id="bottom-section" class="bottom-section home-section">
							<!-- TOP FULL SECTION -->
							<div id="bottom-centerfull" class="column-centerfull section-column">
								<?php if ( is_active_sidebar( 'home-bottom-centerfull' ) ) : ?>
									<div id="home-bottom-centerfull" class="home-bottom-centerfull" role="complementary">
										<?php dynamic_sidebar( 'home-bottom-centerfull' ); ?>
									</div><!-- #home-bottom-right -->
								<?php endif; ?>
							</div>
							<div class="inner-wrap bottom-left-right-wrap">
								<!-- TOP LEFT SECTION -->
								<div id="bottom-left-half" class="column-left section-column">
									<div class="slider-wrap">
										<?php if ( is_active_sidebar( 'home-bottom-left' ) ) : ?>
											<div id="home-bottom-left" class="home-bottom-left" role="complementary">
												<?php dynamic_sidebar( 'home-bottom-left' ); ?>
											</div><!-- #home-bottom-right -->
										<?php endif; ?>
									</div>
								</div>
								<!-- TOP RIGHT SECTION -->
								<div id="bottom-right-half" class="column-right section-column">
									<?php if ( is_active_sidebar( 'home-bottom-right' ) ) : ?>
										<div id="home-bottom-right" class="home-bottom-right" role="complementary">
											<?php dynamic_sidebar( 'home-bottom-right' ); ?>
										</div><!-- #home-bottom-right -->
									<?php endif; ?>
								</div>
							</div>
						</section>

				</article><!-- #post -->
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>