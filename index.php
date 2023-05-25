<?php get_header(); ?>

<div class="w-full container mx-auto pb-5">
	<div class="flex flex-col my-5">

		<?php
			global $post;
			$page_for_posts_id = get_option('page_for_posts');
			if ( $page_for_posts_id ) : 
				$post = get_page($page_for_posts_id);
				setup_postdata($post);
				?>
				<div id="post-<?php the_ID(); ?>">
					<header class="entry-header mb-4">
						<h2 class="entry-title text-2xl font-inter text-citybreakteal-500 md:text-4xl mb-1"><?php the_title(); ?></h2>
					</header>
					<div class="font-sourcesanspro text-base dark:text-white">
						<?php the_content(); ?>
					</div>
				</div>
				<?php
				rewind_posts();
			endif;
		?>


		<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">


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
</div>

<?php
get_footer();
