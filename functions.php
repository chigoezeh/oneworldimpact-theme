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
        
        // Add link if URL exists
        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
        
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        
        $output .= '<a' . $attributes . '>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
        $output .= '</span>';
    }
    
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "\n";
    }
}

/**
 * Register Theme Customizer
 */
function oneworldimpact_customize_register($wp_customize) {
    
    // ========================================
    // TOP BANNER
    // ========================================
    
    $wp_customize->add_section('top_banner_section', array(
        'title'       => __('Top Banner', 'oneworldimpact'),
        'description' => __('Customize the banner that appears above the navigation', 'oneworldimpact'),
        'priority'    => 20,
    ));
    
    // Show/Hide Banner
    $wp_customize->add_setting('top_banner_show', array(
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
    ));
    $wp_customize->add_control('top_banner_show', array(
        'label'    => __('Show Top Banner', 'oneworldimpact'),
        'section'  => 'top_banner_section',
        'type'     => 'checkbox',
    ));
    
    // Banner Text
    $wp_customize->add_setting('top_banner_text', array(
        'default'           => 'Our website is currently being expanded to better showcase our projects, partnerships, and global impact.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_banner_text', array(
        'label'    => __('Banner Text', 'oneworldimpact'),
        'section'  => 'top_banner_section',
        'type'     => 'text',
    ));
    
    // Background Color
    $wp_customize->add_setting('top_banner_bg_color', array(
        'default'           => '#0b1f3a',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'top_banner_bg_color', array(
        'label'    => __('Background Color', 'oneworldimpact'),
        'section'  => 'top_banner_section',
        'settings' => 'top_banner_bg_color',
    )));
    
    // Text Color
    $wp_customize->add_setting('top_banner_text_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'top_banner_text_color', array(
        'label'    => __('Text Color', 'oneworldimpact'),
        'section'  => 'top_banner_section',
        'settings' => 'top_banner_text_color',
    )));
    
    // ========================================
    // SITE IMAGES / LOGOS
    // ========================================
    
    $wp_customize->add_section('site_images_section', array(
        'title'       => __('Site Images & Logos', 'oneworldimpact'),
        'description' => __('Upload and manage all site images including logos, backgrounds, and fallback images', 'oneworldimpact'),
        'priority'    => 25,
    ));
    
    // Main Logo (OWL logo)
    $wp_customize->add_setting('logo_main', array(
        'default'           => get_template_directory_uri() . '/assets/images/OWL-logo.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_main', array(
        'label'    => __('Main Logo (OWL Icon)', 'oneworldimpact'),
        'section'  => 'site_images_section',
        'settings' => 'logo_main',
        'description' => __('Recommended size: 54x54px. Used in header navigation.', 'oneworldimpact'),
    )));
    
    // Wordmark Logo (One Line)
    $wp_customize->add_setting('logo_wordmark', array(
        'default'           => get_template_directory_uri() . '/assets/images/OWI-One-Line.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_wordmark', array(
        'label'    => __('Wordmark Logo (Horizontal)', 'oneworldimpact'),
        'section'  => 'site_images_section',
        'settings' => 'logo_wordmark',
        'description' => __('Recommended height: 34px. Used next to main logo in header.', 'oneworldimpact'),
    )));
    
    // Stacked Logo
    $wp_customize->add_setting('logo_stacked', array(
        'default'           => get_template_directory_uri() . '/assets/images/OWI-Stacked.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_stacked', array(
        'label'    => __('Stacked Logo (Footer)', 'oneworldimpact'),
        'section'  => 'site_images_section',
        'settings' => 'logo_stacked',
        'description' => __('Recommended height: 72px. Used in footer.', 'oneworldimpact'),
    )));
    
    // About Page Visual
    $wp_customize->add_setting('about_visual_image', array(
        'default'           => get_template_directory_uri() . '/assets/images/about-visual.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_visual_image', array(
        'label'    => __('About Page Hero Background', 'oneworldimpact'),
        'section'  => 'site_images_section',
        'settings' => 'about_visual_image',
        'description' => __('Recommended size: 800x420px. Background image for About page hero section.', 'oneworldimpact'),
    )));
    
    // News Fallback Image 1
    $wp_customize->add_setting('news_fallback_image_1', array(
        'default'           => get_template_directory_uri() . '/assets/images/news-1.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'news_fallback_image_1', array(
        'label'    => __('News Fallback Image 1', 'oneworldimpact'),
        'section'  => 'site_images_section',
        'settings' => 'news_fallback_image_1',
        'description' => __('Recommended size: 600x220px. Used when no news posts exist or no featured image is set.', 'oneworldimpact'),
    )));
    
    // News Fallback Image 2
    $wp_customize->add_setting('news_fallback_image_2', array(
        'default'           => get_template_directory_uri() . '/assets/images/news-2.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'news_fallback_image_2', array(
        'label'    => __('News Fallback Image 2', 'oneworldimpact'),
        'section'  => 'site_images_section',
        'settings' => 'news_fallback_image_2',
        'description' => __('Recommended size: 600x220px. Second fallback news image.', 'oneworldimpact'),
    )));
    
    // News Fallback Image 3
    $wp_customize->add_setting('news_fallback_image_3', array(
        'default'           => get_template_directory_uri() . '/assets/images/news-3.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'news_fallback_image_3', array(
        'label'    => __('News Fallback Image 3', 'oneworldimpact'),
        'section'  => 'site_images_section',
        'settings' => 'news_fallback_image_3',
        'description' => __('Recommended size: 600x220px. Third fallback news image.', 'oneworldimpact'),
    )));
    
    // ========================================
    // HOMEPAGE SECTIONS
    // ========================================
    
    // Hero Panel
    $wp_customize->add_panel('homepage_panel', array(
        'title'       => __('Homepage Content', 'oneworldimpact'),
        'description' => __('Customize all homepage sections', 'oneworldimpact'),
        'priority'    => 30,
    ));
    
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'oneworldimpact'),
        'priority' => 30,
        'panel'    => 'homepage_panel',
    ));
    
    // Hero Eyebrow
    $wp_customize->add_setting('hero_eyebrow', array(
        'default'           => 'Global operations • sustainable development • accountable delivery',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hero_eyebrow', array(
        'label'    => __('Hero Eyebrow Text', 'oneworldimpact'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));
    
    // Hero Heading
    $wp_customize->add_setting('hero_heading', array(
        'default'           => 'Turning Vision Into Sustainable Global Impact',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hero_heading', array(
        'label'    => __('Hero Heading', 'oneworldimpact'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));
    
    // Hero Text
    $wp_customize->add_setting('hero_text', array(
        'default'           => 'We bridge financial integrity, technical excellence, and community empowerment to deliver measurable, life-changing development outcomes worldwide.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('hero_text', array(
        'label'    => __('Hero Text', 'oneworldimpact'),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ));
    
    // Hero Button 1 Text
    $wp_customize->add_setting('hero_button1_text', array(
        'default'           => 'Explore Our Impact',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_button1_text', array(
        'label'    => __('Button 1 Text', 'oneworldimpact'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));
    
    // Hero Button 1 URL
    $wp_customize->add_setting('hero_button1_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('hero_button1_url', array(
        'label'    => __('Button 1 URL', 'oneworldimpact'),
        'section'  => 'hero_section',
        'type'     => 'url',
    ));
    
    // Hero Button 2 Text
    $wp_customize->add_setting('hero_button2_text', array(
        'default'           => 'Partner With Us',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_button2_text', array(
        'label'    => __('Button 2 Text', 'oneworldimpact'),
        'section'  => 'hero_section',
        'type'     => 'text',
    ));
    
    // Hero Button 2 URL
    $wp_customize->add_setting('hero_button2_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('hero_button2_url', array(
        'label'    => __('Button 2 URL', 'oneworldimpact'),
        'section'  => 'hero_section',
        'type'     => 'url',
    ));
    
    // Hero Background Type
    $wp_customize->add_setting('hero_background_type', array(
        'default'           => 'gradient',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_background_type', array(
        'label'    => __('Background Type', 'oneworldimpact'),
        'section'  => 'hero_section',
        'type'     => 'radio',
        'choices'  => array(
            'gradient' => __('Gradient (Default)', 'oneworldimpact'),
            'image'    => __('Background Image', 'oneworldimpact'),
        ),
    ));
    
    // Hero Background Image
    $wp_customize->add_setting('hero_background_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label'       => __('Background Image', 'oneworldimpact'),
        'section'     => 'hero_section',
        'settings'    => 'hero_background_image',
        'description' => __('Recommended size: 1920x680px or larger. Only used when "Background Image" is selected above.', 'oneworldimpact'),
    )));
    
    // Metrics Section
    $wp_customize->add_section('metrics_section', array(
        'title'    => __('Metrics Section', 'oneworldimpact'),
        'priority' => 31,
        'panel'    => 'homepage_panel',
    ));
    
    // Metric 1
    $wp_customize->add_setting('metric1_number', array(
        'default'           => '$50B',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('metric1_number', array(
        'label'    => __('Metric 1 Number', 'oneworldimpact'),
        'section'  => 'metrics_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('metric1_label', array(
        'default'           => 'Projected Impact by 2030',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('metric1_label', array(
        'label'    => __('Metric 1 Label', 'oneworldimpact'),
        'section'  => 'metrics_section',
        'type'     => 'text',
    ));
    
    // Metric 2
    $wp_customize->add_setting('metric2_number', array(
        'default'           => '50+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('metric2_number', array(
        'label'    => __('Metric 2 Number', 'oneworldimpact'),
        'section'  => 'metrics_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('metric2_label', array(
        'default'           => 'Partner Organizations',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('metric2_label', array(
        'label'    => __('Metric 2 Label', 'oneworldimpact'),
        'section'  => 'metrics_section',
        'type'     => 'text',
    ));
    
    // Metric 3
    $wp_customize->add_setting('metric3_number', array(
        'default'           => '15',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('metric3_number', array(
        'label'    => __('Metric 3 Number', 'oneworldimpact'),
        'section'  => 'metrics_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('metric3_label', array(
        'default'           => 'Countries Reached',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('metric3_label', array(
        'label'    => __('Metric 3 Label', 'oneworldimpact'),
        'section'  => 'metrics_section',
        'type'     => 'text',
    ));
    
    // Metric 4
    $wp_customize->add_setting('metric4_number', array(
        'default'           => '100%',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('metric4_number', array(
        'label'    => __('Metric 4 Number', 'oneworldimpact'),
        'section'  => 'metrics_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('metric4_label', array(
        'default'           => 'Transparent Governance',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('metric4_label', array(
        'label'    => __('Metric 4 Label', 'oneworldimpact'),
        'section'  => 'metrics_section',
        'type'     => 'text',
    ));
    
    // Mission & Vision Section
    $wp_customize->add_section('mission_section', array(
        'title'    => __('Mission & Vision Section', 'oneworldimpact'),
        'priority' => 32,
        'panel'    => 'homepage_panel',
    ));
    
    $wp_customize->add_setting('mission_kicker', array(
        'default'           => 'Our purpose',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mission_kicker', array(
        'label'    => __('Section Kicker', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('mission_heading', array(
        'default'           => 'Mission and Vision',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mission_heading', array(
        'label'    => __('Section Heading', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('mission_intro', array(
        'default'           => 'OWI is positioned as a global social impact and development management organization that turns visionary community projects into sustainable, accountable outcomes.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('mission_intro', array(
        'label'    => __('Section Intro Text', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'textarea',
    ));
    
    // Mission Card
    $wp_customize->add_setting('mission_card_label', array(
        'default'           => 'Our Mission',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mission_card_label', array(
        'label'    => __('Mission Card Label', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('mission_card_title', array(
        'default'           => 'Transform vision into reality.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mission_card_title', array(
        'label'    => __('Mission Card Title', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('mission_card_text', array(
        'default'           => 'To transform visionary community projects into financially sound, community-driven realities — advancing sustainable development, climate resilience, and inclusive global growth.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('mission_card_text', array(
        'label'    => __('Mission Card Text', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'textarea',
    ));
    
    // Vision Card
    $wp_customize->add_setting('vision_card_label', array(
        'default'           => 'Our Vision',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vision_card_label', array(
        'label'    => __('Vision Card Label', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('vision_card_title', array(
        'default'           => 'Communities built to thrive.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vision_card_title', array(
        'label'    => __('Vision Card Title', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('vision_card_text', array(
        'default'           => 'A world where every community enjoys access to safe housing, quality healthcare, sustainable food systems, clean energy, and transparent governance — driven by accountable leadership and empowered local participation.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vision_card_text', array(
        'label'    => __('Vision Card Text', 'oneworldimpact'),
        'section'  => 'mission_section',
        'type'     => 'textarea',
    ));
    
    // Services Section
    $wp_customize->add_section('services_section', array(
        'title'    => __('Services Section', 'oneworldimpact'),
        'priority' => 33,
        'panel'    => 'homepage_panel',
    ));
    
    $wp_customize->add_setting('services_kicker', array(
        'default'           => 'What we do',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('services_kicker', array(
        'label'    => __('Section Kicker', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('services_heading', array(
        'default'           => 'End-to-end development excellence',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('services_heading', array(
        'label'    => __('Section Heading', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('services_intro', array(
        'default'           => 'OWI manages high-impact programs through financial oversight, project execution, sustainability integration, and community engagement.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('services_intro', array(
        'label'    => __('Section Intro', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'textarea',
    ));
    
    // Service 1
    $wp_customize->add_setting('service1_label', array(
        'default'           => 'Service Pillar',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service1_label', array(
        'label'    => __('Service 1 Label', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('service1_title', array(
        'default'           => 'Financial oversight',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service1_title', array(
        'label'    => __('Service 1 Title', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('service1_text', array(
        'default'           => 'Transparent fund tracking, compliance controls, and investment accountability frameworks that protect mission and capital at every phase.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('service1_text', array(
        'label'    => __('Service 1 Text', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'textarea',
    ));
    
    // Service 2
    $wp_customize->add_setting('service2_label', array(
        'default'           => 'Service Pillar',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service2_label', array(
        'label'    => __('Service 2 Label', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('service2_title', array(
        'default'           => 'Project management',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service2_title', array(
        'label'    => __('Service 2 Title', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('service2_text', array(
        'default'           => 'Disciplined end-to-end oversight that aligns stakeholders, accelerates execution, and keeps transformative projects moving from concept to delivery.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('service2_text', array(
        'label'    => __('Service 2 Text', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'textarea',
    ));
    
    // Service 3
    $wp_customize->add_setting('service3_label', array(
        'default'           => 'Service Pillar',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service3_label', array(
        'label'    => __('Service 3 Label', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('service3_title', array(
        'default'           => 'Community-driven delivery',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service3_title', array(
        'label'    => __('Service 3 Title', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('service3_text', array(
        'default'           => 'Programs built around local participation, measurable outcomes, and SDG-aligned impact so communities remain central to long-term success.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('service3_text', array(
        'label'    => __('Service 3 Text', 'oneworldimpact'),
        'section'  => 'services_section',
        'type'     => 'textarea',
    ));
    
    // ========================================
    // CONTACT PAGE
    // ========================================
    
    $wp_customize->add_section('contact_page_section', array(
        'title'       => __('Contact Page', 'oneworldimpact'),
        'description' => __('Customize the Contact Us page content and form', 'oneworldimpact'),
        'priority'    => 115,
    ));
    
    // Contact Heading
    $wp_customize->add_setting('contact_heading', array(
        'default'           => 'Get in Touch',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_heading', array(
        'label'    => __('Page Heading', 'oneworldimpact'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));
    
    // Contact Description
    $wp_customize->add_setting('contact_description', array(
        'default'           => 'Whether you\'re interested in collaborating, learning more about our work, or starting a project, we\'d love to hear from you. Fill out the form or reach us directly.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('contact_description', array(
        'label'    => __('Description Text', 'oneworldimpact'),
        'section'  => 'contact_page_section',
        'type'     => 'textarea',
    ));
    
    // Contact Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'contact@owi.org',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_email', array(
        'label'    => __('Email Address', 'oneworldimpact'),
        'section'  => 'contact_page_section',
        'type'     => 'email',
    ));
    
    // Contact Phone
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_phone', array(
        'label'       => __('Phone Number (Optional)', 'oneworldimpact'),
        'section'     => 'contact_page_section',
        'type'        => 'text',
        'description' => __('Leave blank to hide phone number', 'oneworldimpact'),
    ));
    
    // Contact Location
    $wp_customize->add_setting('contact_location', array(
        'default'           => 'Global / Remote',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_location', array(
        'label'    => __('Location', 'oneworldimpact'),
        'section'  => 'contact_page_section',
        'type'     => 'text',
    ));
    
    // Contact Form Shortcode
    $wp_customize->add_setting('contact_form_shortcode', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_form_shortcode', array(
        'label'       => __('Contact Form Shortcode', 'oneworldimpact'),
        'section'     => 'contact_page_section',
        'type'        => 'text',
        'description' => __('Enter your Contact Form 7 shortcode here (e.g., [contact-form-7 id="123"]). Install Contact Form 7 plugin first.', 'oneworldimpact'),
    ));
    
    // Footer CTA Section
    $wp_customize->add_section('footer_cta_section', array(
        'title'    => __('Footer CTA Section', 'oneworldimpact'),
        'priority' => 120,
    ));
    
    $wp_customize->add_setting('footer_cta_kicker', array(
        'default'           => 'Partner with OWI',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_cta_kicker', array(
        'label'    => __('CTA Kicker', 'oneworldimpact'),
        'section'  => 'footer_cta_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('footer_cta_heading', array(
        'default'           => 'Ready to Create Lasting Impact?',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_cta_heading', array(
        'label'    => __('CTA Heading', 'oneworldimpact'),
        'section'  => 'footer_cta_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('footer_cta_text', array(
        'default'           => 'Join our network of philanthropic foundations, development agencies, governments, international NGOs, and strategic investors committed to accountable transformation.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_cta_text', array(
        'label'    => __('CTA Text', 'oneworldimpact'),
        'section'  => 'footer_cta_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('footer_cta_button_text', array(
        'default'           => 'Start a Partnership',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_cta_button_text', array(
        'label'    => __('Button Text', 'oneworldimpact'),
        'section'  => 'footer_cta_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('footer_cta_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_cta_button_url', array(
        'label'    => __('Button URL', 'oneworldimpact'),
        'section'  => 'footer_cta_section',
        'type'     => 'url',
    ));
    
    // Footer Section
    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Content', 'oneworldimpact'),
        'priority' => 121,
    ));
    
    $wp_customize->add_setting('footer_description', array(
        'default'           => 'Transforming visionary community projects into sustainable, accountable, and life-changing realities across the globe.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_description', array(
        'label'    => __('Footer Description', 'oneworldimpact'),
        'section'  => 'footer_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('footer_contact_email', array(
        'default'           => 'contact@owi.org',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('footer_contact_email', array(
        'label'    => __('Contact Email', 'oneworldimpact'),
        'section'  => 'footer_section',
        'type'     => 'email',
    ));
    
    // Partnership Pillars Section
    $wp_customize->add_section('pillars_section', array(
        'title'    => __('Partnership Pillars Section', 'oneworldimpact'),
        'priority' => 34,
        'panel'    => 'homepage_panel',
    ));
    
    $wp_customize->add_setting('pillars_kicker', array(
        'default'           => 'Partnership framework',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('pillars_kicker', array(
        'label'    => __('Section Kicker', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('pillars_heading', array(
        'default'           => 'Our partnership model is built on four foundational pillars.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('pillars_heading', array(
        'label'    => __('Section Heading', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('pillars_intro', array(
        'default'           => 'On the homepage, this stays concise: enough to explain how OWI works, with the expanded methodology and focus sectors detailed on the About page.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('pillars_intro', array(
        'label'    => __('Section Intro', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'textarea',
    ));
    
    // Pillar 1
    $wp_customize->add_setting('pillar1_title', array(
        'default'           => 'Alignment',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('pillar1_title', array(
        'label'    => __('Pillar 1 Title', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('pillar1_text', array(
        'default'           => 'We align sovereign priorities, community needs, funding structures, and implementation pathways from the start.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('pillar1_text', array(
        'label'    => __('Pillar 1 Text', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'textarea',
    ));
    
    // Pillar 2
    $wp_customize->add_setting('pillar2_title', array(
        'default'           => 'Execution platform capable of scale',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('pillar2_title', array(
        'label'    => __('Pillar 2 Title', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('pillar2_text', array(
        'default'           => 'Our platform combines project controls, compliance, reporting, and stakeholder coordination for disciplined delivery.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('pillar2_text', array(
        'label'    => __('Pillar 2 Text', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'textarea',
    ));
    
    // Pillar 3
    $wp_customize->add_setting('pillar3_title', array(
        'default'           => 'Capability, experience, track record & trust',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('pillar3_title', array(
        'label'    => __('Pillar 3 Title', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('pillar3_text', array(
        'default'           => 'We bring technical stewardship, institutional discipline, and trusted partnerships across complex multi-stakeholder environments.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('pillar3_text', array(
        'label'    => __('Pillar 3 Text', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'textarea',
    ));
    
    // Pillar 4
    $wp_customize->add_setting('pillar4_title', array(
        'default'           => 'Expert discipline within a strategic vertical',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('pillar4_title', array(
        'label'    => __('Pillar 4 Title', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('pillar4_text', array(
        'default'           => 'Sector-specific expertise enables strong planning, credible execution, and measurable outcomes within defined development priorities.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('pillar4_text', array(
        'label'    => __('Pillar 4 Text', 'oneworldimpact'),
        'section'  => 'pillars_section',
        'type'     => 'textarea',
    ));
    
    // News Section
    $wp_customize->add_section('news_section', array(
        'title'    => __('News Section', 'oneworldimpact'),
        'priority' => 35,
        'panel'    => 'homepage_panel',
    ));
    
    $wp_customize->add_setting('news_kicker', array(
        'default'           => 'Latest news',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('news_kicker', array(
        'label'    => __('Section Kicker', 'oneworldimpact'),
        'section'  => 'news_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('news_heading', array(
        'default'           => 'Projects, partnerships, and insight',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('news_heading', array(
        'label'    => __('Section Heading', 'oneworldimpact'),
        'section'  => 'news_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('news_intro', array(
        'default'           => 'Clean, image-led updates keep the homepage active while reinforcing credibility and momentum.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('news_intro', array(
        'label'    => __('Section Intro', 'oneworldimpact'),
        'section'  => 'news_section',
        'type'     => 'textarea',
    ));
    
    // ========================================
    // ABOUT PAGE SECTIONS
    // ========================================
    
    // About Page Panel
    $wp_customize->add_panel('about_panel', array(
        'title'       => __('About Page Content', 'oneworldimpact'),
        'description' => __('Customize all About page sections', 'oneworldimpact'),
        'priority'    => 40,
    ));
    
    // About Hero Section
    $wp_customize->add_section('about_hero_section', array(
        'title'    => __('About Hero Section', 'oneworldimpact'),
        'priority' => 41,
        'panel'    => 'about_panel',
    ));
    
    $wp_customize->add_setting('about_hero_kicker', array(
        'default'           => 'About OWI',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_hero_kicker', array(
        'label'    => __('Hero Kicker', 'oneworldimpact'),
        'section'  => 'about_hero_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('about_hero_heading', array(
        'default'           => 'Bridging Vision and Execution for Global Good',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_hero_heading', array(
        'label'    => __('Hero Heading', 'oneworldimpact'),
        'section'  => 'about_hero_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('about_hero_text1', array(
        'default'           => 'Our World Impact (OWI) is an international social impact and development management organization committed to turning visionary community projects into sustainable, accountable, and life-changing realities.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('about_hero_text1', array(
        'label'    => __('Hero Text Paragraph 1', 'oneworldimpact'),
        'section'  => 'about_hero_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('about_hero_text2', array(
        'default'           => 'We operate at the intersection of financial integrity, technical execution, and community empowerment, ensuring that every project we manage delivers measurable impact and adheres to high global accountability standards.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('about_hero_text2', array(
        'label'    => __('Hero Text Paragraph 2', 'oneworldimpact'),
        'section'  => 'about_hero_section',
        'type'     => 'textarea',
    ));
    
    // Focus Areas Section
    $wp_customize->add_section('focus_section', array(
        'title'    => __('Focus Areas Section', 'oneworldimpact'),
        'priority' => 42,
        'panel'    => 'about_panel',
    ));
    
    $wp_customize->add_setting('focus_kicker', array(
        'default'           => 'Strategic focus areas',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('focus_kicker', array(
        'label'    => __('Section Kicker', 'oneworldimpact'),
        'section'  => 'focus_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('focus_heading', array(
        'default'           => 'Driving transformation where it matters most',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('focus_heading', array(
        'label'    => __('Section Heading', 'oneworldimpact'),
        'section'  => 'focus_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('focus_intro', array(
        'default'           => 'OWI partners with governments, donors, and investors to advance projects across sectors where durable infrastructure and community-centered development intersect.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('focus_intro', array(
        'label'    => __('Section Intro', 'oneworldimpact'),
        'section'  => 'focus_section',
        'type'     => 'textarea',
    ));
    
    // Focus areas 1-4 (simplified - just titles and text, numbers are hardcoded)
    for ($i = 1; $i <= 4; $i++) {
        $defaults = array(
            1 => array('num' => '01', 'title' => 'Mining', 'text' => 'Responsible extraction models that prioritize transparent governance, environmental stewardship, and local benefit-sharing.'),
            2 => array('num' => '02', 'title' => 'Fishing & Farming', 'text' => 'Integrated aquaculture and regenerative agriculture programs designed to strengthen livelihoods and long-term food security.'),
            3 => array('num' => '03', 'title' => '3D Housing', 'text' => 'Scalable affordable housing solutions using rapid, resilient construction methods to serve growing communities.'),
            4 => array('num' => '04', 'title' => 'Renewable Energy', 'text' => 'Solar, wind, and hybrid infrastructure that expands access to reliable power while reducing long-term environmental risk.'),
        );
        
        $wp_customize->add_setting("focus{$i}_num", array(
            'default'           => $defaults[$i]['num'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("focus{$i}_num", array(
            'label'    => sprintf(__('Focus Area %d Number', 'oneworldimpact'), $i),
            'section'  => 'focus_section',
            'type'     => 'text',
        ));
        
        $wp_customize->add_setting("focus{$i}_title", array(
            'default'           => $defaults[$i]['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("focus{$i}_title", array(
            'label'    => sprintf(__('Focus Area %d Title', 'oneworldimpact'), $i),
            'section'  => 'focus_section',
            'type'     => 'text',
        ));
        
        $wp_customize->add_setting("focus{$i}_text", array(
            'default'           => $defaults[$i]['text'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("focus{$i}_text", array(
            'label'    => sprintf(__('Focus Area %d Text', 'oneworldimpact'), $i),
            'section'  => 'focus_section',
            'type'     => 'textarea',
        ));
    }
    
    // Timeline Section
    $wp_customize->add_section('timeline_section', array(
        'title'    => __('Timeline Section', 'oneworldimpact'),
        'priority' => 43,
        'panel'    => 'about_panel',
    ));
    
    $wp_customize->add_setting('timeline_kicker', array(
        'default'           => 'Partnership framework',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('timeline_kicker', array(
        'label'    => __('Section Kicker', 'oneworldimpact'),
        'section'  => 'timeline_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('timeline_heading', array(
        'default'           => 'How we move ideas into infrastructure.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('timeline_heading', array(
        'label'    => __('Section Heading', 'oneworldimpact'),
        'section'  => 'timeline_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('timeline_intro', array(
        'default'           => 'The homepage shows the four pillars at a glance. The About page expands the operating model so partners can understand how OWI works in practice.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('timeline_intro', array(
        'label'    => __('Section Intro', 'oneworldimpact'),
        'section'  => 'timeline_section',
        'type'     => 'textarea',
    ));
    
    // Timeline steps 1-4
    $step_defaults = array(
        1 => array('num' => '1', 'title' => 'Align', 'text' => 'We bring together priorities, financing logic, community considerations, and delivery objectives into one executable roadmap.'),
        2 => array('num' => '2', 'title' => 'Pilot', 'text' => 'Test-ready initiatives are shaped into credible first implementations that validate fit, governance, and operating assumptions.'),
        3 => array('num' => '3', 'title' => 'Integrate', 'text' => 'Systems, partners, controls, and reporting are integrated so projects can scale with accountability and technical consistency.'),
        4 => array('num' => '4', 'title' => 'Deploy', 'text' => 'Programs are launched with structured execution oversight, stakeholder coordination, and measurable impact reporting.'),
    );
    
    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("step{$i}_num", array(
            'default'           => $step_defaults[$i]['num'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("step{$i}_num", array(
            'label'    => sprintf(__('Step %d Number', 'oneworldimpact'), $i),
            'section'  => 'timeline_section',
            'type'     => 'text',
        ));
        
        $wp_customize->add_setting("step{$i}_title", array(
            'default'           => $step_defaults[$i]['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("step{$i}_title", array(
            'label'    => sprintf(__('Step %d Title', 'oneworldimpact'), $i),
            'section'  => 'timeline_section',
            'type'     => 'text',
        ));
        
        $wp_customize->add_setting("step{$i}_text", array(
            'default'           => $step_defaults[$i]['text'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("step{$i}_text", array(
            'label'    => sprintf(__('Step %d Text', 'oneworldimpact'), $i),
            'section'  => 'timeline_section',
            'type'     => 'textarea',
        ));
    }
    
    // Leadership Section
    $wp_customize->add_section('leadership_section', array(
        'title'    => __('Leadership Section', 'oneworldimpact'),
        'priority' => 44,
        'panel'    => 'about_panel',
    ));
    
    $wp_customize->add_setting('leadership_kicker', array(
        'default'           => 'Executive leadership',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('leadership_kicker', array(
        'label'    => __('Section Kicker', 'oneworldimpact'),
        'section'  => 'leadership_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('leadership_heading', array(
        'default'           => 'Leaders guiding a global platform',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('leadership_heading', array(
        'label'    => __('Section Heading', 'oneworldimpact'),
        'section'  => 'leadership_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('leadership_intro', array(
        'default'           => 'Leadership profiles remain concise here so the visual balance stays polished while still giving visitors a clear sense of the team behind OWI.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('leadership_intro', array(
        'label'    => __('Section Intro', 'oneworldimpact'),
        'section'  => 'leadership_section',
        'type'     => 'textarea',
    ));
    
    // Leaders 1-3
    $leader_defaults = array(
        1 => array('name' => 'Brian Baughman', 'role' => 'Chief Executive Officer', 'bio' => 'A seasoned operator with deep experience across construction, logistics, and execution systems, Brian leads OWI\'s platform for disciplined global project delivery.'),
        2 => array('name' => 'Rabiic Gedi', 'role' => 'Chief International Officer', 'bio' => 'Rabiic advances international partnerships, infrastructure conversations, and institution-facing initiatives that connect capital, community needs, and implementation strategy.'),
        3 => array('name' => 'Joe Cota', 'role' => 'Chief Strategy Officer', 'bio' => 'Joe supports long-range strategic development, helping shape opportunity pipelines, partner relationships, and practical frameworks for growth.'),
    );
    
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("leader{$i}_name", array(
            'default'           => $leader_defaults[$i]['name'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("leader{$i}_name", array(
            'label'    => sprintf(__('Leader %d Name', 'oneworldimpact'), $i),
            'section'  => 'leadership_section',
            'type'     => 'text',
        ));
        
        $wp_customize->add_setting("leader{$i}_role", array(
            'default'           => $leader_defaults[$i]['role'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("leader{$i}_role", array(
            'label'    => sprintf(__('Leader %d Role', 'oneworldimpact'), $i),
            'section'  => 'leadership_section',
            'type'     => 'text',
        ));
        
        $wp_customize->add_setting("leader{$i}_bio", array(
            'default'           => $leader_defaults[$i]['bio'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("leader{$i}_bio", array(
            'label'    => sprintf(__('Leader %d Bio', 'oneworldimpact'), $i),
            'section'  => 'leadership_section',
            'type'     => 'textarea',
        ));
        
        $wp_customize->add_setting("leader{$i}_image", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "leader{$i}_image", array(
            'label'    => sprintf(__('Leader %d Image', 'oneworldimpact'), $i),
            'section'  => 'leadership_section',
            'settings' => "leader{$i}_image",
        )));
    }
}
add_action('customize_register', 'oneworldimpact_customize_register');
