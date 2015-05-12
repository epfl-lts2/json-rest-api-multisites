=== WP REST API Multisite ===
Contributors: the_glu
Tags: rest, api, json, multisite
Requires at least: 3.7.0
Tested up to: 4.2.2
Stable tag: master
License: MIT

Very simple wordpress plugin who add the posibility to list all sites in WP REST API.

== Description ==

Very simple wordpress plugin who add the posibility to list all sites in [http://wp-api.org/](WP REST API).

Endpoint is `/sites`. A list of site is returned. It's a direct output of the `wp_get_sites` - the format is the same.

== Installation ==

1. Install the WP REST API Plugin
1. Upload `json-rest-api-multisites.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
