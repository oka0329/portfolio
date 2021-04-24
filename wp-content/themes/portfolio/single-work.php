<?php get_header(); ?>

<div class="sub-hero">
  <p class="sub-hero__title">WORKS</p>
  <div class="scrolldown4"><span>Scroll</span></div>
</div>
<div class="breadcrumb">
  <div class="l-inner">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item">
        <a href="/">TOP</a>
      </li>
      <li class="breadcrumb__item">
        <a href="/work">WORKS</a>
      </li>
      <li class="breadcrumb__item">
        <span><?php the_title(); ?></span>
      </li>
    </ul>
  </div>
</div>
<!-- breadcrumb -->

<?php
  $name = SCF::get('name');
  $link = SCF::get('link');
  $language = SCF::get('language');
 ?>
<main class="main">
  <section class="work-main post l-section">
    <div class="l-inner l-inner--sm">
      <div class="post__heading">
        <div class="post__title"><?php the_title(); ?></div>
      </div>
      <div class="post__image">
        <?php if(has_post_thumbnail()):?>
        <?php the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/no-image.png" alt="">
        <?php endif; ?>
      </div>
      <div class="post__contents">
        <p class="post__name"><?php the_title(); ?><br><span><?php echo $link; ?></span></a>

        <p class="post__text"><?php echo $language; ?></p>
        <?php the_content(); ?>
      </div>
      <div class="post__link">
        <span><?php previous_post_link('%link', '前の実績　|　%title'); ?></span>
        <span><?php next_post_link('%link', '次の実績　|　%title'); ?></span>
      </div>
      <a href="/work" class="post__link--top">実績一覧へ→</a>
    </div>
  </section>
  <!-- work-main-section -->

  <section class="l-section contact">
    <div class="l-inner">
      <div class="heading js-fadein-first">
        <h2 class="heading__title">CONTACT</h2>
      </div>
      <div class="contact__body js-fadein-first">
        <p class="contact__text">Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
      </div>
      <div class="contact__link js-fadein-first">
        <a href="/contact" class="button button-main">MORE</a>
      </div>
    </div>
  </section>
  <!-- contact-section -->

</main>

<?php get_footer(); ?>
