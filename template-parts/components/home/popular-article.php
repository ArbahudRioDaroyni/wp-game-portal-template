<div class="nk-gap-2"></div>
<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Artikel</span> Terpopuler</span></h3>
<div class="nk-gap"></div>
<div class="nk-news-box">
  <div class="nk-news-box-list">
    <div class="nano">
      <div class="nano-content">
        <?php
          $i = 1;
          $posts_array = get_list_popular_posts(7, 0);
          foreach ( $posts_array as $post ) : setup_postdata( $post );
        ?>
          <div class="nk-news-box-item <?= $j = ($i == 1) ? 'nk-news-box-item-active' : ''; ?>">
            <div class="nk-news-box-item-img crop-center">
              <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'thumbnail', [ 'alt' => get_the_title() ] );
                } else { ?>
                  <img src="<?= get_first_image_in_post() ?>" alt="<?= get_the_title() ?>" />
              <?php } ?>
            </div>
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium_large', [
                  'alt'     => get_the_title(),
                  'class'   => 'nk-news-box-item-full-img'
                ] );
              } else { ?>
                <img src="<?= get_first_image_in_post() ?>" alt="<?= get_the_title() ?>" class="nk-news-box-item-full-img" />
            <?php } ?>
            <h3 class="nk-news-box-item-title"><?= get_the_title() ?></h3>
            <span class="nk-news-box-item-categories">
            <span class="bg-main-<?= get_the_category()[0]->slug ?>"><?= get_the_category()[0]->name ?></span>
            </span>
            <div class="nk-news-box-item-text">
              <p><?= wp_trim_words( get_the_excerpt(), $num_words = 35, $more = null ); ?></p>
            </div>
            <a href="<?= get_the_permalink() ?>" class="nk-news-box-item-url">Selengkapnya</a>
            <div class="nk-news-box-item-date">
              <ion-icon name="calendar-clear-outline"></ion-icon> <?= get_the_time('d F Y'); ?>
            </div>
          </div>
        <?php $i++; endforeach; wp_reset_postdata() ?>
      </div>
    </div>
  </div>
  <div class="nk-news-box-each-info">
    <div class="nano">
      <div class="nano-content">
        <?php
          $posts_array = get_list_popular_posts(1, 0);
          foreach ( $posts_array as $post ) : setup_postdata( $post );
        ?>
          <div class="nk-news-box-item-image">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium_large', [ 'alt' => get_the_title() ] );
              } else { ?>
                <img src="<?= get_first_image_in_post() ?>" alt="<?= get_the_title() ?>" />
            <?php } ?>
            <span class="nk-news-box-item-categories">
            <span class="bg-main-<?= get_the_category()[0]->slug ?>"><?= get_the_category()[0]->name ?></span>
            </span>
          </div>
          <h3 class="nk-news-box-item-title"><?= get_the_title() ?></h3>
          <div class="nk-news-box-item-text">
            <p><?= wp_trim_words( get_the_excerpt(), $num_words = 25, $more = null ); ?></p>
          </div>
          <a href="<?= get_the_permalink() ?>" class="nk-news-box-item-more">Selengkapnya</a>
          <div class="nk-news-box-item-date mt-0">
            <ion-icon name="calendar-clear-outline"></ion-icon> <?= get_the_time('d F Y'); ?>
          </div>
        <?php endforeach; wp_reset_postdata() ?>
      </div>
    </div>
  </div>
</div>

<div class="nk-gap-2"></div>

<div class="nk-blog-grid">
  <div class="row">
    <?php
      $i = 1;
      $posts_array = get_list_popular_posts(4, 7);
      foreach ( $posts_array as $post ) : setup_postdata( $post );
    ?>
      <div class="col-md-6 col-lg-3">
        <div class="nk-blog-post">
          <a href="<?= get_the_permalink() ?>" class="nk-post-img">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'medium', [ 'alt' => get_the_title() ] );
            } else { ?>
              <img src="<?= get_first_image_in_post() ?>" alt="<?= get_the_title() ?>" />
          <?php } ?>
          <span class="nk-post-comments-count">13</span>
          <span class="nk-post-categories">
          <span class="bg-main-<?= get_the_category()[0]->slug ?>"><?= get_the_category()[0]->name ?></span>
          </span>
          </a>
          <div class="nk-gap"></div>
          <h2 class="nk-post-title h4"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h2>
          <!-- <div class="nk-post-text">
            <p><?php // echo wp_trim_words( get_the_excerpt(), $num_words = 30, $more = null ); ?></p>
          </div>
          <div class="nk-gap"></div> -->
          <a href="<?= get_the_permalink() ?>" class="nk-btn nk-btn-color-main-1 nk-btn-hover-outline">Baca</a>
          <div class="nk-post-date float-right"><ion-icon name="calendar-clear-outline"></ion-icon> <?= get_the_time('d F, Y'); ?></div>
        </div>
      </div>
    <?php endforeach; wp_reset_postdata() ?>
  </div>
</div>