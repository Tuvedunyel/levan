<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header>
        <?php $image = get_field('logo', 'options');
            $image_url = $image['url'];
            $image_alt = $image['alt'];
        ?>
        <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($image_alt); ?>" class="logo">
        <nav id="header-menu"></nav>
        <strong class="phone">
            <?php the_field('numero_de_telephone', 'options') ?>
        </strong>
    </header>