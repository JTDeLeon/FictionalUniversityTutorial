<?php  

// Not the best place to put in a functions.php as we want the thing to be available regardless of theme
// Best way is to put in a "Must Use Plugins"
function university_post_types() {
    // Registers post type 1: Name of Custom Post Type 2: Array of options to describe post type
    register_post_type('event', array(
        // Enable Excerpts Support + other fields such as editor and title
        // also use custom-fields. Without needing to add the support, Can use a installed plugin called Advanced Custom Fields (ACF)
        'supports' => array('excerpt', 'title', 'editor'),
        // Changes the slug to whater I want! Unicorn!
        'rewrite' => array('slug' => 'events'),
        // Make the post type show up in the admin section
        'public' => true,
        // To use MODERN UI/UX of the WP Admin
        'show_in_rest' => true,
        // Sets archive support
        'has_archive' => true,
        // Describe and label the new post type
        'labels' => array(
            // Names the main post type
            'name' => 'Events',
            // Updates the add new post name when adding a new post
            'add_new_item' => 'Add New Event',
            // Updates the edit event to show proper name
            'edit_item' => 'Edit Event',
            // Updates the Sub title for "events" to equal whatever like "All Events"
            'all_items' => 'All Events',
            // Label for a singular version of events
            'singular_name' => 'Event',
            
        ),
        // This sets the icon for the new post type
        // https://developer.wordpress.org/resource/dashicons/#arrow-right-alt2
        'menu_icon' => 'dashicons-calendar'

    ));
}

// Post Type Action/Hook
add_action('init', 'university_post_types');

// Be sure to update the wp settings permalink structure! 