<?php
/**
 * Team Member block
 *
 * @package      ClientName
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

$title = get_field( 'title' );
$type = get_field( 'type' );
$photo = get_field( 'photo' );
$body = get_field( 'body' );
$address = get_field( 'address' );
$price = get_field( 'price' );
$google_map = get_field( 'google_map' );
$website = get_field( 'website' );
$twitter = get_field( 'twitter' );
$instagram = get_field( 'instagram' );

?>


<div class="microcontent">
    <div class="flex relative overflow-hidden w-full">
        <?php $image = wp_get_attachment_image_src(get_field('photo'), 'card_large'); ?>
        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('photo')) ?>" />
        <div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
            <h4 class="text-base text-white skew-x-6 font-sourcesanspro"><?php the_field('title'); ?></h4>
        </div>
    </div>
    <div class="flex p-4">
        <div class="flex-grow p-1">
            <h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro">
                <a href="<?php the_field('google_map'); ?>" class="no-underline text-citybreakteal-500 hover:underline">
                    <i class="fa-solid fa-location-dot text-citybreakteal-500"></i>
                    <?php the_field('address'); ?>
                </a>
            </h6>
        </div>
        <div class="p-1">
            <?php the_field('price'); ?>
            <i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
            <i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
            <i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
            <i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
            <i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
        </div>
    </div>
    <div class="flex flex-col px-4 pb-4">
        <p class="text-base font-sourcesanspro">Type: <?php the_field('type'); ?></p>
        <p class="text-base font-sourcesanspro"><?php the_field('body'); ?></p>
    </div>
    <div class="flex justify-between px-4 pb-4">
                <div class="text-left">
                    <h5>Discover more</h5>
                        <a href="<?php the_field('website'); ?>"><i class="fa-solid fa-square-arrow-up-right text-2xl text-citybreakteal-500 hover:drop-shadow"></i></a>
                        <a href="<?php the_field('twitter'); ?>"><i class="fa-brands fa-square-twitter text-2xl text-citybreakteal-500 hover:drop-shadow"></i></a>
                        <a href="<?php the_field('instagram'); ?>"><i class="fa-brands fa-square-instagram text-2xl text-citybreakteal-500 hover:drop-shadow"></i></a>
                </div>
                <div class="text-right">
                    <h5>Share</h5>
                        <a href="#"><i class="fa-sharp fa-solid fa-square-share-nodes text-2xl text-citybreakteal-500 hover:drop-shadow"></i></a>
                </div>
            </div>
            <hr />
        </div>
    </div>
</div><!--End of microcontent -->



