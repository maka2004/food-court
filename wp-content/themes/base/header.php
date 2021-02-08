<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>

</head>

<?php
    // remove after deply to PROD
    ob_start(null, 0, PHP_OUTPUT_HANDLER_REMOVABLE);
?>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>

<header id="site-header header" class="header-footer-group header" role="banner">
    <?php
        wp_nav_menu([
            'menu' => 'main_menu'
        ]);
    ?>
</header><!-- #site-header -->

<?php
