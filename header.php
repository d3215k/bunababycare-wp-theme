<!DOCTYPE html>
<html class="scroll-smooth" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="google-site-verification" content="gA80n0T8pReq1IqkMtZci4TI6wQu1SJs_yX2Bs1Y_1o" />
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Carattere&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://rsms.me/inter/inter.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white font-sans text-gray-900 antialiased' ); ?>>

<?php do_action( 'bunababycare_site_before' ); ?>

<div id="page" class="flex flex-col min-h-screen bg-[#F6EDE9] text-[#a35266]">

	<?php do_action( 'bunababycare_header' ); ?>

	<?php if ( ! is_front_page() ) { ?>

		<header>

			<div class="max-w-screen-md mx-auto">
				<div class="py-6 border-b lg:flex lg:justify-between lg:items-center">
					<div class="flex items-center justify-between">
						<div>
							<?php if ( has_custom_logo() ) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-lg font-extrabold">
									<?php echo get_bloginfo( 'name' ); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo( 'description' ); ?>
								</p>

							<?php } ?>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
												id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div>
			
		</header>

	<?php } ?>

	<div class="fixed bottom-6 right-6"
		x-show="$store.waButton.show"
		x-transition
		style="display: none"
	>
		<div class="relative text-white">
			<a href="https://api.whatsapp.com/send?phone=628997897991&text=Halo+Bunababy_Care.+Perkenalkan+saya+dengan+%28Isi+Nama%29.+Lokasi+saya+di+%28Sebutkan+alamat+jelas%29.+Mau+bertanya+" >
				<button class="p-2 bg-green-500 rounded-full">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
						<path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
					</svg>
				</button>
			</a>
		</div>
	</div>

	<div id="content" class="flex-grow site-content">

		<?php do_action( 'bunababycare_content_start' ); ?>

		<main>
