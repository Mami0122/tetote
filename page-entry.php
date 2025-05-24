<?php
  get_header();
  $template_uri = get_template_directory_uri();
?>

<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['entry']) ); 
?>

<main>
<section class="p-entryForm c-entryOutlines">
  <div class="c-entryOutlines__container">
    <div class="c-entryOutlines__inner">

      <div class="p-entryForm__introContainer">
        <h1 class="p-entryForm__heading">
          <span class="p-entryForm__headingEn">entry form</span>
          <span class="p-entryForm__headingJa"><span class="color-accentDark">新卒・中途採用</span><br class="only-sp">エントリーフォーム</span>
        </h1>
        <p class="p-entryForm__introText">
          当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。<br>
          <span class="color-accentDark">※</span>は必須項目になります。
        </p>
      </div>
      <div class="p-entryForm__formWrap">
            <?php
              if( have_posts() ):
                while( have_posts() ):the_post();

                the_content();

                endwhile;
              endif;
            ?>
      </div>
    </div>
  </div>
</section>
</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>

