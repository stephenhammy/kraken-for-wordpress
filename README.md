# Kraken for WordPress
A lightweight boilerplate that includes just the essentials for building a WordPress theme.
* Common template files with HTML5 semantic markup.
* An (almost) empty stylesheet with just a few WordPress-specific classes.
* A small set of custom functions that make development easier.
* HTML5 Shim, friendly "old browser" messaging, and an IE-conditional class.
* Fully internationalized and translation-ready.

## Built for Kraken
Kraken for WordPress is designed as an add-on for [Kraken](http://cferdinandi.github.com/kraken/), a lightweight, mobile-first boilerplate for front-end web developers. It works great as a standalone product, too. Drop in the Kraken boilerplate, or write your own stylesheet from scratch.

## Documentation
Kraken for WordPress includes a moderate amount of inline documentation. Please consult the [WordPress Codex](http://codex.wordpress.org/Main_Page) for more information on specific functions.

## Changelog
* v3.0 (October 17, 2013)
  * Add i18n everywhere.
  * Updated several functions to be more aligned with WordPress best practices.
  * Moved various functions to [standalone plugins](http://cferdinandi.github.io/kraken/addons.html).
  * Converted from spaces to tabs.
  * Added customized "password protected post" messaging.
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
  * Split theme JS and jQuery into two separate functions.
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