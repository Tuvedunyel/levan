<?php /*

Template Name: Page Pro

 */ 
get_header();
?>

<main class='home-template'>
	<section class='home'>
		<div class='red-bg'>
			<h1><?php the_title(); ?></h1>
			<article><?php the_content(); ?></article>
		</div>
		<div class='right-side'>
			<div class='hero-banner'>
				<?php $image = get_field('image_haut_page'); ?>
				<img src='<?= esc_url($image['url']) ?>' alt='<?= esc_attr($image['alt']) ?>' />
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
