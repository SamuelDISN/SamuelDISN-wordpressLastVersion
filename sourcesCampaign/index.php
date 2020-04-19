<?php get_header();?>

<main>

<!-- <body> -->
    <div id="slider">
        <figure>
            <img src="<?php  echo get_template_directory_uri().'/images/img-slider-1.jpg' ?>" alt="It's first ecology image slider">
            <img src="<?php  echo get_template_directory_uri().'/images/img-slider-2.jpg' ?>" alt="It's second ecology image slider">
            <img src="<?php  echo get_template_directory_uri().'/images/img-slider-3.png' ?>" alt="It's third ecology image slider">
            <img src="<?php  echo get_template_directory_uri().'/images/img-slider-4.jpg' ?>" alt="It's fourth ecology image slider">
            <img src="<?php  echo get_template_directory_uri().'/images/img-slider-5.jpg' ?>" alt="It's fifth ecology image slider">
        </figure>
    </div> 

    <!-- Appel de l'article portant l'id 1 -->
    <!-- Il me semblait plus pertinent d'accorder une date à la citation de la candidate c'est pourquoi j'ai décidé de l'implémenté comme un article -->
    <?php
	    $id = 1;
	    $isContainerArticleIndex = get_post($id);
	    $title = $isContainerArticleIndex->post_title;
        $contenu = $isContainerArticleIndex->post_content;
        // Filtre (codex pour plus d'options)
	    $contenu = apply_filters('the_content', $contenu);
	    $contenu = str_replace(']]>', ']]>', $contenu);
    ?>

    <div class="isContainerArticleIndex">
        <?php echo "$title, $contenu"; ?>
        <span class="isDateCitation">Citée le : <?php the_time('jS F, Y') ?></span>
    </div>


</main>

<?php get_footer();?>