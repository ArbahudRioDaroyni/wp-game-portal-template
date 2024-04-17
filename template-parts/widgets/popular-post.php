<div class="nk-widget nk-widget-highlighted">
  <h4 class="nk-widget-title"><span><span class="text-main-1">Paling</span> Populer</span></h4>
  <div class="nk-widget-content">
    <?php
      $posts_array = get_list_popular_posts(3, null);
      foreach ( $posts_array as $post ) : setup_postdata( $post );
    ?>
    <div class="nk-widget-post">
      <a href="<?= get_the_permalink() ?>" class="nk-post-image">
        <?php
        // check if the post or page has a Featured Image assigned to it.
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('thumbnail', ['class' => 'recent-img']);
        } else { ?>
          <img class="recent-img" src="<?= get_first_image_in_post() ?>" class="lazy" loading="lazy" alt="<?= get_the_title() ?>" />
        <?php } ?>
      </a>
      <h3 class="nk-post-title"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h3>
      <!-- <div class="nk-product-rating" data-rating="4"> <ion-icon name="star-sharp"></ion-icon><ion-icon name="star-sharp"></ion-icon><ion-icon name="star-sharp"></ion-icon><ion-icon name="star-sharp"></ion-icon></div> -->
      <!-- <div class="nk-product-price"><ion-icon name="eye-outline"></ion-icon> <?php // get_post_view() ?> pengunjung</div> -->
    </div>
    <?php endforeach; wp_reset_postdata() ?>
  </div>
</div>