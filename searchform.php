<?php
/**
 * The template for displaying search form
 *
 * The area of the page that contains both current search form
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Game_Portal
 * @since Game Portal 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the search form.
 */
?>
<!-- START: Search Widget -->
<div class="nk-widget">
  <div class="nk-widget-content">
    <form role="search" method="get" id="searchform" class="searchform nk-form nk-form-style-1" action="<?php echo esc_url( home_url( '/' ) ); ?>" novalidate="novalidate">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Ketik sesuatu..." value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <button class="nk-btn nk-btn-color-main-1" type="submit" id="searchsubmit">
          <ion-icon style="font-size: 1.5em" name="search-outline"></ion-icon>
        </button>
      </div>
    </form>
  </div>
</div>
<!-- END: Search Widget -->