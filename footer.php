
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer class="w-full py-5 bg-citybreakteal-900">
        <div class="container flex justify-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/resources/img/citybreak.svg" alt="Citybreak" />
			</a>
        </div>
        <div class="container flex flex-wrap flex-row justify-between mx-auto">
            <div class="w-1/2 md:w-1/4 p-2">
                <h5 class="text-white text-xl font-inter"><em>Social</em></h5>
                <p class="text-white text-base font-sourcesanspro">Connect with us on Instagram or Twitter</p>
                <div class="flex flex-row">
                    <div class="p-1">
                        <a href="https://www.instagram.com/citybreak__" aria-label="Visit Citybreak on Instagram"><i class="fa-brands fa-square-instagram text-citybreakteal-500 text-2xl"></i></a>
                    </div>
                    <div class="p-1">
                        <a href="https://twitter.com/citybreak_" aria-label="Visit Citybreak on Twitter"><i class="fa-brands fa-square-twitter text-citybreakteal-500 text-2xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 p-2">
            <h5 class="text-white text-xl font-inter"><em>Top destinations</em></h5>   
            <?php 
                $args = array(
                'orderby' => 'name',
                'hierarchical' => 1,
                'taxonomy' => 'category',
                'hide_empty' => 0,
                'parent' => 0,
                );
                $categories = get_categories($args);

                echo '<ul class="list-none">';


                foreach($categories as $category) {

                echo '<li class="my-1"><a href="' . get_category_link($category->cat_ID) . '" title="' . $category->name . '" class="text-base font-sourcesanspro text-citybreakteal-500 no-underline hover:underline">' . $category->name . '</a></li>';

                } 
                echo '</ul>';

            ?>           
            </div>
            <div class="w-1/2 md:w-1/4 p-2">
                <h5 class="text-white text-xl font-inter"><em>Latest posts</em></h5>
                <?php 
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 3
                )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                    <ul class="list-none">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <li class="my-1"><a href="<?php the_permalink(); ?>" class="text-base font-sourcesanspro text-citybreakteal-500 no-underline hover:underline"><?php the_title(); ?></a></li>

                        <?php endwhile; ?>
                    </ul>   
                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>

            </div>
            <div class="w-1/2 md:w-1/4 p-2">
                <h5 class="text-white text-xl font-inter"><em>About</em></h5>
                <ul class="list-none">
                    <li class="my-1"><a href="/who-we-are" class="text-base font-sourcesanspro text-citybreakteal-500 no-underline hover:underline">Who we are</a></li>
                    <li class="my-1"><a href="/how-we-work" class="text-base font-sourcesanspro text-citybreakteal-500 no-underline hover:underline">How we work</a></li>
                    <!-- <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">Write for us</a></li> -->
                </ul>  
            </div>
        </div>
        <div class="container flex justify-center">
            <p class="text-white text-sm">&copy; Citybreak <?php echo date('Y'); ?> | <a href="/privacy" class="text-white underline hover:no-underline">Privacy</a></p>
        </div>        
    </footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
