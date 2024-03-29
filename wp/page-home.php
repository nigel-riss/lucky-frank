<?php
    /*
        Template Name: Home Page
    */

    // SEO vars
    $meta_description   = get_field("meta-description");

    // contacts and schedule
    $phone_vsl          = get_field("phone-vsl");
    $phone_link         = get_field("phone-link");
    $work_time_short    = get_field("work-time-short");
    $work_time_long     = get_field("work-time-long");
    $address            = get_field("address");
    $social_inst        = get_field("social-inst");
    $social_vk          = get_field("social-vk");
    $e_mail             = get_field("e-mail");

    // quotes
    $quote_hero         = get_field("quote-hero");
    $quote_services     = get_field("quote-services");
    $quote_team         = get_field("quote-team");
    $quote_footer       = get_field("quote-footer");

    // about barbershop
    $about_description  = get_field("about-description");
    $about_video        = get_field("about-video");

    // statistics
    $stats_show         = get_field("stats-show");
    $stats_haircuts     = get_field("stats-haircuts");
    $stats_beards       = get_field("stats-beards");
    $stats_tatooes      = get_field("stats-tatooes");

    // price
    $price_main         = get_field("price-main");
    $price_additional   = get_field("price-additional");
    $price_complex      = get_field("price-complex");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="<?php echo $meta_description; ?>" />
	<meta name="google-site-verification" content="SLH7uaYiCfS9P3ib498kSMFIGw7TOdGDB13ZBwRQzcc" />
	<meta name="yandex-verification" content="5c2f1df9488d2fdb" />

    <!-- OG -->
    <meta property="og:title" content="Lucky Frank Барбершоп">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/bg-d.jpg">
    <meta propepty="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta propepty="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Lucky Frank Барбершоп">

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
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>?v=18" />

    <title>Lucky Frank Barbershop</title>

    <?php wp_head(); ?>

    <!-- TODO: yandex counter -->
	<script src="https://mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1669484886473091');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=1669484886473091&ev=PageView
    &noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>
    <!-- TODO: google counter -->
    <script>
        (function(w, d, s, h, id) {
            w.roistatProjectId = id;
            w.roistatHost = h;
            var p = d.location.protocol == "https:" ? "https://" : "http://";
            var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
            var js = d.createElement(s);
            js.charset="UTF-8";
            js.async = 1;
            js.src = p+h+u;
            var js2 = d.getElementsByTagName(s)[0];
            js2.parentNode.insertBefore(js, js2);
        })(window, document, 'script', 'cloud.roistat.com', 'dd06ef1b09acdaf925a93997606ae743');
    </script>


    <!-- Header -->
    <header class="page-header">
        <div class="header-contacts">

            <div class="contact-item contact-item--address">
                <div class="contact-item__icon icon-location"></div>
                <div class="contact-item__content"><?php echo $address; ?></div>
            </div>

            <div class="contact-item contact-item--phone">
                <div class="contact-item__icon icon-phone"></div>
                <div class="contact-item__content">
                    <a href="tel:<?php echo $phone_link; ?>">
                        <?php echo $phone_vsl; ?>
                    </a>
                </div>
            </div>

            <div class="contact-item contact-item--schedule">
                <div class="contact-item__icon icon-clock"></div>
                <div class="contact-item__content">
                    <?php echo $work_time_short; ?>
                </div>
            </div>

            <div class="contact-item contact-item--social">
                <div class="contact-item__content">
                    <div class="social social--header">
                        <a class="social-icon icon-instagram" href="<?php echo $social_inst; ?>">Instagram</a>
                        <a class="social-icon icon-vkontakte" href="<?php echo $social_vk; ?>">Vkontakte</a>
                    </div>
                </div>
            </div>

            <div class="menu-icon">
                <div class="menu-icon__middle"></div>
            </div>
        </div>
        <!-- remove for site per location -->
        <div class="header-contacts">

            <div class="contact-item contact-item--address">
                <div class="contact-item__icon icon-location"></div>
                <div class="contact-item__content"> Москва, Волгоградский пр. 60к1 (м.&nbsp;Кузьминки и&nbsp;Текстильщики)</div>
            </div>

            <div class="contact-item contact-item--phone">
                <div class="contact-item__icon icon-phone"></div>
                <div class="contact-item__content">
                    <a href="tel:+79855729406">
                        +7 985 572-94-06
                    </a>
                </div>
            </div>

            <div class="contact-item contact-item--schedule">
                <div class="contact-item__icon icon-clock"></div>
                <div class="contact-item__content">
                    <?php echo $work_time_short; ?>
                </div>
            </div>

            <div class="contact-item contact-item--social">
                <div class="contact-item__content">
                    <div class="social social--header">
                        <a class="social-icon icon-instagram" href="https://www.instagram.com/lucky.frank.barbershop.msc/">Instagram</a>
                        <a class="social-icon icon-vkontakte" href="https://vk.com/luckyfrankmsk">Vkontakte</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo -->
        <div class="logo">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="Lucky Frank Barbershop logo" />
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <div class="main-nav__logo">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="" />
            </div>

            <ul class="main-menu">
                <li><a href="<?php echo esc_url(home_url("/")); ?>#">Главная</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#about">О нас</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#promos">Акции</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#services">Услуги</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#prices">Прайс</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#team">Команда</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#contacts">Контакты</a></li>
            </ul>
        </nav>
    </header>


    <!-- Hero -->
    <section class="hero">
        <header class="hero__header">
            <p class="hero__welcome">Добро пожаловать в</p>
            <h1 class="hero__title">Lucky Frank
                <br>Barbershop</h1>
            <p class="hero__subtitle">Барбершоп для тех, кто разбирается в стиле</p>
        </header>

        <div class="hero__booking">
            <a class="ms_booking" href="#">Онлайн запись</a>
        </div>

        <div class="hero__app">
            <a href="https://itunes.apple.com/app/id1326142986">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/app-store.png" alt="ios приложение Lucky Frank"/>
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.yclients.mobile.s90212">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/google-play.png" alt="android приложение Lucky Frank"/>
            </a>
        </div>

        <div class="hero__quote">
            <blockquote class="quote quote--inversed">
                <div class="quote__deco"> </div>
                <h3 class="quote__title">Frank
                    <em>Says:</em>
                </h3>
                <p class="quote__text">
                    <?php echo $quote_hero; ?>
                </p>

                <div class="quote__signature">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/sign.png" alt="" />
                </div>
            </blockquote>
        </div>



        <div class="hero__deco"></div>
    </section>


    <!-- About Barbershop -->
    <section class="section about" id="about">
        <header class="section__header">
            <p class="section__suptitle">О Барбершопе</p>
            <h2 class="section__title">Добро пожаловать
                <br>в Lucky Frank Barbershop</h2>
            <p class="section__subtitle">Мы всегда рады видеть тебя</p>
        </header>
        <div class="section__content">
            <p class="section__text">
                <?php echo $about_description; ?>
            </p>
        </div>

        <div class="about__video">
            <iframe class="about-video-1" src="<?php echo $about_video; ?>" frameborder="0" gesture="media" allowfullscreen></iframe>
        </div>

        <div class="about__more">
            <a href="<?php echo esc_url(home_url("/")); ?>about/">узнай больше</a>
        </div>
    </section>


    <!-- Features -->
    <section class="section features">
        <header class="section__header section__header--inversed">
            <p class="section__suptitle">Преимущества Lucky&nbsp;Frank</p>
            <h2 class="section__title">Почему нам доверяют</h2>
            <div class="feature feature--first">
                <div class="feature__number">01</div>
                <div class="feature__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/features/atmosphere.svg" alt="" />
                </div>
                <h3 class="feature__title">Незабываемая атмосфера и&nbsp;безупречный сервис</h3>
            </div>
        </header>

        <div class="features__content">
            <div class="feature">
                <div class="feature__number">02</div>
                <div class="feature__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/features/pros.svg" alt="" />
                </div>
                <h3 class="feature__title">Профессиональные мастера</h3>
            </div>

            <div class="feature">
                <div class="feature__number">03</div>
                <div class="feature__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/features/tools.svg" alt="" />
                </div>
                <h3 class="feature__title">Импортные инструменты для&nbsp;стрижек и косметика</h3>
            </div>

            <div class="feature">
                <div class="feature__number">04</div>
                <div class="feature__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/features/parking.svg" alt="" />
                </div>
                <h3 class="feature__title">Удобная парковка</h3>
            </div>

            <div class="feature">
                <div class="feature__number">05</div>
                <div class="feature__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/features/drinks.svg" alt="" />
                </div>
                <h3 class="feature__title">Большой ассортимент бесплатных напитков</h3>
            </div>

            <div class="feature">
                <div class="feature__number">06</div>
                <div class="feature__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/features/games.svg" alt="" />
                </div>
                <h3 class="feature__title">Можно хорошо провести время с друзьями за игрой</h3>
            </div>

            <div class="feature">
                <div class="feature__number">07</div>
                <div class="feature__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/features/cards.svg" alt="" />
                </div>
                <h3 class="feature__title">Безналичный расчёт</h3>
            </div>
        </div>
    </section>


    <!-- Statistics -->
    <?php
        if ($stats_show[0] == "show") {
    ?>

    <section class="section statistics">
        <div class="section__content">
            <article class="stat">
                <header class="stat__header">
                    <div class="stat__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/haircut-icon.svg" alt="Стрижки в барбершопе Lucky Frank" />
                    </div>
                    <div class="stat__count"><?php echo $stats_haircuts; ?></div>
                    <div class="stat__name">идеальных<br>причёсок</div>
                </header>
                <div class="stat__photo">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/haircut-photo.png" alt="" />
                </div>
                <div class="stat__background stat__background--hair">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/haircut-bg.jpg" alt="" />
                </div>
            </article>
            <article class="stat">
                <header class="stat__header">
                    <div class="stat__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/shaving-icon.svg" alt="Бритьё в барбершопе Lucky Frank" />
                    </div>
                    <div class="stat__count"><?php echo $stats_beards; ?></div>
                    <div class="stat__name">подстриженых<br>бород</div>
                </header>
                <div class="stat__photo">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/shaving-photo.png" alt="" />
                </div>
                <div class="stat__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/shaving-bg.jpg" alt="" />
                </div>
            </article>
            <!-- <article class="stat">
                <header class="stat__header">
                    <div class="stat__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-icon.svg" alt="Профессиональные татуировки в барбершопе Lucky Frank" />
                    </div>
                    <div class="stat__count"><?php echo $stats_tatooes; ?></div>
                    <div class="stat__name">набитых<br>татуировок</div>
                </header>
                <div class="stat__photo">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-photo.png" alt="" />
                </div>
                <div class="stat__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-bg.jpg" alt="" />
                </div>
            </article> -->
        </div>
    </section>

    <?php
        }
    ?>


    <!-- Services -->
    <section class="section services" id="services">
        <div class="section__content section__content--wrapper services__to-desktop">
            <article class="service">
                <div class="service__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/shaving-icon.svg" alt="Бритьё в барбершопе Lucky Frank" />
                </div>
                <h3 class="service__title">Бритьё</h3>
                <p class="service__description">Профессиональный подход к каждому клиенту от наших лучших мастеров барберов</p>
                <div class="service__more">
                    <!-- <a href="#">Подробнее</a> -->
                </div>
            </article>

            <article class="service">
                <div class="service__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/haircut-icon.svg" alt="Стрижки в барбершопе Lucky Frank" />
                </div>
                <h3 class="service__title">Стрижки</h3>
                <p class="service__description">Модный тренд или вечная классика? Подберем именно то, что подходит Вам</p>
                <div class="service__more">
                    <a href="<?php echo esc_url(home_url("/")); ?>/haircuts">Подробнее</a>
                </div>
            </article>

            <article class="service">
                <div class="service__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal-icon.svg" alt="Королевское бритьё в барбершопе Lucky Frank" />
                </div>
                <h3 class="service__title">Королевское бритьё</h3>
                <p class="service__description">Настоящий ритуал, состоящий из нескольких этапов, достойный королей</p>
                <div class="service__more">
                    <a href="<?php echo esc_url(home_url("/")); ?>/royal-shaving">Подробнее</a>
                </div>
            </article>

            <!-- <article class="service">
                <div class="service__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-icon.svg" alt="Профессиональные татуировки в барбершопе Lucky Frank" />
                </div>
                <h3 class="service__title">Татуировки</h3>
                <p class="service__description">Наши тату мастера осуществят вашу самую смелую идею</p>
                <div class="service__more">
                    <a href="#">Подробнее</a>
                </div>
            </article> -->
        </div>


        <div class="services__desktop">
            <article class="service-thumb">
                <header class="service-thumb__header">
                    <h3 class="service-thumb__title">Стрижки</h3>
                    <div class="service-thumb__more">
                        <a href="<?php echo esc_url(home_url("/")); ?>/haircuts">Подробнее</a>
                    </div>
                    <div class="service-thumb__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/haircut-icon-white.svg" alt="" />
                    </div>
                </header>
                <div class="service-thumb__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/services/haircut-bg.jpg" alt="" />
                </div>
            </article>

            <article class="service-thumb">
                <header class="service-thumb__header">
                    <h3 class="service-thumb__title">Королевское<br>бритьё</h3>
                    <div class="service-thumb__more">
                        <a href="<?php echo esc_url(home_url("/")); ?>/royal-shaving">Подробнее</a>
                    </div>
                    <div class="service-thumb__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal-icon-white.svg" alt="" />
                    </div>
                </header>
                <div class="service-thumb__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/services/royal-bg.jpg" alt="" />
                </div>
            </article>

            <br/>

            <article class="service-thumb">
                <header class="service-thumb__header">
                    <h3 class="service-thumb__title">Бритьё</h3>
                    <div class="service-thumb__more">
                        <!-- <a href="#">Подробнее</a> -->
                    </div>
                    <div class="service-thumb__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/shaving-icon-white.svg" alt="" />
                    </div>
                </header>
                <div class="service-thumb__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/services/shaving-bg.jpg" alt="" />
                </div>
            </article>

            <!-- <article class="service-thumb">
                <header class="service-thumb__header">
                    <h3 class="service-thumb__title">Татуировки</h3>
                    <div class="service-thumb__more">
                        <a href="#">Подробнее</a>
                    </div>
                    <div class="service-thumb__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-icon-white.svg" alt="" />
                    </div>
                </header>
                <div class="service-thumb__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/services/tattoos-bg.jpg" alt="" />
                </div>
            </article> -->

            <div class="services__quote">
                <blockquote class="quote quote--inversed">
                    <div class="quote__deco"> </div>
                    <h3 class="quote__title">Frank
                        <em>Says:</em>
                    </h3>
                    <p class="quote__text">
                        <?php echo $quote_services; ?>
                    </p>
                    <div class="quote__signature">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/sign-white.png" alt="" />
                    </div>
                </blockquote>
            </div>
        </div>
    </section>


    <!-- Promos -->
    <a id="prices"></a>
    <section class="promos" id="promos">
        <?php
            $args = array(
                "category_name" => "promo"
            );

            query_posts($args);
            if (have_posts()) {
                while(have_posts()) {
                    the_post();

                    // vars
                    $promo_title        = get_field("promo-title");
                    $promo_subtitle     = get_field("promo-subtitle");
                    $promo_image        = get_field("promo-image");
                    $promo_text         = get_field("promo-text");
                    $promo_link         = get_field("promo-link");
        ?>

        <article class="promo">
            <div class="promo__image">
                <img src="<?php echo $promo_image; ?>" alt="<?php echo $promo_title; ?>" />
            </div>
            <div class="promo__content">
                <header class="promo__header">
                    <p class="promo__suptitle">Акция</p>
                    <h3 class="promo__title">
                        <?php echo $promo_title; ?>
                    </h3>
                    <p class="promo__subtitle">
                        <?php echo $promo_subtitle; ?>
                    </p>
                </header>
                <p class="promo__text">
                    <?php echo $promo_text; ?>
                </p>

        <?php
                    if ($promo_link != "") {
        ?>

                        <div class="promo__more">
                            <a href="<?php echo esc_url(home_url("/")); ?><?php echo $promo_link; ?>">Подробнее об акции</a>
                        </div>

        <?php
                    }
        ?>

            </div>
        </article>

        <?php
                }
            }
        ?>
    </section>


    <!-- Prices -->
    <section class="section prices">
        <header class="section__header section__header--inversed">
            <p class="section__suptitle">Прайс Lucky Frank</p>
            <h2 class="section__title">Прайс-лист
                <br>на услуги</h2>
            <p class="section__subtitle">Позволь себе настоящий стиль</p>
        </header>
        <!-- <div class="prices__more">
            <a class="button" href="">Все услуги</a>
        </div> -->
        <div class="prices__content">
            <div class="prices__column prices__column--left">
                <h3 class="prices__city">Москва</h3>
                <?php echo $price_main; ?>
            </div>
            <div class="prices__column">
                <h3 class="prices__city">Краснодар</h3>
                <?php echo $price_additional; ?>
                <!-- <?php echo $price_complex; ?> -->
            </div>
        </div>

        <div class="partners">
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/american-crew.png" alt="American Crew logo"/></div>
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/truefitt-and-hill.png" alt="Truefitt &amp; Hill logo"/></div>
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/barber-wild.png" alt="Barber WILD logo"/></div>
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/wahl.png" alt="WAHL logo"/></div>
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/proraso.png" alt="Proraso logo"/></div>
        </div>
    </section>


    <!-- Feedback -->
    <section class="feedback">
        <header class="feedback__header">
            <p class="feedback__suptitle">Стрижки от Lucky Frank</p>
            <h2 class="feedback__title">Примеры наших работ</h2>
            <p class="feedback__subtitle">Громче любых отзывов</p>
            <div class="feedback__more">
                <a class="button" href="<?php echo esc_url(home_url("/feedback")); ?>">Еще работы</a>
            </div>
        </header>
        <div class="feedback__content">
            <?php echo do_shortcode('[robo-gallery id="483"]'); ?>
        </div>
    </section>


    <!-- Team -->
    <section class="section team" id="team">
        <header class="section__header">
            <p class="section__suptitle">Барберы Lucky Frank</p>
            <h2 class="section__title">Наши мастера</h2>
            <p class="section__subtitle">Мы знаем, что такое стиль</p>
        </header>
        <div class="team__more">
            <a class="ms_booking button button--inverse" href="#">Онлайн запись</a>
        </div>

        <div class="team__content">
            <?php
                $args = array(
                    "category_name" => "team"
                );

                query_posts($args);

                if (have_posts()) {
                    while(have_posts()) {
                        the_post();

                        // vars
                        $member_position    = get_field("member-position");
                        $member_name        = get_field("member-name");
                        $member_photo       = get_field("member-photo");
            ?>

            <article class="member">
                <header class="member__header">
                    <p class="member__position"><?php echo $member_position; ?></p>
                    <h3 class="member__name"><?php echo $member_name; ?></h3>
                </header>
                <div class="member__photo">
                    <img src="<?php echo $member_photo;?>" alt="<?php echo $member_name; ?> барбер барбершопа Lucky Frank" />
                </div>
            </article>

            <?php
                    }
                }
            ?>

            <article class="join">
                <header class="join__header">
                    <h3 class="join__title">Присоединяйся
                        <br>к нашей команде</h3>
                </header>
                <div class="join__cover"></div>
                <div class="join__photo">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/team/join.png" alt="" />
                </div>
            </article>
        </div>
        <div class="team__quote">
            <blockquote class="quote">
                <div class="quote__deco"> </div>
                <h3 class="quote__title">Frank
                    <em>Says:</em>
                </h3>
                <p class="quote__text">
                    <?php echo $quote_team; ?>
                </p>
                <div class="quote__signature">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/sign.png" alt="" />
                </div>
            </blockquote>
        </div>
    </section>


    <!-- Contacts and Map -->
    <!-- <section class="location" id="contacts">
        <div class="map-label">
            <h2 class="map-label__title">Контакты</h2>

            <h3 class="map-label__contact-title">Адрес</h3>
            <p class="map-label__contact-value"><?php echo $address; ?></p>

            <h3 class="map-label__contact-title">Электронная почта</h3>
            <p class="map-label__contact-value">
                <a href="mailto:<?php echo $e_mail; ?>"><?php echo $e_mail; ?></a>
            </p>

            <h3 class="map-label__contact-title">Телефон</h3>
            <p class="map-label__contact-value">
                <a href="tel:<?php echo $phone_link; ?>"><?php echo $phone_vsl; ?></a>
            </p>

            <div class="map-label__logo">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="Lucky Frank Barbershop logo" />
            </div>
        </div>

        <div class="location__map" id="map"></div>
    </section> -->

    <?php get_footer(); ?>
    <script type="text/javascript">
    try {
      document.querySelector('section.hero .hero__booking').addEventListener('click', function () {
        yaCounter48084299.reachGoal('knopka-zapis')
      })
    } catch (e) {}
    </script>
</body>
</html>
