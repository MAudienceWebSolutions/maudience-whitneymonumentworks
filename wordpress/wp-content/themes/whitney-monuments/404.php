<?php get_header(); ?>
	<div class="main">
		<div class="shell">

			<?php crb_the_title('<h2 class="page-title">', '</h2>'); ?>

			<div class="content">
				
				<div class="entry">
					<?php

						printf(__('<p>Please check the URL for proper spelling and capitalization.<br />If you\'re having trouble locating a destination, try visiting the <a href="%1$s">home page</a>.</p>', 'crb'), home_url('/'));
					?>
				</div>
			</div><!-- /.content -->

			<?php get_sidebar(); ?>
		
		</div><!-- /.shell -->
	</div><!-- /.main -->
	
<?php get_footer(); ?>