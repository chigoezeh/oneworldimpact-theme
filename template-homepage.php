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
?>

<!-- Hero Section -->
<section class='hero'>
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
    <div class='globe-panel'></div>
  </div>
</section>

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
        <svg viewBox='0 0 64 64'><path d='M12 18h30c6 0 10 4 10 10s-4 10-10 10H22c-6 0-10 4-10 10s4 10 10 10h26'/><circle cx='50' cy='28' r='4'/><circle cx='14' cy='48' r='4'/><path d='M16 12h12m0 0-5-5m5 5-5 5'/><circle cx='46' cy='50' r='8'/><path d='m42 50 3 3 5-6'/></svg>
      </div>
      <h4><?php echo esc_html(get_theme_mod('pillar1_title', 'Alignment')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('pillar1_text', 'We align sovereign priorities, community needs, funding structures, and implementation pathways from the start.')); ?></p>
    </div>
    <div class='pillar'>
      <div class='icon-shell'>
        <svg viewBox='0 0 64 64'><circle cx='32' cy='32' r='26'/><circle cx='32' cy='32' r='12'/><path d='M32 6v10M32 48v10M6 32h10M48 32h10'/><path d='m27 32 4 4 8-9'/></svg>
      </div>
      <h4><?php echo esc_html(get_theme_mod('pillar2_title', 'Execution platform capable of scale')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('pillar2_text', 'Our platform combines project controls, compliance, reporting, and stakeholder coordination for disciplined delivery.')); ?></p>
    </div>
    <div class='pillar'>
      <div class='icon-shell'>
        <svg viewBox='0 0 64 64'><rect x='10' y='22' width='44' height='24' rx='4'/><path d='M16 40 28 18M48 40 36 18M20 32h24'/><circle cx='32' cy='14' r='5'/></svg>
      </div>
      <h4><?php echo esc_html(get_theme_mod('pillar3_title', 'Capability, experience, track record & trust')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('pillar3_text', 'We bring technical stewardship, institutional discipline, and trusted partnerships across complex multi-stakeholder environments.')); ?></p>
    </div>
    <div class='pillar'>
      <div class='icon-shell'>
        <svg viewBox='0 0 64 64'><path d='M18 50V34l9-7 8 7 14-10v14'/><path d='M49 14h9v12'/><path d='M14 54h36'/><circle cx='22' cy='17' r='4'/></svg>
      </div>
      <h4><?php echo esc_html(get_theme_mod('pillar4_title', 'Expert discipline within a strategic vertical')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('pillar4_text', 'Sector-specific expertise enables strong planning, credible execution, and measurable outcomes within defined development priorities.')); ?></p>
    </div>
  </div>
</section>

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
        ?>
        <div class='news-card'>
          <div class='news-image alt1'><div class='tag'>ANNOUNCEMENT</div></div>
          <div class='news-body'>
            <div class='date'>December 15, 2024</div>
            <h3>OWI Signs Strategic Partnership with African Development Bank</h3>
            <p>New collaboration framework to accelerate infrastructure development across Sub-Saharan Africa.</p>
          </div>
        </div>
        <div class='news-card'>
          <div class='news-image alt2'><div class='tag'>PROJECT UPDATE</div></div>
          <div class='news-body'>
            <div class='date'>December 15, 2024</div>
            <h3>Solar Initiative Phase II Reaches Milestone</h3>
            <p>200MW capacity now operational, providing clean energy to over 500,000 households.</p>
          </div>
        </div>
        <div class='news-card'>
          <div class='news-image alt3'><div class='tag'>INSIGHT</div></div>
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

<?php
get_footer();
