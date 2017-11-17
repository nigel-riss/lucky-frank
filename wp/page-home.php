<?php
    /*
        Template Name: Home Page
    */
?>

<!DOCTYPE html>
<html lang="ru">

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
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>?v=6" />

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

        <!-- Logo -->
        <div class="logo">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo-white.svg" alt="Lucky Frank Barbershop logo" />
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
            <!-- <p class="hero__sale">В честь открытия! <br> До конца ноября, <br>на все услуги скидка 50%</p> -->
        </div>
        <div class="hero__quote">
            <blockquote class="quote quote--inversed">
                <div class="quote__deco"> </div>
                <h3 class="quote__title">Frank
                    <em>Says:</em>
                </h3>
                <!-- <p class="quote__text">Костюм, шляпа, хорошая работа и одинокое пьянство по выходным
                    <br>
                    <strong>— вот что украшает мужчину</strong>
                </p> -->
                <p class="quote__text">В честь открытия! <br> До конца ноября,
                    <br>
                    <strong>— на все услуги скидка 50%</strong>
                </p>
                <div class="quote__signature">
                    <!-- <img src="<?php bloginfo("stylesheet_directory"); ?>/img/sign.png" alt="" /> -->
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
            <p class="section__text">Lucky Frank Barbershop это то самое место, которого так давно ждали мужчины. Классический стиль, безупречные стрижки, высококлассное бритьё, и конечно атмосфера мужского братства, где тебя примут с распростертыми объятиями. Заходи к нам в гости. Здесь всё проникнуто духом гостеприимности как в старые добрые времена. </p>
        </div>
        <div class="about__more">
            <a href="<?php echo esc_url(home_url("/")); ?>about/">узнай больше</a>
        </div>
        <div class="about__deco">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/about-deco.png" alt="" />
        </div>
    </section>

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

            <article class="service">
                <div class="service__icon">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-icon.svg" alt="Профессиональные татуировки в барбершопе Lucky Frank" />
                </div>
                <h3 class="service__title">Татуировки</h3>
                <p class="service__description">Наши тату мастера осуществят вашу самую смелую идею</p>
                <div class="service__more">
                    <!-- <a href="#">Подробнее</a> -->
                </div>
            </article>
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

            <article class="service-thumb">
                <header class="service-thumb__header">
                    <h3 class="service-thumb__title">Татуировки</h3>
                    <div class="service-thumb__more">
                        <!-- <a href="#">Подробнее</a> -->
                    </div>
                    <div class="service-thumb__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-icon-white.svg" alt="" />
                    </div>
                </header>
                <div class="service-thumb__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/services/tattoos-bg.jpg" alt="" />
                </div>
            </article>

            <div class="services__quote">
                <blockquote class="quote quote--inversed">
                    <div class="quote__deco"> </div>
                    <h3 class="quote__title">Frank
                        <em>Says:</em>
                    </h3>
                    <p class="quote__text">Если Вы обладаете чем-то, но Вы не можете это отдать, то Вы не обладаете этим...
                        <br>
                        <strong>это обладает Вами.</strong>
                    </p>
                    <div class="quote__signature">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/sign-white.png" alt="" />
                    </div>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <!-- <section class="section statistics">
        <div class="section__content">
            <article class="stat">
                <header class="stat__header">
                    <div class="stat__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/haircut-icon.svg" alt="Стрижки в барбершопе Lucky Frank" />
                    </div>
                    <div class="stat__count">35</div>
                    <div class="stat__name">идеальных
                        <br>причёсок</div>
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
                    <div class="stat__count">25</div>
                    <div class="stat__name">подстриженых
                        <br>бород</div>
                </header>
                <div class="stat__photo">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/shaving-photo.png" alt="" />
                </div>
                <div class="stat__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/shaving-bg.jpg" alt="" />
                </div>
            </article>
            <article class="stat">
                <header class="stat__header">
                    <div class="stat__icon">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-icon.svg" alt="Профессиональные татуировки в барбершопе Lucky Frank" />
                    </div>
                    <div class="stat__count">15</div>
                    <div class="stat__name">набитых
                        <br>татуировок</div>
                </header>
                <div class="stat__photo">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-photo.png" alt="" />
                </div>
                <div class="stat__background">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/tattoo-bg.jpg" alt="" />
                </div>
            </article>
        </div>
    </section> -->


    <!-- Prices -->
    <section class="section prices" id="prices">
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
                <table class="prices-table">
                    <thead>
                        <caption>Основные услуги</caption>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Стрижка мужская
                                <br>
                                <small>подбор стиля, мытье головы, укладка</small>
                            </td>
                            <td>1500 </td>
                        </tr>
                        <tr>
                            <td>Стрижка детская
                                <br>
                                <small>от 5 до 14 лет</small>
                            </td>
                            <td>1200 </td>
                        </tr>
                        <tr>
                            <td>Стрижка под машинку
                                <br>
                                <small>одна насадка</small>
                            </td>
                            <td>600 </td>
                        </tr>
                        <tr>
                            <td>Коррекция бороды</td>
                            <td>600 </td>
                        </tr>
                        <tr>
                            <td>Королевское бритьё бороды
                                <br>
                                <small>c косметикой Truefitt&nbsp;&&nbsp;Hill</small>
                            </td>
                            <td>1500 </td>
                        </tr>
                        <tr>
                            <td>Королевское бритьё головы
                                <br>
                                <small>c косметикой Truefitt&nbsp;&&nbsp;Hill</small>
                            </td>
                            <td>2000 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="prices__column">
                <table class="prices-table">
                    <thead>
                        <caption>Дополнительные услуги</caption>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Камуфляж седых волос</td>
                            <td>1100 </td>
                        </tr>
                        <tr>
                            <td>Окантовка с подбриванием</td>
                            <td>500 </td>
                        </tr>
                        <tr>
                            <td>Мытьё и укладка волос</td>
                            <td>400 </td>
                        </tr>
                    </tbody>
                </table>
                <table class="prices-table">
                    <thead>
                        <caption>Комплексные услуги</caption>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Стрижка мужская + Коррекция бороды</td>
                            <td>1800 </td>
                        </tr>
                        <tr>
                            <td>Стрижка мужская + Королевское бритьё</td>
                            <td>2700 </td>
                        </tr>
                        <tr>
                            <td>Отец + сын</td>
                            <td>2200 </td>
                        </tr>
                        <tr>
                            <td>Друг + друг</td>
                            <td>2600 </td>
                        </tr>
                    </tbody>
                </table>
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
                <p class="quote__text">Чтобы иметь успех, нужно иметь друзей; но чтобы поддерживать большой успех,
                    <br>
                    <strong>нужно иметь много друзей.</strong>
                </p>
                <div class="quote__signature">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/sign.png" alt="" />
                </div>
            </blockquote>
        </div>
    </section>

    <!-- Contacts and Map -->
    <section class="location" id="contacts">
        <div class="map-label">
            <h2 class="map-label__title">Контакты</h2>
            <h3 class="map-label__contact-title">Адрес</h3>
            <p class="map-label__contact-value">г. Краснодар, ул. Мира 54</p>
            <h3 class="map-label__contact-title">Электронная почта</h3>
            <p class="map-label__contact-value">
                <a href="mailto:info@luckyfrank.ru">info@luckyfrank.ru</a>
            </p>
            <h3 class="map-label__contact-title">Телефон</h3>
            <p class="map-label__contact-value">
                <a href="tel:+79181959419">+7 918 195-94-19</a>
            </p>
            <div class="map-label__logo">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="Lucky Frank Barbershop logo" />
            </div>
        </div>

        <div class="location__map" id="map"></div>
    </section>

    <?php get_footer(); ?>
</body>
</html>