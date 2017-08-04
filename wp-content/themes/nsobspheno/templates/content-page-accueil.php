
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

<div class="row">

	<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php

			$post_id = get_the_ID();
			$title_post = get_the_title($post_id);
			$link_post = get_post_permalink($post_id);
			$thumb_post =  get_the_post_thumbnail( $post_id, 'medium', array( 'class' => '' ) );



			echo "<div class='col-md-3 oneSpecie'>

				<a href='$link_post' title='$title_post' alt='$title_post'>
					$thumb_post
				</a>

				<span>$title_post</span>

			</div>";

			?>


		<?php endwhile; ?>

	<?php endif; ?>

	<?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

</div>