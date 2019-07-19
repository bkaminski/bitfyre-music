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
    wp_enqueue_style('bitfyreStyles', get_template_directory_uri() . '/assets/styles/bitStyles.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Press+Start+2P|Roboto&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_bitfyre_styles');