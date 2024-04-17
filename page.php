<?php
  /**
   * The template for displaying the page
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
    <div class="row vertical-gap">
      <div class="col-lg-8">
        <!-- START: Post -->
        <div class="nk-blog-post nk-blog-post-single">

          <!-- START: page Text -->
          <?php
            // Start the loop.
            while ( have_posts() ) :
              the_post();
              
              // Include the page page content template.
              get_template_part( 'template-parts/content/content', 'page' );

              // End of the loop.
            endwhile;
            
            // share widget
            get_template_part( 'template-parts/components/share' );
          ?>
          <!-- END: Post Text -->

          <div class="nk-gap-2"></div>

          <!-- START: Latest Applications -->
          <?php get_template_part( 'template-parts/widgets/other-apps' ); ?>
          <!-- END: Latest Applications -->

          <div class="nk-gap-2"></div>

          <!-- START: Similar Articles -->
          <?php get_template_part( 'template-parts/widgets/similar-article' ); ?>
          <!-- END: Similar Articles -->
          
          <!-- START: Comments -->
          <?php comments_template( '/comments.php' ); ?>
          <!-- END: Comments -->

          <!-- START: Reply -->
          <div class="nk-gap-2"></div>
          <?= the_comment_form() ?>
          <!-- END: Reply -->

        </div>
        <!-- END: Post -->
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