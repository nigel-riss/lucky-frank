<?php
    /*
        Template Name: Feedback Page
    */

    get_header();
?>
    <section class="gallery">
        <?php 
            if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'feedback-gallery', 'slug' ); }
        ?>
    </section>

<?php
    get_footer();
?>