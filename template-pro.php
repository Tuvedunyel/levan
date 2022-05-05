<?php /*

Template Name: Page Pro

 */
get_header();
?>

	<?php get_template_part('layouts/part-home'); ?>
		<div class='right-side'>
			<div class='hero-banner'>
				<?php $image = get_field('image_haut_page'); ?>
				<img src='<?= esc_url($image['url']) ?>' alt='<?= esc_attr($image['alt']) ?>' />
			</div>
			<?php $args = array(
				'post_type' => 'post',
				'posts_per_page' => 3
			);
			$post_query = new WP_Query($args);

			if ($post_query->have_posts()) :
			?>
				<div class="post-loop">

					<?php while ($post_query->have_posts()) :
						$post_query->the_post();
					?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>