<?php get_header(); ?>

<div class="sub-hero">
  <h2 class="sub-hero__title">WORKS</h2>
</div>
<div class="breadcrumb">
  <div class="l-inner">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item">
        <a href="/">TOP</a>
      </li>
      <li class="breadcrumb__item">
        <span>WORKS</span>
      </li>
    </ul>
  </div>
</div>
<!-- breadcrumb -->

<main class="main">
  <?php
  $query_works = new WP_Query(
      array(
          'post_type' => 'work',
          'posts_per_page' => 9,
      ));
  ?>
  <section class="l-section works-detail">
    <div class="l-inner">
      <div class="heading">
        <h2 class="heading__title">WORKS</h2>
        <span class="heading__subtitle">制作実績</span>
      </div>
      <div class="works-detail__body">
        <div class="card-wrapper card-wrapper--col2">
        <?php if ( $query_works->have_posts() ) : ?>
        <?php while ( $query_works->have_posts() ) : $query_works->the_post();?>
        <div class="card">
          <a href="<?php the_permalink(); ?>">
            <div class="works-detail__image">
              <?php if(has_post_thumbnail()):?>
              <?php the_post_thumbnail(); ?>
              <?php else: ?>
              <? endif; ?>
            </div>
            <p class="works-detail__text"><?php the_title(); ?><i class="far fa-clone"></i></p>
            <p class="works-detail__category"><?php the_category(); ?></p>
          </a>
        </div>
      <?php endwhile; endif; ?>
      </div>
      </div>
    </div>
  </section>
  <!-- works-section -->

  <section class="l-section contact">
    <div class="l-inner">
      <div class="heading">
        <h2 class="heading__title">CONTACT</h2>
        <span class="heading__subtitle">お問い合わせ</span>
      </div>
      <div class="contact__body">
        <p class="contact__text">Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
      </div>
      <div class="contact__link">
        <a href="/contact" class="button button-main">MORE</a>
      </div>
    </div>
  </section>
  <!-- contact-section -->

</main>

<?php get_footer(); ?>
