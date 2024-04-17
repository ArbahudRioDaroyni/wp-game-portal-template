<article id="post-<?php the_ID(); ?>" <?php post_class('nk-post-text mt-0'); ?>>



	<figure class="nk-post-img">



		<?php



		// check if the post or page has a Featured Image assigned to it.



		if ( has_post_thumbnail() ) {



			$isMobile = (wp_is_mobile()) ?



				the_post_thumbnail('medium', ['class' => 'img-hero', 'loading' => 'lazy']) :



				the_post_thumbnail(NULL, ['class' => 'img-hero', 'loading' => 'lazy']);



		} else { ?>



			<img src="<?= get_first_image_in_post() ?>" class="img-hero" alt="<?= get_the_title() ?>" />



		<?php } ?>



	</figure>



	<div class="nk-gap-1"></div>



	<header class="h4">



		<?= esc_attr( get_post_meta( get_the_ID(), 'subtitle', true ) ); ?>



	</header>



	<div class="entry-meta">



		<div class="nk-post-by vcard">



			<img src="<?= get_avatar_url($comment, null) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="rounded-circle" width="35" height="35">



			<a rel="nofollow" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a> - 



			<time class="entry-date updated a-publish" datetime="<?php the_modified_time('Y-m-d H:i'); ?>"><?php the_modified_time('l, d F Y'); ?></time>			



			<ul class="list-unstyled d-flex nk-post-categories">



				<?php foreach (get_the_category() as $value) { ?>



					<li class="mr-4">



						<a href="<?= esc_url( get_category_link( $value ) ) ?>" class="tag bg-main-<?= get_the_category()[0]->slug ?>"><?= $value->name ?></a>



					</li>



				<?php } ?>



			</ul>



		</div>



		<div class="nk-gap-2"></div>

		

		<h3><span class="text-main-1">GUNAKAN VPN</span> untuk mengakses apapun di jejakcyber.com</h3>

		

		<div class="nk-gap-2"></div>



		<?php get_template_part( 'template-parts/ads/jejakcyber-ads-display' ); ?>

		

		<!-- <div id="toc">



			<h3><span class="text-main-1">Daftar</span> Isi</h3>



		</div> -->



		<div class="nk-gap"></div>



		<?php if ( get_post_meta( get_the_ID(), 'publisher', true ) ||



			get_post_meta( get_the_ID(), 'developer', true ) ||



			get_post_meta( get_the_ID(), 'release', true ) || 



			get_post_meta( get_the_ID(), 'age', true ) || 



			get_post_meta( get_the_ID(), 'platform', true )   != NULL ): ?>



			<table class="nk-table">



				<thead>



					<tr>



						<th colspan="3">Informasi Tambahan</th>



					</tr>



				</thead>



				<tbody>



					<tr>



						<th>Penerbit</th>



						<td><?= esc_attr( get_post_meta( get_the_ID(), 'publisher', true ) ); ?></td>



					</tr>



					<tr>



						<th>Pengembang</th>



						<td><?= esc_attr( get_post_meta( get_the_ID(), 'developer', true ) ); ?></td>



					</tr>



					<tr>



						<th>Rilis</th>



						<td><?= date_format( date_create( esc_attr( get_post_meta( get_the_ID(), 'release', true ) ) ),"d F Y" ); ?></td>



					</tr>



					<tr>



						<th>Peringkat</th>



						<td><?= esc_attr( get_post_meta( get_the_ID(), 'age', true ) ); ?></td>



					</tr>



					<tr>



						<th>Platform</th>



						<td><?= esc_attr( get_post_meta( get_the_ID(), 'platform', true ) ); ?></td>



					</tr>



				</tbody>



			</table>



		<?php endif ?>



	</div>



	<div class="nk-gap"></div>



	<div class="entry-content" id="entry-content">



		<?php the_content(); ?>



	</div>



	<div class="nk-gap"></div>



  <?php get_template_part( 'template-parts/ads/jejakcyber-google-ads-display' ); ?>



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