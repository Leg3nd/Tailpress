<?php get_header(); ?>

<div class="w-full">
	<div class="flex flex-col container my-8 mx-auto">

		<h2 class="entry-title text-2xl font-inter text-citybreakteal-500 md:text-4xl mb-1"><?php single_cat_title(); ?></h2>
        <?php 
            the_archive_description( '<div class="taxonomy-description">', '</div>' ); 
        ?>

        <div class="flex flex-col my-5">
            <div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

	        <?php if ( have_posts() ) : ?>
                <?php
                    while ( have_posts() ) :
                    the_post();
                ?>

                <?php get_template_part( 'template-parts/content', 'category' ); ?>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
	</div>
</div>

<?php
get_footer();
