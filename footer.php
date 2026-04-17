<?php
/**
 * The template for displaying the footer
 * 
 * Contains the closing of the #content div and all content after.
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */
?>

<section class='footer-cta'>
  <div class='kicker' style='color:rgba(225,187,88,.9)'><?php echo esc_html(get_theme_mod('footer_cta_kicker', 'Partner with OWI')); ?></div>
  <h2><?php echo esc_html(get_theme_mod('footer_cta_heading', 'Ready to Create Lasting Impact?')); ?></h2>
  <p><?php echo esc_html(get_theme_mod('footer_cta_text', 'Join our network of philanthropic foundations, development agencies, governments, international NGOs, and strategic investors committed to accountable transformation.')); ?></p>
  <a href='<?php echo esc_url(get_theme_mod('footer_cta_button_url', '#')); ?>' class='btn btn-primary'><?php echo esc_html(get_theme_mod('footer_cta_button_text', 'Start a Partnership')); ?></a>
</section>

<div class='footer'>
  <div class='footer-grid'>
    <div>
      <div class='logo-wrap'>
        <?php 
        $main_logo = get_theme_mod('logo_main', get_template_directory_uri() . '/assets/images/OWL-logo.png');
        $stacked_logo = get_theme_mod('logo_stacked', get_template_directory_uri() . '/assets/images/OWI-Stacked.png');
        ?>
        <img src='<?php echo esc_url($main_logo); ?>' alt='<?php bloginfo('name'); ?> icon' style='height:56px'>
        <img src='<?php echo esc_url($stacked_logo); ?>' alt='<?php bloginfo('name'); ?> stacked wordmark' style='height:72px'>
      </div>
      <p style='max-width:420px;margin-top:18px'><?php echo esc_html(get_theme_mod('footer_description', 'Transforming visionary community projects into sustainable, accountable, and life-changing realities across the globe.')); ?></p>
    </div>
    <div>
      <h4><?php esc_html_e('Quick Links', 'oneworldimpact'); ?></h4>
      <?php
      wp_nav_menu(array(
          'theme_location' => 'footer',
          'container'      => 'nav',
          'menu_class'     => 'footer-menu',
          'fallback_cb'    => 'oneworldimpact_footer_default_menu',
      ));
      ?>
    </div>
    <div>
      <h4><?php esc_html_e('Contacts', 'oneworldimpact'); ?></h4>
      <p><?php echo esc_html(get_theme_mod('footer_contact_email', 'contact@owi.org')); ?></p>
    </div>
  </div>
</div>
<div class='footer-bottom'>
  <div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'oneworldimpact'); ?></div>
  <div>
    <a href='<?php echo esc_url(get_privacy_policy_url()); ?>'><?php esc_html_e('Privacy Policy', 'oneworldimpact'); ?></a>
    &nbsp;&nbsp; 
    <a href='<?php echo esc_url(home_url('/terms-of-service')); ?>'><?php esc_html_e('Terms of Service', 'oneworldimpact'); ?></a>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * Fallback footer menu
 */
function oneworldimpact_footer_default_menu() {
    echo '<p>About Us<br>Projects<br>News<br>Partnership</p>';
}
