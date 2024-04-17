<div class="nk-widget nk-widget-highlighted">
  <h4 class="nk-widget-title"><span><span class="text-main-1"><?= get_the_tags()[0]->slug ?></span> Popular</span></h4>
  <div class="nk-widget-content">
    <?php
      $posts_array = get_list_posts(3, get_the_category()[0]->name, get_the_tags()[0]->slug , 0, 'post_views_count');
      foreach ( $posts_array as $post ) : setup_postdata( $post );
    ?>
    <div class="nk-widget-post">
      <a href="<?= get_the_permalink() ?>" class="nk-post-image">
        <?php
        // check if the post or page has a Featured Image assigned to it.
        if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'thumbnail', ['class' => 'recent-img'] );
        } else { ?>
          <img class="recent-img" src="<?= get_first_image_in_post() ?>" class="lazy" alt="<?= get_the_title() ?>" />
        <?php } ?>
      </a>
      <h5 class="nk-post-title h4"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h5>
      <div class="nk-post-date">
        <span>
          <ion-icon name="calendar-outline"></ion-icon>
          <?php the_time('D, d F Y'); ?>
        </span>
      </div>
    </div>
    <?php endforeach; wp_reset_postdata() ?>
  </div>
</div>