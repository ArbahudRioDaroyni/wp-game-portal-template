<div class="col-md-6">
  <div class="nk-widget">
    <h4 class="nk-widget-title"><span class="text-main-1">Artikel</span> Terbaru</h4>
    <div class="nk-widget-content">
      <div class="row vertical-gap sm-gap">
        <?php
          $posts_array = get_list_posts(4, null, null, 0);
          foreach ( $posts_array as $post ) : setup_postdata( $post );
        ?>
        <div class="col-lg-6">
          <div class="nk-widget-post-2">
            <a href="<?= get_the_permalink() ?>" class="nk-post-image">
              <?php
              // check if the post or page has a Featured Image assigned to it.
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('thumbnail', ['class' => 'recent-img']);
              } else { ?>
                <img class="recent-img" src="<?= get_first_image_in_post() ?>" class="lazy" alt="<?= get_the_title() ?>" />
              <?php } ?>
            </a>
            <div class="nk-post-title"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></div>
            <div class="nk-post-date">
              <ion-icon name="calendar-clear-outline"></ion-icon>
              <?php the_time('D, d F Y'); ?>
              <ion-icon name="chatbubbles-outline"></ion-icon>
              <span><?= get_comments_number(); ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; wp_reset_postdata() ?>
      </div>
    </div>
  </div>
</div>