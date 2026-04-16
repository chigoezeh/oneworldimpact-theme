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

<div class='nav'>
  <div class='logo-wrap'>
    <?php 
    // Display custom logo or fallback to images
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/OWL-logo.png'); ?>' alt='<?php bloginfo('name'); ?> logo' style='height: 54px;'>
        </a>
        <?php
    }
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img class='logo-wordmark' src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/OWI-One-Line.png'); ?>' alt='<?php bloginfo('name'); ?>' style='height: 34px;'>
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
    echo '<span class="active">About Us</span>';
    echo '<span>Projects</span>';
    echo '<span>News</span>';
    echo '<span>Partnership</span>';
    echo '<span>Contact</span>';
}
