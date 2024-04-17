<?php
$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function wpassist_remove_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css', 100 );

// filter tag in the_content()
function content_filter($content){
	$patterns = [];
	$replacements = [];

	$patterns_non_amp = [];
	$replacements_non_amp = [];
	$patterns = [
		'/<img ([^>]+)? class="([^>]+)?>/',
		'/<figcaption>/',
		'/<blockquote class="(.*?)">\n<p>(.*?)<\/p>\n<cite>(.*?)<\/cite>/',
		'/<table>/',
		'/<ol>/',
		'/<ul>/',
		'/<li>(.*?)<\/li>/',
		'/<a class="wp-block-button__link(.*?)" href="(.*?)">(.*?)<\/a>/',
	];
  
	$replacements = [
		'<img $1 class="img-fluid w-100 rounded $2>',
		'<figcaption class="figure-caption" $1>',
		'<blockquote class="$1 nk-blockquote">
      <div class="nk-blockquote-icon"><span>"</span></div>
      <p class="nk-blockquote-content">$2</p>
      <div class="nk-blockquote-author"><span><cite>$3</cite></span></div>',
		'<table class="table table-borderless table-hover table-dark table-striped">',
		'<ol class="text-main-1">',
		'<ul class="text-main-1">',
		'<li><span style="color:#7f8b92;">$1</span></li>',
		'<amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-3780041077137992" data-ad-slot="4077713324" data-auto-format="rspv" data-full-width=""><div overflow=""></div></amp-ad><div class="nk-gap-1"></div>
			<a href="$2" class="nk-btn nk-btn-color-main-1 mb-15$1">$3</a>'
	];
	return preg_replace($patterns, $replacements, $content);
}
add_filter('the_content', 'content_filter');

// set default image
function get_default_image(){
	return 'https://jejakcyber.com/wp-content/uploads/2022/03/favicon.png';
}

// get first image in post
function get_first_image_in_post() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];

	if(empty($first_img)){
		$first_img = get_default_image();
	}
	return $first_img;
}

// get list post
function get_list_posts($total, $category = null, $tag = null, $offset = 0, $metakey = null){
		$orderby = ($metakey == !null) ? 'meta_value_num' : null ;
	$args = [
		'post_type'         => 'post',
		'posts_per_page'    => $total,
		'category_name'     => $category,
		'tag'               => $tag,
		'offset'            => $offset,
		'order'             => 'DESC',
		'orderby'           => 'date',
		'post_status'       => 'publish',
		'orderby'           => $orderby,
		'meta_key'          => $metakey,
		'suppress_filters'  => true,
  ];
	return get_posts( $args );
}

// get popular post
function get_list_popular_posts($total, $offset = 0){
	$args = [
		'post_type'         => 'post',
		'posts_per_page'    => $total,
		'offset'            => $offset,
		'order'             => 'DESC',
		'orderby'           => 'meta_value_num',
		'meta_key'          => 'post_views_count',
		'post_status'       => 'publish',
		'suppress_filters'  => true,
	];
	return get_posts( $args );
}

function get_list_posts_by_type($total, $category = null, $tag = null, $offset = 0, $posttype= 'post'){
	$args = [
		'post_type'         => $posttype,
		'posts_per_page'    => $total,
		'category_name'     => $category,
		'tag'               => $tag,
		'offset'            => $offset,
		'order'             => 'DESC',
		'orderby'           => 'date',
		'post_status'       => 'publish',
		'suppress_filters'  => true,
	];
	return get_posts( $args );
}

add_theme_support( 'post-thumbnails' );

// function the_post_thumbnail_remove_attr($output) {
//   $output = preg_replace('/width=".*?"/', '', $output);
//   $output = preg_replace('/height=".*?"/', '', $output);
//   return $output;
// }
// add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_attr');

function get_logo(){
	return 'https://jejakcyber.com/wp-content/uploads/2021/02/logo-jejak-cyber-1.png';
}

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');



function hidePhoneNumberInText($text) {
    // Pola regex untuk menemukan nomor telepon dalam teks
    $phoneNumberRegex = '/(\d{6})\d{4}/';
    // Menyamarkan nomor telepon dengan tanda bintang
    $maskedText = preg_replace($phoneNumberRegex, '$1****', $text);
    // Mengembalikan teks yang telah dimodifikasi
    return $maskedText;
}

function hideUrlInText($text) {
    // Pola regex untuk menemukan URL dalam teks
    $urlRegex = '/(https?:\/\/)(www\.)?([a-zA-Z0-9-]+)(\.[a-zA-Z]{2,})(\/[^\s]*)?/';
    // Menyamarkan URL dengan tanda bintang, kecuali untuk domain yang dikecualikan
    $maskedText = preg_replace_callback($urlRegex, function($matches) {
        $excludedDomains = array('jejakcyber.com'); // Domain yang dikecualikan dari penyembunyian
        $domain = $matches[3] . $matches[4]; // Menggabungkan nama domain dan ekstensi
        if (in_array($domain, $excludedDomains)) {
            // Jika domain ada dalam daftar domain yang dikecualikan, kembalikan URL asli
            return $matches[0];
        } else {
            // Jika tidak, samarkan domain dan path
            $maskedDomain = substr($matches[3], 0, 3) . '****' . $matches[4]; // Masking nama domain
            $maskedUrl = $matches[1] . $maskedDomain; // Menyusun URL dengan domain yang disamarkan
            if (isset($matches[5])) {
                $maskedUrl .= $matches[5]; // Menambahkan path jika ada
            }
            return $maskedUrl;
        }
    }, $text);
    // Mengembalikan teks yang telah dimodifikasi
    return $maskedText;
}

function hideTextInComment($text){
$phone = hidePhoneNumberInText($text);
$url = hideUrlInText($phone);

return $url;
}
include 'inc/get-view-count.php';
include 'inc/comments.php';
// include 'inc/post-type-metabox.php';
include 'inc/register-file-meta-box-spesifikasi.php';
include 'inc/register-file-post-type.php';
include 'inc/disable-feed.php';