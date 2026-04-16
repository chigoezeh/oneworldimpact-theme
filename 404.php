<?php
/**
 * The template for displaying 404 pages (not found)
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */

get_header();
?>

<div class="error-404-content" style="padding: 88px 8%; background: linear-gradient(180deg, #fff, var(--cloud)); min-height: 60vh; text-align: center;">
    <div class="content-wrapper" style="max-width: 800px; margin: 0 auto;">
        
        <div class="kicker" style="font-size: 12px; text-transform: uppercase; letter-spacing: 1.6px; color: var(--green); font-weight: 600; margin-bottom: 10px;">
            <?php esc_html_e('Error 404', 'oneworldimpact'); ?>
        </div>
        
        <h1 style="font-size: 76px; line-height: 0.98; margin: 0 0 22px; color: var(--navy);">
            <?php esc_html_e('Page Not Found', 'oneworldimpact'); ?>
        </h1>
        
        <p style="font-size: 22px; line-height: 1.45; color: var(--ink); max-width: 640px; margin: 0 auto 30px;">
            <?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'oneworldimpact'); ?>
        </p>
        
        <div style="display: flex; gap: 14px; flex-wrap: wrap; justify-content: center;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                <?php esc_html_e('Go to Homepage', 'oneworldimpact'); ?>
            </a>
            <a href="javascript:history.back()" class="btn btn-secondary">
                <?php esc_html_e('Go Back', 'oneworldimpact'); ?>
            </a>
        </div>
        
        <div style="margin-top: 50px;">
            <h3 style="font-size: 24px; margin-bottom: 20px; color: var(--navy);">
                <?php esc_html_e('Search Our Site', 'oneworldimpact'); ?>
            </h3>
            <?php get_search_form(); ?>
        </div>
        
    </div>
</div>

<?php
get_footer();
