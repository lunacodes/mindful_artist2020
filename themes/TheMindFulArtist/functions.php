<?php
/**
 * Roots includes
 */
require_once locate_template( '/lib/utils.php' );           // Utility functions
require_once locate_template( '/lib/init.php' );            // Initial theme setup and constants
require_once locate_template( '/lib/sidebar.php' );         // Sidebar class
require_once locate_template( '/lib/config.php' );          // Configuration
require_once locate_template( '/lib/activation.php' );      // Theme activation
require_once locate_template( '/lib/cleanup.php' );         // Cleanup
require_once locate_template( '/lib/nav.php' );             // Custom nav modifications
// require_once locate_template( '/lib/comments.php' );        // Custom comments modifications
require_once locate_template( '/lib/rewrites.php' );        // URL rewriting for assets
require_once locate_template( '/lib/htaccess.php' );        // HTML5 Boilerplate .htaccess
require_once locate_template( '/lib/widgets.php' );         // Sidebars and widgets
require_once locate_template( '/lib/scripts.php' );         // Scripts and stylesheets
require_once locate_template( '/lib/custom.php' );          // Custom functions
require_once( 'aq_resizer.php' );                 // Handles Image Resizing
require_once( get_template_directory() . '/inc/custom-functions.php' );                  // Additional custom functions

// require_once( get_template_directory_uri() . '/inc/custom-functions.php' );                  // Additional custom functions
