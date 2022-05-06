<?php get_header('front'); ?>

<section class="particulier-front" title='Vous êtes un particulier'>
    <div class="container">

        <div class="particulier-front__left">
            <h2 class="particulier-front__title"><?php the_field('titre_particulier') ?></h2>
            <?php $image_particulier = get_field('image_particulier'); ?>
            <img src="<?= esc_url($image_particulier['url']); ?>" alt="<?= esc_attr($image_particulier['alt']); ?>">
        </div>
        <div class="particulier-front__right">
            <h3><?php the_field('question_particulier'); ?></h3>
            <?php $args = array(
                'post_type' => 'particulier',
                'posts_per_page' => 3,
            );
            $particulier_query = new WP_Query($args);

            if ($particulier_query->have_posts()) :
            ?>
                <div class="particulier-front__loop">
                    <?php while ($particulier_query->have_posts()) : $particulier_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="loop__link"><?php the_title() ?></a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>