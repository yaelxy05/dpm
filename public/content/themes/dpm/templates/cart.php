<?php
get_header();

use DPM\Models\CartModel;

$cartModel = new CartModel();
$cartProducts = $cartModel->getUserCart(get_current_user_id());

?>

<main class="main">
    <h1 class="main_h1">Panier</h1>
    <div class="cart_wrapper">
        <?php foreach($cartProducts as $post) : setup_postdata($post); ?>
            <div class="cart_product">
                <img class="cart_picture" src="<?php the_post_thumbnail('post-thumbnail', ['class' => 'single_img', 'alt'=> 'article-product']);?>
                <p class="cart_description"><?php the_title(); ?></p>
                <p class="cart_price"><?php the_field('prix'); ?> €</p>
                <i class="fas fa-trash-alt"></i>
            </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>

    <div class="cart_total">
        <div class="cart_total-product">
            <p>Produits</p>
            <p>40€</p>
        </div>
        <div class="cart_total-product">
            <p>Livraison</p>
            <p>3.90€</p>
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
