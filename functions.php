<?php
  function add_files(){
    wp_enqueue_style('google-font','https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:wght@400;500;600;700&family=Viga&display=swap');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '0.0.0');
    wp_enqueue_style('style-css', get_template_directory_uri().'/css/style.css', array('swiper-css'), '0.0.0');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '0.0.0');
    wp_enqueue_script('jquery');
    wp_enqueue_script('script-js', get_template_directory_uri().'/js/script.js', array('swiper-js', 'jquery'), '0.0.0');
  }

  add_action('wp_enqueue_scripts', 'add_files');

  function my_body_class($classes){
    if (is_page()) {
        $page = get_post();
        $classes[] = $page->post_name;
    }
    return $classes;
  }

  add_filter('body_class', 'my_body_class');

  function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
      array(
        'header-menu' => 'ヘッダーメニュー',
        'footer-menu' => 'フッターメニュー',
      )
    );
  }

  add_action('after_setup_theme', 'theme_setup');

  class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {}
    function end_lvl( &$output, $depth = 0, $args = array() ) {}

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      $output .= '<li class="l-header__navListItem">';
      $output .= '<a href="' . esc_url($item->url) . '" class="l-header__navListItemLink">';
      $output .= '<span class="l-header__navListItemTextEn">' . esc_html($item->description) . '</span>';
      $output .= '<span class="l-header__navListItemTextJa">' . esc_html($item->title) . '</span>';
      $output .= '</a></li>';
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
      $output .= "";
    }
  }
  
  add_filter('wpcf7_autop_or_not', '__return_false');

  add_action('wp_footer', 'redirect_to_thanks_page');

  function redirect_to_thanks_page() {
    $homeUrl = home_url();
    echo <<< EOD
      <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
          location = '{$homeUrl}/entry-thanks/';
        }, false );
      </script>
    EOD;
  }