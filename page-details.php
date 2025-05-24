<?php
  get_header();

  global $wp_query;
  $post_id = $wp_query->get_queried_object_id();
  $template_uri = get_template_directory_uri();
?>

<section class="c-subPageHero" style="background-image: url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>);" >
  <div class="c-subPageHero__inner">
    <header header class="c-subPageHeader">
      <h1 class="c-subPageHeader__heading">
        <span class="c-subPageHeader__headingEn">DETAILS</span>
        <span class="c-subPageHeader__headingJp">募集要項</span>
      </h1>
      <p class="c-subPageHeader__text">TETOTEは幅広く仲間を募集しています。</p>
    </header>
  </div>
</section>

<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['DETAILS']) ); 
?>

<main>
<section class="p-detailsBtnsSection">
  <div class="c-sectionInner details">
    <h2 class="c-subPageHeadingLevel2">あなたが輝ける場所が、ここにはある</h2>
    <p class="p-detailsBtnsSection__text">TETOTEでは、コンサルタントを中心に、様々な職種を募集しています。</p>
    <ul class="p-detailsBtnsSection__btnsList">
      <li class="p-detailsBtnsSection__btnsListItem">
        <a href="#detailsTableConsaltant" class="p-detailsBtnsSection__btnsListItemLink c-roundedBtn bgMainColor">コンサルタント</a>
      </li>
      <li class="p-detailsBtnsSection__btnsListItem">
        <a href="#detailsTableSales" class="p-detailsBtnsSection__btnsListItemLink c-roundedBtn bgMainColor">ソリューション営業</a>
      </li>
      <li class="p-detailsBtnsSection__btnsListItem">
        <a href="#detailsTableSE" class="p-detailsBtnsSection__btnsListItemLink c-roundedBtn bgMainColor">システムエンジニア</a>
      </li>
    </ul>
  </div>
</section>

<section id="detailsTableConsaltant" class="p-detailsTableSection">
  <div class="c-sectionInner details">
    <h2 class="c-subPageHeadingLevel2">募集要項-コンサルタント</h2>
    <table class="p-detailsTableSection__table c-tableBase">
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">職種名</th>
        <td class="c-tableBase__td">コンサルタント</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">雇用形態</th>
        <td class="c-tableBase__td">正社員</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">業務内容</th>
        <td class="c-tableBase__td">クライアントの課題解決のためのコンサルティング業務</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">就業時間</th>
        <td class="c-tableBase__td">9:00～18:00（フレックスタイム制）</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">給与</th>
        <td class="c-tableBase__td">年収500万円～（経験・能力による）</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">勤務地</th>
        <td class="c-tableBase__td">東京、大阪、名古屋</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">転勤の有無</th>
        <td class="c-tableBase__td">あり</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">休日休暇</th>
        <td class="c-tableBase__td">土日祝日、年末年始、夏季休暇</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">選考について</th>
        <td class="c-tableBase__td">書類選考、面接</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">採用人数</th>
        <td class="c-tableBase__td">若干名</td>
      </tr>
    </table>
  </div>
</section>

<section id="detailsTableSales" class="p-detailsTableSection">
  <div class="c-sectionInner details">
    <h2 class="c-subPageHeadingLevel2">募集要項-ソリューション営業</h2>
    <table class="p-detailsTableSection__table c-tableBase">
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">職種名</th>
        <td class="c-tableBase__td">ソリューション営業</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">雇用形態</th>
        <td class="c-tableBase__td">正社員</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">業務内容</th>
        <td class="c-tableBase__td">顧客の課題解決のためのソリューション提案、販売</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">就業時間</th>
        <td class="c-tableBase__td">9:00～18:00（フレックスタイム制）</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">給与</th>
        <td class="c-tableBase__td">年収500万円～（経験・能力による）</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">勤務地</th>
        <td class="c-tableBase__td">東京、大阪、名古屋</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">転勤の有無</th>
        <td class="c-tableBase__td">あり</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">休日休暇</th>
        <td class="c-tableBase__td">土日祝日、年末年始、夏季休暇</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">選考について</th>
        <td class="c-tableBase__td">書類選考、面接</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">採用人数</th>
        <td class="c-tableBase__td">若干名</td>
      </tr>
    </table>
  </div>
</section>

<section id="detailsTableSE" class="p-detailsTableSection">
  <div class="c-sectionInner details">
    <h2 class="c-subPageHeadingLevel2">募集要項-システムエンジニア</h2>
    <table class="p-detailsTableSection__table c-tableBase">
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">職種名</th>
        <td class="c-tableBase__td">システムエンジニア</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">雇用形態</th>
        <td class="c-tableBase__td">正社員</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">業務内容</th>
        <td class="c-tableBase__td">システム開発、インフラ構築、データ分析など</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">就業時間</th>
        <td class="c-tableBase__td">9:00～18:00（フレックスタイム制）</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">給与</th>
        <td class="c-tableBase__td">年収500万円～（経験・能力による）</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">勤務地</th>
        <td class="c-tableBase__td">東京、大阪、名古屋</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">転勤の有無</th>
        <td class="c-tableBase__td">あり</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">休日休暇</th>
        <td class="c-tableBase__td">土日祝日、年末年始、夏季休暇</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">選考について</th>
        <td class="c-tableBase__td">書類選考、面接</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">採用人数</th>
        <td class="c-tableBase__td">若干名</td>
      </tr>
    </table>
  </div>
</section>


</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>

