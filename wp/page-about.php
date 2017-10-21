<?php
    /*
        Template Name: About Page
    */

    get_header();
?>

    <section class="inner-about">
        <header class="inner-about__header">
            <h2 class="inner-about__title">Добро пожаловать <br>в Lucky Frank Barbershop </h2>
            <p class="inner-about__subtitle">Мы всегда рады видеть тебя</p>
        </header>
        <div class="inner-about__content">
            <div class="inner-about__image">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/haircut.jpg" alt="Барбершоп Lucky Frank интерьер" />
            </div>
            <p class="inner-about__description">Lucky Frank Barbershop это то самое место, которого так давно ждали мужчины. Классический стиль, безупречные стрижки, высококлассное бритьё, и конечно атмосфера мужского братства, где тебя примут с распростертыми объятиями. Заходи к нам в гости. Здесь всё проникнуто духом гостеприимности как в старые добрые времена. </p>
            <p class="inner-about__description">Приводи друзей, братьев и сыновей — для каждого у нас найдется что-то по вкусу. Профессиональные цирюльники вне времени — наши мастера знают толк в своём деле и готовы проявить всё своё мастерство. Однажды оценив качество барбершопа Lucky Frank на собственном опыте, ты уже не захочешь опускать планку. И помни: классика всегда в моде.</p>
        </div>
    </section>

<?php
    get_footer();
?>