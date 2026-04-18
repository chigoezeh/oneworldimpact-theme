<?php
/**
 * Template Name: Contact Us
 * 
 * The contact page template for One World Impact theme
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */

get_header();
?>

<!-- Contact Section -->
<section class='contact-page'>
  <div class='contact-container'>
    <div class='contact-info'>
      <h2><?php echo esc_html(get_theme_mod('contact_heading', 'Get in Touch')); ?></h2>
      <p class='description'>
        <?php echo esc_html(get_theme_mod('contact_description', 'Whether you\'re interested in collaborating, learning more about our work, or starting a project, we\'d love to hear from you. Fill out the form or reach us directly.')); ?>
      </p>
      <div class='contact-details'>
        <div>
          <strong><?php _e('Email:', 'oneworldimpact'); ?></strong> 
          <a href='mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'contact@owi.org')); ?>'>
            <?php echo esc_html(get_theme_mod('contact_email', 'contact@owi.org')); ?>
          </a>
        </div>
        <?php if (get_theme_mod('contact_phone', '')) : ?>
        <div>
          <strong><?php _e('Phone:', 'oneworldimpact'); ?></strong> 
          <?php echo esc_html(get_theme_mod('contact_phone', '')); ?>
        </div>
        <?php endif; ?>
        <div>
          <strong><?php _e('Location:', 'oneworldimpact'); ?></strong> 
          <?php echo esc_html(get_theme_mod('contact_location', 'Global / Remote')); ?>
        </div>
      </div>
    </div>

    <?php
    // Get contact form display settings
    $show_form = get_theme_mod('contact_show_form', true);
    $show_image = get_theme_mod('contact_show_image', false);
    $contact_image = get_theme_mod('contact_image', '');
    
    // Check which display mode to use
    if ($show_image && !empty($contact_image)) {
        // Display image instead of form
        ?>
        <div class='contact-image-card' style='background-image: url(<?php echo esc_url($contact_image); ?>);'></div>
        <?php
    } elseif ($show_form) {
        // Display contact form
        ?>
        <div class='contact-form-card'>
          <?php
          // Check if Contact Form 7 shortcode is set in Customizer
          $cf7_shortcode = get_theme_mod('contact_form_shortcode', '');
          
          if (!empty($cf7_shortcode)) {
              // Use Contact Form 7 shortcode
              echo do_shortcode($cf7_shortcode);
          } else {
              // Fallback: Simple HTML form or instructions
              ?>
              <div class='contact-form-placeholder'>
                <p style='text-align: center; padding: 2rem; color: #6b7280;'>
                  <strong><?php _e('Contact Form Setup Required', 'oneworldimpact'); ?></strong><br>
                  <?php _e('Please install Contact Form 7 plugin and add the shortcode in:', 'oneworldimpact'); ?><br>
                  <em><?php _e('Appearance > Customize > Contact Page > Contact Form Shortcode', 'oneworldimpact'); ?></em>
                </p>
                <p style='text-align: center; padding: 0 2rem 2rem; color: #9ca3af; font-size: 14px;'>
                  <?php _e('Alternatively, you can add your own form HTML or embed code here by editing template-contact.php', 'oneworldimpact'); ?>
                </p>
              </div>
              <?php
          }
          ?>
        </div>
        <?php
    }
    ?>
  </div>
</section>

<?php
get_footer();
