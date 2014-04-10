<?php
/**
 * Page Template Example
 *
 * An example WordPress plugin used to show how to include templates with your
 * plugins and programmatically add them to the active theme
 *
 * @package   PTE
 * @author    Michael McConnell <contact@medialocal.com?
 * @license   GPL-2.0+
 * @link      http://medialocal.com
 * @copyright 2014 Michael McConnell
 *
 * @wordpress-plugin
 * Plugin Name:       Page Developer
 * Plugin URI:        http://medialocal.com
 * Description:       Custom page templates with custom applications
 * Version:           1.0.1
 * Author:            Michael McConnell
 * Author URI:        http://mediamichael.com
 * Text Domain:       pte-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: private
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} // end if

require_once( plugin_dir_path( __FILE__ ) . 'class-page-template-setup.php' );
add_action( 'plugins_loaded', array( 'Page_Template_Plugin', 'get_instance' ) );