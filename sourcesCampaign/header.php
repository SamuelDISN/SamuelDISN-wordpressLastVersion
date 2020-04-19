<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content ="initial-scale=1.0">
        <title><?php wp_title();?> </title>
        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header id="header">

        <div class = "isLogoHeader">
            <a href="http://samuelheticv2.hostingerapp.com/"><img src="<?php echo get_template_directory_uri();?>/images/earth-eco.png" alt="Logo" /></a>
        </div>

        <div class="isContainerTextLogo">
            <h1>
                <a href="http://samuelheticv2.hostingerapp.com/"><?php bloginfo('name'); ?></a>
            </h1>

            <p>
                <a href="http://samuelheticv2.hostingerapp.com/">Partie écologique français </a>
            </p>
        </div>

        <nav id="menu">
            <ul class="isMenu" >
                <?php wp_nav_menu(array(
                    'theme_location'=> 'header-menu'
                ));?>
            </ul>
        </nav>

        </header>