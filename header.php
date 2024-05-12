<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page">
        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <h1 class="site-title">
                    <?php bloginfo('name'); ?>
                </h1>
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu'
                ]);
                ?>
            </nav>
        </header>