<?php

// ==========================================================================================
// CART Count
// ==========================================================================================
use DPM\Models\CartModel;


function getProductCount() {
    $cartModel = new CartModel();
    // Ta requète pour récupérer juste le compte les articles dans le panier
    $productCount = $cartModel->getProductCount(get_current_user_id()); // <--- Méthode a crée dans le modèle,. La requete SQL doit juste compter le nombre d'item et pas te renvoyer toutes les infos.
    return  $productCount;
}
