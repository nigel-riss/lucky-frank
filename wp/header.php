<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- OG -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("stylesheet_directory"); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("stylesheet_directory"); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo("stylesheet_directory"); ?>/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo("stylesheet_directory"); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link href="https:/fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&amp;amp;subset=cyrillic" rel="stylesheet"
    />
    <link href="https:/fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;amp;subset=cyrillic" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>?v=4" />

    <title>Lucky Frank Barbershop</title>

    <?php wp_head(); ?>

    <!-- TODO: yandex counter -->
</head>

<body>
    <!-- TODO: google counter -->

    <!-- Header -->
    <header class="page-header">
        <div class="header-contacts">
            <div class="contact-item contact-item--phone">
                <div class="contact-item__icon icon-phone"></div>
                <div class="contact-item__content">
                    <a href="tel:+79181959419">+7 918 195-94-19</a>
                </div>
            </div>

            <div class="contact-item contact-item--schedule">
                <div class="contact-item__icon icon-clock"></div>
                <div class="contact-item__content">Пон.-Вос.: 10
                    <sup>00</sup>-22
                    <sup>00</sup>
                </div>
            </div>

            <div class="contact-item contact-item--address">
                <div class="contact-item__icon icon-location"></div>
                <div class="contact-item__content">г. Краснодар, ул. Мира 54</div>
            </div>

            <div class="contact-item contact-item--social">
                <div class="contact-item__content">
                    <div class="social social--header">
                        <a class="social-icon icon-instagram" href="https://www.instagram.com/lucky.frank.barber/">Instagram</a>
                        <!-- <a class="social-icon icon-facebook" href="https:/www.facebook.com/truemanbarbershop/">Facebook</a> -->
                        <a class="social-icon icon-vkontakte" href="https://vk.com/lucky.frank.barber">Vkontakte</a>
                    </div>
                </div>
            </div>

            <div class="menu-icon">
                <div class="menu-icon__middle"></div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <div class="main-nav__logo">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo-white.svg" alt="" />
            </div>

            <ul class="main-menu">
                <li><a href="<?php echo esc_url(home_url("/")); ?>#">Главная</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#about">О нас</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#services">Услуги</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#prices">Прайс</a></li>
                <!-- <li><a href="<?php echo esc_url(home_url("/")); ?>#">Советы</a></li> -->
                <!-- <li><a href="<?php echo esc_url(home_url("/")); ?>#">Мастера</a></li> -->
                <li><a href="<?php echo esc_url(home_url("/")); ?>#contacts">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <!-- Inner Hero -->
    <section class="inner-hero">
        <div class="inner-logo">
            <a href="<?php echo esc_url(home_url("/")); ?>">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo-white.svg" alt="Lucky Frank Barbershop logo" />
            </a>
        </div>
        <header class="inner-hero__header">
            <h1 class="inner-hero__title"><?php the_title(); ?></h1>
            <p class="inner-hero__subtitle">Услуги Lucky Frank</p>
        </header>
    </section>