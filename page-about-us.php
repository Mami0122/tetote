<?php
  get_header();

  global $wp_query;
  $post_id = $wp_query->get_queried_object_id();
  $template_uri = get_template_directory_uri();
?>

<section class="p-aboutHero c-subPageHero" style="background-image: url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>);" >
  <div class="c-subPageHero__inner">
    <header header class="c-subPageHeader">
      <h1 class="c-subPageHeader__heading">
        <span class="c-subPageHeader__headingEn">ABOUT US</span>
        <span class="c-subPageHeader__headingJp">TETOTEについて</span>
      </h1>
      <p class="c-subPageHeader__text">私たちの理念を紹介をします。</p>
    </header>
  </div>
</section>

<?php
$page_title = get_the_title($post_id);
get_template_part('template-parts/breadcrumb', null, array('text' => [$page_title]) ); 

?>

<main>
<section class="p-aboutImportant">
  <div class="c-sectionInner about">
    <h2 class="c-subPageHeadingLevel2 ta-c">私達が大切にしていること</h2>
    <ul class="p-aboutImportant__list">
      <li class="p-aboutImportant__listItem">
        <h3 class="p-aboutImportant__listItemTitle">
          飽くなき探求心で、革新を創り出す
        </h3>
        <p class="p-aboutImportant__text">
          100年を超える歴史を誇りながらも、常に挑戦し続ける気概を忘れずに、未来を切り開くソリューションを提供し続けます。変化を恐れず、最新技術やトレンドを積極的に研究し、お客様のニーズを超える価値を生み出すことに情熱を燃やしています。
        </p>
      </li>
      <li class="p-aboutImportant__listItem">
        <h3 class="p-aboutImportant__listItemTitle">デジタル技術の力で、未来を加速させる</h3>
        <p class="p-aboutImportant__text">
          ITコンサルタント会社として、業務効率化やイノベーション創出に貢献するために、デジタル技術を活用した最適なソリューションを提案します。自動化、データ分析、AIなどの技術を駆使し、お客様のビジネスを革新し、未来への飛躍を力強くサポートします。
        </p>
      </li>
      <li class="p-aboutImportant__listItem">
        <h3 class="p-aboutImportant__listItemTitle">人材こそが、未来への鍵</h3>
        <p class="p-aboutImportant__text">
          従業員一人ひとりが、高い専門性と人間性を兼ね備えた人材であることが、お客様への最高のサービスにつながると確信しています。個々の能力やキャリア目標に合わせた育成プログラムや、多様な経験を積む機会を提供することで、成長を支援します。
        </p>
      </li>
      <li class="p-aboutImportant__listItem">
        <h3 class="p-aboutImportant__listItemTitle">未経験者も歓迎！情熱と意欲があれば、誰でも活躍できる</h3>
        <p class="p-aboutImportant__text">
          IT業界未経験の方でも、熱意と向上心があれば、当社で活躍できるチャンスがあります。研修やOJTを通じて、必要な知識やスキルを丁寧に習得し、即戦力となる人材へと育成します。先輩社員によるサポート体制も充実しているので、安心してスキルアップを目指せます。
        </p>
      </li>
      <li class="p-aboutImportant__listItem">
        <h3 class="p-aboutImportant__listItemTitle">働きがいと充実感あふれる環境</h3>
        <p class="p-aboutImportant__text">
          ワークライフバランスを重視し、従業員が働きがいと充実感を感じられる環境づくりに積極的に取り組んでいます。充実した福利厚生制度や、多様な働き方を可能にする制度を導入し、個々のライフスタイルに合わせた働き方を支援します。
        </p>
      </li>
    </ul>
  </div>
</section>

<section class="p-aboutCeoMessage">
  <div class="c-sectionInner about">
    <h2 class="c-subPageHeadingLevel2 ta-c">代表メッセージ</h2>
    <div class="p-aboutCeoMessage__contentWrap">
      <div class="p-aboutCeoMessage__img">
        <img src="<?php echo $template_uri; ?>/images/about/about_ceo.jpg" alt="TETOTE株式会社のCEO 田中 浩次郎">
      </div>
      <div class="p-aboutCeoMessage__textsWrap">
        <h3 class="p-aboutCeoMessage__messageTitle">
          あなたがやりたいこと<br>
          それを全力でサポートできる、<br class="only-pc">
          それがTETOTEの強みです。
        </h3>
        <p class="p-aboutCeoMessage__text">
          <span class="p-aboutCeoMessage__dividedTextWrap">
            TETOTEは、ITコンサルティングとコンサル導入企業への営業を専門とする会社です。設立以来、私たちは「お客様の課題解決に真摯に取り組み、共に成長する」という理念を掲げ、お客様とパートナーと共に歩んできました。
          </span>
          <span class="p-aboutCeoMessage__dividedTextWrap">
            お客様のニーズを深く理解し、最適なソリューションを提供することで、数多くの課題解決を支援してきました。その結果、お客様との深い信頼関係を築き、共に成長することができています。
          </span>
          <span class="p-aboutCeoMessage__dividedTextWrap">
            TETOTEは、個々の能力や個性を尊重し、多様な人材が活躍できる環境づくりに力を入れています。年齢、性別、国籍、経験などに関係なく、意欲と向上心のある人材を歓迎します。
          </span>
          <span class="p-aboutCeoMessage__dividedTextWrap">
            私たちと共に、未来を創造していきましょう。
          </span>
        </p><!-- /.p-aboutCeoMessage__text -->
        <p class="p-aboutCeoMessage__ceoName">
          <img src="<?php echo $template_uri; ?>/images/about/about_ceoName.svg" alt="田中 浩次郎">
        </p>
      </div><!-- /.p-aboutCeoMessage__textsWrap -->
    </div><!-- /.p-aboutCeoMessage__contentWrap -->
  </div><!-- /c-sectionInner -->
</section>

<section class="p-aboutServices">
  <div class="c-sectionInner about">
    <header>
      <h2 class="p-aboutServices__sectionTitle c-subPageHeadingLevel2">事業紹介</h2>
      <p class="p-aboutServices__introText">
        TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか
        紹介させていただきます。
      </p>
    </header>
    <ul class="p-aboutServices__list">
      <li class="p-aboutServices__listItem">
        <div class="p-aboutServices__listItemImg">
          <img src="<?php echo $template_uri; ?>/images/about/about_service01.jpg" alt="">
        </div>
        <div class="p-aboutServices__listItemTextWrap">
          <h3 class="p-aboutServices__listItemTitle">コンサルティング事業</h3>
          <h4 class="p-aboutServices__listItemSubTitle">お客様と伴走し、売上に直接貢献できる</h4>
          <p class="p-aboutServices__listItemText">
            営業との連携で、人と組織の成長・変革に向けた計画立案・サービス実施、さらにフォローまで。コンサルタントとして一気通貫で携わります。
          </p>
        </div>
      </li>
      <li class="p-aboutServices__listItem">
        <div class="p-aboutServices__listItemImg">
          <img src="<?php echo $template_uri; ?>/images/about/about_service02.jpg" alt="">
        </div>
        <div class="p-aboutServices__listItemTextWrap">
          <h3 class="p-aboutServices__listItemTitle">ソリューション営業事業</h3>
          <h4 class="p-aboutServices__listItemSubTitle">お客様の課題を見つけ出し、必要な施策を提案する</h4>
          <p class="p-aboutServices__listItemText">
            お客様が抱える課題へ、ヒアリングベースで提案型営業を行い、コンサルタントとの連携で課題解決を目指します。
          </p>
        </div>
      </li>
      <li class="p-aboutServices__listItem">
        <div class="p-aboutServices__listItemImg">
          <img src="<?php echo $template_uri; ?>/images/about/about_service03.jpg" alt="">
        </div>
        <div class="p-aboutServices__listItemTextWrap">
          <h3 class="p-aboutServices__listItemTitle">業務系システム開発事業</h3>
          <h4 class="p-aboutServices__listItemSubTitle">お客様の課題解決を強力にサポートするシステムを設計する</h4>
          <p class="p-aboutServices__listItemText">
            基本設計書に従って開発とテストを実施し、本番稼働をサポート。企画から運用までの全工程を通じて包括的なアプローチで、安定した運用と迅速な対応を保証します。
          </p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section id="overview" class="p-aboutComProfile">
  <div class="c-sectionInner about">
    <h2 class="p-aboutComProfile__sectionTitle c-subPageHeadingLevel2">会社概要</h2>
    <table class="p-aboutComProfile__table c-tableBase">
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">会社名</th>
        <td class="c-tableBase__td">TETOTE株式会社</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">所在地</th>
        <td class="c-tableBase__td">〒100-0001 東京都千代田区千代田 1-1-1</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">代表者名</th>
        <td class="c-tableBase__td">田中 浩二郎 (代表取締役)</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">事業内容</th>
        <td class="c-tableBase__td">
          <ul class="c-tableBase__listInTable">
            <li class="c-tableBase__listItemInTable">ITコンサルティング</li>
            <li class="c-tableBase__listItemInTable">コンサル導入企業への営業</li>
          </ul>
        </td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">電話番号</th>
        <td class="c-tableBase__td">03-1234-5678</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">ウェブサイトURL</th>
        <td class="c-tableBase__td"><ahref="<?php echo esc_url( home_url('/') ); ?>">https://tetote.co.jp</a></td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">メールアドレス</th>
        <td class="c-tableBase__td">tetote@tetote.co.jp</td>
      </tr>
      <tr class="c-tableBase__tr">
        <th class="c-tableBase__th">設立年月</th>
        <td class="c-tableBase__td">1923年4月1日</td>
      </tr>
    </table>
  </div>
</section>
</main>
<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>