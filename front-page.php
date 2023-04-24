<?php get_header(); ?>

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
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            
        <?php foreach( $posts as $post ): 
            
            setup_postdata( $post );
            
            ?>

            <!-- Item -->
            <div class="hidden duration-500 ease-in-out" data-carousel-item>
                <a href="<?php the_permalink(); ?>" class="hover:opacity-95">
                    <?php the_post_thumbnail('carousel_large', array('class' => 'absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2')); ?>
                    <div class="relative container bg-citybreakteal-500 -skew-x-6 w-[46rem] p-2 top-600 top-1/2 opacity-100">
                        <h2 class="font-inter text-2xl text-left text-white skew-x-6 drop-shadow-md md:text-4xl"><?php the_title(); ?></h2>
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


<div class="w-full container mx-auto pb-5">

    <div class="flex flex-col my-5">
        <h3 class="text-3xl font-inter text-citybreakteal-500">
            By continent
        </h3>
        <p class="font-sourcesanspro text-base">
            Browse our most popular city break guides. Just pick a continent and away you go.
        </p>
    </div>

    <!-- Start of continent crawler -->
    <div class="w-full">
        <div class="scrollbar-hide mt-5 flex w-full snap-x snap-mandatory scroll-px-0 gap-5 overflow-x-scroll scroll-smooth px-10">

        <?php

            $args = array( 
                'orderby' => 'name',
                'parent'  => 0,
                'hide_empty' => '0');
            $categories = get_categories($args);
            if($categories){
                foreach($categories as $category) {
                    $link = get_term_link($category);
                    echo '<div class="md:2/3 relative -skew-x-6 aspect-[2/3] w-[35%] h-[35%] shrink-0 snap-start snap-always bg-orange-100">';
                    $size = "continent_large";
                    $image = get_field('catimage', 'category_'.$category->term_id);    
                        echo '<a href="'.$link.'">';
                            echo '<div class="absolute bottom-0 z-10 w-full bg-gradient-to-t from-black px-5 py-3">';
                                echo '<h4 class="mt-4 skew-x-6 font-inter text-xl font-bold text-white">' . $category->name . '</h4>';
                                echo '<p class="hidden skew-x-6 font-sourcesanspro text-sm text-white md:block">' . $category->description . '</p>';
                            echo '</div>';
                            echo '<img src="' . $image . '" />'; 
                        echo '</a>';
                    echo '</div>';
                } 
            }    

        ?>

        </div>
    </div><!-- End of continent crawler -->



    <!-- Start of homepage latest articles -->
    <div class="flex flex-col my-5">
        <h3 class="text-3xl font-inter text-citybreakteal-500">
            Latest articles
        </h3>
        <p class="font-sourcesanspro text-base">
            Browse our most popular city break guides. Just pick a continent and away you go.
        </p>

        <div class="grid mt-4 md:grid-cols-2 lg:grid-cols-3 gap-5">

            <a href="#" class="block max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:shadow hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
                <div class="flex p-4">
                    <div class="flex-grow p-1">
                        <h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro">5 Nov 2023</h6>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-utensils text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-champagne-glasses text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-bed text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-masks-theater text-citybreakteal-500"></i>
                    </div>
                </div> 
                <div class="flex px-4 pb-4">
                    <p class="text-base font-sourcesanspro">This is some text about it and I haven't thought about the character count yet</p>
                </div>
            </a>
            <a href="#" class="block max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:shadow hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
                <div class="flex p-4">
                    <div class="flex-grow p-1">
                        <h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro">5 Nov 2023</h6>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-utensils text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-champagne-glasses text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-bed text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-masks-theater text-citybreakteal-500"></i>
                    </div>
                </div> 
                <div class="flex px-4 pb-4">
                    <p class="text-base font-sourcesanspro">This is some text about it and I haven't thought about the character count yet</p>
                </div>
            </a>
            <a href="#" class="block max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:shadow hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
                <div class="flex p-4">
                    <div class="flex-grow p-1">
                        <h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro">5 Nov 2023</h6>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-utensils text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-champagne-glasses text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-bed text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-masks-theater text-citybreakteal-500"></i>
                    </div>
                </div> 
                <div class="flex px-4 pb-4">
                    <p class="text-base font-sourcesanspro">This is some text about it and I haven't thought about the character count yet</p>
                </div>
            </a>
            <a href="#" class="block max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:shadow hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
                <div class="flex p-4">
                    <div class="flex-grow p-1">
                        <h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro">5 Nov 2023</h6>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-utensils text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-champagne-glasses text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-bed text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-masks-theater text-citybreakteal-500"></i>
                    </div>
                </div> 
                <div class="flex px-4 pb-4">
                    <p class="text-base font-sourcesanspro">This is some text about it and I haven't thought about the character count yet</p>
                </div>
            </a>
            <a href="#" class="block max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:shadow hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
                <div class="flex p-4">
                    <div class="flex-grow p-1">
                        <h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro">5 Nov 2023</h6>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-utensils text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-champagne-glasses text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-bed text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-masks-theater text-citybreakteal-500"></i>
                    </div>
                </div> 
                <div class="flex px-4 pb-4">
                    <p class="text-base font-sourcesanspro">This is some text about it and I haven't thought about the character count yet</p>
                </div>
            </a>
            <a href="#" class="block max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:shadow hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
                <div class="flex p-4">
                    <div class="flex-grow p-1">
                        <h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro">5 Nov 2023</h6>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-utensils text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-champagne-glasses text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-bed text-citybreakteal-500"></i>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-masks-theater text-citybreakteal-500"></i>
                    </div>
                </div> 
                <div class="flex px-4 pb-4">
                    <p class="text-base font-sourcesanspro">This is some text about it and I haven't thought about the character count yet</p>
                </div>
            </a>
        </div>
    </div><!-- End of homepage latest articles --> 
</div><!-- End container -->
   

<!-- Start of subscribe row -->
<div class="w-full bg-citybreakteal-500">
    <div class="container mx-auto py-5">
        <div class="flex flex-col my-5">
            <h3 class="text-3xl font-inter text-white">
                Subscribe to our newsletter
            </h3>
            <p class="text-white">Get our latest guides and tips straight to your inbox.</p>

            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup">
                <form action="https://citybreak.us1.list-manage.com/subscribe/post?u=8f3494f8ba8f3d8ae1c676667&amp;id=ffadcbb3b4&amp;v_id=3529&amp;f_id=00caf7e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
                    <div id="mc_embed_signup_scroll">                    
                        <div class="mb-6 mc-field-group">
                            <label for="mce-EMAIL" class="block mb-2 text-sm font-sourcesanspro text-white dark:text-white">Email</label>
                            <input type="email" value="" name="EMAIL" id="mce-EMAIL" required aria-describedby="helper-text-explanation" class="required email bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ineed@citybreak.com">
                            <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                        </div>

                        <div id="mce-responses" class="mb-6 foot">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_8f3494f8ba8f3d8ae1c676667_ffadcbb3b4" tabindex="-1" value="">
                        </div>
                            <button class="rounded-none font-sourcesanspro text-citybreakteal-600 bg-white hover:bg-citybreakteal-600 hover:text-white p-2" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe for updates</button>
                        </div>
                    </div>
                </form>
            </div>

            <!--End mc_embed_signup-->

        </div>
    </div>
</div>

<div class="w-full container mx-auto py-5">
    <!-- Start of homepage top trending -->
    <div class="flex flex-col my-5 pb-5">
        <h3 class="text-3xl font-inter text-citybreakteal-500">
            Top trending
        </h3>
        <p class="font-sourcesanspro text-base">
            Browse our most popular city break guides.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            <a href="#" class="hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full my-2 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
            </a>
            <a href="#" class="hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full my-2 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
            </a>
            <a href="#" class="hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full my-2 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
            </a>
            <a href="#" class="hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full my-2 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
            </a>
            <a href="#" class="hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full my-2 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
            </a>
            <a href="#" class="hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full my-2 shadow-lg">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro">10 restaurants to visit on a budget in Lisbon in 2023</h4>
                    </div>
                </div>
            </a>
        </div>
    </div><!-- End of homepage top trending -->  


</div><!-- End container -->

<?php
get_footer();
