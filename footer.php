
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
                        <form action="https://citybreak.us1.list-manage.com/subscribe/post?u=8f3494f8ba8f3d8ae1c676667&amp;id=ffadcbb3b4&amp;v_id=3529&amp;f_id=00caf7e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
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
                                    <input type="text" name="b_8f3494f8ba8f3d8ae1c676667_ffadcbb3b4" tabindex="-1" value="">
                                </div>
                                <button class="rounded-none font-sourcesanspro text-white bg-citybreakteal-600 hover:bg-citybreakteal-500 hover:text-white p-1" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe!</button>
                            </div>
                        </form>
                    </div>

                    <!--End mc_embed_signup-->
            </div>
            <div class="w-1/2 md:w-1/4 p-2">
                <h5 class="text-white text-xl">Top destinations</h5>   
                <ul class="list-none">
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">Lisbon</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">Paris</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">London</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">New York</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">Melbourne</a></li>
                </ul>             
            </div>
            <div class="w-1/2 md:w-1/4 p-2">
                <h5 class="text-white text-xl">Latest posts</h5>                
                <ul class="list-none">
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">10 restaurants to visit on a budget in Lisbon in 2023</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">10 restaurants to visit on a budget in Lisbon in 2023</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">10 restaurants to visit on a budget in Lisbon in 2023</a></li>
                </ul>   
            </div>
            <div class="w-1/2 md:w-1/4 p-2">
                <h5 class="text-white text-xl">About</h5>
                <ul class="list-none">
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">Who we are</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">How we work</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal-500 no-underline hover:underline">Write for us</a></li>
                </ul>  
                <div class="flex flex-row">
                    <div class="p-1">
                        <a href="#"><i class="fa-brands fa-square-instagram text-citybreakteal-500 text-2xl"></i></a>
                    </div>
                    <div class="p-1">
                        <a href="#"><i class="fa-brands fa-square-twitter text-citybreakteal-500 text-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex justify-center">
            <p class="text-white text-sm">&copy; Citybreak <?php echo date('Y'); ?> | <a href="#" class="text-white underline hover:no-underline">Terms</a> | <a href="#" class="text-white underline hover:no-underline">Privacy</a> | <a href="#" class="text-white underline hover:no-underline">Cookies</a></p>
        </div>        
    </footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
