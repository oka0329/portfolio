<?php get_header(); ?>

<div class="hero">
  <div class="hero__inner">
    <h2 class="hero__title">唯一無二の自分の人生を行く</h2>
    <p class="hero__text">山あり谷ありの人生<br>その第2章がここから始まる<br></p>
  </div>
</div>
<!-- main-visual -->

<main class="main">
  <section class="l-section concept">
    <div class="l-inner">
      <div class="heading">
        <h3 class="heading__title">CONCEPT</h3>
        <span class="heading__subtitle">コンセプト</span>
      </div>
      <div class="concept__body">
        <div class="media">
          <div class="media__inner">
            <div class="media__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/img02.jpg" alt="">
            </div>
            <div class="media__body">
              <p class="concept__text">ただ単にを作るだけでなく、<br>お客様の願い・気持ち・想いを少しでも<br>サイトを訪れた方々へ届けられるように</p>
              <p class="concept__text">些細なことかもしれない<br>気づかれないようなことかもしれない</p>
              <p class="concept__text">そんな細かいところまで気を遣い<br>最高な作品を作り上げることを約束します</p>
            </div>
          </div>
        </div>
      </div>
      <div class="concept__link">
        <a href="/about" class="button button-main"><span>MORE</span></a>
      </div>
    </div>
  </section>
  <!-- about-section -->

  <?php
  $query_works = new WP_Query(
      array(
          'post_type' => 'work',
          'posts_per_page' => 5,
      ));
  ?>
  <section class="l-section works">
    <div class="l-inner">
      <div class="works__image">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php if ( $query_works->have_posts() ) : ?>
              <?php while ( $query_works->have_posts() ) : $query_works->the_post();?>
            <div class="swiper-slide">
              <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()):?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                <?php endif; ?>
              </a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="works__contents">
        <div class="heading">
          <h3 class="heading__title">WORKS</h3>
          <span class="heading__subtitle">制作実績</span>
        </div>
        <p class="works__text">過去の制作実績です。<br>様々なタイプのwebサイトを<br>心を込めて制作しております。</p>
        <div class="works__link">
          <a href="/works" class="button button-main">MORE</a>
        </div>
      </div>
    </div>
  </section>
  <!-- works-section -->

  <?php
  $query_works = new WP_Query(
      array(
          'post_type' => 'blogs',
          'posts_per_page' => 3,
      ));
  ?>

  <section class="l-section blog">
    <div class="l-inner">
      <div class="heading">
        <h3 class="heading__title">BLOG</h3>
        <span class="heading__subtitle">ブログ</span>
      </div>
      <div class="blog__body">
        <div class="card-wrapper card-wrapper--col3">
          <?php if ( $query_works->have_posts() ) : ?>
          <?php while ( $query_works->have_posts() ) : $query_works->the_post();?>
          <div class="card">
            <a href="<?php the_permalink(); ?>">
            <div class="card__body">
              <div class="card__image">
                <?php if(has_post_thumbnail()):?>
                <?php the_post_thumbnail(); ?>
                <?php else: ?>
                <?php endif; ?>
              </div>
              <p class="card__text"><?php the_title(); ?></p>
            </div>
            </a>
          </div>
        <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="blog__link">
        <a href="/blog" class="button button-main">MORE</a>
      </div>
    </div>
  </section>
  <!-- blog-section -->

  <section class="l-section contact">
    <div class="l-inner">
      <div class="heading">
        <h3 class="heading__title">CONTACT</h3>
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
