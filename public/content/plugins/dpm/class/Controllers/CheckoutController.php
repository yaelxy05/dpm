<?php 
namespace DPM\Controllers;

use DPM\Models\CommandLineModel;
use DPM\Models\CartModel;

class CheckoutController {

    public function __construct()
    {
        // Handle add to cart
        add_action('template_redirect', [$this, 'process_checkout']);
    }

    public function process_checkout() {

        if(isset($_POST['process_command'])) {
              // code pour effectuer l'achat
            $args = [
                'post_author' => get_current_user_id(),
                'post_status' => 'publish',
                'post_type' => 'command'
            ];

            $commandId = wp_insert_post($args);

            wp_update_post(['ID' => $commandId, 'post_title' => 'Commande_'.$commandId]);

            //On va ajouter les produits du panier à la commande via la table command line
            $cartModel = new CartModel();
            $commandLineModel = new CommandLineModel();

            $userId = get_current_user_id();
            $products = $cartModel->getUserCart($userId);
            
            foreach($products as $product) {
                $commandLineModel->insert($commandId, $product->post_title, get_field('prix', $product->ID));
            }

            // On supprime tous les produits présents dans la table cart_product qui correspondent au user_id courant
        }
        
    }
}