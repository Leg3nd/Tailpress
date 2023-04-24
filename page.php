<?php get_header(); ?>

<div class="w-full container mx-auto pb-5">
	<div class="flex flex-col my-5">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
