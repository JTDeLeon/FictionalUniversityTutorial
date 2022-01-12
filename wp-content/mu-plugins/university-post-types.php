<?php  

// Not the best place to put in a functions.php as we want the thing to be available regardless of theme
// Best way is to put in a "Must Use Plugins"
function university_post_types() {
    // Registers post type 1: Name of Custom Post Type 2: Array of options to describe post type
    register_post_type('event', array(
        // Make the post type show up in the admin section
        'public' => true,
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
            'singular_name' => 'Event'
        ),
        // This sets the icon for the new post type
        // https://developer.wordpress.org/resource/dashicons/#arrow-right-alt2
        'menu_icon' => 'dashicons-calendar'

    ));
}

// Post Type Action/Hook
add_action('init', 'university_post_types');