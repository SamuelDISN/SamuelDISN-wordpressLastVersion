<?php
/*
Template name: actualites
 */

get_header(); ?>

<main>

	<?php
			$id = 388;
			$isContainerArticleActualities = get_post($id);
			$title = $isContainerArticleActualities->post_title;
			$contenu = $isContainerArticleActualities->post_content;
			$contenu = apply_filters('the_content', $contenu);
			$contenu = str_replace(']]>', ']]>', $contenu);
	?>

	<div class="isContainerArticleActualities">
		<?php echo "$title, $contenu"; ?>
		<button type="button">LIRE PLUS</button>
        	<span> Article paru le : <?php the_time('jS F, Y') ?></span>

		<div class="isContainerCards">

			<div class="isCardEnvironnement">
				<?php
					wp_list_categories([
						'title_li'=>'']);
				?>
			</div>

			<div class="isCardSante">
				<?php
					wp_list_categories([
						'title_li'=>'']);
				?>
			</div>

			<div class="isCardEconomie">
				<?php
					wp_list_categories([
						'title_li'=>'']);
				?>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
