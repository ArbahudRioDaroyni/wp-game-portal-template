<div class="nk-gap-1"></div>
<nav class="container pl-0 pr-0 ml-0 mr-0">
  <ol class="nk-breadcrumbs">
    <?php if ( is_single() ) { ?>
      <li><a href="<?= get_home_url() ?>">Halaman Depan</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li><a href="<?= esc_url( get_category_link( get_cat_ID( get_the_category()[0]->name ) ) ) ?>"><?= get_the_category()[0]->name ?></a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li class="entry-header">
        <h1 class="entry-title nk-post-title h2">
          <?php the_title(); ?>
        </h1>
      </li>
    <?php } elseif ( is_category() ) { ?>
      <li><a href="<?= get_home_url() ?>">Halaman Depan</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li><a href="<?= get_home_url() ?>/blog/">Blog</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li class="entry-header">
        <h1 class="entry-title nk-post-title h2">
          <a href="<?= esc_url( get_category_link( get_cat_ID( get_the_category()[0]->name ) ) ) ?>" rel="bookmark" class="mr-10"><?= get_the_category()[0]->name ?></a>
        </h1>
      </li>
    <?php } elseif ( is_tag() ) { ?>
      <li><a href="<?= get_home_url() ?>">Halaman Depan</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li><a href="<?= get_home_url() ?>/blog/">Blog</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li class="entry-header">
        <h1 class="entry-title nk-post-title h2">
          <a href="<?= esc_url( get_tag_link( get_queried_object()->slug ) ) ?>" rel="bookmark" class="mr-10"><?= single_tag_title() ?></a>
        </h1>
      </li>
    <?php } elseif ( is_page('blog') ) { ?>
      <li><a href="<?= get_home_url() ?>">Halaman Depan</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li class="entry-header">
        <h1 class="entry-title nk-post-title h2">
          <a href="<?= get_home_url() ?>/blog/" rel="bookmark" class="mr-10">Blog</a>
        </h1>
      </li>
    <?php } elseif ( is_page('live-rtp-slot') ) { ?>
      <li><a href="<?= get_home_url() ?>">Halaman Depan</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li class="entry-header">
        <h1 class="entry-title nk-post-title h2">
          <a href="<?= get_home_url() ?>/blog/" rel="bookmark" class="mr-10">Live RTP Slot</a>
        </h1>
      </li>
    <?php } elseif ( is_singular( [ 'aplikasi' ] ) ) { ?>
      <li><a href="<?= get_home_url() ?>">Halaman Depan</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li><a href="<?= get_home_url() ?>/aplikasi/">Aplikasi</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li class="entry-header">
        <h1 class="entry-title nk-post-title h2">
          <a href="<?php the_permalink(); ?>" rel="bookmark" class="mr-10"><?php the_title(); ?></a>
        </h1>
      </li>
    <?php } ?>
  </ol>
</nav>
<div class="nk-gap-1"></div>
