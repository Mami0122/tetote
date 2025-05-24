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
        <span class="c-subPageHeader__headingEn">FAQ</span>
        <span class="c-subPageHeader__headingJp">よくある質問</span>
      </h1>
      <p class="c-subPageHeader__text">皆様からよく頂くご質問にお答えします。</p>
    </header>
  </div>
</section>

<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['FAQ']) ); 
?>

<main>
<div class="p-faqBtns">
  <div class="c-sectionInner faq">
    <ul class="p-faqBtns__btnsList">
      <li class="p-faqBtns__btnsListItem">
        <a href="#faqApply" class="p-faqBtns__btnsListItemLink c-roundedBtn bgMainColor">応募・選考について</a>
      </li>
      <li class="p-faqBtns__btnsListItem">
        <a href="#faqCareer" class="p-faqBtns__btnsListItemLink c-roundedBtn bgMainColor">キャリアについて</a>
      </li>
      <li class="p-faqBtns__btnsListItem">
        <a href="#faqBenefits" class="p-faqBtns__btnsListItemLink c-roundedBtn bgMainColor">福利厚生について</a>
      </li>
    </ul>
  </div>
</div>

<section id="faqApply" class="p-faqFaqSection">
  <div class="c-sectionInner">
    <h2 class=" c-subPageHeadingLevel2">応募・選考について</h2>
    <div class=" p-faqFaqSection__faqGroupWrap">
      <details class="p-faqFaqSection__faqGroup">
        <summary class="p-faqFaqSection__summary js-faqSummary">応募資格はありますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">募集要項に記載されている条件を満たしていれば、どなたでもご応募いただけます。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">応募方法は？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">弊社採用サイトからエントリーください。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">選考フローは？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">書類選考 → 面接（複数回）→ 内定の流れになります。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">選考にかかる時間は？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">2ヶ月ほどとなります。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">面接では何を聞かれますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner"> 面接では、これまでのご経歴や実績、志望動機、当社で挑戦したいことなどをお伺いします。リラックスして、あなたらしくお話しいただければと思います。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">面接官はどんな人ですか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner"> 配属予定部署の担当者および人事担当者が面接を担当します。</div>
        </div>
      </details>
    </div>
  </div>
</section>

<section id="faqCareer" class="p-faqFaqSection">
  <div class="c-sectionInner">
    <h2 class=" c-subPageHeadingLevel2">キャリアについて</h2>
    <div class=" p-faqFaqSection__faqGroupWrap">
      <details class="p-faqFaqSection__faqGroup">
        <summary class="p-faqFaqSection__summary js-faqSummary">自分の希望するキャリアパスに進むことはできますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">定期的なキャリア面談を通じて、希望や適性に応じた成長をサポートします。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">転勤はありますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">業務の必要に応じて、転勤が発生する場合があります。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">転勤の希望は出せますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">可能です。しかし、各部署の人員状況等により、必ず実現可能というわけではございません。状況により移動できる場合もございます。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">ワークライフバランスは？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">働き方改革を推進しており、柔軟な勤務体系や休暇制度が整っています。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">具体的にはどのような制度がありますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner"> キャリアパスに沿った豊富な研修制度を用意しております。詳しくは<a class="p-faqFaqSection__textLink" href="<?php echo esc_url( home_url('/career') ); ?>">キャリアページ</a>をご覧ください。
          </div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">育児休暇制度はありますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">はい、取得実績も多く、復職支援制度も整っています。</div>
        </div>
      </details>
    </div>
  </div>
</section>

<section id="faqBenefits" class="p-faqFaqSection">
  <div class="c-sectionInner">
    <h2 class=" c-subPageHeadingLevel2">応募・選考について</h2>
    <div class=" p-faqFaqSection__faqGroupWrap">
      <details class="p-faqFaqSection__faqGroup">
        <summary class="p-faqFaqSection__summary js-faqSummary">どのような福利厚生制度がありますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">社会保険完備、通勤手当、住宅手当、育児支援制度などを整備しています。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">財形貯蓄制度の内容は？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">財形貯蓄を支援する制度です。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">社内イベントの内容は？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">社内交流を目的とした懇親会やチームビルディングイベントを実施しています。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">部活動について教えてください。<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">フットサル・カレー部など、社内の様々な部署のメンバーで構成される部活があり、細々と活動しております。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">資格取得支援制度はいくら補助が出ますか？<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">資格により異なりますが、月々5000円～2万円の資格手当と、資格取得時には7万円～40万円を資格取得金として支給いたします。</div>
        </div>
      </details>
      <details class="p-faqFaqSection__faqGroup" >
        <summary class="p-faqFaqSection__summary js-faqSummary">年次有給休暇について教えてください<span class="p-faqFaqSection__summaryIcon"></span></summary>
        <div class="p-faqFaqSection__answer js-faqAnswer">
          <div class="p-faqFaqSection__answerInner">入社6ヶ月後に10日支給となります。</div>
        </div>
      </details>
    </div>
  </div>
</section>

</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>

