<?php use App\Helpers\ScriptsManager;

if ( !defined( 'CPTE_PLUGIN_DIR_NAME' ) ) {
    exit;
}

add_action( 'valpress/site/head', function () {
    if ( vp_is_singular() || vp_is_page() ) {
        ScriptsManager::enqueueStylesheet( 'text-editor-quicksand-font-styles', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap' );
        ScriptsManager::enqueueStylesheet( 'text-editor-styles', vp_plugin_url( basename( dirname( __FILE__ ) ), 'assets/css/frontend-styles.css' ) );
    }
}, 20 );

add_filter( 'valpress/body-class', function ( $classes = [] ) {
    if ( vp_is_singular() || vp_is_page() ) {
        array_push( $classes, 'texteditor-plugin-single' );
    }
    return $classes;
} );

add_filter( 'valpress/post-class', function ( $classes = [] ) {
    if ( vp_is_singular() || vp_is_page() ) {
        array_push( $classes, 'texteditor-plugin-single-post' );
    }
    return $classes;
} );

