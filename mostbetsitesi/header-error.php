<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Roboto-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Roboto-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Roboto-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Roboto-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>
  

