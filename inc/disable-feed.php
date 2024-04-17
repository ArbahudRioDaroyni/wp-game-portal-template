<?php
/**
 * disable feed or rss in wordpress
 */

function turn_off_feed() {
  wp_die( __('Our Feed is currently off, please visit our <a href="'.get_bloginfo().'">Home page</a>!') );
}
  
add_action('do_feed', 'turn_off_feed', 1);
add_action('do_feed_rdf', 'turn_off_feed', 1);
add_action('do_feed_rss', 'turn_off_feed', 1);
add_action('do_feed_rss2', 'turn_off_feed', 1);
add_action('do_feed_atom', 'turn_off_feed', 1);
add_action('do_feed_rss2_comments', 'turn_off_feed', 1);
add_action('do_feed_atom_comments', 'turn_off_feed', 1);

add_action( 'wp_head', 'remove_link_feed_header', 1 );
/**
 * Remove feed links from wp_head
 */
function remove_link_feed_header()
{
	remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
	remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
	remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
	remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
	// remove_action( 'wp_head', 'index_rel_link' ); // index link
	// remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
	// remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
	// remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
	// remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
}

add_action( 'template_redirect', function() {
	if ( is_feed() && headers_sent() === false ) {
		header( 'X-Robots-Tag: noindex, follow', true );
	}
} );