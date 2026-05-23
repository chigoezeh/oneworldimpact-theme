<?php
/**
 * Template Name: About Us
 * 
 * The About page template for One World Impact theme
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */

get_header();
?>

<?php if (get_theme_mod('show_about_hero_section', true)) : ?>
<!-- About Hero Section -->
<section class='about-hero'>
  <div class='about-split'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('about_hero_kicker', 'About OWI')); ?></div>
      <h2 style='font-size:56px;line-height:1.03;margin:0 0 18px'><?php echo esc_html(get_theme_mod('about_hero_heading', 'Bridging Vision and Execution for Global Good')); ?></h2>
      <p style='font-size:19px;color:var(--ink);max-width:720px'><?php echo esc_html(get_theme_mod('about_hero_text1', 'One World Impact (OWI) is an international social impact and development management organization committed to turning visionary community projects into sustainable, accountable, and life-changing realities.')); ?></p>
      <p style='font-size:17px;color:var(--ink);max-width:720px'><?php echo esc_html(get_theme_mod('about_hero_text2', 'We operate at the intersection of financial integrity, technical execution, and community empowerment, ensuring that every project we manage delivers measurable impact and adheres to high global accountability standards.')); ?></p>
    </div>
    <?php 
    $about_visual = get_theme_mod('about_visual_image', get_template_directory_uri() . '/assets/images/about-visual.jpg');
    ?>
    <div class='about-visual' style='background: linear-gradient(90deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.01)), url(<?php echo esc_url($about_visual); ?>) center top/cover;'></div>
  </div>
</section>
<?php endif; ?>

<?php if (get_theme_mod('show_focus_section', true)) : ?>
<!-- Strategic Focus Areas Section -->
<section class='white'>
  <div class='section-head'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('focus_kicker', 'Strategic focus areas')); ?></div>
      <h2><?php echo esc_html(get_theme_mod('focus_heading', 'Driving transformation where it matters most')); ?></h2>
    </div>
    <p><?php echo esc_html(get_theme_mod('focus_intro', 'OWI partners with governments, donors, and investors to advance projects across sectors where durable infrastructure and community-centered development intersect.')); ?></p>
  </div>
  <div class='focus-grid'>
    <div class='focus-card'>
      <div class='num'><?php echo esc_html(get_theme_mod('focus1_num', '01')); ?></div>
      <h4><?php echo esc_html(get_theme_mod('focus1_title', 'Mining')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('focus1_text', 'Responsible extraction models that prioritize transparent governance, environmental stewardship, and local benefit-sharing.')); ?></p>
    </div>
    <div class='focus-card'>
      <div class='num'><?php echo esc_html(get_theme_mod('focus2_num', '02')); ?></div>
      <h4><?php echo esc_html(get_theme_mod('focus2_title', 'Fishing & Farming')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('focus2_text', 'Integrated aquaculture and regenerative agriculture programs designed to strengthen livelihoods and long-term food security.')); ?></p>
    </div>
    <div class='focus-card'>
      <div class='num'><?php echo esc_html(get_theme_mod('focus3_num', '03')); ?></div>
      <h4><?php echo esc_html(get_theme_mod('focus3_title', '3D Housing')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('focus3_text', 'Scalable affordable housing solutions using rapid, resilient construction methods to serve growing communities.')); ?></p>
    </div>
    <div class='focus-card'>
      <div class='num'><?php echo esc_html(get_theme_mod('focus4_num', '04')); ?></div>
      <h4><?php echo esc_html(get_theme_mod('focus4_title', 'Renewable Energy')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('focus4_text', 'Solar, wind, and hybrid infrastructure that expands access to reliable power while reducing long-term environmental risk.')); ?></p>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_theme_mod('show_timeline_section', true)) : ?>
<!-- Partnership Framework Timeline Section -->
<section class='soft-green'>
  <div class='section-head'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('timeline_kicker', 'Partnership framework')); ?></div>
      <h2><?php echo esc_html(get_theme_mod('timeline_heading', 'How we move ideas into infrastructure.')); ?></h2>
    </div>
    <p><?php echo esc_html(get_theme_mod('timeline_intro', 'The homepage shows the four pillars at a glance. The About page expands the operating model so partners can understand how OWI works in practice.')); ?></p>
  </div>
  <div class='timeline'>
    <div class='step'>
      <div class='step-badge'><?php echo esc_html(get_theme_mod('step1_num', '1')); ?></div>
      <h4><?php echo esc_html(get_theme_mod('step1_title', 'Align')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('step1_text', 'We bring together priorities, financing logic, community considerations, and delivery objectives into one executable roadmap.')); ?></p>
    </div>
    <div class='step'>
      <div class='step-badge'><?php echo esc_html(get_theme_mod('step2_num', '2')); ?></div>
      <h4><?php echo esc_html(get_theme_mod('step2_title', 'Pilot')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('step2_text', 'Test-ready initiatives are shaped into credible first implementations that validate fit, governance, and operating assumptions.')); ?></p>
    </div>
    <div class='step'>
      <div class='step-badge'><?php echo esc_html(get_theme_mod('step3_num', '3')); ?></div>
      <h4><?php echo esc_html(get_theme_mod('step3_title', 'Integrate')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('step3_text', 'Systems, partners, controls, and reporting are integrated so projects can scale with accountability and technical consistency.')); ?></p>
    </div>
    <div class='step'>
      <div class='step-badge'><?php echo esc_html(get_theme_mod('step4_num', '4')); ?></div>
      <h4><?php echo esc_html(get_theme_mod('step4_title', 'Deploy')); ?></h4>
      <p><?php echo esc_html(get_theme_mod('step4_text', 'Programs are launched with structured execution oversight, stakeholder coordination, and measurable impact reporting.')); ?></p>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_theme_mod('show_leadership_section', true)) : ?>
<!-- Leadership Section -->
<section class='soft-blue'>
  <div class='section-head'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('leadership_kicker', 'Executive leadership')); ?></div>
      <h2><?php echo esc_html(get_theme_mod('leadership_heading', 'Leaders guiding a global platform')); ?></h2>
    </div>
    <p><?php echo esc_html(get_theme_mod('leadership_intro', 'Leadership profiles remain concise here so the visual balance stays polished while still giving visitors a clear sense of the team behind OWI.')); ?></p>
  </div>
  
  <?php
  // Query team members
  $team_args = array(
      'post_type'      => 'owi_team',
      'posts_per_page' => -1,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
  );
  $team_query = new WP_Query($team_args);
  
  if ($team_query->have_posts()) : ?>
    <div class='team-carousel-container'>
      <button class='team-arrow team-arrow-left' aria-label='Previous team members'>
        <svg width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
          <polyline points='15 18 9 12 15 6'></polyline>
        </svg>
      </button>
      
      <div class='team-carousel-wrapper'>
        <div class='leadership team-carousel'>
          <?php while ($team_query->have_posts()) : $team_query->the_post(); 
            $role = get_post_meta(get_the_ID(), '_team_member_role', true);
          ?>
            <div class='leader team-slide'>
              <div class='leader-photo'>
                <?php if (has_post_thumbnail()) : ?>
                  <img src='<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'leader-photo')); ?>' alt='<?php echo esc_attr(get_the_title()); ?>'>
                <?php endif; ?>
              </div>
              <div class='leader-body'>
                <h3><?php the_title(); ?></h3>
                <?php if ($role) : ?>
                  <div class='role'><?php echo esc_html($role); ?></div>
                <?php endif; ?>
                <?php if (get_the_content()) : ?>
                  <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      
      <button class='team-arrow team-arrow-right' aria-label='Next team members'>
        <svg width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
          <polyline points='9 18 15 12 9 6'></polyline>
        </svg>
      </button>
    </div>
  <?php else : ?>
    <!-- Fallback content when no team members exist -->
    <p style='text-align: center; color: var(--ink); padding: 40px;'>
      <?php _e('No team members have been added yet. Add team members via the Team menu in the admin area.', 'oneworldimpact'); ?>
    </p>
  <?php endif; 
  wp_reset_postdata();
  ?>
</section>
<?php endif; ?>

<?php
get_footer();
