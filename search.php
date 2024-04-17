<?php
  /**
   * The template for displaying the search result page
   *
   * Displays all of the element and everything up until the "content-area" div.
   *
   * @link https://github.com/ArbahudRioDaroyni/wp-game-portal
   * @package WP Game Portal
   * @subpackage WP Game Portal
   * @since 1.0.0
   */
  
  get_header();
?>
<div id="primary" class="content-area nk-main">

  <main id="main" class="container site-main" role="main">
	<!-- START: Breadcrumbs -->
  <?php get_template_part( 'template-parts/components/breadcrumbs' ); ?>
  <!-- END: Breadcrumbs -->
    <div class="row vertical-gap">
      <div class="col-lg-8">
        <!-- START: category page -->
        <div class="nk-blog-list">
          <h2 class="nk-decorated-h"><span>Hasil untuk <span class="text-main-1"><?= get_query_var( 's' ) ?></span></span></h2>
          <?php
            $args = [
              's'               => get_search_query(),
              'posts_per_page'  => 10,
              'paged'           => ( get_query_var('paged')) ? get_query_var('paged' ) : 1,
              'post_type'       => 'post',
              'category_name'   => get_the_category()[0]->name,
            ];
            $postslist = new WP_Query( $args );
                
            if ( $postslist->have_posts() ) : ?>
              <!-- START: Post -->
                <?php while ( $postslist->have_posts() ) : $postslist->the_post(); ?>
                  <div class="nk-blog-post">
                    <div class="row vertical-gap">
                      <div class="col-md-5 col-lg-6">
                        <a href="<?= get_the_permalink() ?>" class="nk-post-img">
                          <?php
                          // check if the post or page has a Featured Image assigned to it.
                          if ( has_post_thumbnail() ) {
                            the_post_thumbnail('medium_large');
                          } else { ?>
                            <img src="<?= get_first_image_in_post() ?>" class="lazy" alt="<?= get_the_title() ?>" />
                          <?php } ?>
                          <span class="nk-post-comments-count">4</span>
                          <span class="nk-post-categories">
                            <span class="bg-main-<?= get_the_category()[0]->slug ?>"><?= get_the_category()[0]->name ?></span>
                          </span>
                        </a>
                      </div>
                      <div class="col-md-7 col-lg-6">
                        <h2 class="nk-post-title h4"><a href="<?= get_the_permalink() ?>"><?php the_title() ?></a></h2>

                        <div class="nk-post-text">
                          <p><?= wp_trim_words( get_the_excerpt(), $num_words = 20, $more = null ) ?></p>
                        </div>

                        <div class="nk-post-by">
                          <img src="<?= get_avatar_url( $comment, null ) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="rounded-circle" width="35">
                            Ditulis oleh 
                          <a rel="nofollow" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a> - 
                          <time class="entry-date updated a-publish" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time( 'l, d F Y' ); ?></time>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <!-- END: Post -->

              <?php wp_reset_postdata();
            endif;
          ?>
        </div>
        <!-- END: category page -->
      </div>
      <div class="col-lg-4">
        <!-- START: Sidebar -->
        <?php get_sidebar(); ?>
        <!-- END: Sidebar -->
      </div>
    </div>
  </main>
  <div class="nk-gap-2"></div>
</div>

<!-- START: Page Background -->
<?php
// check if the post or page has a Featured Image assigned to it.
if ( has_post_thumbnail() ) {
  the_post_thumbnail(NULL, ['class' => 'nk-page-background-top top-gradient-opacity']); ?>
<?php } else { ?>
  <img src="<?= get_first_image_in_post() ?>" class="nk-page-background-top top-gradient-opacity" alt="<?= get_the_title() ?>" />
<?php } ?>
<!-- END: Page Background -->

<!-- START: Search Modal -->
<?php get_template_part( 'template-parts/modals/search' ); ?>
<!-- END: Search Modal -->

<!-- START: Login Modal -->
<?php get_template_part( 'template-parts/modals/login' ); ?>
<!-- END: Login Modal -->

<?php get_footer() ?>