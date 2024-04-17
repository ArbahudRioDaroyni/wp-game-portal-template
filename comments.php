<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Game_Portal
 * @since Game Portal 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
    
	<?php if ( have_comments() ) : ?>
		<h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Komentar</span> Terbaru</span></h2>

		<div class="nk-gap"></div>

		<?php get_template_part( 'template-parts/ads/jejakcyber-google-ads-display' ); ?>

		<div class="nk-gap"></div>

		<?php the_comments_navigation(); ?>

		<ul id="comments-list" class="comments-list nk-comments p-0">
			<?php
				wp_list_comments([
					'type'							=> 'comment',
					// 'max_depth'					=> 1,
					'per_page'					=> 100,
					'reverse_top_level'	=> true,
					'avatar_size'				=> 35,
					'callback'					=> 'comment_list'
				]);
			?>
		</ul><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments">Komentar Ditutup</p>
	<?php endif; ?>

</div><!-- .comments-area -->