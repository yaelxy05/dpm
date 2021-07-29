<?php 
namespace DPM\Controllers;

use DPM\Models\CartModel;

class CartController {

    public function __construct()
    {
        add_action('init', [$this, 'handle_add_to_cart']);
        
    }

    public function handle_add_to_cart($product) {
        if(isset($_POST['dpm_add_to_cart'])) {
            // on récupère l'id du produit
            global $product;
            $product->get_id();

            // on récupère l'id de l'utilisateur
            $user = wp_get_current_user();
            
           
            // on utilise le CartModel (avec la bonne méthode) pour insérer ces infos dans la table cart_product
            $model = new CartModel();
            $model->insert($user->ID, $product);

            wp_redirect($this->router->generate('user-panier'));
        }
        
    }
}

