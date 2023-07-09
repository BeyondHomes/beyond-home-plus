<?php
/*
 * Plugin Name:       Beyond Home Plus
 * Plugin URI:        https://gabecode.com
 * Description:       Kit de herramientas para y addons para solventar errores y añadir nuevas funcionalidades al sitio web beyondhomesluxury.com
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gabriel Coronado
 * Author URI:        https://gabecode.com
 * Text Domain:       beyond-homes
 * Domain Path:       /languages
 */

# This litle function avoid the user to lands on the plugin dir by accident
if (!function_exists('add_action')) {
    echo "You're on my Spot. -Sheldon Cooper- 😛";
    exit;
}

// Setup
define('BH_PLUGIN_DIR', plugin_dir_url(__FILE__));
define('BH_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Includes

# Create Variables to select all the PHP files within the includes folder
$rootFiles = glob(BH_PLUGIN_PATH . 'includes/*.php');
$subDirectoryFiles = glob(BH_PLUGIN_PATH . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subDirectoryFiles);

# Include all the PHP files from includes folder automatically
foreach ($allFiles as $filename) {
    include_once($filename);
}

// Hooks
add_action('wp_enqueue_scripts', 'bh_enqueue_scripts');
