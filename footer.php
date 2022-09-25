
</main>

<?php do_action( 'bunababycare_content_end' ); ?>

</div>

<?php do_action( 'bunababycare_content_after' ); ?>

<footer id="colophon" class="py-12 site-footer bg-[#F5EDEA]" role="contentinfo">
	<?php do_action( 'bunababycare_footer' ); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
