<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>

	<header class="entry-header mb-4">
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl font-inter text-citybreakteal-500 md:text-4xl mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="flex">
			<div class="mr-4">
				<i class="fa-sharp fa-solid fa-calendar-days text-citybreakgrey-400"></i> <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-citybreakgrey-400"><?php echo get_the_date(); ?></time> 					
			</div>
			<div class="mr-4">
				<span class="text-sm text-citybreakgrey-400"><i class="fa-solid fa-clock"></i> 5 min read</span>
			</div>
			<div class="mr-4">
				<span class="text-sm text-citybreakgrey-400"><i class="fa-solid fa-file"></i> Posted in 
					<?php the_category( ' / ' ); ?>
				</span>
			</div>
		</div>
	</header>

	<?php if ( is_search() || is_archive() ) : ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

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
