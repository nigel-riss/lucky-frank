<?php
    /*
        Template Name: Royal Shaving Page
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
            <p class="inner-about__description">Термин <em>«КОРОЛЕВСКОЕ БРИТЬЁ»</em> непосредственно связан с именем Уильяма Труфита, открывшего свою первую цирюльню в 1805 году в Лондоне и, впоследствии, ставшего основателем марки Truefitt & Hill. Заведение заслужило высочайшую репутацию у английской аристократии и получило признание монархов Великобритании – именно продукция Труфита получила эксклюзивные привилегии королевского двора. Тогда же были заложены основы этой статусной процедуры.</p>
            <p class="inner-about__description">Что же необходимо для того, чтобы бритье стало «королевским»?</p>
            <p class="inner-about__description">Во-первых, это правильная опасная бритва и барбер, умеющий с ней обращаться. Наши опытные мастера прошли специальное обучение и повышение квалификации по стандартам и правилам Truefitt & Hill.</p>
            <p class="inner-about__description">Во-вторых, мужская косметика премиум-класса от Truefitt & Hill. Это по-настоящему элитные средства для бритья и ухода за кожей. Масла, мыло и бальзамы высочайшего качества, на основе проверенных за два века рецептов и с применением самых современных технологий.</p>
            <p class="inner-about__description">Королевское бритье – это настоящий ритуал, состоящий из нескольких этапов.</p>
        </div>
    </section>

    <section class="inner-section">
        <div class="inner-section__image">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal/1.jpg" alt="" />
        </div>
        <header class="inner-section__header">
            <h2 class="inner-section__title">1. Нанесение масла</h2>
        </header>
        <div class="inner-section__content">
            <p>В самом начале барбер наносит на кожу подготавливающее к бритью масло Truefitt & Hill, которое cмягчает волосы, что обеспечивает комфортное и безопасное бритьё, а впоследствии предотвращает появление вросших волос.</p>
            <p>Остающася на коже тонкая пленка масла обладает гидрофильными свойствами и способствует плавному скольжению лезвия опасной бритвы.</p>
            <p>Кроме того, активные компоненты масла (среди которых масла авокадо, семян сафлора, кокоса и цитрусовых, экстракты огурца и алоэ) улучшают состояние кожи: выравнивают текстуру и уменьшают чувстительность за счет усиленного увлажнения клеток эпидермиса. Исчезает ощущение стянутости сухой кожи. Масло Truefitt & Hill обладает обезораживающими и антиокислительными свойствами.</p>
        </div>
    </section>

    <section class="inner-section">
        <div class="inner-section__image">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal/2.jpg" alt="" />
        </div>
        <header class="inner-section__header">
            <h2 class="inner-section__title">2. Распаривание кожи полотенцем</h2>
        </header>
        <div class="inner-section__content">
            <p>В специальном паровом шкафу ждут своего времени разогретые махровые полотенца. Идеально подобранная температура и влажность не нанесут вашей коже ожогов или дискомфорта, но подготовят бороду к бритью.</p>
            <p>Кожа очищается, раскрываются поры. Приливающая кровь приподнимает волоски, которые под горячим компрессом становятся мягче и прямее, благодаря чему последующее бритье будет чище и безопаснее. Распаривание значительно снижает уровень раздражения и количество микропорезов.</p>
            <p>В работе используется два полотенца: спустя некоторое время барбер делает смену остывающего компресса на новый.</p>
        </div>
    </section>

    <section class="inner-section">
        <div class="inner-section__image">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal/3.jpg" alt="" />
        </div>
        <header class="inner-section__header">
            <h2 class="inner-section__title">3. Нанесение пены</h2>
        </header>
        <div class="inner-section__content">
            <p>На следующем этапе мастер использует свежеприготовленную пену, получаемую из специального мыла на основе натуральных компонентов высочайшего качества.</p>
            <p>Для взбивания пены и её нанесения на лицо применяется особая чаша и помазок из уникальной шерсти барсука класса Silvertip. Её нежнейшие волоски, собираемые с небольшого участка в области шеи животного, отлично удерживают влагу и создают пену необходимой консистенции.</p>
            <p>Барбер покрывает обриваемые участки кожи теплой пеной.</p>
        </div>
    </section>

    <section class="inner-section">
        <div class="inner-section__image">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal/4.jpg" alt="" />
        </div>
        <header class="inner-section__header">
            <h2 class="inner-section__title">4. Бритьё опасной бритвой</h2>
        </header>
        <div class="inner-section__content">
            <p>Теперь можно приступать к самой ответственной части всей процедуры. Бритье опасной бритвой требует немалого опыта и мы гордимся, что наши специалисты достигли в этом деле настоящего мастерства. Барбер натягивает кожу там, где это необходимо и именно с тем усилием, которое требуется на каждом участке лица. Максимально острое лезвие бритвы, подчиняясь ювелирным движениям руки мастера, под необходимым углом скользит по коже, гладко и начисто срезая волоски.</p>
            <p>Все инструменты обязательно проходят тщательнейшую обработку и обеззараживание, а сами лезвия – одноразовые.</p>
        </div>
    </section>

    <section class="inner-section">
        <div class="inner-section__image">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal/5.jpg" alt="" />
        </div>
        <header class="inner-section__header">
            <h2 class="inner-section__title">5. Холодный компресс</h2>
        </header>
        <div class="inner-section__content">
            <p>После бритья кожу следует правильно успокоить. Для этого барбер накладывает на лицо холодный компресс, который стягивает поры и снимает раздражение. Спустя некоторое время мастер снимает охлажденное полотенце и убирает им остатки пены.</p>
        </div>
    </section>

    <section class="inner-section">
        <div class="inner-section__image">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal/6.jpg" alt="" />
        </div>
        <header class="inner-section__header">
            <h2 class="inner-section__title">6. Нанесение бальзама после бритья</h2>
        </header>
        <div class="inner-section__content">
            <p>После снятия охлаждающего компресса, барбер легкими, массириющими движениям и наносит на обритые участки специальный бальзам от Truefitt & Hill на основе лечебного экстракта алое и аллантоина, повышающего регенерацию клеток кожи.</p>
        </div>
    </section>

    <section class="inner-section">
        <div class="inner-section__image">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/royal/7.jpg" alt="" />
        </div>
        <header class="inner-section__header">
            <h2 class="inner-section__title">7. Нанесение одеколона</h2>
        </header>
        <div class="inner-section__content">
            <p>Финальным штрихом в процедуре королевского бритья является одеколон. И он заслуживает отдельного упоминания. Эксклюзивные ароматы от Truefitt & Hill – яркий пример элегантной мужественности. Идеально подобранные ноты и высочайшее качество компонентов сделают одеколоны этого британского бренда настоящим украшением вашего обновленного образа.</p>
        </div>
    </section>
<?php
    get_footer();
?>