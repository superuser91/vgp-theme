<?php get_header() ?>

<!-- section 2 -->
<section id="block-002">
	<div class="wcontainer z-10 relative">
		<div class="layout md:grid grid-cols-1 md:grid-cols-8 lg:grid-cols-8">
			<!-- download M-->
			<div class="w-full mx-auto md:hidden">
				<a href="/dl">
					<button class="w-image-button">
						<img src="/wp-content/themes/vgp_theme/assets/images/btn-download-m.png" alt="" />
					</button>
				</a>
			</div>
			<!-- download MD-->
			<div class="block-download w-full mx-auto hidden md:block pr-[.69em] lg:pr-[1em] relative">
				<div class="w-image-block icon mx-auto w-8/12 lg:w-9/12 relative z-10">
					<img src="/wp-content/themes/vgp_theme/assets/images/icon.png" alt="" />
				</div>
				<div class="block-download-inside">
					<div class="wrapper px-[1em]">
						<a href="">
							<div class="w-image-block w-[2.5em] mr-[.5em]">
								<img src="/wp-content/themes/vgp_theme/assets/images/icon-store_apk.png" alt="" />
							</div>
							<div>Tải APK<br />Trực Tiếp</div>
						</a>
						<a href="">
							<div class="w-image-block w-[2.5em] mr-[.5em]">
								<img src="/wp-content/themes/vgp_theme/assets/images/icon-store_ios.png" alt="" />
							</div>
							<div>Tải trên <br />Appstore</div>
						</a>
						<a href="">
							<div class="w-image-block w-[2.5em] mr-[.5em]">
								<img src="/wp-content/themes/vgp_theme/assets/images/icon-store_android.png" alt="" />
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

			<!-- content -->
			<div class="body-content">
				<div class="content p-[2em] md:p-[3em]">
					<?php while (have_posts()) : the_post() ?>
						<h4 class="title text-[2em] leading-[1] text-primary">
							<?php the_title() ?>
						</h4>
						<h6 class="date text-[.8em] opacity-50 mt-[1em]">
							<?php the_date() ?>
						</h6>
						<div class="py-[1.5em]">
							<?php the_content() ?>
						</div>
						<!-- <?php get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt')); ?> -->
						<!-- See more -->
						<div class="news-list mt-[1em] lg:mt-[2em]">
							<h4 class="title text-[1.5em] text-primary">Tin liên quan</h4>
							<ul></ul>
							<?php the_posts_navigation(); ?>
						</div>
					<?php endwhile; ?>

				</div>
			</div>

			<!-- support -->
			<div class="block-support grid grid-cols-4 md:grid-cols-2 relative md:hidden">
				<a href="" class="block aspect-square transition tanthu">
				</a>
				<a href="" class="block aspect-square transition camnang"> </a>
				<a href="" class="block aspect-square transition vip"> </a>
				<a href="" class="block aspect-square transition hotro"> </a>
			</div>

			<!-- feature -->
			<div class="block-feature grid grid-cols-3 mt-[1em] md:hidden">
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
	<div class="w-full mx-auto -mt-[.5em] md:mt-[2em]">
		<a href="/characters" class="w-image-button w-full md:hidden">
			<img src="/wp-content/themes/vgp_theme/assets/images/character.png" alt="" />
		</a>
		<div class="swiper character hidden md:block">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="/characters" class="w-image-block w-full">
						<img src="/wp-content/themes/vgp_theme/assets/images/character/block-char_01.png" alt="" />
					</a>
				</div>
				<div class="swiper-slide">
					<a href="/characters" class="w-image-block w-full">
						<img src="/wp-content/themes/vgp_theme/assets/images/character/block-char_02.png" alt="" />
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

<?php get_footer() ?>