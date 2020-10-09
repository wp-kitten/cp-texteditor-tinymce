<?php

require_once( dirname( __FILE__ ) . '/index.php' );

add_action( 'contentpress/plugin/deleted', function ( $pluginDirName ) {
    if ( CPTE_PLUGIN_DIR_NAME == $pluginDirName ) {
        //#! Do whatever necessary before the plugin is deleted
    }
}, 10 );
