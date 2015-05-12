<?php
/*
* Plugin Name: WP REST API Multisite
* Plugin URI: https://github.com/epfl-lts2/json-rest-api-multisites/
* Description: Very simple site endpoint for WP REST API
* Version: 0.1
* Author: Maximilien Cuony
* Author URI: https://github.com/the-glu
* License: MIT
* */

function json_rest_api_multisites_api_init() {
    global $json_rest_api_multisites_api_site;

    $json_rest_api_multisites_api_site = new JsonRESTAPIMultiSites_API_Site();
    add_filter('json_endpoints', array($json_rest_api_multisites_api_site, 'register_routes'));
}

add_action( 'wp_json_server_before_serve', 'json_rest_api_multisites_api_init');

class JsonRESTAPIMultiSites_API_Site {
    public function register_routes($routes) {
        $routes['/sites'] = array(
            array(array($this, 'get_sites'), WP_JSON_Server::READABLE),
        );
        return $routes;
    }

    public function get_sites() {
        return wp_get_sites();
    }
}
