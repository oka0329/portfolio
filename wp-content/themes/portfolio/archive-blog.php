<?php get_header(); ?>

<div class="sub-hero">
  <h2 class="sub-hero__title">BLOG</h2>
</div>
<div class="breadcrumb">
  <div class="l-inner">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item">
        <a href="/">TOP</a>
      </li>
      <li class="breadcrumb__item">
        <span>BLOG</span>
      </li>
    </ul>
  </div>
</div>
<!-- breadcrumb -->

<main class="main">
  <?php
  $query_blogs = new WP_Query(
      array(
          'post_type' => 'blog',
          'posts_per_page' => 4,
          'paged' => $paged,
      ));
  ?>

  <section class="l-section blog-detail">
    <div class="l-inner">
      <div class="blog__body">
        <div class="card-wrapper card-wrapper--col2">
          <?php if ( $query_blogs->have_posts() ) : ?>
          <?php while ( $query_blogs->have_posts() ) : $query_blogs->the_post();?>
          <div class="card">
            <a href="<?php the_permalink(); ?>">
            <div class="card__body">
              <div class="card__image">
                <?php if(has_post_thumbnail()):?>
                <?php the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/no-image.png" alt="">
                <?php endif; ?>
              </div>
              <div class="card__heading">
                <p class="card__title"><?php the_title(); ?><i class="far fa-clone"></i></p>
                <p class="card__category"><?php the_category(); ?></p>
              </div>
              <div class="card__contents"><?php the_excerpt();?></div>
            </div>
            </a>
          </div>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
        </div>
      </div>
      <div class="blog-detail__link">
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
  <!-- blog-section -->

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
