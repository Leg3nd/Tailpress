<!-- Start of Carousel -->
<?php 

$posts = get_posts(array(
    'posts_per_page'    => -1,
    'post_type'         => 'post',
    'meta_query' => array(
        array(
            'key'     => 'carousel_item',
            'value'   =>  'yes',
            'compare' => 'LIKE',
        ),
    ),   
));

if( $posts ): ?>

    <div id="default-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-96">
            
        <?php foreach( $posts as $post ): 
            
            setup_postdata( $post );
            
            ?>

            <!-- Item -->
            <div class="hidden duration-500 ease-in-out" data-carousel-item>
                <a href="<?php the_permalink(); ?>" class="hover:opacity-95">
                    <?php the_post_thumbnail('carousel_large', array('class' => 'absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2')); ?>
                    <div class="relative container bg-citybreakteal-500 -skew-x-6 w-[23rem] md:w-[46rem] p-2 top-600 top-1/2 md:top-1/2 opacity-100">
                        <h2 class="font-inter text-md text-left text-white skew-x-6 drop-shadow-md md:text-4xl"><?php the_title(); ?></h2>
                    </div>     
                </a>
            </div>            

        <?php endforeach; ?>

        </div>        
        <!-- Slider indicators -->
        <!-- <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div> -->
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- End of Carousel -->    
    <?php wp_reset_postdata(); ?>

<?php endif; ?>
<!-- End of Carousel -->