<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> <?php wp_title("-", true); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri()."/img/favicon.png"; ?>"/>
    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4Q2NH1PL0T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4Q2NH1PL0T');
    </script>
</head>

<header class="header">
    <div class="header-content">
        <div class="logo">
            <a href="/"><img src="<?php echo get_stylesheet_directory_uri()."/img/logo.png"; ?>" alt="Logo"></a>
        </div>

        <nav>
            <a href="#" class="burger">
                <i></i>
            </a>

            <?php
            wp_nav_menu( array(
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'menu_class'        => 'menu'
            ) );
            ?>
        </nav>

        <button onclick="window.location.href='https://clarity.co.il/regPage/LogInPage.aspx?ID=p906-73315365712036'" class="button">כניסה לקלריטי </button>
    </div>

    <svg width="100%" height="400%" style="
        position: absolute;
        ">
        <defs>
            <clipPath id="logoClip">
                <rect x="0" y="0" width="100%" height="25%"></rect>
                <circle id="cc" cx="0" cy="0" r="100" style="
                        transform: translate(94%, 20%) scaleX(1.7);
                        fill:  red;"></circle>
            </clipPath>
        </defs>
    </svg>
</header>


<body>
<main role="main">