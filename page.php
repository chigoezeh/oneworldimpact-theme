<?php
/**
 * The template for displaying all pages
 * 
 * This is the template that displays all pages by default.
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */

get_header();
?>

<div class="page-content" style="padding: 88px 8%; background: #fff; min-height: 60vh;">
    <div class="content-wrapper" style="max-width: 1200px; margin: 0 auto;">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header" style="margin-bottom: 30px;">
                    <h1 class="entry-title" style="font-size: 48px; line-height: 1.02; margin: 0; color: var(--navy);">
                        <?php the_title(); ?>
                    </h1>
                </header>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 30px;">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="entry-content" style="color: var(--ink); font-size: 16px; line-height: 1.65;">
                    <?php
                    the_content();
                    
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'oneworldimpact'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
                
            </article>
            
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
            
        <?php endwhile; ?>
        
    </div>
</div>

<?php
get_footer();
