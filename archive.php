<?php get_header(); ?>

<div class="w-full">
	<div class="flex flex-col container my-8 mx-auto">

        <?php 
            the_archive_description( '<div class="taxonomy-description">', '</div>' ); 
        ?>
        <h3 class="text-3xl font-inter text-citybreakteal-500">Latest articles</h3>
        <div class="flex flex-col my-5">
            <div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">
	        <?php if ( have_posts() ) : ?>
                <?php
                    while ( have_posts() ) :
                    the_post();
                ?>

                <?php get_template_part( 'template-parts/content', 'archive' ); ?>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
	</div>
</div>

<?php
get_footer();
