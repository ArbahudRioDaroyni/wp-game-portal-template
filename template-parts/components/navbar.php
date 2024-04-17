<nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
  <div class="container">
    <div class="nk-nav-table">
      <a href="<?= get_home_url() ?>" class="nk-nav-logo">
      <img src="<?= get_logo() ?>" alt="JejakCyber" width="199" height="38">
      </a>
      <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
        <?php $categories = get_categories( ['orderby' => 'id', 'order' => 'DESC'] );
        foreach( $categories as $category ) : ?>
          <li <?php if (is_category()) {
              echo (get_the_category()[0]->slug == $category->slug) ? 'class="active"' : '' ;
          } ?> >
            <a href="<?= esc_url( get_category_link( $category->term_id ) ) ?>" alt="<?= esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) ?>"><?= esc_html( $category->name ) ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <ul class="nk-nav nk-nav-right nk-nav-icons">
        <li class="single-icon d-lg-none">
          <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
          <span class="nk-icon-burger">
          <span class="nk-t-1"></span>
          <span class="nk-t-2"></span>
          <span class="nk-t-3"></span>
          </span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- <div class="alert alert-danger" role="alert">
  Content Placement? <a href="https://jejakcyber.com/content-placement/" rel="nofollow"><em>Klik Disini</em></a>. <strong>Topik bebas.</strong>
</div> -->