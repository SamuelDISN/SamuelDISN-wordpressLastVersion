<?php
/*
Template name: qui-sommes-nous
*/

get_header(); ?>


<?php 
	if(!function_exists('get_field'))return;

?>

<main class="isQsnMain">

    <h2><?php echo the_field('titre_image_candidate');?></h2>

    <?php 
        $image = get_field('image_qsn_program');
        if( !empty( $image ) ): ?>

            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    
        
    <section class="isCandidateProgram">
        <h1><?php the_field('titre_politic_program');?></h1>
	        <p class="isDetailsProgramQsn"><?php the_field('text_description_program');?></p>
    </section>

    <section class="isContainerJoinCampaign">

        <div class="isContainerBannerJoinCampaign">
            <div class="isLabelLineJoinUp"></div>
            <div class="isBannerJoinCampaign"></div>
            <div class="isLabelLineJoinDown"></div>
            <h2>Rejoins la campagne</h2>
        </div>

        <div class="isFormJoinCampaign">
            <?php echo do_shortcode('[ninja_form id=2]'); ?>
        </div>

    </section>

</main>

<?php
get_footer();
