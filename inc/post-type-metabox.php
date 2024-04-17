<?php
/**
 * Register meta box(es).
 */
function custom_post_type() {
	add_meta_box( 'meta-box-id', __( 'Post type', 'textdomain' ), 'meta_post_type', 'post' );
}
add_action( 'add_meta_boxes', 'custom_post_type' );

/**
* Meta box display callback.
*
* @param WP_Post $post Current post object.
*/
function meta_post_type( $post ) {
	// Display code/markup goes here. Don't forget to include nonces!
	$the_post_type = get_post_meta($post->ID, 'post_type', true); //true ensures you get just one value instead of an array
	?>   
    <label>Choose the size of the element :  </label>

    <select name="value_post_type" id="value_post_type">
      <option value="review" <?php selected( $the_post_type, 'review' ); ?>>review</option>
      <option value="news" <?php selected( $the_post_type, 'news' ); ?>>news</option>
    </select>
	<?php
}

/**
* Save meta box content.
*
* @param int $post_id Post ID
*/
function save_post_type( $post_id ) {
	// Save logic goes here. Don't forget to include nonce checks!
	global $post;
	if(isset($_POST["value_post_type"])){
				//UPDATE: 
			$the_post_type = $_POST['value_post_type'];
			//END OF UPDATE

			update_post_meta($post->ID, 'post_type', $the_post_type);
			//print_r($_POST);
	}
}
add_action( 'save_post', 'save_post_type' );

/**
 * show post type in column
 */
function the_post_type() {
	$type = get_post_meta( get_the_ID(), 'post_type', true );
	return "$type";
}

function post_column_type( $columns ) {
	$columns['post_type'] = 'Tipe';
	return $columns;
}
add_filter( 'manage_posts_columns', 'post_column_type' );

function post_type_type_views( $column ) {
	if ( $column === 'post_type') {
			echo the_post_type();
	}
}
add_action( 'manage_posts_custom_column', 'post_type_type_views' );