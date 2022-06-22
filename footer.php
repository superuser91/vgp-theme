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
				Hotline: 1900 636 521 (từ 8:00 đến 22:00) - Email:
				hotro@vgpjsc.vn<br />Công ty CP VGP phân phối độc quyền tại Việt
				Nam.<br />
				15B Đông Quan - Phường Quan Hoa - Quận Cầu Giấy - Hà Nội<br />
				Giấy phép phê duyệt nội dung số: 30/QĐ-BTTTT
				<br />Bộ Thông Tin Và Truyền thông cấp ngày 08/01/2019
			</div>
		</div>
	</div>
	<!-- menu -->
	<div class="footer-menu bg-[#111]">
		<div class="container-fluid">
			<div class="flex justify-center py-[1.5em]">
				<a class="transition" href="">Trang chủ</a>
				<a class="transition" href="">Tin tức</a>
				<a class="transition" href="">Sự kiện</a>
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
				Đóng
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