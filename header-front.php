<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="header-front">
        <section class="accueil-banner">
            <div class="accueil-banner__red-bg">
                <strong class="absolute__element">Caviste</strong>
                <strong class="absolute__element">Bar à vin</strong>
                <strong class="absolute__element">Ambulants</strong>
                <strong class="absolute__element">Ateliers oenologiques</strong>
                <?php $white_logo = get_field('logo_blanc'); ?>
                <img src="<?= esc_url($white_logo['url']); ?>" alt="<?= esc_attr($white_logo['alt']); ?>" class='logo-blanc'>
                <?php $illustration = get_field('illustration'); ?>
                <img src="<?= esc_url($illustration['url']); ?>" alt="<?= esc_attr($illustration['alt']); ?>" class="illustration">
            </div>
            <div class="accueil-banner__right-site">
                <strong class="phone">
                    <?php the_field('numero_de_telephone', 'options') ?>
                </strong>
                <?php $accueil_image = get_field('image_haut_page'); ?>
                <img src="<?= esc_url($accueil_image['url']); ?>" alt="<?= esc_attr($accueil_image['alt']); ?>" class="hero-accueil-image" />
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <?php $image = get_field('logo', 'options');
        $image_url = $image['url'];
        $image_alt = $image['alt'];
        ?>
        <div class="nav-front-container">
            <a href='/'>
                <img src='<?= esc_url($image_url) ?>' alt='<?= esc_attr($image_alt); ?>' />
            </a>
            <nav id="header-menu">
                <div class="background"></div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => 'false',
                    'menu_classs' => 'main-menu',
                    'fallback_cb' => false,
                    'items_wrap' => '<div class="menu-btn" id="menu-btn">
                    <div class="menu-btn__burger"></div>
                    </div><ul id="menu-main-menu" id="%1$s" class="%2$s">%3$s</ul>',
                )); ?>
            </nav>
        </div>
    </header>
    <main class="front-page">
        <section class='socials-header'>
            <?php if (have_rows('socials', 'options')) : ?>
                <div class='socials-container'>
                    <?php while (have_rows('socials', 'options')) : the_row(); ?>
                        <?php $socials_image = get_sub_field('image');
                        $socials_image_url = $socials_image['url'];
                        $socials_image_alt = $socials_image['alt'];

                        $socials_link = get_sub_field('lien');
                        $socials_link_url = $socials_link['url'];
                        $socials_link_title = $socials_link['title'];
                        $socials_link_target = $socials_link['target'] ? $socials_link['target'] : '_self';
                        ?>
                        <a hrief='<?= esc_url($socials_link_url); ?>' title='<?= esc_html($socials_link_title); ?>' target='<?= esc_attr($socials_link_target) ?>'>
                            <span class='screen-reader-text'><?= esc_html($socials_link_title); ?></span>
                            <img src="<?= esc_url($socials_image_url) ?>" alt='<?= esc_attr($socials_image_alt); ?>' />
                        </a>
                    <?php endwhile; ?>
                    <a href="<?php the_field('lien_page_contact', 'options') ?>" class='contact-socials__header'>
                        <?php $image_contact = get_field('image_contact', 'options');
                        $image_contact_url = $image_contact['url'];
                        $image_contact_alt = $image_contact['alt'];
                        ?>
                        <span class='screen-reader-text'><?= esc_attr($image_contact_alt); ?></span>
                        <img src='<?= esc_url($image_contact_url); ?>' alt='<?= esc_attr($image_contact_alt); ?>' />
                    </a>
                </div>
            <?php endif; ?>
        </section>