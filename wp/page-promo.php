<?php
    /*
        Template Name: Promo Page
    */

    get_header();
    
    $ip_title       = get_field("ip_title");
    $ip_subtitle    = get_field("ip_subtitle");
    $ip_image       = get_field("ip_image");
    $ip_video       = get_field("ip_video");
?>

    <section class="inner-about">
        <header class="inner-about__header">
            <h2 class="inner-about__title"><?php echo $ip_title; ?></h2>
            <p class="inner-about__subtitle"><?php echo $ip_subtitle; ?></p>
        </header>
        <div class="inner-about__content">
            <?php 
                if ($ip_image != "") {
            ?>

            <div class="inner-about__image">
                <img src="<?php echo $ip_image; ?>" alt="Барбершоп Lucky Frank интерьер" />
            </div>

            <?php
                } else {

            ?>

            <div class="about__video">
                <iframe class="about-video-1" src="<?php echo $ip_video; ?>" frameborder="0" gesture="media" allowfullscreen></iframe>
            </div>
            
            <?php
                }
            ?>
            
            <div class="inner-about__description">
                <?php the_post(); the_content(); ?>
            </div>

        </div>
    </section>

<?php
    get_footer();
?>