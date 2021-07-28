<?php 
namespace DPM\Controllers;

use DPM\Models\CartModel;

class CartController {

    public function __construct()
    {
        add_action('init', [$this, 'handle_add_to_cart']);
        
    }

    public function handle_add_to_cart() {
        if(isset($_POST['dpm_add_to_cart'])) {
            // on récupère l'id du produit

            // on récupère l'id de l'utilisateur

            // on utilise le CartModel (avec la bonne méthode) pour insérer ces infos dans la table cart_product
        }
        
    }
}

