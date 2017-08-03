<?php the_content(); ?>




<?php

	// Display custom content type (inspiration : http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/)

	$args = array( 'post_type' => 'taxon', 'posts_per_page' => 50 );
	$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<h2><?php the_title(); ?></h2>

		<!-- <div class="entry-content">
			<?php // the_content(); ?>
		</div>

		<?php // wp_reset_postdata(); ?> -->

		<?php endwhile; ?>

<?php else: ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>


