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
