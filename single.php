<?php get_header(); ?>

<main class='single'>
	<div class="container-narrow title__singe__container">
		<h1><?php the_title(); ?></h1>
	</div>
	<section class="hero-banner">
		<div class="container">
			<div class='image-container'>
				<?php $hero_image = get_field('haut_page_image'); ?>
				<img src='<?= esc_url($hero_image['url']); ?>' alt='<?= esc_attr($hero_image['alt']); ?>' />
			</div>
			<div class='hero-banner__texte'>
				<div class='texte-container'>
					<div class="inner-container">
						<img src='<?= get_template_directory_uri(); ?>/img/glasses.svg' alt='verre de vin' />
						<div class='texte-container__content'>
							<?php the_field('haut_page_texte'); ?>
						</div>
					</div>
				</div>
				<strong class='prix'><?php the_field('haut_page_prix'); ?></strong>
			</div>
		</div>
	</section>
	<article>
		<div class="container">
			<?php the_content(); ?>
		</div>
	</article>

	<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3
	);

	$post_query = new WP_Query($args);

	if ($post_query->have_posts()) { ?>
		<section class="post-loop">
			<div class="container">
				<h3>Nos autres savoir-faire</h3>

				<?php while ($post_query->have_posts()) {
					$post_query->the_post();
				?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php
				} ?>
			</div>
		</section>
	<?php }
	wp_reset_postdata();
	?>
</main>

<?php get_footer(); ?>
