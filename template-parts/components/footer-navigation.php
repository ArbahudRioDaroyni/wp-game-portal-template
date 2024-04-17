<footer class="nk-footer">
  <div class="container">
    <div class="nk-gap-3"></div>
    <div class="row vertical-gap">
      <div class="col-md-6">
        <div class="nk-widget">
          <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
          <div class="nk-widget-content">
            <form action="php/ajax-contact-form.php" class="nk-form nk-form-ajax">
              <div class="row vertical-gap sm-gap">
                <div class="col-md-6">
                  <input type="email" class="form-control required" name="email" placeholder="Email *">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control required" name="name" placeholder="Name *">
                </div>
              </div>
              <div class="nk-gap"></div>
              <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
              <div class="nk-gap-1"></div>
              <button class="nk-btn nk-btn-outline nk-btn-color-main-1">
                <span>Send</span>
                <span class="icon">
                  <ion-icon name="send-outline"></ion-icon>
                </span>
              </button>
              <div class="nk-form-response-success"></div>
              <div class="nk-form-response-error"></div>
            </form>
          </div>
        </div>
      </div>
      <?php get_template_part( 'template-parts/widgets/recent-post-mini' ); ?>
    </div>
    <div class="nk-gap-3"></div>
  </div>
  <div class="nk-copyright">
    <div class="container">
      <div class="nk-copyright-left">
        <a href="<?= get_bloginfo('url') ?>"><?= get_bloginfo('name') ?></a> | 
        <a href="<?= get_bloginfo('url') ?>/kebijakan-privasi">Kebijakan Privasi</a>
      </div>
      <div class="nk-copyright-right">
        <ul class="nk-social-links-2">
          <li>
            <a class="d-flex justify-content-center align-items-center nk-social-youtube" href="https://www.youtube.com/channel/UCJNyJT_mnde2Edrxn1PnPmg" data-share="Youtube">
              <ion-icon name="logo-Youtube"></ion-icon>
            </a>
          </li>
          <li>
            <a class="d-flex justify-content-center align-items-center nk-social-facebook" href="https://facebook.com/fbjejakcyber/" data-share="Facebook">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
        </ul>
      </div>
    </div>
  </div>
</footer>