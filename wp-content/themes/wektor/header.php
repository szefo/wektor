<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wektor
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'wektor'); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php if (is_front_page() && is_home()) : ?>
                            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <img src="<?= get_template_directory_uri() ?>/img/logo-blue.png" alt="logo">
                            </a>
                        <?php else : ?>
                            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <img src="<?= get_template_directory_uri() ?>/img/logo-white.png" alt="logo">
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-18 contact-data no-gutters">
                        <p><?= get_option('address') ?></p>
                        <a href="mailtp:<?= get_option('email') ?>"><?= get_option('email') ?></a>
                        <a target="_blank" href="<?= get_option('face') ?>">
                            <?php if (is_front_page() && is_home()) : ?>
                                <img src="<?= get_template_directory_uri() ?>/img/facebook-blue.png" alt="facebook">
                            <?php else : ?>
                                <img src="<?= get_template_directory_uri() ?>/img/facebook-white.png" alt="facebook">
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-nav">
            <div class="container">
                <div class="row">
                    <nav id="site-navigation" class="main-navigation col-md-24" role="navigation">
                        <button class="menu-toggle" aria-controls="primary-menu"
                                aria-expanded="false"><?php esc_html_e('Primary Menu', 'wektor'); ?></button>
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                    </nav>
                </div>
                <div class="phone">
                    <p>
                        <?php echo get_option('phone'); ?>
                    </p>
                </div>
            </div>
        </div>

    </header>

    <div id="content" class="site-content">
