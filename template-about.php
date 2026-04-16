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

<!-- About Hero Section -->
<section class='about-hero'>
  <div class='about-split'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('about_hero_kicker', 'About OWI')); ?></div>
      <h2 style='font-size:56px;line-height:1.03;margin:0 0 18px'><?php echo esc_html(get_theme_mod('about_hero_heading', 'Bridging Vision and Execution for Global Good')); ?></h2>
      <p style='font-size:19px;color:var(--ink);max-width:720px'><?php echo esc_html(get_theme_mod('about_hero_text1', 'Our World Impact (OWI) is an international social impact and development management organization committed to turning visionary community projects into sustainable, accountable, and life-changing realities.')); ?></p>
      <p style='font-size:17px;color:var(--ink);max-width:720px'><?php echo esc_html(get_theme_mod('about_hero_text2', 'We operate at the intersection of financial integrity, technical execution, and community empowerment, ensuring that every project we manage delivers measurable impact and adheres to high global accountability standards.')); ?></p>
    </div>
    <div class='about-visual'></div>
  </div>
</section>

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

<!-- Leadership Section -->
<section class='soft-blue'>
  <div class='section-head'>
    <div>
      <div class='kicker'><?php echo esc_html(get_theme_mod('leadership_kicker', 'Executive leadership')); ?></div>
      <h2><?php echo esc_html(get_theme_mod('leadership_heading', 'Leaders guiding a global platform')); ?></h2>
    </div>
    <p><?php echo esc_html(get_theme_mod('leadership_intro', 'Leadership profiles remain concise here so the visual balance stays polished while still giving visitors a clear sense of the team behind OWI.')); ?></p>
  </div>
  <div class='leadership'>
    <div class='leader'>
      <?php 
      $leader1_image = get_theme_mod('leader1_image');
      if ($leader1_image) : ?>
        <div class='leader-photo' style='background-image: url(<?php echo esc_url($leader1_image); ?>); background-position: center top; background-size: cover;'></div>
      <?php else : ?>
        <div class='leader-photo'></div>
      <?php endif; ?>
      <div class='leader-body'>
        <h3><?php echo esc_html(get_theme_mod('leader1_name', 'Brian Baughman')); ?></h3>
        <div class='role'><?php echo esc_html(get_theme_mod('leader1_role', 'Chief Executive Officer')); ?></div>
        <p><?php echo esc_html(get_theme_mod('leader1_bio', 'A seasoned operator with deep experience across construction, logistics, and execution systems, Brian leads OWI\'s platform for disciplined global project delivery.')); ?></p>
      </div>
    </div>
    <div class='leader'>
      <?php 
      $leader2_image = get_theme_mod('leader2_image');
      if ($leader2_image) : ?>
        <div class='leader-photo' style='background-image: url(<?php echo esc_url($leader2_image); ?>); background-position: center top; background-size: cover;'></div>
      <?php else : ?>
        <div class='leader-photo'></div>
      <?php endif; ?>
      <div class='leader-body'>
        <h3><?php echo esc_html(get_theme_mod('leader2_name', 'Rabiic Gedi')); ?></h3>
        <div class='role'><?php echo esc_html(get_theme_mod('leader2_role', 'Chief International Officer')); ?></div>
        <p><?php echo esc_html(get_theme_mod('leader2_bio', 'Rabiic advances international partnerships, infrastructure conversations, and institution-facing initiatives that connect capital, community needs, and implementation strategy.')); ?></p>
      </div>
    </div>
    <div class='leader'>
      <?php 
      $leader3_image = get_theme_mod('leader3_image');
      if ($leader3_image) : ?>
        <div class='leader-photo' style='background-image: url(<?php echo esc_url($leader3_image); ?>); background-position: center top; background-size: cover;'></div>
      <?php else : ?>
        <div class='leader-photo'></div>
      <?php endif; ?>
      <div class='leader-body'>
        <h3><?php echo esc_html(get_theme_mod('leader3_name', 'Joe Cota')); ?></h3>
        <div class='role'><?php echo esc_html(get_theme_mod('leader3_role', 'Chief Strategy Officer')); ?></div>
        <p><?php echo esc_html(get_theme_mod('leader3_bio', 'Joe supports long-range strategic development, helping shape opportunity pipelines, partner relationships, and practical frameworks for growth.')); ?></p>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
