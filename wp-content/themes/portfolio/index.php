<?php get_header(); ?>

<div class="hero">
  <div class="hero__inner">
    <h2 class="hero__title">全てはここから始まる</h2>
    <p class="hero__text">始まりのステージ</p>
  </div>
  <div class="scrolldown4"><span>Scroll</span></div>
</div>
<!-- hero -->

<main class="main">
  <section class="l-section concept">
    <div class="l-inner">
      <div class="heading js-fadein-first">
        <h3 class="heading__title">CONCEPT</h3>
      </div>
      <div class="concept__body js-fadeinright-second">
        <div class="concept__contents">
          <h4 class="concept__title">正確で丁寧をモットーに</h4>
          <p class="concept__text">人と人をつなぐ架け橋となる<br class="dn_pc">webサイトを作りたい。<br>お客様の想いをユーザーへ伝えるために、<br class="dn_pc">少しでも力になれるよう<br class="dn_pc">お手伝いをさせて頂きます。</p>
          <div class="concept__link dn_sp js-fadeinright-third">
            <a href="/about" class="button button-main">MORE</a>
          </div>
        </div>
        <div class="concept__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/image/mv06.jpg" alt="">
        </div>
        <div class="concept__link dn_pc js-fadeinright-third">
          <a href="/about" class="button button-main">MORE</a>
        </div>

      </div>
    </div>
  </section>
  <!-- concept-section -->

  <?php
  $query_works = new WP_Query(
      array(
          'post_type' => 'work',
          'posts_per_page' => 10,
      ));
  ?>
  <section class="l-section works">
    <div class="l-inner">
      <div class="works__image js-fadein-first">
        <div class="swiper-container-works">
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
        <div class="heading js-fadein-second">
          <h3 class="heading__title">WORKS</h3>
        </div>
        <p class="works__text js-fadeinright-second">過去の制作実績です。<br>様々なタイプのwebサイトを<br class="dn_sp">心を込めて制作しております。</p>
        <div class="works__link js-fadeinright-third dn_sp">
          <a href="/work" class="button button-main">MORE</a>
        </div>
      </div>
    </div>
    <div class="works__link js-fadein-third dn_pc">
      <a href="/work" class="button button-main">MORE</a>
    </div>
  </section>
  <!-- works-section -->

  <?php
  if(wp_is_mobile()){
    $post_num = 2;
  }else{
    $post_num = 3;
  }
  $query_blog = new WP_Query(
      array(
          'post_type' => 'blog',
          'posts_per_page' => $post_num,
      ));
  ?>

  <section class="l-section blog">
    <div class="l-inner">
      <div class="heading js-fadein-first">
        <h3 class="heading__title">BLOG</h3>
      </div>
      <div class="blog__body js-fadein-second">
        <div class="swiper-container-blog">
          <div class="card-wrapper card-wrapper--col3">
            <?php if ( $query_blog->have_posts() ) : ?>
              <?php while ( $query_blog->have_posts() ) : $query_blog->the_post();?>
            <div class="card">
              <a href="<?php the_permalink(); ?>">
                <div class="card__image">
                <?php if(has_post_thumbnail()):?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                <?php endif; ?>
                </div>
                <span><?php the_title(); ?></span>
              </a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="blog__link js-fadein-third">
        <a href="/blog" class="button button-main">MORE</a>
      </div>
      </div>
  </section>
  <!-- blog-section -->

  <section class="l-section contact">
    <div class="l-inner">
      <div class="heading js-fadein-first">
        <h3 class="heading__title">CONTACT</h3>
      </div>
      <div class="contact__body js-fadein-first">
        <p class="contact__text">Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
      </div>
      <div class="contact__link js-fadein-second">
        <a href="/contact" class="button button-main">MORE</a>
      </div>
    </div>
  </section>
  <!-- contact-section -->

</main>


<?php get_footer(); ?>
