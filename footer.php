
</main>

<?php do_action( 'bunababycare_content_end' ); ?>

</div>

<?php do_action( 'bunababycare_content_after' ); ?>

		<footer id="colophon" class="py-12 site-footer" role="contentinfo">
			<?php do_action( 'bunababycare_footer' ); ?>

			<div class="container flex flex-col items-center mx-auto">
				<img width="230" class="mb-2" src="<?php echo bunababycare_asset('images/logo.svg') ?>" alt="Logo Bunababycare">
				<div class="mt-2 space-y-2 text-center text-gray-500">
					<p class="font-semibold">Mom and Baby Treatment</p>
					<p class="leading-tight ">Jalan Cihanjuang Komplek Nata Endah Blok N No. 170 Cibabat, Kec. Cimahi Utara, Kota Cimahi</p>
					<p>WA Admin : +628 99 789 7991</p>
				</div>
			</div>


			<div class="container mx-auto mt-12 text-center text-gray-400">
				Hak Cipta &copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
			</div>
		</footer>

	</div>

<?php wp_footer(); ?>

</body>
</html>
