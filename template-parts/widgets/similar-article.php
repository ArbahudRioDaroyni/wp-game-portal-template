<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Artikel</span> Terkait</span></h3>
<div class="nk-gap"></div>
<div class="row">
  <?php
    $posts_array = get_list_posts($total = 2, $category = NULL, $tag = get_the_tags()[0]->name, $offset = 0);
    foreach ( $posts_array as $post ) : setup_postdata( $post );
  ?>
  <div class="col-md-6">
    <!-- START: Post -->
    <div class="nk-blog-post">
      <a href="<?= get_the_permalink() ?>" class="nk-post-img">
        <?php
        // check if the post or page has a Featured Image assigned to it.
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('medium', ['class' => 'similar-img']);
        } else { ?>
          <img class="similar-img" src="<?= get_first_image_in_post() ?>" class="lazy" alt="<?= get_the_title() ?>" />
        <?php } ?>
        <span class="nk-post-comments-count"><?= get_comments_number(); ?></span>
        <span class="nk-post-categories d-flex">
        <span class="bg-main-1"><?= get_the_category()[0]->name ?></span>
      </a>
      <div class="nk-gap"></div>
      <h4 class="nk-post-title h4"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h4>
    </div>
    <!-- END: Post -->
  </div>
  <?php endforeach; wp_reset_postdata() ?>

  <!-- ads -->
  <div class="col-md-6">
    <div class="nk-blog-post">
      <?= get_template_part( 'template-parts/ads/ads', 'widgets-similar-article.php' ); ?>
    </div>
  </div>
  <div class="col-md-6">
    <div class="nk-blog-post">
      <?= get_template_part( 'template-parts/ads/ads', 'widgets-similar-article.php' ); ?>
    </div>
  </div>
  <!-- /. ads -->
</div>