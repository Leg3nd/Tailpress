<div class="overflow-hidden"> 
	<div class="md:h-96 flex items-center">
		<img src="<?php echo get_template_directory_uri(); ?>/resources/img/aayush-gupta-ljhCEaHYWJ8-unsplash.jpg" class="" alt="...">
	</div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="w-full">
		<div class="flex flex-col container my-8 mx-auto">

			<header class="entry-header mb-4">
				<h2 class="entry-title text-2xl font-inter text-citybreakteal-500 md:text-4xl my-2"><?php the_title(); ?></h2>
				<div class="flex">
					<div class="mr-4">
						<i class="fa-sharp fa-solid fa-calendar-days text-citybreakgrey-400"></i> <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-citybreakgrey-400"><?php echo get_the_date(); ?></time> 					
					</div>
					<div class="mr-4">
						<span class="text-sm text-citybreakgrey-400"><i class="fa-solid fa-clock"></i> 5 min read</span>
					</div>
					<div class="mr-4">
						<span class="text-sm text-citybreakgrey-400"><i class="fa-solid fa-file"></i> Posted in <a href="#" class="no-underline text-citybreakteal-500 hover:underline">Portugal</a>, <a href="#" class="no-underline text-citybreakteal-500 hover:underline">Lisbon</a></span>
					</div>
				</div>
			</header>

			<div class="entry-content md:w-10/12 mx-auto">
				<?php the_content(); ?>


			<div class="microcontent">
				<div class="flex relative overflow-hidden w-full">
						<img src="<?php echo get_template_directory_uri(); ?>/resources/img/Portugal-Lisbon-Cervejaria-Ramiro.JPG" class="" alt="Portugal" />
						<div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
							<h4 class="text-base text-white skew-x-6 font-sourcesanspro">Cervejaria Ramiro</h4>
						</div>
					</div>
					<div class="flex p-4">
						<div class="flex-grow p-1">
							<h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro">
								<a href="#" class="no-underline text-citybreakteal-500 hover:underline">
									<i class="fa-solid fa-location-dot text-citybreakteal-500"></i>
									Av. Alm. Reis 1 H, 1150-007 Lisboa
								</a>
							</h6>
						</div>
						<div class="p-1">
							<i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
							<i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
							<i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
							<i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
							<i class="fa-solid fa-dollar-sign md:text-2xl text-citybreakorange-500"></i>
						</div>
					</div> 
					<div class="flex flex-col px-4 pb-4">
						<p class="text-base font-sourcesanspro">Cervejaria Ramiro is a casual, no-frills seafood restaurant in Lisbon that has been around since the 1950s. It is known for its fresh, delicious seafood dishes, which are cooked to perfection and served in generous portions. The restaurant is also known for its friendly and attentive staff, who are always happy to help customers choose the perfect dish.</p>
						<p class="text-base font-sourcesanspro">The atmosphere at Cervejaria Ramiro is relaxed and informal. The restaurant is located in a nondescript building in the city center, and the interior is decorated in a simple, rustic style. There is a large outdoor terrace where customers can enjoy their meals on warm days.</p>
					</div>
					<div class="flex justify-between px-4 pb-4">
						<div class="text-left">
							<h5>Discover more</h5>
								<a href="#"><i class="fa-solid fa-square-arrow-up-right text-2xl text-citybreakteal-500 hover:drop-shadow"></i></a>
								<a href="#"><i class="fa-brands fa-square-twitter text-2xl text-citybreakteal-500 hover:drop-shadow"></i></a>
								<a href="#"><i class="fa-brands fa-square-instagram text-2xl text-citybreakteal-500 hover:drop-shadow"></i></a>
						</div>
						<div class="text-right">
							<h5>Share</h5>
								<a href="#"><i class="fa-sharp fa-solid fa-square-share-nodes text-2xl text-citybreakteal-500 hover:drop-shadow"></i></a>
						</div>
					</div>
					<hr />
				</div>
			</div>


				<?php
					wp_link_pages(
						array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						)
					);
				?>
			</div>
		</div>
	</div>

</article>
