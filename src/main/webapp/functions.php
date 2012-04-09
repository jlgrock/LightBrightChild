<?php

function custom_excerpt( $text ) {
	$raw_excerpt = $text;
	if ( '' == $text ) {
		$text = get_the_content('');

		$text = strip_shortcodes( $text );

		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$excerpt_length = apply_filters('excerpt_length', 200);
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = $text;//wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
};

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_excerpt');

/*
* Adds the f4v mime type
*/
// Add mimi types to function get_allowed_mime_types
function add_allowed_mime_types($mimes) {
    $my_new_mimes = array (
        'xml' => 'text/plain',
		'java' => 'text/plain',
		'groovy' => 'text/plain'
    );
    return array_merge($mimes,$my_new_mimes);
}
add_filter('upload_mimes','add_allowed_mime_types');

// Add an extension to (2) function wp_ext2type
function add_ext2_ext2type($ext) {
    $my_new_extensions = array (
        'xml' => array( 'xml' ),
		'text' => array( 'java' ),
		'text' => array( 'groovy' )
    );
    return array_merge($ext,$my_new_extensions);
}
add_filter('upload_mimes','add_ext2_ext2type');

function truncate_post($amount,$echo=true,$post='') {
	return the_excerpt();
};
?>