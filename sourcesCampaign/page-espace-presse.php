<?php
/*
Template name: espace-presse
*/

get_header(); ?>


<?php 
	if(!function_exists('get_field'))return;

?>

<main class="isContainerPageEspacePresse">  

    <h1>
        <?php
        the_title();
        ?>
    </h1>
</main>

<?php
get_footer();
