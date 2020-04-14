<?php
/**
 * Custom functions
 */

add_action( 'init', 'register_cpt_workshop' );

function register_cpt_workshop() {

    $labels = array( 
        'name' => _x( 'Workshops', 'workshop' ),
        'singular_name' => _x( 'Workshop', 'workshop' ),
        'add_new' => _x( 'Add New', 'workshop' ),
        'add_new_item' => _x( 'Add New Workshop', 'workshop' ),
        'edit_item' => _x( 'Edit Workshop', 'workshop' ),
        'new_item' => _x( 'New Workshop', 'workshop' ),
        'view_item' => _x( 'View Workshop', 'workshop' ),
        'search_items' => _x( 'Search Workshops', 'workshop' ),
        'not_found' => _x( 'No workshops found', 'workshop' ),
        'not_found_in_trash' => _x( 'No workshops found in Trash', 'workshop' ),
        'parent_item_colon' => _x( 'Parent Workshop:', 'workshop' ),
        'menu_name' => _x( 'Workshops', 'workshop' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Workshops and eCources',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon' => '/wp-content/themes/TheMindFulArtist/assets/img/workshops.png'
    );

    register_post_type( 'workshop', $args );
}