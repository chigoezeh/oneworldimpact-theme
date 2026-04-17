<?php
/**
 * The header for the One World Impact theme
 * 
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php 
// Top Banner
$show_banner = get_theme_mod('top_banner_show', true);
if ($show_banner) :
    $banner_text = get_theme_mod('top_banner_text', 'Our website is currently being expanded to better showcase our projects, partnerships, and global impact.');
    $banner_bg = get_theme_mod('top_banner_bg_color', '#0b1f3a');
    $banner_color = get_theme_mod('top_banner_text_color', '#ffffff');
    ?>
    <div class='top-banner' style='background: <?php echo esc_attr($banner_bg); ?>; color: <?php echo esc_attr($banner_color); ?>;'>
        <?php echo esc_html($banner_text); ?>
    </div>
<?php endif; ?>

<div class='nav'>
  <div class='logo-wrap'>
    <?php 
    // Get customizer logo images
    $main_logo = get_theme_mod('logo_main', get_template_directory_uri() . '/assets/images/OWL-logo.png');
    $stacked_logo = get_theme_mod('logo_stacked', get_template_directory_uri() . '/assets/images/OWI-Stacked.png');
    
    // Display custom logo or fallback to main logo image
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src='<?php echo esc_url($main_logo); ?>' alt='<?php bloginfo('name'); ?> logo' style='height: 54px;'>
        </a>
        <?php
    }
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img class='logo-wordmark' src='<?php echo esc_url($stacked_logo); ?>' alt='<?php bloginfo('name'); ?>' style='height: 34px;'>
    </a>
  </div>
  <div class='menu'>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container'      => false,
        'items_wrap'     => '%3$s',
        'walker'         => new OneWorldImpact_Walker_Nav_Menu(),
        'fallback_cb'    => 'oneworldimpact_default_menu',
    ));
    ?>
  </div>
</div>

<?php
/**
 * Fallback menu if no menu is assigned
 */
function oneworldimpact_default_menu() {
    echo '<span><a href="' . esc_url(home_url('/')) . '">Home</a></span>';
    echo '<span><a href="#">About Us</a></span>';
    echo '<span><a href="#">Projects</a></span>';
    echo '<span><a href="#">News</a></span>';
    echo '<span><a href="#">Partnership</a></span>';
    echo '<span><a href="#">Contact</a></span>';
}
