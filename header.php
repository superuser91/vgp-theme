<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vgp-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.4/swiper-bundle.min.js" integrity="sha512-Hvn3pvXhhG39kmZ8ue3K8hw8obT4rfLXHE5n+IWNCMkR6oV3cfkQNUQqVvX3fNJO/JtFeo/MfLmqp5bqAT+8qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'vgp_theme'); ?></a>

		<button onclick="showCanvas()" class="w-image-button w-[2.5em] md:w-[2em] p-[1em] absolute top-[1em] left-[1em]" data-toggle="menu-nav" data-target="menu-nav">
			<svg class="icon w-full h-full fill-white transition" viewBox="0 0 297 297" xmlns="http://www.w3.org/2000/svg">
				<g>
					<g>
						<g>
							<path d="M279.368,24.726H102.992c-9.722,0-17.632,7.91-17.632,17.632V67.92c0,9.722,7.91,17.632,17.632,17.632h176.376
    c9.722,0,17.632-7.91,17.632-17.632V42.358C297,32.636,289.09,24.726,279.368,24.726z" />
							<path d="M279.368,118.087H102.992c-9.722,0-17.632,7.91-17.632,17.632v25.562c0,9.722,7.91,17.632,17.632,17.632h176.376
    c9.722,0,17.632-7.91,17.632-17.632v-25.562C297,125.997,289.09,118.087,279.368,118.087z" />
							<path d="M279.368,211.448H102.992c-9.722,0-17.632,7.91-17.632,17.633v25.561c0,9.722,7.91,17.632,17.632,17.632h176.376
    c9.722,0,17.632-7.91,17.632-17.632v-25.561C297,219.358,289.09,211.448,279.368,211.448z" />
							<path d="M45.965,24.726H17.632C7.91,24.726,0,32.636,0,42.358V67.92c0,9.722,7.91,17.632,17.632,17.632h28.333
    c9.722,0,17.632-7.91,17.632-17.632V42.358C63.597,32.636,55.687,24.726,45.965,24.726z" />
							<path d="M45.965,118.087H17.632C7.91,118.087,0,125.997,0,135.719v25.562c0,9.722,7.91,17.632,17.632,17.632h28.333
    c9.722,0,17.632-7.91,17.632-17.632v-25.562C63.597,125.997,55.687,118.087,45.965,118.087z" />
							<path d="M45.965,211.448H17.632C7.91,211.448,0,219.358,0,229.081v25.561c0,9.722,7.91,17.632,17.632,17.632h28.333
    c9.722,0,17.632-7.91,17.632-17.632v-25.561C63.597,219.358,55.687,211.448,45.965,211.448z" />
						</g>
					</g>
				</g>
			</svg>
		</button>
		<!-- Offcanvas -->
		<div class="offcanvas hide top-0 left-0" id="canvas">
			<div class="offcanvas-inside w-5/12 md:w-1/5 lg:w-[13em]" id="canvas-inside">
				<!-- icon -->
				<div class="block-icon w-image-block">
					<?php the_custom_icon() ?>
				</div>
				<!-- menu -->
				<div class="block-menu">
					<ul class="text-center">
						<li class=""><a href="">Trang chủ</a></li>
						<li><a href="">Fanpage</a></li>
						<li><a href="">Cộng Đồng</a></li>
						<li><a href="">Tải Game</a></li>
						<li><a href="">Hỗ trợ</a></li>
					</ul>
					<div class="text-[.8em] leading-[2em] h-[2em] opacity-50">
						<button onclick="hideCanvas()" class="flex justify-center items-center mx-auto w-full">
							<svg class="fill-current text-gray-500 w-[1em] h-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
								<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
								</path>
							</svg>
							&nbsp;Đóng
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- 001 -->
		<div class="wcontainer">
			<div class="w-full md:w-1/2 md:min-h-[25em] lg:min-h-[30em]">
				<!-- logo -->
				<div class="w-image-block w-7/12 mx-auto mt-[17em] md:w-5/12 md:mt-[3em] lg:mt-[3.5em]">
					<?php if (has_custom_logo()) : ?>
						<a href="<?php get_site_url() ?>"><?php the_custom_logo() ?></a>
					<?php endif ?>
				</div>
				<!-- 18+ -->
				<div class="w-7/12 mx-auto hidden md:block">
					<div class="grid grid-cols-2 gap-[.15em]">
						<div class="flex flex-col justify-between">
							<a href="" class="w-image-button"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/appstore.png' ?>" alt="" /></a>
							<a href="" class="w-image-button"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/googleplay.png' ?>" alt="" /></a>
						</div>
						<div class="w-image-block">
							<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/block18-big.png' ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>