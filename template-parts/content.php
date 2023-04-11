<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>
	<?php if ( is_search() || is_archive() ) : ?>
		<a href="<?php the_permalink();?>" class="block max-w-sm bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:shadow hover:opacity-95" >
			<div class="flex relative overflow-hidden w-full">
				<?php the_post_thumbnail('card_medium', array('class' => 'mx-auto')); ?>
				<div class="absolute left-5 bottom-5 bg-citybreakteal-500 -skew-x-6 w-3/4 z-10 px-1 py-1">
					<h4 class="text-base text-white skew-x-6 font-sourcesanspro"><?php the_title(); ?></h4>
				</div>
			</div>
			<div class="flex p-4">
				<div class="flex-grow p-1">
					<h6 class="text-base font-bold text-citybreakgrey-300 font-sourcesanspro"><?php echo get_the_date(); ?></h6>
				</div>
			</div> 
			<div class="flex px-4 pb-4">
				<p class="text-base font-sourcesanspro"><?php the_excerpt(); ?></p>
			</div>
		</a>

	<?php else : ?>

		<div class="entry-content md:w-10/12 mx-auto">
			<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'tailpress' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);

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

	<?php endif; ?>

</article>
