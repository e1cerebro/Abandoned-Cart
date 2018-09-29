<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Chris_Abandoned_Cart_Reminder
 * @subpackage Chris_Abandoned_Cart_Reminder/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Chris_Abandoned_Cart_Reminder
 * @subpackage Chris_Abandoned_Cart_Reminder/includes
 * @author     Uchenna Nwachukwu <nwachukwu16@gmail.com>
 */
class Chris_Abandoned_Cart_Reminder_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'chris-abandoned-cart-reminder',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
