<?php
function fictional_post_types() {
    // Campus Post Type
    register_post_type('campus', array(
        'show_in_rest' => true,
        'capability_type' => 'campus',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'campuses'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-location-alt',
        'labels' => array(
            'name' => 'Campuses',
            'add_new_item' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'all_items' => 'All Campuses',
            'singular_name' => 'Campus'
        )
    ));

    // Event Post Type
    register_post_type('event', array(
        'show_in_rest' => true,
        'capability_type' => 'event',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        )
    ));
         // Program post type
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array('title'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-awards',
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        )
    ));

    // Professor post type
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => array(
            'name' => 'Professor',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        )
    ));


// Note post type
register_post_type('Note', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'capability_type' => 'note',
    'map_meta_cap' => true,
    'public' => false,
    'show_ui' => true,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'labels' => array(
        'name' => 'Notes',
        'add_new_item' => 'Add New Note',
        'edit_item' => 'Edit Note',
        'all_items' => 'All Notes',
        'singular_name' => 'Note'
    )
));

// Like post type
register_post_type('like', array(
    'supports' => array('title'),
    'public' => false,
    'show_ui' => true,
    'menu_icon' => 'dashicons-heart',
    'labels' => array(
        'name' => 'Likes',
        'add_new_item' => 'Add New Like',
        'edit_item' => 'Edit Like',
        'all_items' => 'All Likes',
        'singular_name' => 'Like'
    )
));

// Slideshow post type
register_post_type('slideshow', array(
    'show_in_rest' => true,
    'supports' => array('title'),
    'public' => true,
    'menu_icon' => 'dashicons-embed-photo',
    'labels' => array(
        'name' => 'Slideshow',
        'add_new_item' => 'Add New Slideshow',
        'edit_item' => 'Edit Slideshow',
        'all_items' => 'All Slideshows',
        'singular_name' => 'Slideshow'
    )
));


}


add_action('init', 'fictional_post_types');