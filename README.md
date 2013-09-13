# Kraken for WordPress
A lightweight boilerplate for WordPress themes.

Kraken for WordPress includes:

* The essential templates you need to start building a WordPress site.
* Useful functions to help improve site performance and make development easier.
* A WordPress theme stylesheet with a few WordPress-specific classes that control image and avatar styling.

## Built for Kraken
Kraken for WordPress is designed as an add-on for [Kraken](http://cferdinandi.github.com/kraken/), a lightweight, mobile-first boilerplate for front-end web developers. It works great as a standalone product, too.

Aside from the theme header and a few WordPress-specific classes, the stylesheet is empty. Drop in the Kraken boilerplate, or write your own stylesheet from scratch.

## Documentation
Kraken for WordPress includes a moderate amount of inline documentation. Please consult the [WordPress Codex](http://codex.wordpress.org/Main_Page) for more information on specific functions.

## Roadmap
* v2.1
  * Convert generic PHP functions to WordPress specific where applicable.
  * Add sanitization and validation for all data fields.
* v3
  * Considering converting some functions to plugins.

## Changelog
* v2.0 (September 1, 2013)
  * Added templates for:
    * Main navigation
    * Next/previous page navigation
    * "No posts found" message
    * Search form
  * Removed search form function (replaced with WordPress standard `searchform.php` template).
  * Cleaned up  code and removed some unused snippets.
  * Added `get_template_directory()` to `require_once` in `functions.php`.
* v1.4 (July 29, 2013)
  * Removed the canonical link from `header.php` (served no purpose).
  * Split theme JS and jQuer into two separate functions.
  * Function now calls CDN-hosted jQuery with local fallback.
* v1.3 (June 7, 2013)
  * Switched to MIT license.
* v1.3 (June 7, 2013)
  * Added more flexible way to link stylesheet in header.
* v1.2 (February 19, 2013)
  * Added `no-self-pings.php` to the `functions.php` file.
* v1.1 (February 15, 2013)
  * Removed `media="screen"` from `header.php` to allow for print styles in main CSS file.
* v1.0 (February 10, 2013)
  * Initial release.

## License
Kraken for WordPress is free to use under the [MIT License](http://gomakethings.com/mit/).
