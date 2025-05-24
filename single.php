<?php
  get_header();

  global $wp_query;
  $post_id = $wp_query->get_queried_object_id();
  $page_title = get_the_title($post_id);
  $template_uri = get_template_directory_uri();

  get_template_part('template-parts/breadcrumb', null, array('text' => ['BLOG', esc_html($page_title)], 'slug' => 'blog') ); 
?>

<main>
<?php
  if(have_posts()):
    while(have_posts()):
      the_post();
      
      $post_thumbnail_id = get_post_thumbnail_id($post->id);
      $post_thumbnail_alt = get_post_meta ( $post_thumbnail_id, '_wp_attachment_image_alt', true );
      $post_categories = get_the_category() ;
      $post_cat = '';

      foreach($post_categories as $post_category){
        if($post_category->slug !== 'uncategorized'){
          $post_cat = $post_category->name;
          break;
        }else{
        }
      }
?>
<section class="p-blogPost">
  <div class="p-blogPost__inner">
    <div class="p-blogPost__catDateWrap">
      <span class="p-blogPost__cat"><?php echo esc_html($post_cat); ?></span>
      <span class="p-blogPost__date"><?php the_time('Y.m.d'); ?></span>
    </div>
    <h1 class="p-blogPost__title"><?php the_title(); ?></h1>
    <p class="p-blogPost__img">
      <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $post_thumbnail_alt ?: ''; ?>">
    </p>
    <div class="p-blogPost__wpContent">
      <?php the_content() ?>
    </div>
  </div>
</section>

<div class="p-blogPaginationArea">
  <div class="c-sectionInner">
    <div class="p-blogPaginationArea__paginations">
      <?php
        $prev_post = get_previous_post();

        if (!empty($prev_post)): 
      ?>
        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="p-blogPaginationArea__pagination prev">
          <div class="p-blogPaginationArea__postTitle"><?php echo get_the_title($prev_post->ID); ?></div>
          <div class="p-blogPaginationArea__postDate"><?php echo get_the_date('Y.m.d', $prev_post->ID); ?></div>
        </a>
      <?php
        endif; 
      ?>  

      <?php
        $next_post = get_next_post();

        if (!empty($next_post)): 
      ?>
        <a href="<?php echo get_permalink($next_post->ID); ?>" class="p-blogPaginationArea__pagination next">
          <div class="p-blogPaginationArea__postTitle"><?php echo get_the_title($next_post->ID); ?></div>
          <div class="p-blogPaginationArea__postDate"><?php echo get_the_date('Y.m.d', $next_post->ID); ?></div>
        </a>
      <?php
        endif; 
      ?>
    </div><!-- /.p-blogPaginationArea__paginations -->
  </div><!-- /.c-sectionInner -->
</div><!-- /.p-blogPaginationArea -->

<?php
    endwhile;
  endif;
?>  
</main>

<?php
  get_template_part('template-parts/cta'); 
  get_footer();
?>