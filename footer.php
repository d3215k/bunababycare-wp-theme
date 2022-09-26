
</main>

<?php do_action( 'bunababycare_content_end' ); ?>

</div>

<?php do_action( 'bunababycare_content_after' ); ?>

<footer id="colophon" class="py-12 site-footer" role="contentinfo">
	<?php do_action( 'bunababycare_footer' ); ?>

	<div class="container flex flex-col items-center mx-auto space-y-2 text-center text-gray-500">
		<img width="200" src="<?php echo bunababycare_asset('images/logo.svg') ?>" alt="Logo Bunababycare">
		<p>Mom and Baby Treatment</p>
	</div>


	<div class="container mx-auto mt-4 text-center text-gray-500">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
