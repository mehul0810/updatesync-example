<?php
/**
 * Plugin Name: UpdateSync Example
 * Plugin URI: 
 * Description: An example plugin to test UpdateSync automatic update functionality.
 * Version: 1.0.1
 * Author: Mehul Gohil
 * Author URI: https://mehulgohil.com
 * Update URI: https://github.com/mehul0810/updatesync-example
 */

namespace UpdateSync\Example;

use MG\UpdateSync\ProviderFactory;

// Bailout, if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Load Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

add_action( 'plugins_loaded', function() {
    $provider = ProviderFactory::create( 'github', __FILE__ );
    $provider->run();
} );