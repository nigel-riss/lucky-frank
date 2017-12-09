<?php
    /*
        Template Name: About Page
    */

    get_header();

    //  vars
    $ip_title       = get_field("ip_title");
    $ip_subtitle    = get_field("ip_subtitle");
    $ip_image       = get_field("ip_image");

    $about_video    = get_field("about-video");
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
            <?php
                the_post();
                the_content();
            ?>

            <iframe class="about-video" src="<?php echo $about_video; ?>" frameborder="0" gesture="media" allowfullscreen></iframe>
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