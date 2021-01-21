<?php get_header(); ?>

<div class="l_content">
  <div class="l_works l_inner">
    <div class="heading">
      <h2 class="heading_title">Works</h2>
      <span class="heading_subtitle">実績</span>
    </div>
    <div class="l_work_content">
      <!-- メインループ【実績】 -->
      <?php
       $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $the_query = new WP_Query(
          array(
              'post_type' => 'work',
              'posts_per_page' => 3,

        )
      );
      ?>
      <?php if($the_query->have_posts()): ?>
      <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php
        $language = SCF::get('language');
        $link = SCF::get('link');

        ?>

      <div class="worklist">
        <div class="work_thumbnail">
          <a href="<?php echo $link; ?>">
            <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </a>
        </div>
        <div class="l_worklist_inner">
          <h3 class="title"><a href="<?php echo $link; ?>"><?php the_title(); ?><i class="far fa-clone"></i></a></h3>
          <p class="text">使用言語：<?php echo $language; ?></p>
          <div class="l_worklist_content">
            <div class="worklist_content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>

    <?php endwhile; ?>
    <?php if ($the_query->max_num_pages > 1) : ?>
<?php
  $limitnum = 999999999;
  echo '<div class="pagenation">';
  echo paginate_links(array(
    'base'         => str_replace($limitnum, '%#%', esc_url(get_pagenum_link($limitnum))),
    'format'       => '',
    'current'      => max(1, get_query_var('paged')),
    'total'        => $the_query->max_num_pages,
    'prev_next'    => false,
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
  ));
  echo '</div>';
?>
<?php endif; ?>
    <?php if( function_exists("the_pagination") ) the_pagination(); ?>
  <?php endif; ?>
  <!-- /メインループ【実績】 -->
    </div>
  </div>
</div>

<?php get_footer(); ?>
