                 
<!DOCTYPE html>
<html lang="ja">
<head>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php 
    wp_head(); 
    $template_uri = get_template_directory_uri();
    $logo_alt = 'TETOTE.co.ltd RECRUITING';
  ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="js-header" class="l-header <?php echo (is_front_page()) ? '' : 'l-header-sub'; ?>">
  <div class="l-header__inner">
    <?php echo (is_front_page()) ? '<h1 class="l-header__logo c-logo">' : '<p class="l-header__logo c-logo">'; ?>
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="c-logo__link">
        <img class="l-header__logoImage" src="<?php echo $template_uri; ?>/images/common/logo-white.png" alt="<?php echo $logo_alt; ?>">
        <img class="l-header__logoImage sub" src="<?php echo $template_uri; ?>/images/common/logo-black.png" alt="<?php echo $logo_alt; ?>">
      </a>
    <?php echo (is_front_page()) ? '</h1>' : '</p>'; ?>
    <div class="l-header__btns">
      <a href="<?php echo esc_url( home_url('/details') ); ?>" class="l-header__btn job-desc c-headerBtn">募集要項</a>
      <a href="<?php echo esc_url( home_url('/entry') ); ?>" class="l-header__btn entry c-headerBtn">ENTRY</a>
    </div>
    <button id="js-header-burger" class="l-header__burger" type="button" aria-controls="js-header-menu" aria-expended="false" aria-label="メニューを開く">
      <span class="l-header__burgerBarWrap">
        <span class="l-header__burgerBar"></span>
        <span class="l-header__burgerBar"></span>
        <span class="l-header__burgerBar"></span>
      </span>
      <span class="l-header__burgerText">Menu</span>
    </button>
    <!-- ヘッダーnavメニュー -->
    <div id="js-header-menu" class="l-header__menu" aria-hidden="true">
      <div class="l-header__menuLeft">
        <div class="c-logo header__logoLink">
          <img src="<?php echo $template_uri; ?>/images/common/logo-black.png" alt="">
        </div>
      </div>
      <div class="l-header__menuRight">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'container'=> 'nav',
            'container_class' => 'l-header__nav wp-menu',
            'menu_class' => 'l-header__navList',
             'walker' => new Custom_Walker_Nav_Menu()
           ) );
        ?>
        <div class="l-header__menuBottomBtns">
          <a href="<?php echo esc_url( home_url('/details') ); ?>" class="l-header__menuBottomBtn l-header__btn job-desc c-headerBtn">募集要項</a>
          <a href="<?php echo esc_url( home_url('/entry') ); ?>" class="l-header__menuBottomBtn l-header__btn entry c-headerBtn">ENTRY</a>
        </div>
      </div><!-- /.l-header__menuRight -->
    </div><!-- /.l-header__menu -->
  </div><!-- /.l-header -->
</header>
