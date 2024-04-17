<div id="other-app" class="other-app">

	<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Aplikasi</span> Terbaru</span>

	</h3>

	<div class="card bg-dark-3 rounded-0">

		<div class="card-body">

			<div class="row">

				<?php

					$posts_array = get_list_posts_by_type(6, null, null, 0, 'file');

					foreach ( $posts_array as $post ) : setup_postdata( $post );

				?>

					<div class="col-md-4 card-app p-20">

						<div class="row">

							<div class="col-md-5 col-sm-4 pr-0">

								<a href="<?= get_the_permalink() ?>">

                  <?php

                  // check if the post or page has a Featured Image assigned to it.

                  if ( has_post_thumbnail() ) {

                    the_post_thumbnail( null, ['class' => 'recent-imge'] );

                  } else { ?>

                    <img src="<?= get_first_image_in_post() ?>" class="recent-imge" alt="<?= get_the_title() ?>" />

                  <?php } ?>

								</a>

							</div>



							<div class="col-md-7 col-sm-8">

								<a href="<?= get_the_permalink() ?>">

									<p class="mb-10 text-light"><?= wp_trim_words( get_the_title(), $num_words = 2, $more = '..' ); ?></p>

									<div class="d-flex justify-content-left align-items-center mb-10">

										<ion-icon name="star"></ion-icon>

										<ion-icon name="star"></ion-icon>

										<ion-icon name="star"></ion-icon>

										<ion-icon name="star"></ion-icon>

										<ion-icon name="star-half-outline"></ion-icon>

										<!-- <ion-icon name="star-outline"></ion-icon> -->

									</div>

								</a>

								<span class="dev-name"><small class="text-muted"><?= esc_attr( get_post_meta( get_the_ID(), 'publisher', true ) ); ?></small></span>

								<a href="<?= get_the_permalink() ?>" class="nk-btn nk-btn-color-dark-1 nk-btn-hover-color-main-1 nk-btn-sm">Unduh</a>

							</div>

						</div>

					</div>

				<?php endforeach; wp_reset_postdata() ?>

			</div>

		</div>

	</div>

</div>