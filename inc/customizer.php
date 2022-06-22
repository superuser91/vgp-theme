<?php

/**
 * vgp-theme Theme Customizer
 *
 * @package vgp-theme
 */

class VGP_Theme_Customizer
{
	public function __construct()
	{
		add_action('customize_register', [$this, 'register']);
		add_action('customize_preview_init', [$this, 'customize_preview_js']);
	}

	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function register($wp_customize)
	{
		$wp_customize->get_setting('blogname')->transport         = 'postMessage';

		$this->addLinkPanel($wp_customize);
		$this->addArtPanel($wp_customize);
	}

	/**
	 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
	 */
	function customize_preview_js()
	{
		wp_enqueue_script('vgp_theme-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
	}

	/**
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 * @return void
	 */
	function addLinkPanel($wp_customize)
	{
		$wp_customize->add_section('link_section', array(
			'title' => 'Cấu hình liên kết',
			'priority' => 10,
		));

		$wp_customize->add_setting('the_fanpage_link', array(
			'default' => 'https://facebook.com',
		));

		$wp_customize->add_control('the_fanpage_link_control', array(
			'label' => 'Địa chỉ Fanpage',
			'type' => 'text',
			'section' => 'link_section',
			'settings' => 'the_fanpage_link',
		));

		$wp_customize->add_setting('the_group_link', array(
			'default' => 'https://facebook.com',
		));

		$wp_customize->add_control('the_fanpage_group_control', array(
			'label' => 'Địa chỉ group facebook',
			'type' => 'text',
			'section' => 'link_section',
			'settings' => 'the_group_link',
		));

		$wp_customize->add_setting('the_download_link', array(
			'default' => get_site_url(),
		));

		$wp_customize->add_control('the_download_link_control', array(
			'label' => 'Link tải game',
			'type' => 'text',
			'section' => 'link_section',
			'settings' => 'the_download_link',
		));

		$wp_customize->add_setting('the_support_link', array(
			'default' => get_site_url(),
		));

		$wp_customize->add_control('the_support_link_control', array(
			'label' => 'Link tải game',
			'type' => 'text',
			'section' => 'link_section',
			'settings' => 'the_support_link',
		));

		if (isset($wp_customize->selective_refresh)) {
			$wp_customize->selective_refresh->add_partial(
				'the_fanpage_link',
				array(
					'selector'        => '.custom-fanpage-link',
					'render_callback' => 'customize_partial_the_fanpage_link',
				)
			);
			$wp_customize->selective_refresh->add_partial(
				'the_group_link',
				array(
					'selector'        => '.custom-group-link',
					'render_callback' => 'customize_partial_the_group_link',
				)
			);
			$wp_customize->selective_refresh->add_partial(
				'the_download_link',
				array(
					'selector'        => '.custom-download-link',
					'render_callback' => 'customize_partial_the_download_link',
				)
			);
			$wp_customize->selective_refresh->add_partial(
				'the_support_link',
				array(
					'selector'        => '.custom-support-link',
					'render_callback' => 'customize_partial_the_support_link',
				)
			);
		}
	}

	/**
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 * @return void
	 */
	function addArtPanel($wp_customize)
	{
		$wp_customize->add_section('art_section', array(
			'title' => 'Cấu hình Art',
			'priority' => 15,
		));

		$wp_customize->add_setting('the_custom_background', array(
			'default' => false,
		));

		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			'the_custom_background_control',
			array(
				'label'      => __('Chọn ảnh background', 'vgp_theme'),
				'section'    => 'art_section',
				'settings'   => 'the_custom_background',
			)
		));

		$wp_customize->add_setting('the_custom_icon', array(
			'default' => false,
		));

		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			'the_custom_icon_control',
			array(
				'label'      => __('Chọn ảnh Icon', 'vgp_theme'),
				'section'    => 'art_section',
				'settings'   => 'the_custom_icon',
			)
		));

		if (isset($wp_customize->selective_refresh)) {
			$wp_customize->selective_refresh->add_partial(
				'the_custom_icon',
				array(
					'selector'        => '.custom-icon-link',
					'render_callback' => 'customize_partial_the_custom_icon',
				)
			);

			$wp_customize->selective_refresh->add_partial(
				'the_custom_background',
				array(
					'selector'        => '.wcontainer',
					'render_callback' => 'customize_partial_the_background_link',
				)
			);
		}
	}

	public function customize_partial_the_fanpage_link()
	{
		echo the_fanpage_url();
	}

	public function customize_partial_the_custom_icon()
	{
		echo the_fanpage_url();
	}

	public function customize_partial_the_background_link()
	{
		echo the_background_image_url();
	}
}
