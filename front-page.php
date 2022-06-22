<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vgp-theme
 */

get_header();
?>

<!-- section 2 -->
<section id="block-002">
	<div class="wcontainer z-10 relative">
		<div class="layout md:grid grid-cols-1 md:grid-cols-8 lg:grid-cols-8">
			<!-- download M-->
			<div class="w-full mx-auto md:hidden">
				<a href="/dl">
					<button class="w-image-button">
						<!-- <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/btn-download-m.png' ?>" alt="" /> -->
					</button>
				</a>
			</div>
			<!-- download MD-->
			<div class="block-download w-full mx-auto hidden md:block pr-[.69em] lg:pr-[1em] relative">
				<div class="w-image-block icon mx-auto w-8/12 lg:w-9/12 relative z-10">
					<?php the_custom_icon() ?>
				</div>
				<div class="block-download-inside">
					<div class="wrapper px-[1em]">
						<a href="">
							<div class="w-image-block w-[2.5em] mr-[.5em]">
								<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-store_apk.png' ?>" alt="" />
							</div>
							<div>Tải APK<br />Trực Tiếp</div>
						</a>
						<a href="">
							<div class="w-image-block w-[2.5em] mr-[.5em]">
								<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-store_ios.png' ?>" alt="" />
							</div>
							<div>Tải trên <br />Appstore</div>
						</a>
						<a href="">
							<div class="w-image-block w-[2.5em] mr-[.5em]">
								<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/icon-store_android.png' ?>" alt="" />
							</div>
							<div>Tải trên<br />Googleplay</div>
						</a>
					</div>
				</div>
			</div>

			<!-- button -->
			<div class="block-button col-span-1 md:col-span-6 grid grid-cols-2 md:grid-cols-3">
				<a href="" class="block aspect-[300/165] md:aspect-[300/100] transition giftcode">
				</a>
				<a href="" class="block aspect-[300/165] md:aspect-[300/100] transition fanpage">
				</a>
				<a href="" class="block aspect-[300/165] md:aspect-[300/100] transition napxu">
				</a>
				<a href="" class="block aspect-[300/165] md:aspect-[300/100] transition sukien md:hidden">
				</a>
			</div>

			<!-- support -->
			<div class="block-support grid grid-cols-4 md:grid-cols-2 relative">
				<a href="" class="block aspect-square transition tanthu">
				</a>
				<a href="" class="block aspect-square transition camnang"> </a>
				<a href="" class="block aspect-square transition vip"> </a>
				<a href="" class="block aspect-square transition hotro"> </a>
			</div>

			<!-- slider -->
			<div class="w-full swiper newsboard">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="" class="w-image-block w-full">
							<img src="" alt="" />
						</a>
					</div>
					<div class="swiper-slide">
						<a href="" class="w-image-block w-full">
							<img src="" alt="" />
						</a>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>

			<!-- news -->
			<div class="block-news aspect-[585/390] text-[.9em] p-[1em] mt-[1em] lg:text-[1em] lg:p-[2em]">
				<div class="title flex justify-between items-center">
					<div class="text-white px-[1em] py-[.4em] bg-secondary">
						Tin tức
					</div>
					<a href=""><button class="text-secondary opacity-50 hover:opacity-100 transiton">
							Xem thêm +
						</button></a>
				</div>
				<div class="news-list mt-[1em] lg:mt-[2em]">
					<ul>

					</ul>
				</div>
			</div>

			<!-- feature -->
			<div class="block-feature grid grid-cols-3 mt-[1em]">
				<a href="/teaser" class="block aspect-[195/390] hover:brightness-110 transition landing">
				</a>
				<a href="" class="block aspect-[195/390] hover:brightness-110 transition tonghopsukien">
				</a>
				<a href="javascript:void(0);" data-toggle="youtube" data-target="" class="block aspect-[195/390] hover:brightness-110 transition trailer">
				</a>
			</div>
		</div>
	</div>
	<!-- character -->
	<div class="w-full mx-auto -mt-[.5em] md:mt-0">
		<a href="/characters" class="w-image-button w-full md:hidden">
			<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/character.png' ?>" alt="" />
		</a>
		<div class="swiper character hidden md:block">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="/characters" class="w-image-block w-full">
						<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/character/block-char_01.png' ?>" alt="" />
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/characters" class="w-image-block w-full">
						<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/character/block-char_02.png' ?>" alt="" />
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/characters" class="w-image-block w-full">
						<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/character/block-char_03.png' ?>" alt="" />
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/characters" class="w-image-block w-full">
						<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/character/block-char_04.png' ?>" alt="" />
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/characters" class="w-image-block w-full">
						<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/character/block-char_05.png' ?>" alt="" />
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/characters" class="w-image-block w-full">
						<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/character/block-char_06.png' ?>" alt="" />
					</a>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<!-- 18+ -->
	<div class="text-[.8em] text-center mt-[3em] md:mt-[6em] px-[2em] py-[1em] text-primary bg-[#f4e3d3]">
		Chơi quá 180 phút một ngày sẽ ảnh hưởng xấu đến sức khỏe
	</div>
</section>

<?php
get_footer();
