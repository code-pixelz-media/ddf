<?php
/**
 * Plugin Name: Cpm Plugin
 * Plugin URI:
 * Description: A custom made CPM Plugin
 * Version:1.0
 * Author: Shishta Pradhan
 * Text Domain: Cpm_Plugin
 * License: GPLv3 or later
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


/**
* Initialize Cpm_Plugin class
*/
if ( !class_exists('Cpm_Plugin') ) {

    class Cpm_Plugin {

        /**
        * Class constructor
        */
        function __construct() {

            add_action( 'admin_menu', array( $this, 'Cpm_Plugin_register_menu_page' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'Cpm_Plugin_admin_scripts_style' ) );

        }


        /**
        * Enqueue required admin styles and scripts.
        */
        public function Cpm_Plugin_admin_scripts_style() {
            wp_enqueue_style( 'admin-style', plugin_dir_url( __FILE__ ).'assets/css/admin-style.css' );
            wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap' );

            wp_enqueue_script('jquery');
            wp_enqueue_script( 'jquery-ui-accordion');
			wp_enqueue_script( 'jquery-ui-tabs' );
            wp_enqueue_script( 'admin-script', plugin_dir_url( __FILE__ ).'assets/js/admin-script.js' );
            wp_enqueue_script( 'chart-script', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js' );
        }


        /**
        * Add menu page.
        */
        public function Cpm_Plugin_register_menu_page() {
            add_menu_page( __( 'CPM Backend', 'Cpm_Plugin'), 'CPM Backend', 'manage_options', 'cpm-plugin', array($this, 'Cpm_Plugin_add_setting_page' ), '', 20 );
        }

        /**
        * Callback function of add_menu_page. Displays the page's content.
        */
        public function Cpm_Plugin_add_setting_page() {
            require plugin_dir_path( __FILE__ ).'cpm-plugin-settings.php';


        }


    }

    $Cpm_Plugin = new Cpm_Plugin();
}