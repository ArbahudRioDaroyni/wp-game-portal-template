<div class="nk-gap-2"></div>
<div class="nk-image-slider" data-autoplay="8000">
  <?php $posts_array = get_list_posts(4, 'game');
    foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
  <div class="nk-image-slider-item">
    <?php
      // check if the post or page has a Featured Image assigned to it.
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'large', [
          'class'       => 'nk-image-slider-img',
          'data-thumb'  => get_the_post_thumbnail_url(),
          'alt'         => get_the_title()
        ] );
      } else { ?>
        <img class="nk-image-slider-img" src="<?= get_first_image_in_post() ?>" data-thumb="<?= get_first_image_in_post() ?>" alt="<?= get_the_title() ?>" />
    <?php } ?>
    <div class="nk-image-slider-content">
      <h3 class="h4"><?= get_the_title() ?></h3>
      <p class="text-white"><?= wp_trim_words( get_the_excerpt(), $num_words = 25, $more = null ); ?></p>
      <a href="<?= get_the_permalink() ?>" class="nk-btn nk-btn-outline nk-btn-color-main-1">Read More</a>
    </div>
  </div>
  <?php endforeach; wp_reset_postdata() ?>
</div>