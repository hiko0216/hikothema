<?php get_header(); ?>
<!-- メインページ -->
    <section class="main">
      <div class="container">
        <div class="row">
          <!-- 記事一覧 -->
          <div class="col-md-8">
            <div class="posts">
              <?php
                if(have_posts()):
                  while(have_posts()):
                    the_post();
               ?>
              <div class="post">
                <div class="container">
                  <div class="row single">
                    <div class="pan">
                      <?php mytheme_breadcrumb(); ?>
                    </div>



                    <div class="imagesin">
                      <h2><?php the_title(); ?></h2>
                      <?php the_category(); ?>
                      <?php the_post_thumbnail(); ?>
                      <p><?php the_date(); ?></p>
                    </div>
                    <div class="post-dessin">
                      <p><?php the_content(); ?></p>
                    </div>
                  </div>
                </div>
              </div>
          <?php
        endwhile;
      endif;
           ?>
            </div>
            <div class="sns">
              <?php get_template_part( 'sns' ); ?>
            </div>
            <!-- パージ送り -->
            <div id="prev_next" class="clearfix">
                    <?php
                    $prevpost = get_adjacent_post(false, '', true); //前の記事
                    $nextpost = get_adjacent_post(false, '', false); //次の記事
                    if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
                    ?>
                    <?php
                    if ( $prevpost ) { //前の記事が存在しているとき
                    echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" id="prev" class="clearfix">
                    <div id="prev_title">前の記事</div>
                    ' . get_the_post_thumbnail($prevpost->ID, array(100,100)) . '
                    <p>' . get_the_title($prevpost->ID) . '</p></a>';
                    } else { //前の記事が存在しないとき
                    echo  '<div id="prev_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
                    </div></a></div>';
                    }
                    if ( $nextpost ) { //次の記事が存在しているとき
                    echo '<a href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" id="next" class="clearfix">
                    <div id="next_title">次の記事</div>
                    ' . get_the_post_thumbnail($nextpost->ID, array(100,100)) . '
                    <p>'. get_the_title($nextpost->ID) . '</p></a>';
                    } else { //次の記事が存在しないとき
                    echo '<div id="next_no"><a href="' .home_url('/'). '"><div id="prev_next_home">TOPへ
                    </div></a></div>';
                    }
                    ?>
                    <?php } ?>
                    </div>
          <!-- コメント -->
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php endwhile; else : ?>
<?php endif; ?>
<?php comments_template(); ?>
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
