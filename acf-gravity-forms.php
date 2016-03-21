<?php
/**
 * Plugin Name: Advanced Custom Fields: Gravity Forms
 * Plugin URI: PLUGIN_URL
 * Description: Adds Gravity Forms Field Type to Advanced Custom Fields
 * Version: 0.1.0
 * Author: Michael Dozark
 * Author URI: http://www.michaeldozark.com/
 * License: GPL2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) exit; // exit if accessed directly

/**
 * set text domain
 *
 * @see https://developer.wordpress.org/reference/functions/load_plugin_textdomain/
 */
load_plugin_textdomain( 'acf-gravity-forms', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 

add_action( 'plugins_loaded', 'acf_gravity_forms' );

/**
 * Initialize the plugin
 *
 * @since 0.1.0
 */
function acf_gravity_forms() {

	/**
	 * Only load plugin if Gravity Forms is also loaded
	 */
	if ( class_exists( 'GFAPI' ) ) {
		add_action( 'acf/include_field_types', 'include_field_types_gravity_forms' );
	} // if ( class_exists( 'GFAPI' ) )

}

/**
 * Include field type for ACF5
 *
 * @param int $version Current ACF version number. $version = 5 and can be ignored until ACF6 exists
 */
function include_field_types_gravity_forms( $version ) {
	
	include_once('acf-gravity-forms-v5.php');
	
}