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