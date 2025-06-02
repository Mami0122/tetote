<?php
 get_header();
 $template_uri = get_template_directory_uri();
?>

<main>
<div class="p-frontHeroSection">
  <div id="js-frontHeroSwiper" class="p-frontHeroSwiper">
    <ul class="p-frontHeroSwiper__swiperWrapper swiper-wrapper">
  <?php
    if( have_rows('front_hero') ): 
      while( have_rows('front_hero') ): the_row(); 
      $front_hero_images = get_sub_field('front_hero_images');
      $front_hero_image_pc = $front_hero_images['hero_image_pc'];
      $front_hero_image_sp = $front_hero_images['hero_image_sp'];

  ?>
      <li class="p-frontHeroSwiper__swiperSlide swiper-slide">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo $front_hero_image_sp['url']; ?>">
          <source media="(min-width: 768px)" srcset="<?php echo $front_hero_image_pc['url']; ?>">
          <img class="p-frontHeroSwiper__Img" src="<?php echo $front_hero_image_pc['url']; ?>" alt="<?php echo $front_hero_image_pc['alt'] ? $front_hero_image_pc['alt'] : '';  ?>">
        </picture>
      </li>
  <?php
      endwhile;
    endif;
  ?>    
    </ul>
    <div class="p-frontHeroSwiper__textContainer">
      <h2 class="p-frontHeroSwiper__heading">become a <br class="only-pc">challenger.</h2>
      <p class="p-frontHeroSwiper__text">
        君の挑戦が、意思が、未来を変える
      </p>
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
  );

  $frontHero_query = new WP_Query($args);

  if( $frontHero_query->have_posts() ):
    while( $frontHero_query->have_posts() ):
      $frontHero_query->the_post();
?>
      <a class="p-frontHeroSwiper__newsLink" href="<?php the_permalink(); ?>" aria-label="このニュースの詳細ページへ移動する">
        <span class="p-frontHeroSwiper__newsHeading">news</span>
        <p class="p-frontHeroSwiper__newsTitle">
          <?php the_title(); ?>
          <span href="" class="p-frontHeroSwiper__viewMore">VIEW MORE</span>
        </p>
      </a>
<?php
    endwhile;
  endif;
  wp_reset_postdata();
?>
    </div><!-- /.p-frontHeroSwiper__textContainer -->
  </div><!-- /.p-frontHeroSwiper -->
</div>

<section class="p-frontLeadSection">
  <div class="c-sectionInner">
    <div id="js-frontLeadSwiper" class="p-frontLeadSection__swiper swiper">
      <h2 class="p-frontLeadSection__swiperText js-fadeIn js-fadeIn--up">
        <span class="p-frontLeadSection__swiperDividedText top">後悔しないキャリアを作る、</span>
        <span class="p-frontLeadSection__swiperDividedText bottom">それこそが、我々の使命だ</span>
      </h2>
      <ul class="p-frontLeadSection__swiperWrapper swiper-wrapper">
        <li class="p-frontLeadSection__swiperSlide swiper-slide">
          <img class="p-frontLeadSection__swiperImg" src="<?php echo $template_uri; ?>/images/front/front_lead_slider01.jpg" alt="パソコンに向かい、電話をしながら仕事中の男性">
        </li>
        <li class="p-frontLeadSection__swiperSlide swiper-slide">
          <img class="p-frontLeadSection__swiperImg" src="<?php echo $template_uri; ?>/images/front/front_lead_slider02.jpg" alt="パソコンに向かい仕事中の女性">
        </li>
        <li class="p-frontLeadSection__swiperSlide swiper-slide">
          <img class="p-frontLeadSection__swiperImg" src="<?php echo $template_uri; ?>/images/front/front_lead_slider03.jpg" alt="クライアントと話す女性">
        </li>
        <li class="p-frontLeadSection__swiperSlide swiper-slide">
          <img class="p-frontLeadSection__swiperImg" src="<?php echo $template_uri; ?>/images/front/front_lead_slider01.jpg" alt="パソコンに向かい、電話をしながら仕事中の男性">
        </li>
        <li class="p-frontLeadSection__swiperSlide swiper-slide">
          <img class="p-frontLeadSection__swiperImg" src="<?php echo $template_uri; ?>/images/front/front_lead_slider02.jpg" alt="パソコンに向かい仕事中の女性">
        </li>
        <li class="p-frontLeadSection__swiperSlide swiper-slide">
          <img class="p-frontLeadSection__swiperImg" src="<?php echo $template_uri; ?>/images/front/front_lead_slider03.jpg" alt="クライアントと話す女性">
        </li>
      </ul>
    </div><!-- /.p-frontLeadSection__swiper -->
    <p class="p-frontLeadSection__text">
      <span class="p-frontLeadSection__textTop js-fadeIn js-fadeIn--upSlow">
        「人手不足」<br>
        今の日本が抱えるこの社会課題に挑み、<br>
        企業と個人の可能性を最大限に引き出す。<br>
        それが私達の役目。
      </span>
      <span class="p-frontLeadSection__textBottom js-fadeIn js-fadeIn--upSlow">
        単につなぐだけじゃない。<br>
        「手と手」を取り合っていけるような、<br>
        持続可能な社会を、一緒に作りませんか？
      </span>
    </p>
    <div class="p-frontLeadSection__btnWrap js-fadeIn">
      <a class="p-frontLeadSection__btn c-textAndArrowBtn inline-flex" href="<?php echo esc_url( home_url('about') ); ?>" aria-label="TETOTEについてもっと見る">
        <span class="c-textAndArrowBtn__Text">VIEW MORE</span>
      </a>
    </div>
  </div><!-- /.c-sectionInner -->
</section>

<section class="p-frontMember">
  <div class="c-sectionInner">
    <h2 class="p-frontHeadingLevel2 js-fadeIn js-fadeIn--right">
      <span class="p-frontHeadingLevel2__textJp"><span class="p-frontHeadingLevel2__underlinedText">人</span>を知る</span>
      <span class="p-frontHeadingLevel2__textEn">MEMBER</span>
    </h2>
    <p class="p-frontMember__text js-fadeIn js-fadeIn--up">
      TETOTEの社員がどういった信念を持って働いているのか、<br>
      一日のスケジュールや仕事内容などを紹介します。
    </p>
    <div id="js-frontMemberSwiper" class="p-frontMember__swiper swiper">
      <ul class="p-frontMember__swiperWrapper swiper-wrapper">
      <?php
        $args2 = array(
          'post_type' => 'staff',
          'posts_per_page' => -1,
        );

        $staff_query = new WP_Query($args2);

        if( $staff_query->have_posts() ):

          $posts = $staff_query->posts;
          $total_posts = count($posts);

          // 最低表示枚数(autoplayを有効にするために最低でも1度に表示するスライド数の2倍のスライドが必要)
          $min_display_count = 10;

          // 表示用配列を作成
          $render_posts = [];

          if ($total_posts < $min_display_count && $total_posts > 0) {
            // 必要な倍数（繰り上げ）
            $multiplier = ceil($min_display_count / $total_posts);

            for ($i = 0; $i < $multiplier; $i++) {
              $render_posts = array_merge($render_posts, $posts);
            }
          } else {
            $render_posts = $posts;
          }

          foreach ($render_posts as $post):
            setup_postdata($post);

            $post_id = get_the_ID(); 
            $staff_message_line1 = get_field('staff_message_line1', $post_id);
            $staff_message_line2 = get_field('staff_message_line2', $post_id);
            $staff_role = get_field('staff_role', $post_id);
            $staff_entryYear = get_field('staff_entryYear', $post_id);
            $staff_name = get_field('staff_name', $post_id);
      ?>

        <li class="p-frontMember__swiperSlide c-staffCard swiper-slide">
          <a href="<?php the_permalink(); ?>" class="c-staffCard__link">
            <div class="c-staffCard__textWrap">
              <h3 class="c-staffCard__staffMessage">
                <span class="c-staffCard__dividedStaffMessage">
                  <?php echo $staff_message_line1; ?>
                </span>
                <span class="c-staffCard__dividedStaffMessage">
                <?php echo $staff_message_line2; ?>
                </span>
              </h3>
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
          endforeach;
        endif;
        wp_reset_postdata();
      ?>
      </ul>
    </div><!-- /.p-frontMember__swiper -->
    <div class=" p-frontMember__btnsContainer">
      <a class="p-frontMember__btn c-textAndArrowBtn inline-flex" href="<?php echo esc_url( home_url('staff') ); ?>" aria-label="社員についてページを見る">
        <span class="c-textAndArrowBtn__Text">VIEW MORE</span>
      </a>
      <div class="p-frontMember__swiperBtns">
        <button class="p-frontMember__swiperBtnPrev js-frontMember__swiperBtnPrev c-circleArrowBtn bgWhite" aria-label="社員説明のスライドを左にスライド"></button>
        <button class="p-frontMember__swiperBtnNext js-frontMember__swiperBtnNext c-circleArrowBtn bgWhite" aria-label="社員説明のスライドを右にスライド"></button>
      </div>
    </div>
  </div><!-- /.c-sectionInner -->
</section>

<section class="p-frontBenefit">
  <div class="c-sectionInner">
    <h2 class="p-frontHeadingLevel2 js-fadeIn js-fadeIn--up">
      <span class="p-frontHeadingLevel2__textJp"><span class="p-frontHeadingLevel2__underlinedText">制度・環境</span>を知る</span>
      <span class="p-frontHeadingLevel2__textEn">BENEFITS</span>
    </h2>
    <p class="p-frontBenefit__text js-fadeIn js-fadeIn--up">
      当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。
    </p>
    <ul class="p-frontBenefit__benefitList">

      <li class="p-frontBenefit__benefitListItem">
        <a href="<?php echo esc_url( home_url('career') ); ?>" class="p-frontBenefit__benefitListItemLink">
          <h2 class="p-frontBenefit__benefitTitle">研修制度とキャリアパス</h2>
          <span class="p-frontBenefit__benefitEnTitle">Traning And Career</span>
          <div class="p-frontBenefit__circleBtn c-circleArrowBtn bgBlack"></div>
        </a>
        <p class="p-frontBenefit__text">
          個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。
        </p>
      </li>

      <li class="p-frontBenefit__benefitListItem">
        <a href="<?php echo esc_url( home_url('benefits') ); ?>" class="p-frontBenefit__benefitListItemLink">
          <h2 class="p-frontBenefit__benefitTitle">福利厚生</h2>
          <span class="p-frontBenefit__benefitEnTitle">employee benefits</span>
          <div class="p-frontBenefit__circleBtn c-circleArrowBtn bgBlack"></div>
        </a>  
        <p class="p-frontBenefit__text">
          TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。
        </p>
      </li>
    </ul>
  </div><!-- /.c-sectionInner -->
</section>

  <section class="p-frontBlog">
    <div class="c-sectionInner">
      <div class=" p-frontBlog__topArea">
        <h2 class="p-frontHeadingLevel2 js-fadeIn js-fadeIn--right">
          <span class="p-frontHeadingLevel2__textJp">採用ブログ</span>
          <span class="p-frontHeadingLevel2__textEn">BLOG</span>
        </h2>
        <a class="p-frontBlog__moreBtnArea" href="<?php echo esc_url( home_url('/blog') ); ?>" aria-label="採用ブログをもっと見る">
          <span class="p-frontBlog__circleBtn d-ib c-circleArrowBtn bgWhite"></span>
          <span class="p-frontBlog__moreText">VIEW MORE</span>
        </a>
      </div>
      <p class="p-frontBlog__text js-fadeIn js-fadeIn--up">
        採用情報やイベント情報、社員の紹介など、<br>
        日々の現場の様子をご紹介します。
      </p>
      <ul class="p-frontBlog__blogList c-blogList">
<?php
    $args3 = array(
      'post_type' => 'post',
      'posts_per_page' => 4,
    );

    $frontBlog_query = new WP_Query($args3);

    if( $frontBlog_query->have_posts() ):
      while( $frontBlog_query->have_posts() ):
        $frontBlog_query->the_post();

        $blog_thumbnail_id = get_post_thumbnail_id($post->id);
        $blog_thumbnail_alt = get_post_meta ( $blog_thumbnail_id, '_wp_attachment_image_alt', true );
        $blog_cats = get_the_category();
        $blog_cat_name = '';

        foreach($blog_cats as $blog_cat){
          if($blog_cat !== 'uncategorized'){
            $blog_cat_name = $blog_cat->name;
          }
        }

?>
        <li class=" c-blogCard">
          <a href="<?php the_permalink(); ?>" class="c-blogCard__link">
            <p class="c-blogCard__thumb js-blogCard__thumb">
              <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $blog_thumbnail_alt ?: ''; ?>" >
            </p>
            <div class="c-blogCard__body">
              <span class="c-blogCard__cat"><?php echo $blog_cat_name; ?></span>
              <h3 class="c-blogCard__title"><?php the_title(); ?></h3>
              <time class="c-blogCard__date" datetime=""><?php the_time('Y.m.d'); ?></time>
            </div>
          </a>
        </li>
<?php
      endwhile;
    endif;
    wp_reset_postdata();
?>
      </ul>
    </div><!-- /.c-sectionInner -->
  </section>

  <section class="p-frontRecruit">
    <div class=" c-sectionInner">
      <h2 class="p-frontHeadingLevel2 js-fadeIn js-fadeIn--up">
        <span class="p-frontHeadingLevel2__textJp">採用情報</span>
        <span class="p-frontHeadingLevel2__textEn">RECRUITMENT</span>
      </h2>
      <p class="p-frontRecruit__text js-fadeIn js-fadeIn--up">
        募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。
      </p>
      <div class="p-frontRecruit__btnsWrap">
        <a class="p-frontRecruit__btn c-textAndArrowBtn no-border" href="<?php echo esc_url( home_url('/details') ); ?>">募集要項</a>
        <a class="p-frontRecruit__btn c-textAndArrowBtn no-border" href="<?php echo esc_url( home_url('/faq') ); ?>">よくある質問</a>
        <a class="p-frontRecruit__btn c-textAndArrowBtn no-border" href="<?php echo esc_url( home_url('/about#overview') ); ?>">会社概要</a>
      </div>
    </div>
  </section>
</main>
<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>
