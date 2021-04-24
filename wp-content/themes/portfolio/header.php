<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/remodal.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <?php wp_head(); ?>
</head>

<body>
    <header class="header">
      <div class="header__inner">
        <div class="header__logo">
          <h1 class="logo"><a href="/">First Stage</a></h1>
        </div>
        <nav class="header-nav">
          <div class="header-nav__inner">
            <ul class="header-nav__list">
              <li class="header-nav__item"><a href="/about" class="header-nav__link">ABOUT</a></li>
              <li class="header-nav__item"><a href="/work" class="header-nav__link">WORKS</a></li>
              <li class="header-nav__item"><a href="/blog" class="header-nav__link">BLOG</a></li>
              <li class="header-nav__item"><a href="/contact" class="header-nav__link">CONTACT</a></li>
            </ul>
          </div>
        </nav>
      <div class="header__trigger">
        <div class="menu-trigger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    </header>
    <!-- header -->
