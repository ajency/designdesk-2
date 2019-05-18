<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wpdwarves.com
 * @package           Portfolio_Gallery
 *
 * @wordpress-plugin
 * Plugin Name:       Portfolio Gallery
 * Plugin URI:        http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins
 * Description:       Portfolio Album gallery
 * Version:           1.0.0
 * Author:            WPdwarves
 * Author URI:        http://wpdwarves.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       portfolio_gallery
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PG_FILE', __FILE__ );
define( 'PG_BASE_NAME', plugin_basename(__FILE__) );


require plugin_dir_path( __FILE__ ) . 'admin/class-portfolio-gallery-admin.php';

require plugin_dir_path( __FILE__ ) . 'includes/class-portfolio-gallery.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-portfolio-gallery-shortcode.php';