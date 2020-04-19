<?php
/*
Template name: economie
 */

get_header(); ?>


<main class="isCatEco">
	<h1>Retrouvez tous les articles liées à l'économie selon leur sujet.</h1>

	<!-- On liste les catégories créer appartenant à la taxonomy créer ( portant le nom actualites ) -->
	<div class="isCardCatEco_1">
		<?php the_terms(get_the_ID(),'sujet-post') ?>

		<!-- Obtenir le lien en relation avec la taxonomie -->
		<?php $sujetpost = get_terms(['taxonomy' => 'sujet-post']); ?>
		<?php foreach($sujetpost as $sujetpost): ?>
			<a href="<?= get_term_link($sujetpost)?>" class="<?= is_tax('sujet-post', $sujetpost->term_id) ? 'active' : '' ?>"></a>
		<?php endforeach; ?>
	</div> <!-- fin isCardCatEco_1 -->

</main>

<?php
get_footer();
