=== Integration for Elementor forms - Cookies ===
Contributors: webtica
Tags: cookies, elementor, elementor pro, forms, integration, marketing, lists, cookie, session, set
Requires at least: 5.0
Tested up to: 5.9.2
Requires PHP: 5.4
Stable tag: 1.2.2
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==

Easily set cookies after an elementor form submission.
Keeping performance in mind this integration doesn't add any additional scripts on page load. 
Feel free to post any feature requests and possible issues.

== Installation ==

= Minimum Requirements =

* WordPress 5.0 or greater
* PHP version 5.4 or greater
* MySQL version 5.0 or greater
* [Elementor Pro](https://elementor.com) 3 or greater

= We recommend your host supports: =

* PHP version 7.4 or greater
* MySQL version 5.6 or greater
* WordPress Memory limit of 64 MB or greater (128 MB or higher is preferred)

= Installation =

1. Install using the WordPress built-in Plugin installer, or Extract the zip file and drop the contents in the `wp-content/plugins/` directory of your WordPress installation.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to Pages > Add New
4. Press the 'Edit with Elementor' button.
5. Drag and drop the form widget of Elementor Pro from the left panel onto the content area, and find the Cookies action in the "Actions after submit" dropdown.
6. Fill your cookie data and you are all set.

== Frequently Asked Questions ==

**Why is Elementor Pro required?**

Because this integration works with the Form Widget, which is a Elementor Pro unique feature not available in the free plugin.

**Can I still use other integrations if I install this integration?**

Yes, all the other form widget integrations will be available.

**How can I use form data to set as cookie name or value?**

Be sure you are atleast on version 1.2.0. Then you can enable the switch "Use form data for cookie name" and/or "Use form data for cookie value". After that fill in the fields with the form field id you can find under the form field advanced tab.

== Changelog ==

= 1.2.2 - 2022-03-13 =
* Tested Elementor up to 3.5.6
* Tested Elementor PRO up to 3.6.3
* Tested Wordpress up to 5.9.2

= 1.2.1 - 2022-01-24 =
* Tested Elementor up to 3.5.4
* Tested Wordpress up to 5.9

= 1.2.0 - 2021-12-31 =
* Add option to use form data for cookie name
* Add option to use form data for cookie value
* Tested PHP up to 8.0
* Add link to the support page
* Tested Elementor up to 3.5.3
* Update recommended PHP version to 7.4

= 1.0.1 - 2021-12-04 =
* Tested Elementor up to 3.4.8
* Tested Elementor Pro up to 3.5.2
* Tested Wordpress up to 5.8.2

= 1.0.0 - 2021-10-08 =
* Initial Release