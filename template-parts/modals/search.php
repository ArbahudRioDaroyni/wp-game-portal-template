<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="ion-android-close"></span>
        </button>
        <h4 class="mb-0"><?php echo esc_html( __( 'Search' ) )?></h4>
        <div class="nk-gap-1"></div>
        <form role="search" method="get" id="searchformmoda" class="searchform nk-form nk-form-style-1" action="<?php echo esc_url( home_url( '/' ) ); ?>" novalidate="novalidate">
          <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="smodal" class="form-control" placeholder="Ketik sesuatu dan tekan enter">
        </form>
      </div>
    </div>
  </div>
</div>