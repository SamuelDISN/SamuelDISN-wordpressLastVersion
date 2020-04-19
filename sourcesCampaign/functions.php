<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


//Partitions des feuilles de styles

wp_register_style('style-header', get_template_directory_uri() . '/styles/style-header.css', array(), '1.0', 'all');
wp_enqueue_style('style-header'); 

wp_register_style('style-index-landing-page', get_template_directory_uri() . '/styles/style-index-landing-page.css', array(), '1.0', 'all');
wp_enqueue_style('style-index-landing-page'); 

wp_register_style('style-footer', get_template_directory_uri() . '/styles/style-footer.css', array(), '1.0', 'all');
wp_enqueue_style('style-footer'); 

wp_register_style('style-qui-sommes-nous', get_template_directory_uri() . '/styles/style-qui-sommes-nous.css', array(), '1.0', 'all');
wp_enqueue_style('style-qui-sommes-nous'); 

wp_register_style('style-actualites', get_template_directory_uri() . '/styles/style-actualites.css', array(), '1.0', 'all');
wp_enqueue_style('style-actualites'); 

wp_register_style('style-notre-equipe', get_template_directory_uri() . '/styles/style-notre-equipe.css', array(), '1.0', 'all');
wp_enqueue_style('style-notre-equipe'); 

wp_register_style('style-contact', get_template_directory_uri() . '/styles/style-contact.css', array(), '1.0', 'all');
wp_enqueue_style('style-contact'); 

// Ajout fichier newScript si besoin (vierge)

wp_register_script('newScript', get_template_directory_uri() . '/js/newScript.js', array(), '1.0.0'); // Custom scripts
wp_enqueue_script('newScript'); // Enqueue it!



define( 'THEME_PATH' ,          get_template_directory()            );
define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/sourcesCampaign/styles'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/sourcesCampaign/images'       );
define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


// Attributions des menus 
function register_my_menus() {
    register_nav_menus(
    array(
    'header-menu' => __( 'Menu Header' ),
    'footer-menu' => __( 'Menu Footer' ),
    )
    );
}
add_action( 'init', 'register_my_menus' );

 // Check de la méthode ACF
if ( ! function_exists( 'get_field' ) ) {
	add_action( 'template_redirect', 'template_redirect_warning_missing_acf', 0 );
	function template_redirect_warning_missing_acf() {
		wp_die( sprintf( 'Ce site ne fonctionne pas sans l\'extension Advanced Custom Fields. Merci de vous connecter au site pour l\'activer.', wp_login_url() ) );
	}

}

foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;
}
function sourcesCampaign_init () {
    register_taxonomy('sujet-post','post', [
        'labels' => [
            'name' => 'Sujet du Post',
            'singular_name' => 'Sujet du post',
            'plural_name' => 'Sujets des posts',
            'search_items' => 'Rechercher des sujets',
            'all_items' => 'Toutes les sujets',
            'edit_item' => 'Editer sujets',
            'update_item' => 'Mettre à jour le sujet',
            'add_new_item' => 'Ajouter un nouveau sujet',
            'new_item_name' => 'Ajouter un nouveau sujet',
            'menu_name' => 'Sujet du post',
        ],
        'show_in_rest'=> true,
        'hierarchical'=> true,
        'show_admin_column'=> true,
    ]);
}

add_action( 'init', 'sourcesCampaign_init' );