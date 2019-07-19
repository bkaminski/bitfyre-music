<?php

//HTML 5 SUPPORT
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
//TITLE TAG SUPPORT
add_theme_support( 'title-tag' );
//ALLOW POSTS AND PAGES FEATURED IMAGE
add_theme_support('post-thumbnails');
//ADD RSS/ATOM SUPPORT
add_theme_support( 'automatic-feed-links' );
//AUTO UPDATE PLUGINS
add_filter( 'auto_update_plugin', '__return_true' );
//ADD TAG SUPPORT TO PAGES
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}
//DISABLE EMOJI BLOAT
function disable_wp_emoji() {
//REMOVE ALL ACTIONS USING EMOJI
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
//REMOVE EDITOR EMOJIS
add_filter( 'tiny_mce_plugins', 'disable_emoji_tinymce' );
  
//REMOVE DNS PREFETCH
add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emoji' );
function disable_emoji_tinymce( $plugins ) {
if ( is_array( $plugins ) ) {
  return array_diff( $plugins, array( 'wpemoji' ) );
} else {
  return array();
}}
//REMOVE THE TYPE ATTRIBUTE FROM JAVASCRIPT FILES
add_action('wp_loaded', 'prefix_output_buffer_start');
function prefix_output_buffer_start() { 
  ob_start("prefix_output_callback"); 
}
add_action('shutdown', 'prefix_output_buffer_end');
function prefix_output_buffer_end() { 
  ob_end_flush(); 
}
function prefix_output_callback($buffer) {
  return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}
//REMOVE WP VERSION PARAM FROM ENQUEUED SCRIPTS AND CSS
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
//ENSURE EMAIL DELIVERY FROM ROCKSHOP -- NOT WORDPRESS AS SENDER
function bitfyre_mail_name( $email ){
  return 'Bitfyre'; // new email name from sender.
}
add_filter( 'wp_mail_from_name', 'bitfyre_mail_name' );
function bitfyre_mail_from ($email ){
  return 'contact@bitfyremusic.com'; // new email address from sender.
}
add_filter( 'wp_mail_from', 'bitfyre_mail_from' );
//TAGS IN SEARCH QUERIES
function tags_support_query($wp_query)
{
    if ($wp_query->get('tag'))
        $wp_query->set('post_type', 'any');
}