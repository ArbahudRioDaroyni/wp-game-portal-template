<?php
  /**
   * The template for displaying the blog page
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
<div id="primary" class="content-area nk-main is-blog">

  <main id="main" class="container site-main" role="main">
	<!-- START: Breadcrumbs -->
  <?php get_template_part( 'template-parts/components/breadcrumbs' ); ?>
  <!-- END: Breadcrumbs -->
    <div class="row vertical-gap">
      <div class="col-lg-8">
        <!-- START: blog page -->
        <div class="nk-blog-grid">
          <?php
            $args = [
              'posts_per_page' => 10,
              'paged' => ( get_query_var('paged')) ? get_query_var('paged' ) : 1,
              'post_type' => 'post'
            ];
            $postslist = new WP_Query( $args );
                
            if ( $postslist->have_posts() ) : ?>
              <div class="row">
                <?php while ( $postslist->have_posts() ) : $postslist->the_post(); ?>
                  
                  <div class="col-md-6">
                      <!-- START: Post -->
                      <div class="nk-blog-post">
                        <a href="<?= get_the_permalink() ?>" class="nk-post-img">
                          <?php
                          // check if the post or page has a Featured Image assigned to it.
                          if ( has_post_thumbnail() ) {
                            the_post_thumbnail('medium_large');
                          } else { ?>
                            <img src="<?= get_first_image_in_post() ?>" class="lazy" alt="<?= get_the_title() ?>" />
                          <?php } ?>
                          <span class="nk-post-comments-count"><?= get_comments_number(); ?></span>
                          <span class="nk-post-categories">
                            <span class="bg-main-<?= get_the_category()[0]->slug ?>"><?= get_the_category()[0]->name ?></span>
                          </span>
                        </a>
                        <div class="nk-gap"></div>
                        <h2 class="nk-post-title h4"><a href="<?= get_the_permalink() ?>"><?php the_title() ?></a></h2>
                        <div class="nk-post-by">
                          <img src="<?= get_avatar_url( $comment, null ) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="rounded-circle" width="35">
                          Ditulis oleh 
                          <a rel="nofollow" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a> - 
                          <time class="entry-date updated a-publish" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time( 'l, d F Y' ); ?></time>
                        </div>
                        <div class="nk-gap"></div>
                        <div class="nk-post-text">
                            <p><?= wp_trim_words( get_the_excerpt(), $num_words = 20, $more = null ) ?></p>
                        </div>
                        <div class="nk-gap"></div>
                        <a href="<?= get_the_permalink() ?>" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Selengkapnya</a>
                      </div>
                      <!-- END: Post -->
                  </div>

                <?php endwhile; ?>
              </div>

              <!-- START: Pagination -->
              <?php $pages = paginate_links( [
                'base'        => get_pagenum_link(1) . '%_%',
                'format'      => 'page/%#%',
                'current'     => max(1, get_query_var('paged')),
                'end_size'    => 2,
                'total'       => ceil( count( get_list_posts( -1 ) ) / $posts_per_page ),
                'prev_text'   => __(' <ion-icon class="ion-ios-arrow-back" style="margin: 7px" name="chevron-back-outline"> '),
                'next_text'   => __(' <ion-icon class="ion-ios-arrow-back" style="margin: 7px" name="chevron-forward-outline"></ion-icon> '),
                'type'        => 'array',
              ]); ?>
              
              <div class="nk-pagination nk-pagination-center">
                <?php if( is_array( $pages ) ) { ?>
                  <nav role="navigation" aria-label="pagination">
                    <ul style="list-style: none;">
                      <?php
                      foreach ( $pages as $page ) { ?>
                        <li style="float: left" class="pl-15 pr-15"><?php echo str_replace('page-numbers', 'page-number', str_replace('current', 'nk-pagination-current text-main-1', $page)); ?></li>
                      <?php } ?>
                    </ul>
                  </nav>
                <?php } ?>
              </div>
              <!-- END: Pagination -->

              <?php wp_reset_postdata();
            endif;
          ?>
        </div>
        <!-- END: blog page -->
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

<!-- START: Login Modal -->
<?php get_template_part( 'template-parts/modals/login' ); ?>
<!-- END: Login Modal -->

<?php get_footer() ?>