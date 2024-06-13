<?php

function university_post_types() {
    register_post_type('event', [
        'show_in_rest' => true,
        'public' => true,
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'add_new' => 'Add New Event',
            'singular_name' => 'Event'
        ],
        'menu_icon' => 'dashicons-calendar',
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'events'
        ],
        'supports' => ['title', 'editor', 'excerpt']
    ]);

    register_post_type('program', [
        'show_in_rest' => true,
        'public' => true,
        'labels' => [
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'add_new' => 'Add New Program',
            'singular_name' => 'Program,'
        ],
        'menu_icon' => 'dashicons-awards',
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'programs'
        ],
        'supports' => ['title', 'editor']
    ]);
}
add_action('init', 'university_post_types');