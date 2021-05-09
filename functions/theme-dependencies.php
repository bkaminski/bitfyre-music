<?php 
//LOAD SCRIPTS
function enqueue_bitfyre_scripts() {
	wp_enqueue_script('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('bitfyre-scripts', get_template_directory_uri() . '/assets/js/bitfyreScripts.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/dd00380525.js', null, null, null, null);
}
add_action('wp_enqueue_scripts', 'enqueue_bitfyre_scripts');
//LOAD CSS
function enqueue_bitfyre_styles() {
    wp_enqueue_style('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('bitfyre-styles', get_template_directory_uri() . '/assets/styles/bitFyreStyles.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_bitfyre_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'bitfyre-music' ),
));
// Nav Walker

