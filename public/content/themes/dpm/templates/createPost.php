<?php

/**
 * Template Name: Create-post
 */
?>

<?php
get_header();
?>
	<?php acf_form_head();

// ...

$args = array(
    'post_id' => 'new_post', // On va créer une nouvelle publication
    'new_post' => array(
        'post_type' => 'annuaire', // Enregistrer dans l'annuaire
    ),
    'field_groups' => array( 329 ), // L'ID du post du groupe de champs
    'submit_value' => 'Valider mon inscription', // Intitulé du bouton
    'updated_message' => "Votre demande a bien été prise en compte.",
);

acf_form( $args ); // Afficher le formulaire
?>
<main class="main">
    <h1 class="main_h1">Mise à la vente</h1>
    <div class="main_create--input-box">
        <?php while ( have_posts() ) : the_post(); ?>
            
        <?php endwhile; ?>
        

        
    </div>
</main>

<?php
get_footer();
?>