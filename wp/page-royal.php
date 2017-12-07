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

            <?php the_post(); the_content(); ?>

        </div>
    </section>

    <?php
        $args = array(
            "category_name" => "royal" 
        );

        query_posts($args);

        if (have_posts()) {
            while (have_posts()) {
                the_post();

                // vars
                $royal_name         = get_field("royal-name");
                $royal_photo        = get_field("royal-photo");
    ?>

    <section class="inner-section">
        <div class="inner-section__image">
            <img src="<?php echo $royal_photo; ?>" alt="<?php echo $royal_name; ?>" />
        </div>
        <header class="inner-section__header">
            <h2 class="inner-section__title"><?php echo $royal_name; ?></h2>
        </header>
        <div class="inner-section__content">
            <?php the_content(); ?>
        </div>
    </section>

    <?php
            }
        }
    ?>

<?php
    get_footer();
?>