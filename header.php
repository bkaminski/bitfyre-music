<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php echo get_template_part('parts/page', 'analytics'); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php echo get_template_part('parts/page', 'favicons'); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php echo get_template_part('parts/page', 'nav'); ?>