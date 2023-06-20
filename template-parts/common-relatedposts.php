<?php 
	// the query
	$the_query = new WP_Query( array(
		'posts_per_page' => 3
	)); 
	?>
	<div class="w-full">
		<div class="flex flex-col container my-8 mx-auto">
			<h2 class="entry-title text-2xl font-inter text-citybreakteal-500 dark:text-citybreakteal-200 md:text-4xl my-2"><em>Plan your next Citybreak</em></h2>
			<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

	<?php $query = new WP_Query( array(
	'post_type' => 'post',
	'posts_per_page' => 3,
    'post__not_in'  => array(get_the_ID()),

	) );
	while ($query->have_posts()) : $query->the_post(); ?>
				<?php get_template_part( 'template-parts/home', 'latestposts' ); ?>
	<?php endwhile; ?>
		</div>
	</div>
</div>