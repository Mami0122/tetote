<?php
 get_header();
 $template_uri = get_template_directory_uri();
?>

<section class="p-staffArchiveHero c-subPageHero">
  <div class="c-subPageHero__inner">
    <header header class="c-subPageHeader">
      <h1 class="c-subPageHeader__heading">
        <span class="c-subPageHeader__headingEn">STAFF</span>
        <span class="c-subPageHeader__headingJp">社員について</span>
      </h1>
      <p class="c-subPageHeader__text">弊社社員のリアルな声を紹介しています。</p>
    </header>
  </div>
</section>

<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['STAFF']) ); 
?>

<main>
<section class="p-staffArchive">
  <div class="c-sectionInner staffArchive">
    <ul class="c-staffCardList">
<?php
    if( have_posts() ):
      while( have_posts() ):the_post();

      $post_id = get_the_ID(); 
      $staff_message_line1 = get_field('staff_message_line1', $post_id);
      $staff_message_line2 = get_field('staff_message_line2', $post_id);
      $staff_role = get_field('staff_role', $post_id);
      $staff_entryYear = get_field('staff_entryYear', $post_id);
      $staff_name = get_field('staff_name', $post_id);
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
              <span class="c-staffCard__staffName"><?php echo $staff_name;  ?></span>
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
  </div><!-- /.c-sectionInner -->
</section>
</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>
