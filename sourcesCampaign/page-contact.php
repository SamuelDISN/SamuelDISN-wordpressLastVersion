<?php
/*
Template name: contact
*/

get_header(); ?>

<?php 
	if(!function_exists('get_field'))return;

?>

<main class="isContactMain">

    <?php 
        $image = get_field('img_contact_us');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

	<div class="isFormContactUs">
        <?php echo do_shortcode('[ninja_form id=1]'); ?>
    </div>

</main>

<?php
get_footer();
