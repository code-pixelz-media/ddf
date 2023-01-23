<?php
/**
 * Plugin Name: Dashboard Design Framework 
 * Plugin URI: https://codepixelzmedia.com
 * Description: A framework for Dashboard design for WordPress Admin Panel
 * Version:1.0.0
 * Author: codepixelzmedia
 * Text Domain: ddf
 * License: GPLv3 or later
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
* Initialize DDF class
*/
if ( ! class_exists( 'DDF' ) ) {

	class DDF {

		/**
		 * Class constructor
		 */
		function __construct() {

			add_action( 'admin_menu', array( $this, 'ddf_register_menu_page' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'ddf_admin_scripts_style' ) );

			/* All the files that are required will be called here */
			require_once('admin/hooks.php');

		}


		/**
		 * Enqueue required admin styles and scripts.
		 */
		public function ddf_admin_scripts_style() {
			wp_enqueue_style( 'admin-select2', plugin_dir_url( __FILE__ ) . 'assets/css/select2.min.css' );
			wp_enqueue_style( 'admin-style', plugin_dir_url( __FILE__ ) . 'assets/css/admin-style.css' );
			wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap' );

			wp_enqueue_script( 'jquery-ui-accordion' );
			wp_enqueue_script( 'jquery-ui-tabs' );
			wp_enqueue_script( 'admin-script', plugin_dir_url( __FILE__ ) . 'assets/js/admin-script.js' );
			wp_enqueue_script( 'admin-select2', plugin_dir_url( __FILE__ ) . 'assets/js/select2.min.js' );
			wp_enqueue_script( 'chart-script', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js' );
		}


		/**
		 * Add menu page.
		 */
		public function ddf_register_menu_page() {
			add_menu_page( __( 'DDF Dashboard', 'ddf' ), 'DDF Dashboard', 'manage_options', 'ddf', array( $this, 'ddf_add_setting_page' ), '', 20 );
		}

		/**
		 * Callback function of add_menu_page. Displays the page's content.
		 */
		public function ddf_add_setting_page() {
			require plugin_dir_path( __FILE__ ) . 'ddf-settings.php';

		}


	}

	$ddf = new DDF();
}
