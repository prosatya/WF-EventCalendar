<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.matictechnology.com
 * @since             1.0.0
 * @package           WF - Event Calendar
 *
 * @wordpress-plugin
 * Plugin Name:       WF-Event Calendar
 * Plugin URI:        http://www.matictechnology.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Satyanarayan Verma
 * Author URI:        http://www.matictechnology.com
 * License:           GPL-2.0+
 * License URI:       http://www.matictechnology.com
 * Text Domain:       WF-Event Calendar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_wf_event() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wf_event-activator.php';
	Wf_event_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_wf_event() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wf_event-deactivator.php';
	Wf_event_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wf_event' );
register_deactivation_hook( __FILE__, 'deactivate_wf_event' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wf_event.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wf_event() {

	$plugin = new wf_event();
	$plugin->run();

}
run_wf_event();
