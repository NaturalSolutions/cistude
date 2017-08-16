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

function custom_post_type_taxon() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Taxon', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Taxon', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Taxon', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent Taxon', 'twentythirteen' ),
    'all_items'           => __( 'Liste des taxons', 'twentythirteen' ),
    //'category'           => __( 'Saisons', 'twentythirteen' ),
    /*
    'taxonomies' => array( 'Saisons', 'post_tag' ),
    'taxonomies' => array( 'category', 'post_tag' ),
    'post_tag'           => __( 'Saisons', 'twentythirteen' ),
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
    'taxonomies'          => array( 'Saisons' ),

    /* Dosen't work :
    'taxonomies'          => array( 'Saisons' ),
    'category'          => array( 'Saisons' ),
    'post_tag'          => array( 'Saisons' ),
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

add_action( 'init', 'custom_post_type_taxon', 0 );

function custom_post_type_observations() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Observations', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'Observations', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'Observations', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent Observations', 'twentythirteen' ),
    'all_items'           => __( 'Liste des observations', 'twentythirteen' ),
    //'category'           => __( 'Saisons', 'twentythirteen' ),
    /*
    'taxonomies' => array( 'Saisons', 'post_tag' ),
    'taxonomies' => array( 'category', 'post_tag' ),
    'post_tag'           => __( 'Saisons', 'twentythirteen' ),
    */
    'view_item'           => __( 'Voir une observations', 'twentythirteen' ),
    'add_new_item'        => __( 'Ajouter une observations', 'twentythirteen' ),
    'add_new'             => __( 'Ajouter une observations', 'twentythirteen' ),
    'edit_item'           => __( 'Éditer une observations', 'twentythirteen' ),
    'update_item'         => __( 'Mettre à jour une observations', 'twentythirteen' ),
    'search_items'        => __( 'Rechercher une observations', 'twentythirteen' ),
    'not_found'           => __( 'Pas trouvé', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Pas trouvé dans la corbeille', 'twentythirteen' ),
  );

  // Set other options for Custom Post Type
  $args = array(
    'label'               => __( 'Observations', 'twentythirteen' ),
    'description'         => __( 'Observations news and reviews', 'twentythirteen' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    /*'taxonomies'          => array( 'Saisons' ),*/

    /* Dosen't work :
    'taxonomies'          => array( 'Saisons' ),
    'category'          => array( 'Saisons' ),
    'post_tag'          => array( 'Saisons' ),
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
  register_post_type( 'Observations', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type_observations', 0 );


//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts
function create_topics_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Saisons', 'Nom de de la taxonomie' ),
    'singular_name' => _x( 'Saison', 'Nom d\'un élément de la taxonomie' ),
    'search_items' =>  __( 'Rechercher une saison' ),
    'all_items' => __( 'Toutes les saisons' ),
    'parent_item' => __( 'Élement parent' ),
    'parent_item_colon' => __( 'Élement parent:' ),
    'edit_item' => __( 'Éditer une saison' ),
    'update_item' => __( 'Mettre à jour une saison' ),
    'add_new_item' => __( 'Ajouter une saison' ),
    'new_item_name' => __( 'Nom de la nouvelle saison' ),
    'menu_name' => __( 'Saisons' ),
  );

// Now register the taxonomy

  register_taxonomy('saisons',array('taxon'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'saisons' ),
  ));

}
