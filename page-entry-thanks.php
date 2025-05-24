<?php
  get_header();

  $template_uri = get_template_directory_uri();
?>

<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['ENTRY']) ); 
?>

<main>

<section class="p-thanks c-entryOutlines">
  <div class="c-entryOutlines__container">
    <div class="p-thanks__textWrap c-entryOutlines__inner">
      <h1 class="c-subPageHeadingLevel2">送信ありがとうございました。</h1>
      <p class="p-thanks__text">3営業日以内に人事担当者より連絡させていただきます。</p>
    </div>
  </div>
</section>
</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>

