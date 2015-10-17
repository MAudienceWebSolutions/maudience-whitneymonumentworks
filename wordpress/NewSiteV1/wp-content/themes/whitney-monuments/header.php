<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=960">
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header class="header">
			<?php if ( has_nav_menu('top-menu') ): ?>
				<div class="top-bar">
					<div class="shell">
						<?php 
							wp_nav_menu(array(
								'theme_location'	=> 'top-menu',
								'menu_class'		=> 'menu',
								'depth'				=> 1,
								'fallback_cb'		=> false,
							));
						?>
					</div><!-- /.shell -->
				</div><!-- /.top-bar -->
			<?php endif ?>

			<div class="main-header">
				<div class="shell">

					<?php if ( $logo = carbon_get_theme_option('crb_logo') ): ?>
						<a href="<?php echo bloginfo('url') ?>" class="logo"><?php echo wp_get_attachment_image($logo, 'logo') ?></a>
					<?php endif ?>

					<?php if ( has_nav_menu('main-menu') ): ?>
						<?php 
							wp_nav_menu(array(
								'theme_location'	=> 'main-menu',
								'menu_class'		=> 'menu',
								'depth'				=> 2,
								'fallback_cb'		=> false,
								'container' 		=> 'nav',
								'container_class' 	=> 'nav',
							));
						?>
						
						<a href="#" class="menu-trigger">
							<i>
								<span class="line-1"></span>
								<span class="line-2"></span>
								<span class="line-3"></span>
							</i>
						</a>
					<?php endif ?>

				</div><!-- /.shell -->
			</div><!-- /.main-header -->
		</header><!-- /.header -->

		<div class="container">