<?php
/**
 * Plugin Name: Style Extension for Open Social
 * Plugin URI: https://www.tuningsynesthesia.com
 * Description: A style extension for Open Social plugin by playes
 * Author: Chie Fuyuki @ Tuning Synesthesia
 * Author URI: https://www.tuningsynesthesia.com
 * Version: 0.8.0
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: extos
 * Domain Path: /lang
 */
register_activation_hook(__FILE__, 'extos_activation');
function extos_activation() {

}

register_deactivation_hook(__FILE__, 'extos_deactivation');
function extos_deactivation(){
}

/*
 * Load Scripts and Styles
 * Priority, loading order after parent plugin = 101
 *
 */
add_action('wp_enqueue_scripts', 'extos_styles', 101);
add_action('login_enqueue_scripts', 'extos_styles', 101);

function extos_styles() {
    wp_register_style('extos_style', plugins_url('assets/css/style.min.css', __FILE__));
    wp_enqueue_style('extos_style');
}