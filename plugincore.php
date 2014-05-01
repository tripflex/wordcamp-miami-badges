<?php
/**
 * @package   Wordcamp_Miami_Badges
 * @author    Myles McNamara <myles@smyl.es>
 * @license   GPL-2.0+
 * @link      http://smyl.es
 * @copyright 2014 Myles McNamara
 *
 * @wordpress-plugin
 * Plugin Name: Wordcamp Miami Badges
 * Plugin URI:  http://github.com/tripflex/wordcamp-miami-badges
 * Description: Display 2014 Wordcamp Miami badges on your site with Shortcode or Widget
 * Version:     1.0.2
 * Author:      Myles McNamara
 * Author URI:  http://smyl.es
 * Text Domain: wordcamp-miami-badges
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: tripflex/wordcamp-miami-badges
 * GitHub Branch:   master
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-wordcamp-miami-badges.php' );

require_once( plugin_dir_path( __FILE__ ) . '/includes/widget-wordcamp_miami_badge.php' );

// Register hooks that are fired when the plugin is activated or deactivated.
// When the plugin is deleted, the uninstall.php file is loaded.
register_activation_hook( __FILE__, array( 'Wordcamp_Miami_Badges', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Wordcamp_Miami_Badges', 'deactivate' ) );

// Load instance
add_action( 'plugins_loaded', array( 'Wordcamp_Miami_Badges', 'get_instance' ) );
//Wordcamp_Miami_Badges::get_instance();
?>
