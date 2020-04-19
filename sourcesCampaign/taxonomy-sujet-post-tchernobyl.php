<?php
/*
Template name: tchernobyl
 */

get_header(); ?>


<main>
	<?php
			$id = 458;
			$isContainerArticleActualities = get_post($id);
			$title = $isContainerArticleActualities->post_title;
			$contenu = $isContainerArticleActualities->post_content;
			$contenu = apply_filters('the_content', $contenu);
			$contenu = str_replace(']]>', ']]>', $contenu);
	?>

	<div class="isContainerArticleEnvTchernobyl">
		<h1><?php echo"$title";?></h1>

		<?php echo"$contenu";?>

		<button type="button">LIRE PLUS</button>
        <span> Article paru le : <?php the_time('jS F, Y') ?></span>
	</div>
</main>

<?php
get_footer();
