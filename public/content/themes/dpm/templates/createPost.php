<?php

/**
 * Template Name: Create-post
 */
?>

<?php
acf_form_head();
get_header();
?>


<main class="main">
    <h1 class="main_h1">Mise à la vente</h1>
    <div class="main_create--input-box">
    <?php 
        $args = array(
            'post_id' => 'new_post', // On va créer une nouvelle publication
            'post_title' => true,
            'post_content' => true,
            'new_post' => array(
                'post_type' => 'clothing', // Enregistrer dans clothing
                'post_status'   => 'publish'
            ),
            'submit_value' => 'Vendre un vêtement', // Intitulé du bouton
            'updated_message' => "Votre annocne est bien en ligne.",
        );

        acf_form( $args ); // Afficher le formulaire
    ?>

        
    </div>
</main>

<?php
get_footer();
?>