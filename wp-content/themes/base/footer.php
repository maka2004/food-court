	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php
			wp_nav_menu([
				'menu' => 'footer_menu'
			]);
		?>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<?php
	// remove after deply to PROD
	$html = ob_get_contents();
	ob_end_clean();
	if (is_user_logged_in()) {
		echo $html;
	}
?>
</html>
