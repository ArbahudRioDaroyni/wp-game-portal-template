<?php

/**
 *
 * The template for displaying the header
 *
 *
 *
 * Displays all of the head element and everything up until the "header" tag.
 *
 *
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-game-portal
 *
 * @package WP Game Portal
 *
 * @subpackage WP Game Portal
 *
 * @since 1.0.0
 *
 */
?>
<!doctype html>
<html lang="<?= get_locale(); ?>">
  <head>
  <?php if (!is_singular('file')) { ?>
	<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <?php } ?>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" crossorigin="anonymous"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-3780041077137992",
		enable_page_level_ads: true,
		overlays: {bottom: true}
	  });
	</script>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="google-site-verification" content="1GS5b8XueaIk5rOTEhD8hwGXIfoZfAtK2KTCJlkJNDY" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XFEJEWE3X1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-XFEJEWE3X1');
    </script>
    <meta name="keywords" content="Game, Gaming, Review Game, Berita Game, Artikel Game, Trailer game, Gameplay">
    <meta name='author' content='<?php bloginfo( 'name' ); ?>' />
    <link rel="alternate" href="<?= get_site_url() ?>/?lang=in" hreflang="in"/>
    <link rel="alternate" href="<?= get_site_url() ?>/" hreflang="x-default"/>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?= get_site_url() ?>/xmlrpc.php" />
    
    <!-- start wp_head -->
    <?php wp_head(); ?>
    <!-- end wp_head -->

    <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/vendor/photoswipe/dist/photoswipe.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/css/goodgames.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= get_template_directory_uri() ?>/style.css?ver=2.5" as="style" onload="this.onload=null;this.rel='stylesheet'">
    
    <noscript><link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap/dist/css/bootstrap.min.css"></noscript>
    <noscript><link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/vendor/photoswipe/dist/photoswipe.css"></noscript>
    <noscript><link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/goodgames.css"></noscript>
    <noscript><link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css?ver=2.4"></noscript>
  </head>
  <body>
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-3780041077137992"></amp-auto-ads>
    <!-- <amp-analytics type="gtag" data-credentials="include">
      <script type="application/json">
        {
        "vars" : {
            "gtag_id": "UA-217780756-1",
          "config" : {
            "UA-217780756-1": { "groups": "default" }
          }
        }
        }
      </script>
    </amp-analytics> -->
    <amp-analytics type="googleanalytics" config="https://amp.analytics-debugger.com/ga4.json" data-credentials="include">
    <script  type="application/json">
    {
      "vars": {
        "GA4_MEASUREMENT_ID": "G-XFEJEWE3X1",
        "GA4_ENDPOINT_HOSTNAME": "www.google-analytics.com",
        "GOOGLE_CONSENT_ENABLED": false,
        "WEBVITALS_TRACKING": false,
        "PERFORMANCE_TIMING_TRACKING": false,
        "DEFAULT_PAGEVIEW_ENABLED": true,
        "SEND_DOUBLECLICK_BEACON": false,
        "DISABLE_REGIONAL_DATA_COLLECTION": false,
        "ENHANCED_MEASUREMENT_SCROLL": false
      }
    }
    </script>
    </amp-analytics>

    <?php if ( !is_404() ) {
      '<header class="header">'
      .get_template_part( 'template-parts/components/top-navs' )
      .get_template_part( 'template-parts/components/navbar' )
      .'</header>'
      .get_template_part( 'template-parts/components/navbar-mobile' );
    } ?>