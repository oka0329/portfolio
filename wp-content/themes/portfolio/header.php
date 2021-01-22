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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/remodal-default-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/remodal.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?0113">

  <?php wp_head(); ?>
</head>

<body>
  <div class="l-container">

  <div id="header">
    <div class="l_header_inner">
      <div class="l_header_content mon">
        <div class="header_logo">
          <h1 class="logo"><a href="<?php home_url(); ?>">First Stage</a></h1>
          <span class="header_title">ここから始まる第一歩</span>
        </div>
        <div class="header_nav">
          <ul class="list">
            <li><a href="<?php home_url(); ?>/about">Aboutaa</a></li>
            <li><a href="<?php home_url(); ?>/works">Works</a></li>
            <li><a href="<?php home_url(); ?>/contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
