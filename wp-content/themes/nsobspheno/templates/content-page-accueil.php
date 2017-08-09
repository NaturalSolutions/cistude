

<div class="flexWrapper contentWrapper">

	<div class="flex-1">

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
				<?php

				$post_id = get_the_ID();
				$title_post = get_the_title($post_id);
				$link_post = get_post_permalink($post_id);
				$thumb_post =  get_the_post_thumbnail( $post_id, 'medium', array( 'class' => '' ) );

				//Returns All Term Items for "Saisons" taxo
				$term_list = wp_get_post_terms($post_id, 'Saisons', array("fields" => "all", "order" => "DESC"));

				// reset string var
				$termOfSpecie = "";

				// add all term name in string var
				foreach ($term_list as $key => $term) {

					$termOfSpecie .= $term->name." ";
					//echo $term->name;

				}

				//print_r($term_list);


				echo "<div class='oneSpecie' data-saison='$termOfSpecie'>

						<a href='$link_post' title='$title_post' alt='$title_post'>
							$thumb_post
							<span class='labelShowOnHover'>Saisir des données</span>
						</a>
						<div class='bot'>

							<a href='$link_post'>
								<span>Fiche</span>
							</a>

							<a href='#'>
								<span>Résultats</span>
							</a>

						</div>

					</div>";

				?>


			<?php endwhile; ?>

		<?php endif; ?>

		<?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

	</div>

	<div class="siderBarRight actu">
		<h2>Actualités</h2>
	</div>

</div>
