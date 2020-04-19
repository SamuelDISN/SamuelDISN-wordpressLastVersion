<?php
add_action('init', 'create_article_cpt');
function create_article_cpt(){
  $post_type = "article";
  $labels = array(
        'name'               => 'Actualités',
        'singular_name'      => 'Article',
        'all_items'          => 'Tous les articles',
        'add_new'            => 'Ajouter un articles',
        'add_new_item'       => 'Ajouter un articles',
        'edit_item'          => "Éditer l'article",
        'new_item'           => 'Nouvel article',
        'view_item'          => "Voir l'article",
        'search_items'       => 'Rechercher un article',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Article parent',
        'menu_name'          => 'Actualités',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       =>0,
        'menu_icon'           => 'dashicons-video-alt3',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type( 'film', $args );


    $taxonomy = "genre";
    $object_type='article';
    $args = array(
          'label' => 'Catégorie article',
          'rewrite' => array( 'slug' => 'article-categorie' ),
          'hierarchical' => true,
      );


    register_taxonomy( $taxonomy, $object_type, $args );
}
