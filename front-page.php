<?php get_header(); ?>

<?php get_template_part( 'template-parts/home', 'carousel' ); ?>



<div class="w-full container mx-auto pb-5">

    <div class="flex flex-col my-5">
        <h3 class="text-3xl font-inter text-citybreakteal-500">
            By continent
        </h3>
        <p class="font-sourcesanspro text-base">
            Browse our most popular city break guides. Just pick a continent and away you go.
        </p>
    </div>

    <?php get_template_part( 'template-parts/home', 'continent' ); ?>


    <!-- Start of homepage latest articles -->
    <div class="flex flex-col my-5">
        <h3 class="text-3xl font-inter text-citybreakteal-500">
            Latest articles
        </h3>
        <p class="font-sourcesanspro text-base">
            Browse our most popular city break guides. Just pick a continent and away you go.
        </p>

		<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

        <?php $query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 6

            ) );
            while ($query->have_posts()) : $query->the_post(); ?>
                <?php get_template_part( 'template-parts/home', 'latestposts' ); ?>

            <?php endwhile; ?>


		</div>
    </div><!-- End of homepage latest articles --> 
</div><!-- End container -->
   
<?php get_template_part( 'template-parts/common', 'subscribefullwidth' ); ?>


<div class="w-full container mx-auto py-5">
    <!-- Start of homepage top trending -->
    <div class="flex flex-col my-5 pb-5">
        <h3 class="text-3xl font-inter text-citybreakteal-500">
            More articles
        </h3>
        <p class="font-sourcesanspro text-base">
            Continue to read our latest posts.
        </p>

		<div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

            <?php $query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'offset' => 6,

            ) );
            while ($query->have_posts()) : $query->the_post(); ?>
                <?php get_template_part( 'template-parts/home', 'latestposts' ); ?>

            <?php endwhile; ?>


		</div>
    </div><!-- End of homepage latest articles 2 --> 

</div><!-- End container -->

<?php
get_footer();
