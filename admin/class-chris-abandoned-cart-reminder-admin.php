<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Chris_Abandoned_Cart_Reminder
 * @subpackage Chris_Abandoned_Cart_Reminder/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Chris_Abandoned_Cart_Reminder
 * @subpackage Chris_Abandoned_Cart_Reminder/admin
 * @author     Uchenna Nwachukwu <nwachukwu16@gmail.com>
 */
class Chris_Abandoned_Cart_Reminder_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Chris_Abandoned_Cart_Reminder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Chris_Abandoned_Cart_Reminder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/chris-abandoned-cart-reminder-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Chris_Abandoned_Cart_Reminder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Chris_Abandoned_Cart_Reminder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/chris-abandoned-cart-reminder-admin.js', array( 'jquery' ), $this->version, false );

	}

	/* This function is used to create all the necessary admin pages 
	
	
	*/
	public function acr_admin_menus(){

		$page_title = 'Abandoned Cart Reminder';
		$menu_title = 'Abandoned Cart';
		$capability = 'manage_options';
		$menu_slug  = 'abandoned-cart-reminder';
		$function   = array($this,'acr_abandoned_cart_reminder_homepage');
		$icon_url   = 'dashicons-cart';
		$position   = 4;
	  
		add_menu_page( $page_title,
					   $menu_title, 
					   $capability, 
					   $menu_slug, 
					   $function, 
					   $icon_url, 
					   $position );
	  }



	  public function acr_abandoned_cart_reminder_homepage(){
		  echo "Hello";
	  }
}
