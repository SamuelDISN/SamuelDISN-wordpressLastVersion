<?php
/*
Template name: covid-19
 */

get_header(); ?>

<main>
	<?php
			$id = 412;
			$isContainerArticleSanteCovid = get_post($id);
			$title = $isContainerArticleSanteCovid->post_title;
			$contenu = $isContainerArticleSanteCovid->post_content;
			$contenu = apply_filters('the_content', $contenu);
			$contenu = str_replace(']]>', ']]>', $contenu);
	?>

		<div class="isContainerArticleSanteCovid">
			<h1><?php echo"$title";?></h1>

			<?php echo"$contenu";?>

			<button type="button">LIRE PLUS</button>
			<span> Article paru le : <?php the_time('jS F, Y') ?></span>
		</div>
</main>

<?php
get_footer();
