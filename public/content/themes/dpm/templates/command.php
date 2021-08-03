<?php

/**
 * Template Name: Commande
 */
?>
<?php
get_header();

use DPM\Models\CommandLineModel;

$commandLineModel = new CommandLineModel();
$commandId = $commandLineModel->getAllCommandLineByCommand(get_current_user_id());

?>

<main class="main">
    <div class="main_box">
        <h1 class="main_h1">Mes commandes</h1>

        <div class="main_wrapper">
            <div class="command_product">
                <img class="command_picture" src="<?= get_theme_file_uri('assets/images/accessoires/206094083_343378580660736_3262409337469414675_n.jpg') ?>" alt="cart product">
                <p class="command_description">description</p>
                <p class="command_quantity">Quantité:1</p>
                <p class="command_price">9.99€</p>
                <p class="command_date">Date de la commande : Le 12 juillet 2021</p>
            </div>
            <div class="command_product">
                <img class="command_picture" src="<?= get_theme_file_uri('assets/images/accessoires/206094083_343378580660736_3262409337469414675_n.jpg') ?>" alt="cart product">
                <p class="command_description">description</p>
                <p class="command_quantity">Quantité:1</p>
                <p class="command_price">9.99€</p>
                <p class="command_date">Date de la commande : Le 12 juillet 2021</p>
            </div>
            <div class="command_product">
                <img class="command_picture" src="<?= get_theme_file_uri('assets/images/accessoires/206094083_343378580660736_3262409337469414675_n.jpg') ?>" alt="cart product">
                <p class="command_description">description</p>
                <p class="command_quantity">Quantité:1</p>
                <p class="command_price">9.99€</p>
                <p class="command_date">Date de la commande : Le 12 juillet 2021</p>
            </div>
            <div class="command_product">
                <img class="command_picture" src="<?= get_theme_file_uri('assets/images/accessoires/206094083_343378580660736_3262409337469414675_n.jpg') ?>" alt="cart product">
                <p class="command_description">description</p>
                <p class="command_quantity">Quantité:1</p>
                <p class="command_price">9.99€</p>
                <p class="command_date">Date de la commande : Le 12 juillet 2021</p>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>