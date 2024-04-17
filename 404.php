<?php
  /**
   * The template for displaying the home
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
<main id="main" class="container site-main" role="main">
  <div class="nk-fullscreen-block">
    <div class="nk-fullscreen-block-top">
      <div class="text-center">
        <div class="nk-gap-4"></div>
        <a href="<?= get_home_url() ?>"><img src="<?= get_logo() ?>" alt="jejakcyber" width=160></a>
        <div class="nk-gap-2"></div>
      </div>
    </div>
    <div class="nk-fullscreen-block-middle">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
            <h1 class="text-main-1" style="font-size: 150px;">404</h1>
            <div class="nk-gap"></div>
            <h2 class="h4">You chose the wrong path!</h2>
            <div>Or such a page just doesn't exist... <br> Would you like to go back to the homepage?</div>
            <div class="nk-gap-3"></div>
            <a href="<?= get_home_url() ?>" class="nk-btn nk-btn-rounded nk-btn-color-white">Return to Homepage</a>
          </div>
        </div>
        <div class="nk-gap-3"></div>
      </div>
    </div>
    <div class="nk-fullscreen-block-bottom">
      <div class="nk-gap-2"></div>
      <ul class="nk-social-links-2 nk-social-links-center">
        <li><a class="nk-social-facebook" href="https://facebook.com/fbjejakcyber/"><ion-icon style="margin-top: 4px;" name="logo-facebook"></ion-icon></a></li>
        <li><a class="nk-social-youtube" href="https://www.youtube.com/channel/UCJNyJT_mnde2Edrxn1PnPmg"><ion-icon style="margin-top: 4px;" name="logo-Youtube"></ion-icon></a></li>
        <!-- Additional Social Buttons
          <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
          <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
          <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
          <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
          <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
          <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
          <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
          <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
          <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
          <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
          <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
          <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
          <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
          <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
          <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
          <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
          <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
          <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
          <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
          <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
          <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
          <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
          <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
          <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
          <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
          <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
          <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
          -->
      </ul>
      <div class="nk-gap-2"></div>
    </div>
  </div>
</main>

<!-- START: Page Background -->
<div class="nk-page-background-fixed" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/bg-fixed-2.jpg');"></div>
<!-- END: Page Background -->

<?php get_footer() ?>