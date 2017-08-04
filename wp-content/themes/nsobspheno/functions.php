<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


/*
* Creating a function to create our Custom content type (inspiration : http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/)
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Taxon', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Taxon', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Taxon', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent Taxon', 'twentythirteen' ),
    'all_items'           => __( 'Liste des taxons', 'twentythirteen' ),
    /*
    'category'           => __( 'Catégori', 'twentythirteen' ),
    'post_tag'           => __( 'Catégori', 'twentythirteen' ),
    */
    'view_item'           => __( 'Voir un taxon', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter un taxon', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter un taxon', 'twentythirteen' ),
    'edit_item'           => __( 'Éditer un taxon', 'twentythirteen' ),
    'update_item'         => __( 'Mettre à jour un taxon', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher un taxon', 'twentythirteen' ),
    'not_found'           => __( 'Pas trouvé', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Pas trouvé dans la corbeille', 'twentythirteen' ),
  );

  // Set other options for Custom Post Type
  $args = array(
    'label'               => __( 'Taxon', 'twentythirteen' ),
    'description'         => __( 'Taxon news and reviews', 'twentythirteen' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy.

    /* Dosen't work :
    'taxonomies'          => array( 'famille' ),
    'category'          => array( 'famille' ),
    'post_tag'          => array( 'famille' ),
    */

    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registering your Custom Post Type
  register_post_type( 'Taxon', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );


//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires

add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );

function create_topics_nonhierarchical_taxonomy() {

// Labels part for the GUI

  $labels = array(
    'name' => _x( 'saison', 'Nom de la taxonomie' ),
    'singular_name' => _x( 'une saison', 'Nom d\'un élément de la taxonomie'),
    'search_items' =>  __( 'Recherche une saison' ),
    'popular_items' => __( 'Saisons populaire' ),
    'all_items' => __( 'Toutes les saisons' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Éditer une saison' ),
    'update_item' => __( 'Mettre à jour une saison' ),
    'add_new_item' => __( 'Ajouter une nouvelle saison' ),
    'new_item_name' => __( 'Nom de la nouvelle saison' ),
    'separate_items_with_commas' => __( 'Séparer les saisons avec une virgule' ),
    'add_or_remove_items' => __( 'Ajouter ou supprimer une saison' ),
    'choose_from_most_used' => __( 'Séléctionner depuis les saisons les plus utilisés' ),
    'menu_name' => __( 'Saisons' ),
  );

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('Saisons','taxon',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Saisons' ),
  ));
}

