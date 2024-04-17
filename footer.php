    <?php if (is_single()) { ?>
      <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/toc.min.js"></script> 
    <?php } ?>

    <!-- START: Footer -->
    <?php $footer = (!is_404()) ? get_template_part( 'template-parts/components/footer-navigation' ) : '' ; ?>
    <!-- END: Footer -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js" defer></script>
    
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap/dist/js/bootstrap.min.js" defer></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/gsap/src/minified/TweenMax.min.js" defer></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/sticky-kit/dist/sticky-kit.min.js" defer></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/photoswipe/dist/photoswipe.min.js" defer></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js" defer></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/hammerjs/hammer.min.js" defer></script>

    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js" defer></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/goodgames.min.js" defer></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/goodgames-init.js" defer></script>
  </body>
</html>