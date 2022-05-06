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
                <?php endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="particulier-front pro-front" title='Vous êtes un particulier'>
        <div class="container">

            <div class="particulier-front__left">
                <h2 class="particulier-front__title"><?php the_field('titre_pro') ?></h2>
                <?php $image_pro = get_field('image_pro'); ?>
                <img src="<?= esc_url($image_pro['url']); ?>" alt="<?= esc_attr($image_pro['alt']); ?>">
            </div>
            <div class="particulier-front__right">
                <h3><?php the_field('question_pro'); ?></h3>
                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                $pro_query = new WP_Query($args);

                if ($pro_query->have_posts()) :
                ?>
                    <div class="particulier-front__loop">
                        <?php while ($pro_query->have_posts()) : $pro_query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="loop__link"><?php the_title() ?></a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; 
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="front-gamme" title="La gamme">
        <div class="container">
            <h2><?php the_field('titre_la_gamme'); ?></h2>
            <div class="gamme__text">
                <?php the_field('gamme_texte'); ?>
            </div>
            <ul class="gamme">
                <?php if ( have_rows('gamme') ) : ?>
                    <?php while ( have_rows('gamme') ) : the_row(); ?>
                        <li class="gamme__item">
                            <?php $image = get_sub_field('image'); ?>
                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                            <h3><?php the_sub_field('titre'); ?></h3>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <?php $gamme_link = get_field('lien_gamme'); ?>
            <a href="<?= esc_url($gamme_link['url']); ?>" target="<?= $gamme_link['target'] ? esc_attr($gamme_link['target']) : '_self' ?>">
                <?= esc_html($gamme_link['title']); ?>
            </a>
        </div>
    </section>

    <section class="team-front" title='La team'>
        <div class="container">
            <h2><?php the_field('team_titre'); ?></h2>
            <?php if( have_rows('team') ) : ?>
                <ul class="team">
                    <?php while( have_rows('team') ) : the_row(); ?>
                        <li class="team__item">
                            <?php $image = get_sub_field('image'); ?>
                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                            <h3><?php the_sub_field('nom'); ?></h3>
                            <p><?php the_sub_field('texte'); ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <?php $team_link = get_field('team_link'); ?>
            <a href="<?= esc_url($team_link['url']); ?>" target="<?= $team_link['target'] ? esc_attr($team_link['target']) : '_self' ?>">
                <?= esc_html($team_link['title']); ?>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>