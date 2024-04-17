<article id="post-<?php the_ID(); ?>" <?php post_class('nk-post-text mt-0'); ?>>



	<header class="h4">



		<?= get_the_title() ?>



	</header>







	<div class="entry-meta">



		<div class="nk-post-by vcard">



			<img src="<?= get_avatar_url( $comment, null ) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="rounded-circle" width="35">



			Diposting oleh 



			<a rel="nofollow" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a> -



			<time class="entry-date updated a-publish" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('l, d F Y'); ?></time>			



			<ul class="list-unstyled d-flex nk-post-categories">



				<?php foreach (get_the_category() as $value) { ?>



					<li class="mr-4">



						<a href="<?= esc_url( get_category_link( $value ) ) ?>" class="tag bg-main-<?= get_the_category()[0]->slug ?>"><?= $value->name ?></a>



					</li>



				<?php } ?>



			</ul>



		</div>



	</div>







	<div class="nk-gap"></div>



	



	<div class="entry-content" itemscope itemtype="https://schema.org/SoftwareApplication">



		<div id="download-area" class="download-area">



			<div class="card mb-3 bg-dark-3 rounded-0">



				<div class="row no-gutters product-app py-3 px-4">



					<div class="col-md-2 col-sm-3 col-4">



						<div class="p-10">



							<?php



							// check if the post or page has a Featured Image assigned to it.



							if ( has_post_thumbnail() ) {



								the_post_thumbnail( null, ['class' => 'card-img'] );



							} else { ?>



								<img src="<?= get_first_image_in_post() ?>" class="card-img" alt="<?= get_the_title() ?>" />



							<?php } ?>



						</div>



					</div>



					<div class="col-md-10 col-sm-9 col-8">



						<div class="card-body">



							<h5 class="card-title" itemprop="name"><?= esc_attr( get_post_meta( get_the_ID(), 'name', true ) ); ?></h5>



							<p class="card-text mb-5"><?= esc_attr( get_post_meta( get_the_ID(), 'publisher', true ) ); ?></p>



							<p class="card-text mb-5"><small class="text-muted">v.<?= esc_attr( get_post_meta( get_the_ID(), 'version', true ) ); ?></small></p>



						</div>



					</div>



				</div>



				<div class="row no-gutters">



					<a href="javascript:void(0)" id="download-button" class="nk-btn nk-btn-color-main-1 nk-btn-x2 nk-btn-block d-flex justify-content-center">



						<ion-icon name="cloud-download"></ion-icon>&nbsp;&nbsp;Download (<?= esc_attr( get_post_meta( get_the_ID(), 'size', true ) ); ?>)



					</a>



				</div>



				<div class="row no-gutters mt-5" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">



					<div class="col-md-4 col-sm-12 col-12">



						<div class="d-flex justify-content-between widgetin py-3 px-4">



							<a href="javascript:void(0)" class="widget-info mx-auto">



								<div class="d-flex">



									<div class="d-flex justify-content-center align-items-center">



										<ion-icon name="star"></ion-icon>



									</div>



									<div class="d-flex number-rate align-items-center">



										<p class="text-light mb-0 ml-5" itemprop="ratingValue">4.8</p>



									</div>



								</div>



							</a>







							<a href="#comments" class="widget-info mx-auto">



								<div class="d-flex">



									<div class="d-flex justify-content-center align-items-center">



										<ion-icon name="chatbubbles"></ion-icon>



									</div>



									<div class="d-flex number-rate align-items-center">



										<p class="text-light mb-0 ml-5"><?= get_comments_number(); ?></p>



									</div>



								</div>



							</a>







							<a href="javascript:void(0)" class="widget-info mx-auto">



								<div class="d-flex">



									<div class="d-flex justify-content-center align-items-center">



										<ion-icon name="download"></ion-icon>



									</div>



									<div class="d-flex number-rate align-items-center">



										<p class="text-light mb-0 ml-5" itemprop="ratingCount"><?= get_post_view() ?></p>



									</div>



								</div>



							</a>



						</div>



					</div>



					<div class="col-md-8 col-sm-12 col-12">



						<div class="d-flex justify-content-end widgetin">



							<a href="javascript:void(0)" class="d-flex align-items-center">Versi Lainnya <ion-icon name="chevron-forward-outline"></ion-icon></a>



						</div>



					</div>



				</div>



			</div>



		</div>







		<div id="check-area" class="check-area my-3 d-none">



			<div class="card mb-3 bg-dark-3 rounded-0">



				<div class="row no-gutters">



					<div class="d-flex col-md-12 justify-content-center">



						<div class="p-20">



							<div class="d-flex justify-content-center">



								<div class="loader"></div>



							</div>



							<p class="text-center">Mohon menunggu, sistem sedang memeriksa virus di aplikasi sebelum didownload.</p>



							<p class="text-center"><span id="waitingSeconds"></span> %</p>



							<div class="progress w-100">



								<div id="waitingProgress" class="progress-bar bg-main-1"></div>



							</div>



						</div>



					</div>



				</div>



			</div>



		</div>







		<div id="checked-area" class="checked-area my-3 d-none">



			<div class="card mb-3 bg-dark-3 rounded-0">



				<div class="row no-gutters">



					<div class="d-flex col-md-12 justify-content-center">



						<div class="p-20">



							<ion-icon name="shield-checkmark-outline" class="checked-shield"></ion-icon>

              

							<p class="text-center">Aplikasi aman untuk didownload, tidak ditemukan adanya virus.</p>



              <?php if ( get_post_meta( get_the_ID(), 'media-fire', true ) != NULL ) { ?>

                <a href="<?= esc_attr( get_post_meta( get_the_ID(), 'media-fire', true ) ) ?>" class="nk-btn nk-btn-color-main-5 nk-btn-x2 nk-btn-block d-flex justify-content-center mt-15">

                Media Fire (Recomended)&nbsp;&nbsp;<ion-icon name="thumbs-up"></ion-icon>

              </a>

              <?php } ?>



              <?php if ( get_post_meta( get_the_ID(), 'dropbox', true ) != NULL ) { ?>

                <a href="<?= esc_attr( get_post_meta( get_the_ID(), 'dropbox', true ) ) ?>" class="nk-btn nk-btn-color-main-4 nk-btn-x2 nk-btn-block d-flex justify-content-center mt-15">

                <ion-icon name="logo-dropbox"></ion-icon>&nbsp;&nbsp;Dropbox

              </a>

              <?php } ?>



              <?php if ( get_post_meta( get_the_ID(), 'url', true ) != NULL ) { ?>

                <a href="<?= esc_attr( get_post_meta( get_the_ID(), 'url', true ) ) ?>" class="nk-btn nk-btn-color-main-1 nk-btn-x2 nk-btn-block d-flex justify-content-center mt-15">

                Direct (Recomended)&nbsp;&nbsp;<ion-icon name="thumbs-up"></ion-icon>

              </a>

              <?php } ?>



						</div>



					</div>



				</div>



			</div>



		</div>



		



		<div class="nk-gap"></div>



	



		<div id="description-area" class="description-area">



			<div class="card mb-3 bg-dark-3">



					<div class="card-body py-3 px-4">



						<div class="description-text">



							<div class="row additional-detail">



								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Diupdate</p>



									<h5 class="mb-0"><?php the_time('Y-m-d H:i'); ?></h5>



								</div>







								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Ukuran</p>



									<h5 class="mb-0"><?= esc_attr( get_post_meta( get_the_ID(), 'size', true ) ); ?></h5>



								</div>







								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Versi Saat Ini</p>



									<h5 class="mb-0">v.<?= esc_attr( get_post_meta( get_the_ID(), 'version', true ) ); ?></h5>



								</div>







								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Perlu Android versi</p>



									<h5 class="mb-0">Minimal Android <span itemprop="operatingSystem"><?= esc_attr( get_post_meta( get_the_ID(), 'android-version', true ) ); ?></span> dan yang lebih tinggi</h5>



									<meta itemprop="applicationCategory" content="MobileApplication">Apps</meta>



								</div>







								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Rating Konten</p>



									<h5 class="mb-0">Rating 3+</h5>



								</div>







								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Ditawarkan Oleh</p>



									<h5 class="mb-0"><?= esc_attr( get_post_meta( get_the_ID(), 'publisher', true ) ); ?></h5>



								</div>







								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Elemen Interaktif</p>



									<h5 class="mb-0">Interaksi Pengguna, Pembelian Dalam Aplikasi</h5>



								</div>







								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Developer</p>



									<a href="javascript:void(0)">Kunjungi situs web</a>



									<a href="javascript:void(0)">apps.support@bukalapak.com</a>



									<a href="javascript:void(0)">Kebijakan Privasi</a>



								</div>







								<div class="col-md-4 add-items mb-20">



									<p class="mb-5">Laporan</p>



									<a href="javascript:void(0)">Tandai sebagai tidak pantas</a>



									<p class="mb-5 d-none">Harga</p>



								</div>



								<div itemprop="offers" itemscope itemtype="https://schema.org/Offer">



									<meta itemprop="price" content="0" />



									<meta itemprop="priceCurrency" content="USD" />

									

									<div itemprop="PriceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">



										<meta itemprop="price" content="0" />

	

										<meta itemprop="priceCurrency" content="USD" />



									</div>



								</div>



							</div>



							<h2>Deskripsi</h2>



							<div id="points" style="display: none;"></div>



							<div id="moreText" style="display: inline;">



								<?php the_content(); ?>



							</div>



							<a onclick="toggleText()" href="#download-area" id="textButton">



								Sembunyikan deskripsi



							</a>



						</div>



					</div>



			</div>



		</div>



	</div>







	<div class="nk-gap"></div>







	<footer class="nk-post-share entry-footer">



		<span class="h5">Tag:</span>



		<ul class="list-unstyled d-flex flex-wrap">



			<?php foreach (get_the_tags() as $value) { ?>



				<li>



					#<a href="<?= esc_url( get_tag_link( $value ) ) ?>" rel="tag" class="tag"><?= $value->name ?>&nbsp;</a> 



				</li>



			<?php } ?>



		</ul>



	</footer>



</article>







<?php set_post_view() ?>