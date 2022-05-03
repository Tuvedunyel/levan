<?php

/*
 Template Name: Contact
*/
get_header();
?>
<main id="contact-page">
    <section class='hero-banner'>
        <h1><?php the_title(); ?></h1>
        <?php $haut_page_image = get_field('haut_page_image');
        $haut_page_image_url = $haut_page_image['url'];
        $haut_page_image_alt = $haut_page_image['alt'];
        ?>
        <img src='<?= esc_html($haut_page_image_url); ?>' alt='<?= esc_attr($haut_page_image_alt) ?>' class='hero-background' />
        <div class='vine-glasses__container'>
            <img src='<?= get_template_directory_uri() ?>/img/glasses.svg' alt='Illustration de deux verres de vins au contour blanc et transparent' />
        </div>
    </section>
    <article>
        <div class="container">
            <?php the_content(); ?>
        </div>
    </article>
    <section class="contact-form">
        <?= do_shortcode('[contact-form-7 id="6" title="Contact"]') ?>
    </section>
</main>
<?php get_footer(); ?>