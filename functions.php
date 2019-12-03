<?php

// Setup

define('RZ_DEV_MODE', false); // Define DEV_MODE for asset caching (see enqueue.php)

// Includes

include(get_theme_file_path( '/includes/backend/setup-theme.php' ));
include(get_theme_file_path( '/includes/backend/navigations.php'));
include(get_theme_file_path( '/includes/backend/widgets.php'));
include(get_theme_file_path( '/includes/frontend/enqueue.php'));


// Hooks
add_action( 'after_setup_theme', 'rz_setup_theme' );
add_action( 'after_setup_theme', 'rz_navigations' );
add_action( 'widgets_init', 'rz_widgets' );
add_action( 'wp_enqueue_scripts', 'rz_enqueue_assets');