<?php

/**
 * Template Name: Panier
 */
?>
<?php
get_header();
?>

<main class="main">
    <h1 class="main_h1">Panier</h1>
    <div class="cart_wrapper">
        <div class="cart_product">
            <img class="cart_picture" src="<?= get_theme_file_uri('assets/images/accessoires/206094083_343378580660736_3262409337469414675_n.jpg') ?>" alt="cart product">
            <p class="cart_description">description</p>
            <p class="cart_quantity">1</p>
            <p class="cart_price">9.99€</p>
            <i class="fas fa-trash-alt"></i>
        </div>
        <div class="cart_product">
            <img class="cart_picture" src="<?= get_theme_file_uri('assets/images/accessoires/207872987_10222001643142100_1988602404556735231_n.jpg') ?>" alt="cart product">
            <p class="cart_description">description</p>
            <p class="cart_quantity">1</p>
            <p class="cart_price">9.99€</p>
            <i class="fas fa-trash-alt"></i>
        </div>
        <div class="cart_product">
            <img class="cart_picture" src="<?= get_theme_file_uri('assets/images/accessoires/206094083_343378580660736_3262409337469414675_n.jpg') ?>" alt="cart product">
            <p class="cart_description">description</p>
            <p class="cart_quantity">1</p>
            <p class="cart_price">9.99€</p>
            <i class="fas fa-trash-alt"></i>
        </div>
        <div class="cart_product">
            <img class="cart_picture" src="<?= get_theme_file_uri('assets/images/accessoires/208759369_2806360789676012_1529577717722661111_n.jpg') ?>" alt="cart product">
            <p class="cart_description">description</p>
            <p class="cart_quantity">1</p>
            <p class="cart_price">9.99€</p>
            <i class="fas fa-trash-alt"></i>
        </div>
    </div>

    <div class="cart_total">
        <div class="cart_total-product">
            <p>Produits</p>
            <p>40€</p>
        </div>
        <div class="cart_total-product">
            <p>Livraison</p>
            <p>40€</p>
        </div>
        <div class="cart_total-product">
            <p>Total</p>
            <p>40€</p>
        </div>
        <div class="cart_total-button">
            <button>Valider ma commande</button>
        </div>
    </div>
</main>
 


 <?php
get_footer();
?>
