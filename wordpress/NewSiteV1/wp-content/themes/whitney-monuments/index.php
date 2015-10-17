<?php get_header(); ?>

	<div class="main">
		<div class="shell">

			<?php crb_the_title('<h2 class="page-title">', '</h2>'); ?>

			<div class="content">
				<?php 
					if ( is_single() ) {
						get_template_part( 'loop', 'single' );
					} else {
						get_template_part( 'loop' ); 
					}
				?>
			</div><!-- /.content -->
			
			<?php get_sidebar();  ?>
		
		</div><!-- /.shell -->
	</div><!-- /.main -->
	
<?php get_footer(); ?>
