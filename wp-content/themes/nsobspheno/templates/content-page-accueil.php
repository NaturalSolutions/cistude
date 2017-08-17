

<div class="flexWrapper contentWrapper">

	<div class="flex-1 relative">

	<?php
		// displaying content written in the BO for the front page
		the_content();

		// Csutom function to use later in template
		function excerpt_truncate($excerpt, $limit) {
		  $excerpt = explode(' ', $excerpt, $limit);
		  if (count($excerpt)>=$limit) {
		    array_pop($excerpt);
		    $excerpt = implode(" ",$excerpt).'...';
		  } else {
		    $excerpt = implode(" ",$excerpt);
		  }
		  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
		  return $excerpt;
		}

		/*
		*  Display custom content type (inspiration : http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/)
		*/

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

										<div title='$title_post' alt='$title_post'>
											$thumb_post
											<a href='formulaire-de-saisie/' class='labelShowOnHover'>Saisir des données</a>
										</div>
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

		<?php

			/*
			*  Display article post type
			*/

			// Set query
			$the_query = new WP_Query( array(
			    'post_type' => 'post',
			    'posts_per_page' => 5
			    /*
			    ,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'saisons',
			            'field' => 'slug',
			            'terms' => 'janvier',
			            //'field' => 'term_id',
			            //'terms' => 26,
			        )
			    ),
			    */
			) );

			if ( $the_query->have_posts() ){

				while ( $the_query->have_posts() ) {

					$the_query->the_post();

					$post_id = get_the_ID();
					$date_post = get_the_date();
					$title_post = get_the_title($post_id);
					$link_post = get_post_permalink($post_id);
					$thumb_post =  get_the_post_thumbnail( $post_id, 'medium', array( 'class' => '' ) );

					$excerpt = get_the_excerpt();
					$excerpt_post_truncate = excerpt_truncate($excerpt, 15);




					echo "
					<a href='$link_post' class='oneArticle flexWrapper' title='$title_post' alt=''>

						<div class='left flex-1'>$thumb_post</div>
						<div class='right flex-2'>
							<span class='date_post'>$date_post</span>
							<span class='title_post'>$title_post</span>
							<span class='excerpt_post'>$excerpt_post_truncate</span>
						</div>

					</a>";





				}

			}


		?>


	</div>

</div>


