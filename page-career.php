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
        <span class="c-subPageHeader__headingEn">CAREER</span>
        <span class="c-subPageHeader__headingJp">研修制度とキャリアパス</span>
      </h1>
      <p class="c-subPageHeader__text">キャリアパスを支える充実した、研修制度</p>
    </header>
  </div>
</section>

<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['CAREER']) ); 
?>

<main>
  <section class="p-careerTraining">
    <div class="c-sectionInner career">
      <h2 class="c-subPageHeadingLevel2">キャリアパスに沿った研修制度を用意</h2>
      <p class="p-careerTraining__introText">弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。</p>
      <p class="p-careerTraining__img">
        <img 
          src="<?php echo $template_uri; ?>/images/career/career_path.jpg" 
          alt="TETOTEでのキャリアパス *コンサルタントの場合 
            01.コンサルタント 入社後2～3年 プロジェクトチームの一員として、データ分析、資料作成、クライアントとの調整などを担当
            02.シニアコンサルタント コンサルタント経験3～5年 プロジェクトリーダーとして、プロジェクト全体の指揮を執る
            03.マネージャー シニアコンサルタント経験5年以上 複数のプロジェクトを管理し、コンサルタントの指導・育成
            04.パートナー マネージャー経験10年以上 コンサルティングファームの経営に参画 新規事業の立ち上げ、クライアントとの関係構築"
        >
      </p>
      <p class="p-careerTraining__listIntroText">TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。</p>
      <ul class="p-careerTraining__trainingList">
        <li class="p-careerTraining__trainingListItem">
          <h3 class="p-careerTraining__headingLevel3">1.ケーススタディ研修</h3>
          <p class="p-careerTraining__listItemText">
            TETOTE の過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>
            この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。
          </p>
        </li>
        <li class="p-careerTraining__trainingListItem">
          <h3 class="p-careerTraining__headingLevel3">2.クライアント対応研修</h3>
          <p class="p-careerTraining__listItemText">
            TETOTE は、クライアントとの信頼関係構築を重視しています。<br>
            この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。
          </p>
        </li>
        <li class="p-careerTraining__trainingListItem">
          <h3 class="p-careerTraining__headingLevel3">3.専門知識研修</h3>
          <p class="p-careerTraining__listItemText">
            TETOTE の過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>
            この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。
          </p>
        </li>
        <li class="p-careerTraining__trainingListItem">
          <h3 class="p-careerTraining__headingLevel3">4.マネジメント研修</h3>
          <p class="p-careerTraining__listItemText">
            財務、会計、ITなど、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。
            TETOTE は、幅広い分野の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。 
          </p>
        </li>
        <li class="p-careerTraining__trainingListItem">
          <h3 class="p-careerTraining__headingLevel3">5.外部研修</h3>
          <p class="p-careerTraining__listItemText">
            社外で実施される研修にも積極的に参加することができます。
            TETOTE は、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。
          </p>
        </li>
      </ul>
    </div>
  </section>


</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>

