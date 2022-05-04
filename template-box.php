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
</main>
<?php get_footer(); ?>
