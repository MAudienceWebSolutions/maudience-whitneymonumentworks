		</div><!-- /.container -->

		<footer class="footer">
			<div class="shell">

				<?php if ( $footer_cols = carbon_get_theme_option('crb_footer_text', 'complex') ): ?>
					<?php foreach ($footer_cols as $footer_col): ?>
						<div class="footer-col">
							<?php echo wpautop(do_shortcode( $footer_col['text'] )); ?>
						</div><!-- /.footer-address -->
					<?php endforeach ?>
				<?php endif ?>

				<?php if ( $footer_link = carbon_get_theme_option('crb_footer_link_url') ): ?>
					<div class="footer-col">
						<?php $footer_link_text = carbon_get_theme_option('crb_footer_link_text'); ?>
						<a class="request-link" href="<?php echo esc_url($footer_link); ?>"><?php echo nl2br($footer_link_text); ?></a>
					</div><!-- /.footer-address -->
				<?php endif ?>
			</div><!-- /.shell -->
		</footer><!-- /.footer -->
	</div><!-- /.wrapper -->

	<?php wp_footer(); ?>
</body>
</html>