<?php

require get_template_directory() . '/inc/get-started/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function furniture_carpenter_lite_register_recommended_plugins() {
	$plugins = array(
		array(
            'name'             => __( 'Contact Form 7', 'furniture-carpenter-lite' ),
            'slug'             => 'contact-form-7',
            'source'           => '',
            'required'         => false,
            'force_activation' => false,
        )
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'furniture_carpenter_lite_register_recommended_plugins' );