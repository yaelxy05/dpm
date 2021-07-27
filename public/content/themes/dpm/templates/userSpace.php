<?php

/**
 * Template Name: UserSpace
 */
?>
<?php
get_header();
?>

    <main class="main">
        <h1 class="main_h1">Mon profil</h1>
        <div class="main_wrapper">
            <h2 class="main_h2">Mes articles en vente</h2>
            <div class="main_sale-box">
                <img src="<?= get_theme_file_uri('assets/images/accessoires/208759369_2806360789676012_1529577717722661111_n.jpg') ?>" alt="picture in sale">
                <p>prix</p>
            </div>
            <button>+ Ajoutez un produit</button>
            <div class="main_dataUser">
                <h2 class="main_info">Informations du compte</h2>
                <div class="main_boxP">
                    <p>Nom</p>
                    <p>Email</p>
                    <p>Numéro de téléphone</p>
                    <p>Adresse</p>
                </div>
            </div>
        </div>
        
    </main>
<?php
get_footer();
?>