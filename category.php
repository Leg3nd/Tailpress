<?php get_header(); ?>

<div class="w-full">
	<div class="flex flex-col container my-8 mx-auto">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>
</div>

<?php
get_footer();
