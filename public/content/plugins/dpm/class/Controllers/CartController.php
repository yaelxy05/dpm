<?php 
namespace DPM\Controllers;

use DPM\Models\CartModel;

class CartController {

    public function __construct()
    {
        // Handle add to cart
        add_action('template_redirect', [$this, 'handle_add_to_cart']);

        add_action('template_redirect', [$this, 'handle_previous_archive_page']);

        add_action('template_redirect', [$this, 'handle_delete_to_cart']);
    }

    // Allow us to set the url of one of those pages : filles/garcon/bebe, to redirect after an add to cart
    public function handle_previous_archive_page() {
        if(is_tax('gender')) {
            $_SESSION['previous_shop_page'] = get_term_link(get_queried_object()->term_id);
        }
    }

    public function handle_add_to_cart($product) {
        
        if(isset($_POST['dpm_add_to_cart'])) {
            // on récupère l'id du produit
            $productId = $_POST['product_id'];

            wp_update_post(['ID' => $productId, 'post_status' => 'draft']);
          
            // on récupère l'id de l'utilisateur
            $user_id = get_current_user_id();
            // on utilise le CartModel (avec la bonne méthode) pour insérer ces infos dans la table cart_product
            $model = new CartModel();

            // si le produit est déjà dans le panier de l'utilisateur, on arrète tout, on met une erreur etc ..
            if($model->getProductByUserId($user_id, $productId)) {
                return;
            }

            $model->insert($user_id, $productId);

            // If the user went trough fille/garcon or bebe we redirect him to this page
            if(isset($_SESSION['previous_shop_page'])) {
                wp_redirect($_SESSION['previous_shop_page']);
                exit;
            }
        }
        
    }

    public function handle_delete_to_cart($product) {

        if(isset($_POST['dpm_delete_to_cart'])) {

            $id = $_POST['product_id'];

            wp_update_post(['ID' => $id, 'post_status' => 'publish']);

            $user_id = get_current_user_id();

            $model = new CartModel();

            $model->deleteProductForUser($user_id, $id);

        }
    }
}

