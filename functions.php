<?php
/**
 * One World Impact Theme Functions
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function oneworldimpact_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    
    // Enable support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 54,
        'width'       => 54,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'oneworldimpact'),
        'footer'  => esc_html__('Footer Menu', 'oneworldimpact'),
    ));
}
add_action('after_setup_theme', 'oneworldimpact_setup');

/**
 * Enqueue scripts and styles
 */
function oneworldimpact_scripts() {
    // Enqueue Google Fonts - Poppins
    wp_enqueue_style(
        'oneworldimpact-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Enqueue main stylesheet
    wp_enqueue_style(
        'oneworldimpact-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Enqueue carousel script
    wp_enqueue_script(
        'oneworldimpact-carousel',
        get_template_directory_uri() . '/assets/js/carousel.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'oneworldimpact_scripts');

/**
 * Register Custom Post Type: News
 */
function oneworldimpact_register_news_post_type() {
    $labels = array(
        'name'                  => _x('News', 'Post Type General Name', 'oneworldimpact'),
        'singular_name'         => _x('News Item', 'Post Type Singular Name', 'oneworldimpact'),
        'menu_name'             => __('News', 'oneworldimpact'),
        'name_admin_bar'        => __('News Item', 'oneworldimpact'),
        'archives'              => __('News Archives', 'oneworldimpact'),
        'attributes'            => __('News Attributes', 'oneworldimpact'),
        'parent_item_colon'     => __('Parent News:', 'oneworldimpact'),
        'all_items'             => __('All News', 'oneworldimpact'),
        'add_new_item'          => __('Add New News Item', 'oneworldimpact'),
        'add_new'               => __('Add New', 'oneworldimpact'),
        'new_item'              => __('New News Item', 'oneworldimpact'),
        'edit_item'             => __('Edit News Item', 'oneworldimpact'),
        'update_item'           => __('Update News Item', 'oneworldimpact'),
        'view_item'             => __('View News Item', 'oneworldimpact'),
        'view_items'            => __('View News', 'oneworldimpact'),
        'search_items'          => __('Search News', 'oneworldimpact'),
        'not_found'             => __('Not found', 'oneworldimpact'),
        'not_found_in_trash'    => __('Not found in Trash', 'oneworldimpact'),
        'featured_image'        => __('Featured Image', 'oneworldimpact'),
        'set_featured_image'    => __('Set featured image', 'oneworldimpact'),
        'remove_featured_image' => __('Remove featured image', 'oneworldimpact'),
        'use_featured_image'    => __('Use as featured image', 'oneworldimpact'),
        'insert_into_item'      => __('Insert into news item', 'oneworldimpact'),
        'uploaded_to_this_item' => __('Uploaded to this news item', 'oneworldimpact'),
        'items_list'            => __('News list', 'oneworldimpact'),
        'items_list_navigation' => __('News list navigation', 'oneworldimpact'),
        'filter_items_list'     => __('Filter news list', 'oneworldimpact'),
    );
    
    $args = array(
        'label'                 => __('News Item', 'oneworldimpact'),
        'description'           => __('News and updates from OWI', 'oneworldimpact'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-megaphone',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    
    register_post_type('owi_news', $args);
}
add_action('init', 'oneworldimpact_register_news_post_type', 0);

/**
 * Add custom image sizes
 */
function oneworldimpact_custom_image_sizes() {
    add_image_size('news-card', 600, 220, true);
    add_image_size('leader-photo', 400, 320, true);
    add_image_size('about-visual', 800, 420, true);
}
add_action('after_setup_theme', 'oneworldimpact_custom_image_sizes');

/**
 * Add active class to current menu item
 */
function oneworldimpact_active_nav_class($classes, $item) {
    if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'oneworldimpact_active_nav_class', 10, 2);

/**
 * Custom menu walker for primary menu
 */
class OneWorldImpact_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $output .= '<span' . $class_names . '>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</span>';
    }
    
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "\n";
    }
}
