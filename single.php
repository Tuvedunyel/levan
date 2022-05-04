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
					<img src='<?= get_template_directory_uri(); ?>/img/glasses.svg' alt='verre de vin' />
					<div class='texte-container__content'>
						<?php the_field('haut_page_texte'); ?>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>