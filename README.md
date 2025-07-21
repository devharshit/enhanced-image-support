# enhanced-image-support
Adds support for SVG, WEBP, and AVIF uploads to the Media Library and ensures safe display throughout WordPress.

=== Enhanced SVG, WEBP, AVIF Upload & Display ===
Contributor: HMShingala
Contributor URI: www.hmshingala.com
Tags: svg, webp, avif, images, media, upload, page builder, gutenberg, custom post type, woocommerce
Requires at least: 5.0
Tested up to: 6.5
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds support for SVG, WEBP, and AVIF uploads to the WordPress Media Library and enables safe usage throughout the site.

== Description ==

This plugin allows you to safely upload and use SVG, WEBP, and AVIF images anywhere you can use images in WordPress—including posts, pages, products (WooCommerce), any custom post type (CPT), and with popular page builders.

**Features:**
- Upload SVG, WEBP, and AVIF files to the WordPress Media Library.
- Insert these images into any post, page, CPT, product, widget, or page builder.
- Basic sanitization for SVG uploads for added security.
- Seamless integration with core WordPress media workflows.
- SVG previews in the Media Library.

**Note:** For maximum security, especially on multi-user sites, consider further SVG sanitization using a third-party library.

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/` or install it via Plugins > Add New in your WordPress dashboard.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Go to *Media > Add New* to upload SVG, WEBP, and AVIF files as you normally would.

== Usage ==

- After activation, you can upload and select SVG, WEBP, or AVIF images from the media library.
- Insert these files into posts, pages, or custom post types using the block editor, classic editor, or page builders like Elementor and WPBakery.
- SVG images are sanitized and previewable in the media library.

== Frequently Asked Questions ==

= Are SVGs safe to use? =
SVGs are XML files and can include scripts. This plugin automatically blocks SVGs that contain `<script>` tags. For enterprise and multi-user sites, we recommend using a dedicated SVG sanitization library.

= Can I use these image formats in WooCommerce or CPTs? =
Yes, you can use SVG, WEBP, and AVIF images for products, custom post types, and any location where you use native WordPress image features.

= Is this plugin compatible with page builders? =
Yes! SVG, WEBP, and AVIF files are available in the same way as JPG or PNG files and work within Elementor, WPBakery, and block-based editors.

== Screenshots ==

1. Uploading SVG, WEBP, and AVIF files in the Media Library.
2. SVG preview and image details in the WordPress admin.
3. Using SVG, WEBP, and AVIF images in a post or with a page builder.

== Changelog ==

= 1.0 =
* Initial release with SVG, WEBP, and AVIF upload and display support.
* Basic SVG sanitization and admin preview.

== Upgrade Notice ==

= 1.0 =
First release—enables secure SVG, WEBP, and AVIF image upload and usage for all post types and page builders.

== Credits ==

Plugin developed by [Your Name].

== License ==

This plugin is free software released under the GPLv2 or later.
