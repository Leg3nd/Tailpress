
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
                <h5 class="text-white text-xl">Subscribe</h5>
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="https://citybreak.us21.list-manage.com/subscribe/post?u=3fd30817b504e5e809b50b622&amp;id=b97c9ae1cf&amp;f_id=0099b3e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
                            <div id="mc_embed_signup_scroll">                    
                                <div class="mb-1 mc-field-group">
                                    <label for="mce-EMAIL" class="block mb-2 text-sm font-sourcesanspro text-white dark:text-white">Email</label>
                                    <input type="email" value="" name="EMAIL" id="mce-EMAIL" required aria-describedby="helper-text-explanation" class="required email bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ineed@citybreak.com">
                                    <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                                </div>

                                <div id="mce-responses" class="mb-1 foot">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_3fd30817b504e5e809b50b622_b97c9ae1cf" tabindex="-1" value="">
                                </div>
                                <button class="rounded-none font-sourcesanspro text-white bg-citybreakteal-600 hover:bg-citybreakteal-500 hover:text-white p-1" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe!</button>
                            </div>
                        </form>
                    </div>

                    <!--End mc_embed_signup-->
            </div>
            <div class="w-1/2 md:w-1/4 p-2">
            <h5 class="text-white text-xl">Top destinations</h5>   
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

                echo '<li class="my-1"><a href="' . get_category_link($category->cat_ID) . '" title="' . $category->name . '" class="text-citybreakteal-500 no-underline hover:underline">' . $category->name . '</a></li>';

                } 
                echo '</ul>';

            ?>           
            </div>
            <div class="w-1/2 md:w-1/4 p-2">
                <h5 class="text-white text-xl">Latest posts</h5>
                <?php 
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 3
                )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                    <ul class="list-none">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <li class="my-1"><a href="<?php the_permalink(); ?>" class="text-citybreakteal-500 no-underline hover:underline"><?php the_title(); ?></a></li>

                        <?php endwhile; ?>
                    </ul>   
                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>

            </div>
            <div class="w-1/2 md:w-1/4 p-2">
                <h5 class="text-white text-xl">About</h5>
                <ul class="list-none">
                    <li class="my-1"><a href="/who-we-are" class="text-citybreakteal-500 no-underline hover:underline">Who we are</a></li>
                    <li class="my-1"><a href="/how-we-work" class="text-citybreakteal-500 no-underline hover:underline">How we work</a></li>
                    <!-- <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">Write for us</a></li> -->
                </ul>  
                <div class="flex flex-row">
                    <div class="p-1">
                        <a href="https://www.instagram.com/citybreak__" aria-label="Visit Citybreak on Instagram"><i class="fa-brands fa-square-instagram text-citybreakteal-500 text-2xl"></i></a>
                    </div>
                    <div class="p-1">
                        <a href="https://twitter.com/citybreak_" aria-label="Visit Citybreak on Twitter"><i class="fa-brands fa-square-twitter text-citybreakteal-500 text-2xl"></i></a>
                    </div>
                </div>
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
