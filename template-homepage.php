<?php
/**
 * Template Name: Homepage
 * 
 * The homepage template for One World Impact theme
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */

get_header();

// Get hero background settings
$hero_bg_type = get_theme_mod('hero_background_type', 'gradient');
$hero_bg_image = get_theme_mod('hero_background_image', '');

// Build inline style based on background type
$hero_style = '';
if ($hero_bg_type === 'image' && !empty($hero_bg_image)) {
    $hero_style = 'style="background: linear-gradient(90deg, rgba(11,31,58,.78) 0%, rgba(11,31,58,.42) 38%, rgba(11,31,58,.12) 100%), url(' . esc_url($hero_bg_image) . ') center/cover;"';
}

// Get globe panel settings
$show_globe = get_theme_mod('globe_panel_show', true);
$globe_gradient = get_theme_mod('globe_panel_gradient', true);
$globe_image = get_theme_mod('globe_panel_image', '');

// Build globe panel classes and inline style
$globe_classes = 'globe-panel';
$globe_style = '';
if (!$globe_gradient) {
    $globe_classes .= ' no-gradient';
}
if (!empty($globe_image)) {
    $globe_classes .= ' has-image';
    $globe_style = ' style="background-image: url(' . esc_url($globe_image) . ');"';
}

// Check if hero section should be shown
$show_hero = get_theme_mod('show_hero_section', true);
?>

<?php if ($show_hero) : ?>
<!-- Hero Section -->
<section class='hero' <?php echo $hero_style; ?>>
  <div class='hero-inner'>
    <div>
      <div class='eyebrow'><?php echo esc_html(get_theme_mod('hero_eyebrow', 'Global operations • sustainable development • accountable delivery')); ?></div>
      <h1><?php echo esc_html(get_theme_mod('hero_heading', 'Turning Vision Into Sustainable Global Impact')); ?></h1>
      <p><?php echo esc_html(get_theme_mod('hero_text', 'We bridge financial integrity, technical excellence, and community empowerment to deliver measurable, life-changing development outcomes worldwide.')); ?></p>
      <div class='hero-buttons'>
        <a href='<?php echo esc_url(get_theme_mod('hero_button1_url', '#')); ?>' class='btn btn-primary'><?php echo esc_html(get_theme_mod('hero_button1_text', 'Explore Our Impact')); ?></a>
        <a href='<?php echo esc_url(get_theme_mod('hero_button2_url', '#')); ?>' class='btn btn-secondary'><?php echo esc_html(get_theme_mod('hero_button2_text', 'Partner With Us')); ?></a>
      </div>
    </div>
    <?php if ($show_globe) : ?>
    <div class='<?php echo esc_attr($globe_classes); ?>'<?php echo $globe_style; ?>></div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<?php if (get_theme_mod('show_metrics_section', true)) : ?>
<!-- Metrics Section -->
<section class='metrics'>
  <div class='metric'>
    <h2><?php echo esc_html(get_theme_mod('metric1_number', '$50B')); ?></h2>
    <p><?php echo esc_html(get_theme_mod('metric1_label', 'Projected Impact by 2030')); ?></p>
  </div>
  <div class='metric'>
    <h2><?php echo esc_html(get_theme_mod('metric2_number', '50+')); ?></h2>
    <p><?php echo esc_html(get_theme_mod('metric2_label', 'Partner Organizations')); ?></p>
  </div>
  <div class='metric'>
    <h2><?php echo esc_html(get_theme_mod('metric3_number', '15')); ?></h2>
    <p><?php echo esc_html(get_theme_mod('metric3_label', 'Countries Reached')); ?></p>
  </div>
  <div class='metric'>
    <h2><?php echo esc_html(get_theme_mod('metric4_number', '100%')); ?></h2>
    <p><?php echo esc_html(get_theme_mod('metric4_label', 'Transparent Governance')); ?></p>
  </div>
</section>
<?php endif; ?>

<?php if (get_theme_mod('show_mission_section', true)) : ?>
<!-- Mission and Vision Section -->
<section class='white'>
  <div class='section-head'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('mission_kicker', 'Our purpose')); ?></div>
      <h2><?php echo esc_html(get_theme_mod('mission_heading', 'Mission and Vision')); ?></h2>
    </div>
    <p><?php echo esc_html(get_theme_mod('mission_intro', 'OWI is positioned as a global social impact and development management organization that turns visionary community projects into sustainable, accountable outcomes.')); ?></p>
  </div>
  <div class='cards two'>
    <div class='card'>
      <div class='mini'><?php echo esc_html(get_theme_mod('mission_card_label', 'Our Mission')); ?></div>
      <h3><?php echo esc_html(get_theme_mod('mission_card_title', 'Transform vision into reality.')); ?></h3>
      <p><?php echo esc_html(get_theme_mod('mission_card_text', 'To transform visionary community projects into financially sound, community-driven realities — advancing sustainable development, climate resilience, and inclusive global growth.')); ?></p>
    </div>
    <div class='card'>
      <div class='mini'><?php echo esc_html(get_theme_mod('vision_card_label', 'Our Vision')); ?></div>
      <h3><?php echo esc_html(get_theme_mod('vision_card_title', 'Communities built to thrive.')); ?></h3>
      <p><?php echo esc_html(get_theme_mod('vision_card_text', 'A world where every community enjoys access to safe housing, quality healthcare, sustainable food systems, clean energy, and transparent governance — driven by accountable leadership and empowered local participation.')); ?></p>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_theme_mod('show_services_section', true)) : ?>
<!-- Services Section -->
<section class='soft-green'>
  <div class='section-head'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('services_kicker', 'What we do')); ?></div>
      <h2><?php echo esc_html(get_theme_mod('services_heading', 'End-to-end development excellence')); ?></h2>
    </div>
    <p><?php echo esc_html(get_theme_mod('services_intro', 'OWI manages high-impact programs through financial oversight, project execution, sustainability integration, and community engagement.')); ?></p>
  </div>
  <div class='cards'>
    <div class='card'>
      <div class='mini'><?php echo esc_html(get_theme_mod('service1_label', 'Service Pillar')); ?></div>
      <h3><?php echo esc_html(get_theme_mod('service1_title', 'Financial oversight')); ?></h3>
      <p><?php echo esc_html(get_theme_mod('service1_text', 'Transparent fund tracking, compliance controls, and investment accountability frameworks that protect mission and capital at every phase.')); ?></p>
    </div>
    <div class='card'>
      <div class='mini'><?php echo esc_html(get_theme_mod('service2_label', 'Service Pillar')); ?></div>
      <h3><?php echo esc_html(get_theme_mod('service2_title', 'Project management')); ?></h3>
      <p><?php echo esc_html(get_theme_mod('service2_text', 'Disciplined end-to-end oversight that aligns stakeholders, accelerates execution, and keeps transformative projects moving from concept to delivery.')); ?></p>
    </div>
    <div class='card'>
      <div class='mini'><?php echo esc_html(get_theme_mod('service3_label', 'Service Pillar')); ?></div>
      <h3><?php echo esc_html(get_theme_mod('service3_title', 'Community-driven delivery')); ?></h3>
      <p><?php echo esc_html(get_theme_mod('service3_text', 'Programs built around local participation, measurable outcomes, and SDG-aligned impact so communities remain central to long-term success.')); ?></p>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_theme_mod('show_pillars_section', true)) : ?>
<!-- Partnership Pillars Section -->
<section class='white'>
  <div class='section-head'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('pillars_kicker', 'Partnership framework')); ?></div>
      <h2><?php echo esc_html(get_theme_mod('pillars_heading', 'Our partnership model is built on four foundational pillars.')); ?></h2>
    </div>
    <p><?php echo esc_html(get_theme_mod('pillars_intro', 'On the homepage, this stays concise: enough to explain how OWI works, with the expanded methodology and focus sectors detailed on the About page.')); ?></p>
  </div>
  <div class='pillars'>
    <div class='pillar'>
      <div class='icon-shell'>
        <?php 
        $pillar1_icon = get_theme_mod('pillar1_icon');
        if ($pillar1_icon) : ?>
          <img src='<?php echo esc_url($pillar1_icon); ?>' alt='<?php echo esc_attr(get_theme_mod('pillar1_title', 'Alignment')); ?>'>
        <?php else : ?>
          <svg viewBox='0 0 64 64'><path d='M8 56h48 M12 56V36a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v20 M24 56V24a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v32 M36 56V12a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v44 M56 48l6 6'/><circle cx='50' cy='42' r='8'/></svg>
        <?php endif; ?>
      </div>
      <h4><?php echo esc_html(get_theme_mod('pillar1_title', 'Alignment')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('pillar1_text', 'We align sovereign priorities, community needs, funding structures, and implementation pathways from the start.')); ?></p>
    </div>
    <div class='pillar'>
      <div class='icon-shell'>
        <?php 
        $pillar2_icon = get_theme_mod('pillar2_icon');
        if ($pillar2_icon) : ?>
          <img src='<?php echo esc_url($pillar2_icon); ?>' alt='<?php echo esc_attr(get_theme_mod('pillar2_title', 'Execution platform capable of scale')); ?>'>
        <?php else : ?>
          <svg viewBox='0 0 64 64'><circle cx='32' cy='24' r='6'/><rect x='8' y='4' width='16' height='16' rx='1'/><rect x='40' y='4' width='16' height='16' rx='1'/><path d='M22 42a10 10 0 0 1 20 0 M12 8l8 8 M20 8l-8 8 M44 12l4 4 6-8 M26 36v-8a4 4 0 0 0-4-4h-2 M22 28l-4-4 4-4 M38 36v-8a4 4 0 0 1 4-4h2 M42 20l4 4-4 4'/></svg>
        <?php endif; ?>
      </div>
      <h4><?php echo esc_html(get_theme_mod('pillar2_title', 'Execution platform capable of scale')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('pillar2_text', 'Our platform combines project controls, compliance, reporting, and stakeholder coordination for disciplined delivery.')); ?></p>
    </div>
    <div class='pillar'>
      <div class='icon-shell'>
        <?php 
        $pillar3_icon = get_theme_mod('pillar3_icon');
        if ($pillar3_icon) : ?>
          <img src='<?php echo esc_url($pillar3_icon); ?>' alt='<?php echo esc_attr(get_theme_mod('pillar3_title', 'Capability, experience, track record & trust')); ?>'>
        <?php else : ?>
          <svg viewBox='0 0 64 64'><circle cx='32' cy='32' r='28'/><circle cx='32' cy='32' r='16'/><circle cx='32' cy='32' r='6'/><path d='M32 4v8 M32 52v8 M4 32h8 M52 32h8 M28 32l3 3 6-6'/></svg>
        <?php endif; ?>
      </div>
      <h4><?php echo esc_html(get_theme_mod('pillar3_title', 'Capability, experience, track record & trust')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('pillar3_text', 'We bring technical stewardship, institutional discipline, and trusted partnerships across complex multi-stakeholder environments.')); ?></p>
    </div>
    <div class='pillar'>
      <div class='icon-shell'>
        <?php 
        $pillar4_icon = get_theme_mod('pillar4_icon');
        if ($pillar4_icon) : ?>
          <img src='<?php echo esc_url($pillar4_icon); ?>' alt='<?php echo esc_attr(get_theme_mod('pillar4_title', 'Expert discipline within a strategic vertical')); ?>'>
        <?php else : ?>
          <svg viewBox='0 0 64 64'><path d='M16 16h32a8 8 0 0 1 0 16h-32a8 8 0 0 0 0 16h32 M14 16h4 M16 14l2 2-2 2 M45 48l2 2 4-4'/><circle cx='16' cy='16' r='6'/><circle cx='48' cy='48' r='6'/><circle cx='36' cy='16' r='2'/><circle cx='24' cy='32' r='2'/></svg>
        <?php endif; ?>
      </div>
      <h4><?php echo esc_html(get_theme_mod('pillar4_title', 'Expert discipline within a strategic vertical')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('pillar4_text', 'Sector-specific expertise enables strong planning, credible execution, and measurable outcomes within defined development priorities.')); ?></p>
    </div>
</div>
</section>
<?php endif; ?>

<?php if (get_theme_mod('show_news_section', true)) : ?>
<!-- News Section -->
<section class='soft-blue'>
  <div class='section-head'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('news_kicker', 'Latest news')); ?></div>
      <h2><?php echo esc_html(get_theme_mod('news_heading', 'Projects, partnerships, and insight')); ?></h2>
    </div>
    <p><?php echo esc_html(get_theme_mod('news_intro', 'Clean, image-led updates keep the homepage active while reinforcing credibility and momentum.')); ?></p>
  </div>
  <div class='news-grid'>
    <div class='arrow'>&laquo;</div>
    
    <?php
    // Query for news posts
    $news_args = array(
        'post_type'      => 'owi_news',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    $news_query = new WP_Query($news_args);
    
    if ($news_query->have_posts()) :
        $news_count = 0;
        while ($news_query->have_posts()) : $news_query->the_post();
            $news_count++;
            $news_tag = get_post_meta(get_the_ID(), 'news_tag', true);
            if (empty($news_tag)) {
                $news_tag = 'ANNOUNCEMENT';
            }
            ?>
            <div class='news-card'>
              <?php if (has_post_thumbnail()) : ?>
                <div class='news-image' style='background: linear-gradient(135deg, rgba(11, 31, 58, 0.15), rgba(11, 31, 58, 0.15)), url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'news-card')); ?>) center/cover;'>
                  <div class='tag'><?php echo esc_html(strtoupper($news_tag)); ?></div>
                </div>
              <?php else : ?>
                <div class='news-image alt<?php echo esc_attr($news_count); ?>'>
                  <div class='tag'><?php echo esc_html(strtoupper($news_tag)); ?></div>
                </div>
              <?php endif; ?>
              <div class='news-body'>
                <div class='date'><?php echo esc_html(get_the_date('F j, Y')); ?></div>
                <h3><?php the_title(); ?></h3>
                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20, '...')); ?></p>
              </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        // Fallback content if no news posts exist
        // Get customizer fallback images
        $news_img_1 = get_theme_mod('news_fallback_image_1', get_template_directory_uri() . '/assets/images/news-1.jpg');
        $news_img_2 = get_theme_mod('news_fallback_image_2', get_template_directory_uri() . '/assets/images/news-2.jpg');
        $news_img_3 = get_theme_mod('news_fallback_image_3', get_template_directory_uri() . '/assets/images/news-3.jpg');
        ?>
        <div class='news-card'>
          <div class='news-image' style='background: linear-gradient(135deg, rgba(11, 31, 58, 0.15), rgba(11, 31, 58, 0.15)), url(<?php echo esc_url($news_img_1); ?>) center/cover;'><div class='tag'>ANNOUNCEMENT</div></div>
          <div class='news-body'>
            <div class='date'>December 15, 2024</div>
            <h3>OWI Signs Strategic Partnership with African Development Bank</h3>
            <p>New collaboration framework to accelerate infrastructure development across Sub-Saharan Africa.</p>
          </div>
        </div>
        <div class='news-card'>
          <div class='news-image' style='background: linear-gradient(135deg, rgba(11, 31, 58, 0.15), rgba(11, 31, 58, 0.15)), url(<?php echo esc_url($news_img_2); ?>) center top/cover;'><div class='tag'>PROJECT UPDATE</div></div>
          <div class='news-body'>
            <div class='date'>December 15, 2024</div>
            <h3>Solar Initiative Phase II Reaches Milestone</h3>
            <p>200MW capacity now operational, providing clean energy to over 500,000 households.</p>
          </div>
        </div>
        <div class='news-card'>
          <div class='news-image' style='background: linear-gradient(135deg, rgba(11, 31, 58, 0.15), rgba(11, 31, 58, 0.15)), url(<?php echo esc_url($news_img_3); ?>) center top/cover;'><div class='tag'>INSIGHT</div></div>
          <div class='news-body'>
            <div class='date'>December 15, 2024</div>
            <h3>The Future of Sovereign Infrastructure Finance</h3>
            <p>Our leadership outlines emerging models for public-private collaboration in global development.</p>
          </div>
        </div>
        <?php
    endif;
    ?>
    
    <div class='arrow'>&raquo;</div>
  </div>
  <div class='dots'>
    <span class='active'></span>
    <span></span>
    <span></span>
  </div>
</section>
<?php endif; ?>

<?php
get_footer();
