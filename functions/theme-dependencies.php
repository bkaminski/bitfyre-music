<?php 
//LOAD SCRIPTS
function enqueue_bitfyre_scripts() {
	wp_enqueue_script('bootstrap-4x-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), null, true, null);
	wp_enqueue_script('bootstrap-4x', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('bitfyre-scripts', get_template_directory_uri() . '/assets/js/fyreScripts.js', array('jquery'), null, true, null);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/dd00380525.js', null, null, null, null);
}
add_action('wp_enqueue_scripts', 'enqueue_bitfyre_scripts');
//LOAD CSS
function enqueue_bitfyre_styles() {
    wp_enqueue_style('bootstrap-4x', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('dmi-styles', get_template_directory_uri() . '/assets/styles/bitStyles.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_bitfyre_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'bitfyre-music' ),
));
// Nav Walker

