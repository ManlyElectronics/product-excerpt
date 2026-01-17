=== Manly Product Ebay Excerpt ===
Contributors: DimitriAus
Tags: woocommerce, excerpt, product, ebay, meta
Requires at least: 5.0
Tested up to: 6.9
Requires PHP: 7.4
Stable tag: 1.1
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Overrides the WooCommerce product excerpt with eBay condition description from WP-Lister on single product pages.

== Description ==

Manly Product Ebay Excerpt replaces the default product excerpt display with content from the `_ebay_condition_description` meta field populated by [WP-Lister for eBay](https://www.wplab.com/plugins/wp-lister-for-ebay/). This is useful for stores that sync product data from eBay and want to display condition descriptions in place of the standard excerpt.

**Features:**

* Designed to work with WP-Lister for eBay
* Automatically replaces excerpt on single product pages
* Targets WordPress block editor excerpt element (`.wp-block-post-excerpt__excerpt`)
* Lightweight - only loads JavaScript on product pages
* Reads the `_ebay_condition_description` meta field set by WP-Lister

**Requirements:**

* WooCommerce
* WP-Lister for eBay (to populate the condition description meta field)

**Code Quality:**

* Fully compliant with WordPress Coding Standards (PHPCS)
* Passes WP Plugin Check validation
* Follows WordPress best practices for plugin development

== Installation ==

1. Upload the `manly-product-excerpt` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Ensure your products have the `_ebay_condition_description` meta field populated

== Frequently Asked Questions ==

= How do I change the meta field source? =

Edit `manly-product-excerpt.php` and change `_ebay_condition_description` to your desired meta key on line 23.

= How do I target a different DOM element? =

Edit `manly-product-excerpt.js` and change the `.wp-block-post-excerpt__excerpt` selector to match your theme's excerpt element.

= Why isn't the excerpt being replaced? =

1. Verify you're on a single product page
2. Ensure WP-Lister for eBay is installed and has synced the product with condition description data
3. Check that the product has data in the `_ebay_condition_description` meta field (set by WP-Lister)
4. Inspect your page to confirm the `.wp-block-post-excerpt__excerpt` selector exists in your theme

== Changelog ==

= 1.1 =
* Renamed plugin to Manly Product Ebay Excerpt
* Updated function prefixes and script handles

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.1 =
Plugin renamed and refactored with new slug.
