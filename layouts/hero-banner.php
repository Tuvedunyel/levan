<section class='hero-banner'>
	<?php $haut_page_image = get_field('haut_page_image');
	$haut_page_image_url = $haut_page_image['url'];
	$haut_page_image_alt = $haut_page_image['alt'];
	?>
	<img src='<?= esc_url($haut_page_image_url); ?>' alt='<?= esc_attr($haut_page_image_alt); ?>' />
	<h1><?php the_title(); ?></h1>
	<h2 class='vertical_title'><?php the_field('titre_vertical'); ?></h2>
</section>
