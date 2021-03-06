<?php 

function university_files() {
    wp_enqueue_script('main-university-javascript', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    // Pull in external styles/support
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}

// Hook Name Matters Here
add_action('wp_enqueue_scripts', 'university_files');


function university_features() {
    // There are other wp features to use too! 
    // This support adds the title dynamically to the title tag of the page 
    add_theme_support('title-tag');

    // Adds Menus To The WP Admin Menu Support! Needs this to work. 
    register_nav_menu('main-menu', 'Main Menu in Header');
    register_nav_menu('footer-explore-menu', 'Explore Menu in Footer');
    register_nav_menu('footer-learn-menu', 'Learn Menu in Footer');
}

// Hook Name Matters Here 
add_action('after_setup_theme', 'university_features');

