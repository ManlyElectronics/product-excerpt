# Woo Product Excerpt from eBay

Overrides the WooCommerce product excerpt with the **eBay Condition Description** populated by **WP-Lister for eBay**.
This allows products synced from eBay to display the same condition text on the WooCommerce product page, instead of the default excerpt.

**Use case:**
If your store mirrors listings from eBay using WP-Lister, the condition description already exists in the `_ebay_condition_description` meta field. This plugin surfaces that field automatically on single product pages.

---

## Features

* Integrates directly with WP-Lister for eBay
* Replaces the WooCommerce excerpt on single product pages
* Targets the block editor excerpt element (`.wp-block-post-excerpt__excerpt`)
* Lightweight, JavaScript only loads on product pages
* Reads `_ebay_condition_description` product meta
* No database writes, no admin UI

---

## Screenshots

### Before

Default WooCommerce excerpt shown on the product page.

![Before excerpt](https://raw.githubusercontent.com/ManlyElectronics/WP-plugin-manly-product-excerpt/main/docs/screenshots/Before.png?v=2)

---

### After

Excerpt replaced by the eBay condition description synced via WP-Lister.

![After excerpt](https://raw.githubusercontent.com/ManlyElectronics/WP-plugin-manly-product-excerpt/main/docs/screenshots/After.png)

---

### WP-Lister Field Source

The condition description field inside WP-Lister that feeds the excerpt.

![WP-Lister field](https://raw.githubusercontent.com/ManlyElectronics/WP-plugin-manly-product-excerpt/main/docs/screenshots/eBayOptionsField.png)

---

## Requirements

* WordPress 5.0+
* WooCommerce
* WP-Lister for eBay
* PHP 7.4+

---

## Installation

1. Download the ZIP from **Releases**.
2. Upload via WordPress Admin → Plugins → Add New → Upload Plugin.
3. Activate the plugin.
4. Ensure products have `_ebay_condition_description` populated by WP-Lister.

---

## Configuration

No configuration required.

Optional customisation:

* **Change meta field source**
  Edit `manly-product-excerpt.php` and replace:

  ```
  _ebay_condition_description
  ```

* **Change target DOM selector**
  Edit `manly-product-excerpt.js` and replace:

  ```
  .wp-block-post-excerpt__excerpt
  ```

Use this only if your theme renders excerpts differently.

---

## Compatibility

* Tested with WordPress 6.x
* Compatible with WooCommerce block themes and classic themes
* Passes WP Plugin Check and PHPCS

---

## License

GPL-2.0 or later
[https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)
