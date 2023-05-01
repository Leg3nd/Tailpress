<?php get_header(); ?>

<div class="w-full container mx-auto pb-5">
	<div class="flex flex-col my-5">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>

			<?php endwhile; ?>

			<h3 class="text-3xl font-inter text-citybreakteal-500">Africa</h3>
			<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

				<?php $query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'cat' => 5
				) );
				while ($query->have_posts()) : $query->the_post(); ?>
					<?php get_template_part( 'template-parts/home', 'latestposts' ); ?>

				<?php endwhile; ?>
			</div>
			
			<h3 class="text-3xl font-inter text-citybreakteal-500">Asia</h3>
			<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

				<?php $query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'cat' => 6
				) );
				while ($query->have_posts()) : $query->the_post(); ?>
					<?php get_template_part( 'template-parts/home', 'latestposts' ); ?>

				<?php endwhile; ?>
			</div>

			<h3 class="text-3xl font-inter text-citybreakteal-500">Australia</h3>
			<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

				<?php $query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'cat' => 6
				) );
				while ($query->have_posts()) : $query->the_post(); ?>
					<?php get_template_part( 'template-parts/home', 'latestposts' ); ?>

				<?php endwhile; ?>

			</div>

			<h3 class="text-3xl font-inter text-citybreakteal-500">Europe</h3>
			<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

				<?php $query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'cat' => 8
				) );
				while ($query->have_posts()) : $query->the_post(); ?>
					<?php get_template_part( 'template-parts/home', 'latestposts' ); ?>

				<?php endwhile; ?>
			</div>

			<h3 class="text-3xl font-inter text-citybreakteal-500">North America</h3>
			<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

				<?php $query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'cat' => 13
				) );
				while ($query->have_posts()) : $query->the_post(); ?>
					<?php get_template_part( 'template-parts/home', 'latestposts' ); ?>

				<?php endwhile; ?>
			</div>

			<h3 class="text-3xl font-inter text-citybreakteal-500">South America</h3>
			<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

				<?php $query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'cat' => 14
				) );
				while ($query->have_posts()) : $query->the_post(); ?>
					<?php get_template_part( 'template-parts/home', 'latestposts' ); ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
