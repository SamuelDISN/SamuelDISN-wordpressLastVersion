<?php
/*
Template name: equipe
*/

get_header(); ?>
<?php get_template_part('/page-templates/page-actualites'); ?>
<?php 
	if(!function_exists('get_field'))return;

?>

<main class="isContainerOurTeam">

	<?php 
		$imageBanniere = get_field('banniere_page_notre_equipe');
		if( !empty( $imageBanniere ) ): ?>
    		<img class="isBannerOurTeam" src="<?php echo esc_url($imageBanniere['url']); ?>" alt="<?php echo esc_attr($imageBanniere['alt']); ?>" />
	<?php endif; ?>
		
	<section class="isOurTeam">

		<div class="isContainerPersonna1">
			<?php 
				$imagePersonnaEquipe1 = get_field('image_personna_equipe_1');
				if( !empty( $imagePersonnaEquipe1 ) ): ?>
					<img src="<?php echo esc_url($imagePersonnaEquipe1['url']); ?>" alt="<?php echo esc_attr($imagePersonnaEquipe1['alt']); ?>" />
			<?php endif; ?>

			<h3><?php the_field('text_nom_personna_equipe_1');?></h1>
				<p class="isDescriptionPersonna1"><?php the_field('text_description_personna_equipe_1');?></p>
		</div>

		<div class="isContainerPersonna2">
			<?php 
				$imagePersonnaEquipe2 = get_field('image_personna_equipe_2');
				if( !empty( $imagePersonnaEquipe2 ) ): ?>
					<img src="<?php echo esc_url($imagePersonnaEquipe2['url']); ?>" alt="<?php echo esc_attr($imagePersonnaEquipe2['alt']); ?>" />
				<?php endif; ?>

				<h3><?php the_field('text_nom_personna_equipe_2');?></h1>
					<p class="isDescriptionPersonna2"><?php the_field('text_description_personna_equipe_2');?></p>
		</div>

		<div class="isContainerPersonna3">
			<?php 
				$imagePersonnaEquipe3 = get_field('image_personna_equipe_3');
				if( !empty( $imagePersonnaEquipe3 ) ): ?>
					<img src="<?php echo esc_url($imagePersonnaEquipe3['url']); ?>" alt="<?php echo esc_attr($imagePersonnaEquipe3['alt']); ?>" />
				<?php endif; ?>

				<h3><?php the_field('text_nom_personna_equipe_3');?></h1>
					<p class="isDescriptionPersonna3" ><?php the_field('text_description_personna_equipe_3');?></p>
		</div>

	</section>

</main>

<?php
get_footer();
