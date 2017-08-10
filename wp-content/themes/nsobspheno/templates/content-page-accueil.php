

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


		// Get current month

		// Set query
		$the_query = new WP_Query( array(
		    'post_type' => 'taxon',
		    'posts_per_page' => -1,
		    'tax_query' => array(
		        array (
		            'taxonomy' => 'saisons',
		            'field' => 'slug',
		            'terms' => 'janvier',
		            //'field' => 'term_id',
		            //'terms' => 26,
		        )
		    ),
		) );

		/*$args = array( 'post_type' => 'taxon', 'posts_per_page' => -1 );
		$the_query = new WP_Query( $args );*/


	?>


		<?php if ( $the_query->have_posts() ) : ?>
			<!-- Slider main container -->
			<div class="swiper-container">

				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">


					<div class="swiper-slide">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<?php

								$post_id = get_the_ID();
								$title_post = get_the_title($post_id);
								$link_post = get_post_permalink($post_id);
								$thumb_post =  get_the_post_thumbnail( $post_id, 'medium', array( 'class' => '' ) );

								//Returns All Term Items for "Saisons" taxo
								$term_list = wp_get_post_terms($post_id, 'saisons', array("fields" => "all", "order" => "DESC"));

								// reset string var
								$termOfSpecie = "";

								// add all term name in string var
								foreach ($term_list as $key => $term) {

									$termOfSpecie .= $term->slug." ";
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


						<?php endwhile;
					echo "</div> <!-- end of swiper-slide -->";
					/* Restore original Post Data
					 * NB: Because we are using new WP_Query we aren't stomping on the
					 * original $wp_query and it does not need to be reset.
					*/
					wp_reset_postdata();
					?>

				</div> <!-- end of swiper-wrapper -->

			</div> <!-- end of swiper-container -->

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

		<?php endif; ?>

		<?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

	</div>

	<div class="siderBarRight actu">
		<h2>Actualités</h2>
	</div>

</div>
