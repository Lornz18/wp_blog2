<?php get_header();?>
    <section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1>The Blog</h1>
          <div class="banner__grid">
            <div class="banner__main">
            <?php $cardLg = new WP_Query(array(
                'post_type' => 'post',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'card-lg-banner',
                        'include_children' => false,
                    ),
                )
            ))
            ?>
            <?php if($cardLg->have_posts()) : while($cardLg->have_posts()) : $cardLg->the_post()?>
              <article class="banner__story">
                <?php if(has_post_thumbnail()){
                    the_post_thumbnail();
                }?> 
                <div class="banner__story__content">
                  <small><?php echo get_the_date(); ?></small>
                  <h2><?php the_title();?></h2>
                  <p>
                    <?php echo wp_trim_words(get_the_content(), 30);?>
                  </p>
                  <a href="<?php the_permalink(); ?>">Read More...</a>
                </div>
              </article>
            <?php endwhile; 
                else : 
                    echo "wala nang post";
                endif;
                wp_reset_postdata();
            ?>
            </div>

            <div class="banner__sidebar">
                <?php $cardSm = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'card-sm-banner',
                                'include_children' => false,
                            ),
                        )
                    ))
                ?>
                <?php if($cardSm->have_posts()) : while($cardSm->have_posts()) : $cardSm->the_post()?>
                <div class="card__sm">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail('banner-sm');
                    }?> 
                    <div class="card__sm__content">
                        <small><?php echo get_the_date(); ?></small>
                        <h3><?php the_title();?></h3>
                        <a href="<?php the_permalink(); ?>">Read More...</a>
                    </div>
                </div>
                <?php endwhile; 
                    else : 
                        echo "wala nang post";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="latest">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__wrapper">
          <?php $latest = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'date_query' => array(
                  array(
                    'after' => 'June 20, 2023',
                    'before' => 'June 25, 2023',
                    'inclusive' => true,
                  ),
                )
            ))
          ?>
          <?php if($latest->have_posts()) : while($latest->have_posts()) : $latest->the_post()?>
          <div class="card__md">
            <?php if(has_post_thumbnail()){
              the_post_thumbnail('thumbnail');
            } ?>
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_the_date('d S'); ?></small></li>
                <li><small><?php echo get_the_category($id)[0]->name ?></small></li>
              </ul>
              <h3>
                <?php the_title();?>
              </h3>

              <p>
                <?php echo wp_trim_words(get_the_content(), 10); ?>
              </p>
              <a href="<?php the_permalink(); ?>">Read More...</a>
            </div>
          </div>
          <?php endwhile; 
              else : 
                  echo "wala nang post";
              endif;
              wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>

    <section class="feature">
      <?php $featLg = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'meta_query' => array(
                  array(
                    'key' => 'feat-size',
                    'value' => 'feat-lg',
                    'compare' => 'LIKE',
                  ),
                )
            ))
      ?>
      <?php if($featLg->have_posts()) : $featLg->the_post()?>
      <div class="feature__content">
        <h2>Feature New</h2>
        <h3 class="block__header">
          <?php the_title();?>
        </h3>
        <p>
          <?php echo wp_trim_words(get_the_content(), 10); ?>
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
          <?php if(has_post_thumbnail()){
              the_post_thumbnail('thumbnail');
          } ?>
        </div>
      </div>
      <?php
          else : 
              echo "wala nang post";
          endif;
          wp_reset_postdata();
      ?>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">
          <?php $featMd = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'meta_query' => array(
                  array(
                    'key' => 'feat-size',
                    'value' => 'feat-md',
                    'compare' => 'LIKE',
                  ),
                )
            ))
          ?>
          <?php if($featMd->have_posts()) : while($featMd->have_posts()) : $featMd->the_post()?>
            <article class="card__lg">
              <?php if(has_post_thumbnail()){
                the_post_thumbnail('thumbnail');
              } ?>
              <div class="card__lg__content">
                <small><?php echo get_the_date('d S'); ?></small>
                <h3>
                  <?php the_title();?>
                </h3>
                <p>
                <?php echo wp_trim_words(get_the_content(), 10); ?>
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>
            <?php endwhile;
                else : 
                    echo "wala nang post";
                endif;
                wp_reset_postdata();
            ?>
          </div>
          <div class="feature__sidebar">
          <?php $latest = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'date_query' => array(
                  array(
                    'after' => 'June 20, 2023',
                    'before' => 'June 25, 2023',
                    'inclusive' => true,
                  ),
                )
            ))
          ?>
          <?php if($latest->have_posts()) : while($latest->have_posts()) : $latest->the_post()?>
            <div class="card__mini">
              <small><?php echo get_the_date('d S'); ?></small>
              <h4>
                <?php the_title();?>
              </h4>
              <a href="#">Read More ...</a>
            </div>
            <?php endwhile;
                else : 
                    echo "wala nang post";
                endif;
                wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </section>

<?php get_footer();?>