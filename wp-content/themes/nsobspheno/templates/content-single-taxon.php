<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <!-- <h2><?php //the_field('nom_scientifique'); ?></h2> -->

      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">


      <?php $post_id = get_the_ID(); ?>

      <?php echo the_terms( $post_id, 'Saisons', 'Saisons: ', ', ', ' ' ); ?>
      <?php the_content(); ?>

    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
