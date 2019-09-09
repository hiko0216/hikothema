<?php get_header(); ?>
<!-- メインページ -->
    <section class="main">
      <div class="container">
        <div class="row">
          <!-- 記事一覧 -->
          <div class="col-md-8 searchwrap">
            <h2><?php the_search_query(); ?> の検索結果</h2>
                            <?php
                if (have_posts() && get_search_query()) :
                  while (have_posts()) :
                    the_post();
                    ?>
                    <div class="post">
                      <a class="damy" href="<?php the_permalink(); ?>"></a>
                      <div class="container">
                        <div class="row toukou">
                          <div class="image">
                            <?php the_post_thumbnail(); ?>
                            <span><?php the_category(); ?></span>
                          </div>
                          <div class="post-des">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <span><?php the_date(); ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                endwhile;?>



                <?php else : ?>
                <div class="col-full">
                  <div class="wrap-col">
                  <p>検索キーワードに該当する記事がございませんでした。<br>
                  カテゴリーやタグから探してみてください。</p>
                  </div>
                </div>
                <?php endif; ?>
            <!-- パージ送り -->
            <div class="pagenations">
              <?php
    $big = 9999999999;
    $arg = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $wp_query->max_num_pages
    );
    echo paginate_links($arg);
?>
            </div>
          </div>
          <!-- 記事一覧ここまで -->
          <!--  サイドバー-->
          <div class="col-md-4">
            <?php
            get_sidebar(); ?>

          </div>
          <!--  サイドバーこkまで-->

        </div>
      </div>
    </section>
    <!-- メインここまで -->
    <?php get_footer(); ?>
