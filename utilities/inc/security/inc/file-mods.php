<?php

/**
 * Prevent file modifications via backend.
 */
add_filter( 'file_mod_allowed', function( $disallow_file_mods, $context ) {
	if ( !isLocal() ) return false;
	return $disallow_file_mods;
}, 10, 2 );

add_filter( 'security_checks', function ( $checks ) {
	$checks['file_mods'] = [
		'title'       => __( 'File modifications', 'security' ),
		'status'      => $status = (isLocal() ? 'warning' : !wp_is_file_mod_allowed( 'capability_update_core' )),
		'info'        => $status === true
			? __( 'No file modifications via backend are allowed.', 'security' )
			: sprintf(
				__( 'File modifications via backend are allowed.%s', 'security' ),
				($status == 'warning' ? ' ' . __( "But in the development environment it always is. Please check on <i>stage</i> and <i>live</i>!", 'security' ) : '')
			),
		'description' => __( "Actions like un/installing plugins/themes, downloading language packs, using the file editors, etc. should only be possible in the development environment. Because if an intruder gains backend access, they would be able to modify the codebase.", 'security' )
	];

	return $checks;
} );
