<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Chris_Abandoned_Cart_Reminder
 *
 * @wordpress-plugin
 * Plugin Name:       Abandoned Cart Reminder
 * Plugin URI:        #
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Uchenna Nwachukwu
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       chris-abandoned-cart-reminder
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-chris-abandoned-cart-reminder-activator.php
 */
function activate_chris_abandoned_cart_reminder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-chris-abandoned-cart-reminder-activator.php';
	Chris_Abandoned_Cart_Reminder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-chris-abandoned-cart-reminder-deactivator.php
 */
function deactivate_chris_abandoned_cart_reminder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-chris-abandoned-cart-reminder-deactivator.php';
	Chris_Abandoned_Cart_Reminder_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_chris_abandoned_cart_reminder' );
register_deactivation_hook( __FILE__, 'deactivate_chris_abandoned_cart_reminder' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-chris-abandoned-cart-reminder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_chris_abandoned_cart_reminder() {

	$plugin = new Chris_Abandoned_Cart_Reminder();
	$plugin->run();

}
run_chris_abandoned_cart_reminder();
