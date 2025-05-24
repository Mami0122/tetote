<?php
  get_header();

  global $wp_query;
  $post_id = $wp_query->get_queried_object_id();
  $template_uri = get_template_directory_uri();
?>

<section class="p-blogArchiveHero c-subPageHero" style="background-image: url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>);" >
  <div class="c-subPageHero__inner">
    <header header class="c-subPageHeader">
      <h1 class="c-subPageHeader__heading">
        <span class="c-subPageHeader__headingEn">BLOG</span>
        <span class="c-subPageHeader__headingJp">採用ブログ</span>
      </h1>
      <p class="c-subPageHeader__text">採用情報やイベント情報などをご紹介します。</p>
    </header>
  </div>
</section>

<?php
  get_template_part('template-parts/breadcrumb', null, array('text' => ['BLOG']) ); 
?>

<main>
<section class="p-blogArchiveBlogs">
  <div class="c-sectionInner">
    <ul class="c-blogList">

<?php
  if( have_posts() ):
    while( have_posts() ):the_post();

    $post_thumbnail_id = get_post_thumbnail_id($post->id);
    $post_thumbnail_alt = get_post_meta ( $post_thumbnail_id, '_wp_attachment_image_alt', true );
    $post_categories =get_the_category() ;
    $post_cat = '';

    foreach($post_categories as $post_category){
      if($post_category->slug !== 'uncategorized'){
        $post_cat = $post_category->name;
        break;
      }else{
      }
    }
?>
      <li class=" c-blogCard bg-mainColor">
        <a href="<?php the_permalink(); ?>" class="c-blogCard__link">
          <p class="c-blogCard__thumb js-blogCard__thumb">
            <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $post_thumbnail_alt ?: ''; ?>" >
          </p>
          <div class="c-blogCard__body">
            <span class="c-blogCard__cat"><?php echo $post_cat; ?></span>
            <h3 class="c-blogCard__title"><?php the_title(); ?></h3>
            <time class="c-blogCard__date" datetime=""><?php the_time('Y.m.d'); ?></time>
          </div>
        </a>
      </li>
<?php
      endwhile;
    endif;
?>      
    </ul>  

<?php
  $current_page = max(1, get_query_var('paged'));
  $total_pages = $wp_query->max_num_pages;

  $links = [];

  // 前ページ（あれば）
  if ($current_page > 1) {
      $prev_page = $current_page - 1;
      $links[] = '<a class="p-blogArchivePaginations__pagination prev" href="' . get_pagenum_link($prev_page) . '">' . $prev_page . '</a>';
  }

  // 現在のページ（非リンク）
  $links[] = '<span class="p-blogArchivePaginations__pagination current">' . $current_page . '</span>';

  // 次ページ（あれば）
  if ($current_page < $total_pages) {
      $next_page = $current_page + 1;
      $links[] = '<a class="p-blogArchivePaginations__pagination next" href="' . get_pagenum_link($next_page) . '">' . $next_page . '</a>';
  }

  echo '<div class="p-blogArchivePaginations">' . implode(' ', $links) . '</div>';
?>
  </div>
</section>
</main>

<?php 
  get_template_part('template-parts/cta'); 
  get_footer();
?>

