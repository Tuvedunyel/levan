<?php get_header(); ?>

<main class='main-page'>
	<?php get_template_part('layouts/hero-banner'); ?>
	<article>
		<div class='container-narrow'>
			<?php the_content(); ?>
		</div>
	</article>
	<section class='post-contenu'>
		<div class='container'>
			<?php $image = get_field('image');
			$image_url = $image['url'];
			$image_alt = $image['alt'];
			?>
			<img src='<?= esc_url($image_url); ?>' alt='<?= esc_attr($image_alt); ?>' />
			<div class='post-contenu__text'>
				<?php the_field('texte'); ?>
			</div>
		</div>
	</section>
	<section class='carte-visite'>
		<div class='container'>
			<img src='<?= get_template_directory_uri(); ?>/img/carte-visite.jpg' alt='Cavite, Bar à vin ambulants, ateliers oenologiques' />
		</div>
	</section>
</main>

<?php get_footer(); ?>