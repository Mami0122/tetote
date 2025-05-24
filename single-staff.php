<?php
  get_header();
  $template_uri = get_template_directory_uri();

  if(have_posts()):
    while(have_posts()):
      the_post();

      $staff_message_line1 = get_field('staff_message_line1', $post->ID);
      $staff_message_line2 = get_field('staff_message_line2', $post->ID);
      $staff_role = get_field('staff_role', $post->ID);
      $staff_entryYear = get_field('staff_entryYear', $post->ID);
      $staff_name = get_field('staff_name', $post->ID);
      $staff_profile = get_field('staff_profile', $post->ID);
?>

<main>
<section class="p-staffHero">
  <div class="p-staffInner c-sectionInner">

    <div class="p-staffHero__contentWrap">
      <div class="p-staffHero__textWrap">

        <h1 class="p-staffHero__heading">
          <span class="p-staffHero__headingTop"><?php echo $staff_message_line1; ?></span>
          <span class="p-staffHero__headingBottom"><?php echo $staff_message_line2; ?></span>
        </h1>

        <div class="p-staffHero__staffRole"><?php echo $staff_role; ?></div>

        <div class="p-staffHero__nameEntryYearWrap">
          <h2 class="p-staffHero__staffName"><?php echo $staff_name; ?></h2>
          <span class="p-staffHero__staffEntry"><?php echo $staff_entryYear; ?></span>
        </div>

        <p class="p-staffHero__desc"><?php echo $staff_profile; ?></p>
      </div>

      <div class="p-staffHero__staffImg">
        <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php echo "TETOTE株式会社 ${staff_role}の${staff_name}"; ?>">
      </div>
    </div>
  </div>
</section>

<?php
  $page_slug = $post->post_name;
  get_template_part('template-parts/breadcrumb', null, array('text' => ['STAFF', strtoupper($page_slug)], 'slug' => 'staff') ); 
?>

<section class="p-staffInterview">
  <div class="p-staffInner c-sectionInner">
    <div class="p-staffInterview__container">

      <div class="p-staffInterview__wpContent"><?php the_content(); ?></div>
<?php
    endwhile;
  endif;
?>
      <aside class="p-staffInterview__aside">
        <nav class="p-staffInterview__nav">
          <ul class="p-staffInterview__navList" aria-labelledby="staffInterview__navTitle">
            <h2 id="staffInterview__navTitle" class="p-staffInterview__navTitle">目次</h2>
            <li class="p-staffInterview__navListItem active">
              <a href="#jobDescription" class="p-staffInterview__navListItemLink js-staffTocLink">普段の業務内容について</a>
            </li>
            <li class="p-staffInterview__navListItem">
              <a href="#studentTimeEffort" class="p-staffInterview__navListItemLink js-staffTocLink">学生時代に力を入れたことは？</a>
            </li>
            <li class="p-staffInterview__navListItem">
              <a href="#applicationReason" class="p-staffInterview__navListItemLink js-staffTocLink">TETOTEを志望した理由は？</a>
            </li>
            <li class="p-staffInterview__navListItem">
              <a href="#rewardingMoment" class="p-staffInterview__navListItemLink js-staffTocLink">やりがいを感じる瞬間は？</a>
            </li>
            <li class="p-staffInterview__navListItem">
              <a href="#peopleToWorkWith" class="p-staffInterview__navListItemLink js-staffTocLink">どんな人と一緒に働きたい？</a>
            </li>
            <li class="p-staffInterview__navListItem">
              <a href="#messageToApplicant" class="p-staffInterview__navListItemLink js-staffTocLink">応募者へのメッセージ</a>
            </li>
          </ul>
        </nav>
      </aside>

    </div><!-- /.p-staffInterview__container -->
  </div><!-- /c-sectionInner -->
</section><!-- /.p-staffInterview -->

<section class="p-staffOtherStaffs">
  <div class="p-staffInner c-sectionInner">
    <h2 class="c-subPageHeadingLevel2 ta-c">その他のメンバー</h2>
    <ul class="p-staffOtherStaffs__staffCardList c-staffCardList">

<?php
  $current_post_id = get_the_ID();
  $args = array(
      'post_type'      => 'staff', 
      'posts_per_page' => 3,
      'orderby'        => 'rand',
      'post__not_in'   => array($current_post_id), 
  );

  $staff_query = new WP_Query($args);

  if ($staff_query->have_posts()) : 
    while ($staff_query->have_posts()) : 
      $staff_query->the_post();

      $staff_message_line1 = get_field('staff_message_line1', $post->id);
      $staff_message_line2 = get_field('staff_message_line2', $post->id);
      $staff_role = get_field('staff_role', $post->id);
      $staff_entryYear = get_field('staff_entryYear', $post->id);
      $staff_name = get_field('staff_name', $post->id);
?>
      <li class="c-staffCard">
        <a href="<?php the_permalink(); ?>" class="c-staffCard__link">
          <div class="c-staffCard__textWrap">
            <h2 class="c-staffCard__staffMessage">
              <span class="c-staffCard__dividedStaffMessage">
                <?php echo $staff_message_line1; ?>
              </span>
              <span class="c-staffCard__dividedStaffMessage">
                <?php echo $staff_message_line2; ?>
              </span>
            </h2>
            <p class="c-staffCard__staffInfo">
              <span class="c-staffCard__staffRole"><?php echo $staff_role . "\t\t" . $staff_entryYear; ?></span>
              <span class="c-staffCard__staffName"><?php echo $staff_name; ?></span>
            </p>
          </div>
          <div class="c-staffCard__staffImg" >
            <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo "TETOTE株式会社 ${staff_role}の${staff_name}"; ?>">
          </div>
        </a>
      </li>
<?php
    endwhile;
  endif;
?>
    </ul>
  </div>
</section>
</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>



