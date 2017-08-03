
<?php
	// displaying content written in the BO for the front page
	the_content();
?>




<?php

	/*
	*  Display custom content type (inspiration : http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/)
	*/

	// Set query
	$args = array( 'post_type' => 'taxon', 'posts_per_page' => -1 );
	$the_query = new WP_Query( $args );

?>

<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
		</a>

	<?php endwhile; ?>


<?php endif; ?>


<?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>


