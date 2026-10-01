/**
 * Filmmaker Production Studio — admin banner dismiss.
 *
 * Hides the banner for the current page view only. Nothing is persisted, so
 * the banner comes back on the next admin page load, by design.
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		var banner = document.getElementById( 'bwp-admin-banner' );

		if ( ! banner ) {
			return;
		}

		var close = banner.querySelector( '.bwp-admin-banner__close' );

		if ( ! close ) {
			return;
		}

		close.addEventListener( 'click', function () {
			banner.classList.add( 'is-hidden' );
		} );
	} );
}() );
