<div class="overflow-hidden"> 
	<div class="md:h-96 flex items-center">
	<?php the_post_thumbnail('full', array('class' => 'mx-auto')); ?>
	</div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="w-full">
		<div class="flex flex-col container my-8 mx-auto">

			<header class="entry-header mb-4">
				<div class="flex flex-col md:flex-row">
					<div class="">
						<span class="text-sm text-citybreakgrey-400"><i class="fa-solid fa-file"></i> Posted in 
							<?php the_category( ' / ' ); ?>
						</span>
					</div>
				</div>
				<h2 class="entry-title text-2xl font-inter text-citybreakteal-500 md:text-4xl my-2"><em><?php the_title(); ?></em></h2>
				<div class="flex flex-col md:flex-row">
					<div class="mr-4">
						<i class="fa-sharp fa-solid fa-calendar-days text-citybreakgrey-400"></i> <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-citybreakgrey-400"><?php echo get_the_date(); ?></time> 					
					</div>
					<div class="">
						<span class="text-sm text-citybreakgrey-400"><i class="fa-solid fa-clock"></i> <?php echo reading_time(); ?></span>
					</div>
				</div>
			</header>

			<div class="entry-content md:w-10/12 xl:w-8/12 mx-auto">
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
