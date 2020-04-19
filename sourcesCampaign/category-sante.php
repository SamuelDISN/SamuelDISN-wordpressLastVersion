<?php
/*
Template name: sante 
 */

get_header(); ?>


<main class="isCatSante">
	<h1>Retrouvez tous les articles liées à la santé selon leur sujet.</h1>

	<div class="isCardCatSante_1">
		<?php the_terms(get_the_ID(),'sujet-post') ?>

		<!-- Obtenir le lien en relation avec la taxonomie -->
		<?php $sujetpost = get_terms(['taxonomy' => 'sujet-post']); ?>
		<?php foreach($sujetpost as $sujetpost): ?>
			<a href="<?= get_term_link($sujetpost)?>" class="<?= is_tax('sujet-post', $sujetpost->term_id) ? 'active' : '' ?>"></a>
		<?php endforeach; ?>
	</div> <!-- fin isCardCatSante_1 -->

</main>

<?php
get_footer();
