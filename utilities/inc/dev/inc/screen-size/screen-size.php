<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script( 'dev-screen-size', DEV_DIRECTORY_URI . '/inc/screen-size/app.js', ['wp-i18n'], false, true );
    wp_set_script_translations( 'dev-screen-size', 'dev', DEV_DIRECTORY . '/languages/' );
} );

// change i18n json file name to `LOCALE-HASH.json` like created by `wp i18n make-json`
add_filter( 'load_script_translation_file', function( $file, $handle, $domain ) {
    if ( $file && $domain == 'dev' ) {
        if ( $handle == 'dev-screen-size' ) {
            $md5 = md5('inc/screen-size/app.js' );
            $file = preg_replace( '/\/' . $domain . '-([^-]+)-.+\.json$/', "/$1-{$md5}.json", $file );
        }
    }

    return $file;
}, 10, 3 );
