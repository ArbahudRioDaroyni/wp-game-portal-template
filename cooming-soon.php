<?php
/**
 * Template Name: Cooming Soon
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @link https://jejakcyber.com
 *
 * @package Wordpress
 * @subpackage Game_Portal
 * @since Game_Portal 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jejak Cyber | Coming Soon</title>
    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">
    <link rel="icon" type="image/png" href="<?php // echo get_template_directory_uri() ?>/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- GoodGames -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/goodgames.css">
    <!-- END: Styles -->
    <!-- jQuery -->
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  </head>
  <!--
    Additional Classes:
        .nk-page-boxed
    -->
  <body>
    <div class="nk-main">
      <div class="nk-fullscreen-block">
        <div class="nk-fullscreen-block-top">
          <div class="text-center">
            <div class="nk-gap-4"></div>
            <a href="#">
              <img style="width: 148px" src="https://jejakcyber.com/wp-content/uploads/2021/02/Logo-Jejak-Cyber.png" alt="JejakCyber">
            </a>
            <div class="nk-gap-2"></div>
          </div>
        </div>
        <div class="nk-fullscreen-block-middle">
          <div class="container text-center">
            <h1 class="h3">Coming Soon</h1>
            <!--
              START: Countdown
              
              Additional Classes:
                  .nk-countdown-center
                  .nk-countdown-right
              -->
            <div class="nk-gap-2"></div>
            <div class="nk-countdown nk-countdown-center" data-end="2021-3-26 08:20" data-timezone="EST"></div>
            <!-- END: Countdown -->
            <div class="nk-gap-2"></div>
            <strong class="text-white">Subscribe now or you'll miss all the fun!</strong>
            <div class="nk-gap-2"></div>
            <div class="row">
              <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                <!-- START: MailChimp Signup Form -->
                <form action="//nkdev.us11.list-manage.com/subscribe/post?u=d433160c0c43dcf8ecd52402f&amp;id=7eafafe8f0" method="post" class="nk-mchimp validate" target="_blank">
                  <div class="input-group">
                    <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Enter your Email">
                    <button class="nk-btn nk-btn-rounded nk-btn-color-white ml-20">Subscribe</button>
                  </div>
                  <div class="nk-form-response-success"></div>
                  <div class="nk-form-response-error"></div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d433160c0c43dcf8ecd52402f_7eafafe8f0" tabindex="-1" value=""></div>
                </form>
                <!-- END: MailChimp Signup Form -->
              </div>
            </div>
            <div class="nk-gap-3"></div>
          </div>
        </div>
        <div class="nk-fullscreen-block-bottom">
          <div class="nk-gap-2"></div>
          <ul class="nk-social-links-2 nk-social-links-center">
            <li><a class="nk-social-rss" href="#"><ion-icon style="margin-top: 4px" aria-label="Share RSS" name="logo-rss"></ion-icon></a></li>
            <li><a class="nk-social-twitch" href="#"><ion-icon style="margin-top: 4px" aria-label="Share page on Twitch" name="logo-twitch"></ion-icon></a></li>
            <li><a class="nk-social-steam" href="#"><ion-icon style="margin-top: 4px" aria-label="Share page on Steam" name="logo-steam"></ion-icon></a></li>
            <li><a class="nk-social-facebook" href="#"><ion-icon style="margin-top: 4px" aria-label="Share page on Facebook" name="logo-facebook"></ion-icon></a></li>
            <li><a class="nk-social-pinterest" href="#"><ion-icon style="margin-top: 4px" aria-label="Share page on Instagram" name="logo-instagram"></ion-icon></a></li>
            <li><a class="nk-social-twitter" href="#" target="_blank"><ion-icon style="margin-top: 4px" aria-label="Share page on Twitter" name="logo-twitter"></ion-icon></a></li>
            <li><a class="nk-social-pinterest" href="#"><ion-icon style="margin-top: 4px" aria-label="Share page on Pinterext" name="logo-pinterest"></ion-icon></a></li>
          </ul>
          <div class="nk-gap-2"></div>
        </div>
      </div>
    </div>
    <!-- START: Page Background -->
    <div class="nk-page-background-fixed" style="z-index: -1;background-image: url('<?= get_template_directory_uri() ?>/assets/images/bg-fixed-1.jpg');"></div>
    <!-- END: Page Background -->
    <!-- START: Scripts -->
    <script type='text/javascript' src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!-- Jquery Countdown + Moment -->
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/moment/min/moment.min.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
    <!-- GoodGames -->
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/js/goodgames.min.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/js/goodgames-init.js"></script>
    <!-- END: Scripts -->
  </body>
</html>