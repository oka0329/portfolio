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
          'posts_per_page' => 4,
          'paged' => $paged,
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/no-image.png" alt="">
              <?php endif; ?>
            </div>
            <p class="works-detail__text"><?php the_title(); ?><i class="far fa-clone"></i></p>
            <p class="works-detail__category"><?php the_category(); ?></p>
          </a>
        </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
      </div>
      </div>
      <div class="works-detail__link">
        <div class="pagination">
    <?php global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }
    else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
    }
    echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 4,
        'current' => ($paged ? $paged : 1),
        // 'prev_text' => '«',
        // 'next_text' => '»',
    )); ?>
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
