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
        <span class="c-subPageHeader__headingEn">BENEFITS</span>
        <span class="c-subPageHeader__headingJp">福利厚生について</span>
      </h1>
      <p class="c-subPageHeader__text">充実した福利厚生制度を設けています。</p>
    </header>
  </div>
</section>

<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['BENEFITS']) ); 
?>

<main>
  <section class="p-benefitDetails">
    <div class="c-sectionInner benefit">
      <h2 class="c-subPageHeadingLevel2">各種制度</h2>
      <table class="p-benefitDetails__table c-tableBase">
        <tr class="c-tableBase__tr">
          <td class="c-tableBase__th">手当</td>
          <td class="c-tableBase__td">
            <ul class="c-tableBase__listInTable">
              <li class="c-tableBase__listItemInTable">通勤手当（上限月5万円）</li>
              <li class="c-tableBase__listItemInTable">時間外割増手当</li>
              <li class="c-tableBase__listItemInTable">役職手当</li>
              <li class="c-tableBase__listItemInTable">退職金</li>
            </ul>
          </td>
        </tr>
        <tr class="c-tableBase__tr">
          <th class="c-tableBase__th">制度</th>
          <td class="c-tableBase__td">財形貯蓄</td>
        </tr>
        <tr class="c-tableBase__tr">
          <th class="c-tableBase__th">保険</th>
          <td class="c-tableBase__td">社会保険完備</td>
        </tr>
        <tr class="c-tableBase__tr">
          <td class="c-tableBase__th">施設</td>
          <td class="c-tableBase__td">
            <ul class="c-tableBase__listInTable">
              <li class="c-tableBase__listItemInTable">社員向けジム</li>
              <li class="c-tableBase__listItemInTable">社内託児所</li>
            </ul>
          </td>
        </tr>
        <tr class="c-tableBase__tr">
          <td class="c-tableBase__th">休暇・休日</td>
          <td class="c-tableBase__td">
            <ul class="c-tableBase__listInTable">
              <li class="c-tableBase__listItemInTable">完全週休2日制</li>
              <li class="c-tableBase__listItemInTable">年次有給休暇（初年度10日／年度途中入社は比例付与）</li>
              <li class="c-tableBase__listItemInTable">年末年始休暇（12月29日～1月3日：6日間）</li>
              <li class="c-tableBase__listItemInTable">夏季休暇（6月～9月中：5日間）</li>
              <li class="c-tableBase__listItemInTable">慶弔休暇</li>
              <li class="c-tableBase__listItemInTable">産前産後休暇</li>
              <li class="c-tableBase__listItemInTable">リフレッシュ休暇（3年勤続で5日／以降5年勤続ごとに5日支給）</li>
            </ul>
          </td>
        </tr>

      </table>
    </div>
  </section>

  <section class="p-benefitVoices">
    <div class="c-sectionInner benefit">
      <h2 class="c-subPageHeadingLevel2">制度利用者の声</h2>
      <div class="p-benefitVoices__contentWrap">
        <ul class="p-benefitVoices__voiceList">
          <li class="p-benefitVoices__voiceListItem">
            <h3 class="p-benefitVoices__headingLevel3">
              <span class="p-benefitVoices__entryYear">2013年入社</span>
              <span class="p-benefitVoices__staffName">堀内 優</span>
            </h3>
            <p class="p-benefitVoices__text">
              資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。<br>
              この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。<br>
              会社が成長を支援してくれるので、安心して仕事に取り組むことができます。
            </p>
          </li>
          <li class="p-benefitVoices__voiceListItem">
            <h3 class="p-benefitVoices__headingLevel3">
              <span class="p-benefitVoices__entryYear">2015年入社</span>
              <span class="p-benefitVoices__staffName">神凪 理沙</span>
            </h3>
            <p class="p-benefitVoices__text">
              出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。
              特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。
              今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。            </p>
          </li>
        </ul>
        <div class="p-benefitVoices__img">
          <img src="<?php echo $template_uri; ?>/images/benefits/user_voices.jpg" alt="笑顔でこちらを見つめる男性社員と女性社員">
        </div>
    </div>
  </section>
</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>

