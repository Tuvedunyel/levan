<?php
/*
Template Name: Box du van
*/

get_header();
?>
<main class='main-page box'>
	<?php get_template_part('layouts/hero-banner'); ?>

	<article class='box-article'>
		<div class='container'>
			<div class='article-container'>
				<?php the_content(); ?>
			</div>
		</div>
	</article>
	<?php if (have_rows('selection_boissons')) : ?>
		<section class="selection" title='Notre sélection'>
			<div class="container">
				<ul class="selection-boissons">
					<?php while (have_rows('selection_boissons')) : the_row(); ?>
						<li>
							<?php $image = get_sub_field('image'); ?>
							<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
							<div class="selection-boissons__descriptif">
								<h3><?php the_sub_field('titre'); ?></h3>
								<?php the_sub_field('texte'); ?>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
				<?php $lien = get_field('lien');
				$target = $lien['target'] ? $lien['target'] : '_self';
				?>
				<a href="<?= esc_url($lien['url']); ?>" target="<?= esc_attr($target) ?>">
					<?= esc_html($lien['title']); ?>
				</a>
			</div>
		</section>
	<?php endif; ?>
</main>
<?php get_footer(); ?>