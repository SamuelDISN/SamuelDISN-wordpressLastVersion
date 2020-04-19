<?php
/*
Template name: gilets-jaunes
 */

get_header(); ?>

<main>

	<?php
			$id = 475;
			$isContainerArticleEcoGiletJaune = get_post($id);
			$title = $isContainerArticleEcoGiletJaune->post_title;
			$contenu = $isContainerArticleEcoGiletJaune->post_content;
			$contenu = apply_filters('the_content', $contenu);
			$contenu = str_replace(']]>', ']]>', $contenu);
	?>

	<div class="isContainerArticleEcoGiletJaune">
		<h1><?php echo"$title";?></h1>

		<?php echo"$contenu";?>

			<button type="button">LIRE PLUS</button>
			<span> Article paru le : <?php the_time('jS F, Y') ?></span>
	</div>
</main>

<?php
get_footer();
