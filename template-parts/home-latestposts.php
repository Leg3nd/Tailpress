            <a href="<?php the_permalink();?>" class="block max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:shadow hover:opacity-95" >
                <div class="flex relative overflow-hidden w-full">
                    <?php the_post_thumbnail('card_medium', array('class' => '')); ?>
                    <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
                        <h4 class="text-base text-white skew-x-6 font-sourcesanspro"><?php the_title(); ?></h4>
                    </div>
                </div>
                <div class="flex p-4">
                    <div class="flex-grow p-1">
                        <h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro"><?php echo get_the_date( 'j M Y' ); ?></h6>
                    </div>
                    <!-- <div class="p-1">
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
                    </div> -->
                </div> 
                <div class="flex px-4 pb-4">
                    <p class="text-base font-sourcesanspro"><?php echo strip_tags( $post->post_excerpt ); ?></p>
                </div>
            </a>