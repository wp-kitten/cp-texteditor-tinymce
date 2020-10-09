<?php

use App\Helpers\PluginsManager;

/**
 * Stores the name of the plugin's directory
 * @var string
 */
define( 'CPTE_PLUGIN_DIR_NAME', basename( dirname( __FILE__ ) ) );
/**
 * Stores the system path to the plugin's directory
 * @var string
 */
define( 'CPTE_PLUGIN_DIR_PATH', trailingslashit( wp_normalize_path( dirname( __FILE__ ) ) ) );


if ( cp_is_admin() ) {
    require_once( dirname( __FILE__ ) . '/admin-hooks.php' );
}
else {
    require_once( dirname( __FILE__ ) . '/hooks.php' );
}

/**
 * Register the path to the translation file that will be used depending on the current locale
 */
add_action( 'contentpress/app/loaded', function () {
    cp_register_language_file( 'cpte', path_combine(
        PluginsManager::getInstance()->getPluginDirPath( CPTE_PLUGIN_DIR_NAME ),
        'lang'
    ) );
} );
