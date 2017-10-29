<?php
    /*
        Template Name: About Page
    */

    get_header();

    $ip_title       = get_field("ip_title");
    $ip_subtitle    = get_field("ip_subtitle");
    $ip_image       = get_field("ip_image");
?>

    <section class="inner-about">
        <header class="inner-about__header">
            <h2 class="inner-about__title"><?php echo $ip_title; ?></h2>
            <p class="inner-about__subtitle"><?php echo $ip_subtitle; ?></p>
        </header>
        <div class="inner-about__content">
            <div class="inner-about__image">
                <img src="<?php echo $ip_image; ?>" alt="Барбершоп Lucky Frank интерьер" />
            </div>
            <p class="inner-about__description">Lucky Frank Barbershop это то самое место, которого так давно ждали мужчины. Классический стиль, безупречные стрижки, высококлассное бритьё, и конечно атмосфера мужского братства, где тебя примут с распростертыми объятиями. Заходи к нам в гости. Здесь всё проникнуто духом гостеприимности как в старые добрые времена. </p>
            <p class="inner-about__description">Приводи друзей, братьев и сыновей — для каждого у нас найдется что-то по вкусу. Профессиональные цирюльники вне времени — наши мастера знают толк в своём деле и готовы проявить всё своё мастерство. Однажды оценив качество барбершопа Lucky Frank на собственном опыте, ты уже не захочешь опускать планку. И помни: классика всегда в моде.</p>
        </div>

        <div class="partners">
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/american-crew.png" alt="American Crew logo"/></div>
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/truefitt-and-hill.png" alt="Truefitt &amp; Hill logo"/></div>
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/barber-wild.png" alt="Barber WILD logo"/></div>
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/wahl.png" alt="WAHL logo"/></div>
            <div class="partner"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/partners/proraso.png" alt="Proraso logo"/></div>
        </div>
    </section>

    <section class="gallery">
        <?php 
            if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'about-gallery', 'slug' ); }
        ?>
    </section>

<?php
    get_footer();
?>