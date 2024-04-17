<?php
  /**
   * The template for displaying the Live RTP Slot page
   *
   * Displays all of the element and everything up until the "content-area" div.
   *
   * @link https://github.com/ArbahudRioDaroyni/wp-game-portal
   * @package WP Game Portal
   * @subpackage WP Game Portal
   * @since 1.0.0
   */
  
  get_header();

  $pragmatic_play = [
    'Elemental Gems'          => 87.5,
    'Rock Vegas'              => 16.8,
    'Rainbow Gold'            => 41.2,
    'Starlight Princess'      => 86.7,
    'Aztec Gems'              => 69.1,
    'Sweet Bonanza'           => 88.9,
    'Gates of Olympus'        => 71.5,
    'Sweet Bonanza Xmas'      => 32.4,
    'Wild West Gold'          => 82.1,
    'Joker\'s Jewel'          => 84.2,
    'Bonanza Gold'            => 54.9,
    'Great Rhino'             => 56.3,
    'Aztec Gems Deluxe'       => 63.6,
    'Fruit Party'             => 76.8,
    'Megaways The Dog House'  => 15.6,
    '5 Lions'                 => 84.2,
    'Diamond Strike'          => 28.7,
    'The Dog House'           => 88.6,
    'Fire Strike'             => 42.8,
    'Gems Bonanza'            => 43.6,
    'Buffalo King Megaways'   => 67.9,
    'Madame Destiny Megaways' => 35.7,
    'Hot Fiesta'              => 46.7,
    'Christmas Carol Megaways' => 11.5,
    'Power of Thor'           => 25.7,
    '8 Dragons'               => 45.7,
    'Aztec Bonanza'           => 19.8,
    'The Hand of Midas'       => 69.7,
    'Great Rhino Deluxe'      => 44.8,
    'Fruit Party 2'           => 16.9,
    'The Amazing Money Machine' => 75.1,
    'Money Money Money'       => 56.7,
    'John Hunter'             => 78.5,
    'Extra Juicy'             => 87.1,
    'Big Bass Bonanza'        => 41.6,
    'Lucky Lightning'         => 74.1,
    'Vegas Magic'             => 54.7,
    'Mustang Gold'            => 69.2,
    'Floating Dragon'         => 86.4,
    'Phoenix Forge'           => 44.8,
    'Fire 88'                 => 25.6,
    'Wolf Gold'               => 64.4,
    '3 Kingdoms'              => 32.6,
    'Asgard'                  => 21.9,
    '888 Dragons'             => 9.4,
    'Dragon Kingdom'          => 90.2,
    'Caishen\'s Cash'         => 33.5,
    'Lucky New Year'          => 12.1,
    'Caishen\'s Gold'         => 59.7,
    'Tripel Tigers'           => 17.7,
    'Triple Dragons'          => 58.9,
    'Monkey Madness'          => 75.2,
    'Busy Bees'               => 31.1,
    'Egyptian Fortunes'       => 37.3,
    'Juicy Fruits'            => 43.6,
    'Pixie Wings'             => 29.7,
    'Lady Godiva'             => 71.1,
    'Jade Butterfly'          => 48.6,
    'Peking Luck'             => 77.9,
    'Treasure Horse'          => 9.1,
    'Chiw Head'               => 51.3,
    'Beowulf'                 => 52.1,
    'Golden Pig'              => 14.7,
    'Ancient Egypt'           => 85.6,
    'Sugar Rush'              => 14.6,
    'Journey to The West'     => 71.8,
    'Panda\'s Fortune'        => 67.8,
    'Mighty Kong'             => 55,
    'Hot Safari'              => 87.8,
    'Dwarven Gold'            => 57.6,
    'Lady of The Moon'        => 68.7,
    'Leprechaun Carol'        => 52.1,
    'Gold Rush'               => 76.7,
    'Vegas Night'             => 42.1,
    'Leprechaun Song'         => 44.3,
    'Safari King'             => 52.3,
    'Jurassic Giants'         => 47,
    'Wild Gladiators'         => 22.1,
    'Aladdin\'s Treasure'     => 52,
    'Hercules Son of Zeus'    => 66.7,
    '7 Piggies'               => 30.9,
    'Fairytale Fortune'       => 50.6,
    'Great Reef'              => 46.4,
    '7 Monkeys'               => 41,
    'Gold Train'              => 33.3,
    'Santa'                   => 37.6,
    '3 Genie Whises'          => 8.2,
    'Devil\'s 13'             => 89.6,
    'Panther Quenn'           => 23.4,
    'Queen of Atlantis'       => 79.9,
    'Magic Crystals'          => 55.8,
    'Glorious Rome'           => 30.6,
    'Tails of Egypt'          => 88.7,
    'Madame Destiny'          => 66.4,
    'The Champions'           => 34.5
  ]
?>
<div id="primary" class="content-area nk-main">

  <main id="main" class="container site-main" role="main">
    <!-- START: Breadcrumbs -->
    <?php get_template_part( 'template-parts/components/breadcrumbs' ); ?>
    <!-- END: Breadcrumbs -->
    <div class="row vertical-gap">
      <div class="col-lg-8">
        <!-- START: blog page -->
        <div class="card bg-dark-3 rounded-0">
          <div class="card-body">
            <div class="nk-tabs">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#pragmatic-play" role="tab" data-toggle="tab" aria-selected="true">
                    <img src="<?= get_template_directory_uri() ?>/assets/image/RTP/logo/pragmatic-play.webp" alt="Pragmatic Play"
                    loading="lazy" width="120" height="52" />
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#microgaming" role="tab" data-toggle="tab" aria-selected="false">
                    <img src="<?= get_template_directory_uri() ?>/assets/image/RTP/logo/microgaming.webp" alt="Microgaming"
                    loading="lazy" width="120" height="52" />
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#live22" role="tab" data-toggle="tab" aria-selected="false">Live22</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#slot88" role="tab" data-toggle="tab" aria-selected="false">Slot88</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#ION Slot" role="tab" data-toggle="tab" aria-selected="false">ION Slot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#PG Slots" role="tab" data-toggle="tab" aria-selected="false">PG Slot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Joker" role="tab" data-toggle="tab" aria-selected="false">Joker</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#AdvantPlay" role="tab" data-toggle="tab" aria-selected="false">AdvantPlay</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="pragmatic-play">
                  <div class="row other-app">
                    <?php foreach ($pragmatic_play as $key => $value) { ?>
                      <div class="col-md-4 col-6 card-app p-20">
                        <div class="row">
                          <div class="col-md-5 p-0 d-flex justify-content-center">
                            <div>
                              <img src="<?= get_template_directory_uri() ?>/assets/image/RTP/pragmatic-play/<?= $key ?>.webp"
                                class="recent-imge" alt="<?= $key ?>" loading="lazy" width="80" height="100" />
                            </div>
                          </div>
                          <div class="col-md-7 p-0">
                            <div class="text-center">
                              <p class="mb-10 text-light"><?= $key ?></p>
                              <p class="mb-10 text-main-1"><?= $value ?>%</p>
                              <div class="d-flex justify-content-left align-items-center mb-10 px-3">
                                <div class="progress w-100">
                                  <div class="progress-bar bg-main-1" style="width:<?= $value ?>%"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <div class="p-20 check-area w-100">
                      <div class="d-flex justify-content-center">
                        <div class="loader"></div>
                      </div>
                      <p class="text-center">Mohon menunggu, sistem sedang mendapatkan data RTP dari berbagai website slot
                        online.</p>
                      <p class="text-center">24.8%</p>
                      <div class="progress w-100">
                        <div class="progress-bar bg-main-1" style="width: 47.3%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="microgaming">
                  <div class="row other-app">
                    <div class="p-20 check-area w-100">
                      <div class="d-flex justify-content-center">
                        <div class="loader"></div>
                      </div>
                      <p class="text-center">Mohon menunggu, sistem sedang mendapatkan data RTP dari berbagai website slot
                        online.</p>
                      <p class="text-center">17.2%</p>
                      <div class="progress w-100">
                        <div class="progress-bar bg-main-1" style="width: 47.3%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="live22">
                  <div class="row other-app">
                    <div class="p-20 check-area w-100">
                      <div class="d-flex justify-content-center">
                        <div class="loader"></div>
                      </div>
                      <p class="text-center">Mohon menunggu, sistem sedang mendapatkan data RTP dari berbagai website slot
                        online.</p>
                      <p class="text-center">31.5%</p>
                      <div class="progress w-100">
                        <div class="progress-bar bg-main-1" style="width: 47.3%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="slot88">
                  <div class="row other-app">
                    <div class="p-20 check-area w-100">
                      <div class="d-flex justify-content-center">
                        <div class="loader"></div>
                      </div>
                      <p class="text-center">Mohon menunggu, sistem sedang mendapatkan data RTP dari berbagai website slot
                        online.</p>
                      <p class="text-center">29.6%</p>
                      <div class="progress w-100">
                        <div class="progress-bar bg-main-1" style="width: 47.3%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ION Slot">
                  <div class="row other-app">
                    <div class="p-20 check-area w-100">
                      <div class="d-flex justify-content-center">
                        <div class="loader"></div>
                      </div>
                      <p class="text-center">Mohon menunggu, sistem sedang mendapatkan data RTP dari berbagai website slot
                        online.</p>
                      <p class="text-center">19.7%</p>
                      <div class="progress w-100">
                        <div class="progress-bar bg-main-1" style="width: 47.3%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="PG Slots">
                  <div class="row other-app">
                    <div class="p-20 check-area w-100">
                      <div class="d-flex justify-content-center">
                        <div class="loader"></div>
                      </div>
                      <p class="text-center">Mohon menunggu, sistem sedang mendapatkan data RTP dari berbagai website slot
                        online.</p>
                      <p class="text-center">14.8%</p>
                      <div class="progress w-100">
                        <div class="progress-bar bg-main-1" style="width: 47.3%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Joker">
                  <div class="row other-app">
                    <div class="p-20 check-area w-100">
                      <div class="d-flex justify-content-center">
                        <div class="loader"></div>
                      </div>
                      <p class="text-center">Mohon menunggu, sistem sedang mendapatkan data RTP dari berbagai website slot
                        online.</p>
                      <p class="text-center">28.1%</p>
                      <div class="progress w-100">
                        <div class="progress-bar bg-main-1" style="width: 47.3%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="AdvantPlay">
                  <div class="row other-app">
                    <div class="p-20 check-area w-100">
                      <div class="d-flex justify-content-center">
                        <div class="loader"></div>
                      </div>
                      <p class="text-center">Mohon menunggu, sistem sedang mendapatkan data RTP dari berbagai website slot
                        online.</p>
                      <p class="text-center">11.9%</p>
                      <div class="progress w-100">
                        <div class="progress-bar bg-main-1" style="width: 47.3%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
<img src="<?= get_first_image_in_post() ?>" class="nk-page-background-top top-gradient-opacity"
  alt="<?= get_the_title() ?>" />
<?php } ?>
<!-- END: Page Background -->

<!-- START: Login Modal -->
<?php get_template_part( 'template-parts/modals/login' ); ?>
<!-- END: Login Modal -->

<?php get_footer() ?>