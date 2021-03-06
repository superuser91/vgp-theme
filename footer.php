<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vgp-theme
 */

?>
<!-- character -->
<section class="w-full mx-auto -mt-[.5em] md:mt-0">
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
</section>
<div class="text-[.8em] text-center mt-[3em] md:mt-[6em] px-[2em] py-[1em] text-primary bg-[#f4e3d3]">
	Ch??i qu?? 180 ph??t m???t ng??y s??? ???nh h?????ng x???u ?????n s???c kh???e
</div>
<section>
	<!-- footer -->
	<div class="footer flex flex-col justify-center py-[.5em] mt-[2em] md:mt-0 md:pt-[2em]">
		<div class="container-fluid">
			<!-- logo -->
			<div class="flex justify-center items-center">
				<div class="w-image-block w-[6em] mx-[.5em]">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/logo-vgp.png' ?>" alt="" />
				</div>
				<div class="w-image-block w-[3em] mx-[.5em]">
					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/img18.png' ?>" alt="" />
				</div>
			</div>
			<!-- text -->
			<div class="text-center text-[0.8em] my-[2em]">
				Hotline: 1900 636 521 (t??? 8:00 ?????n 22:00) - Email:
				hotro@vgpjsc.vn<br />C??ng ty CP VGP ph??n ph???i ?????c quy???n t???i Vi???t
				Nam.<br />
				15B ????ng Quan - Ph?????ng Quan Hoa - Qu???n C???u Gi???y - H?? N???i<br />
				Gi???y ph??p ph?? duy???t n???i dung s???: 30/Q??-BTTTT
				<br />B??? Th??ng Tin V?? Truy???n th??ng c???p ng??y 08/01/2019
			</div>
		</div>
	</div>
	<!-- menu -->
	<div class="footer-menu bg-[#111]">
		<div class="container-fluid">
			<div class="flex justify-center py-[1.5em]">
				<a class="transition" href="">Trang ch???</a>
				<a class="transition" href="">Tin t???c</a>
				<a class="transition" href="">S??? ki???n</a>
				<a class="transition" href="">Fanpage</a>
			</div>
		</div>
	</div>
</section>

<!-- modal youtube -->
<div class="wmodal" id="modal-youtube">
	<div class="wmodal-content w-10/12 md:w-6/12">
		<div class="w-full flex justify-end p-[.5em]">
			<button class="text-white opacity-25" data-dismiss="modal">
				????ng
			</button>
		</div>
		<div class="aspect-[16/9]">
			<iframe id="w-youtube" width="100%" height="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>

</html>