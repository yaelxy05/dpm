<?php
get_header();

use DPM\Models\CartModel;

$cartModel = new CartModel();
$cartProducts = $cartModel->getUserCart(get_current_user_id());

?>

<main class="main">
    <h1 class="main_h1">Votre commande</h1>
    <div class="cart_wrapper">

        <?php $total_price = 0; ?>
        <?php foreach($cartProducts as $post) : setup_postdata($post); 
        $total_price += get_field('prix'); ?>
            <div class="cart_product">
                <img class="cart_picture" src="<?php the_post_thumbnail('post-thumbnail', ['class' => 'single_img', 'alt'=> 'article-product']);?>
                <p class="cart_description"><?php the_title(); ?></p>
                <p class="cart_price"><?php the_field('prix'); ?> €</p>
            </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>

    <div class="cart_total">
        <div class="cart_total-product">
            <p>Produits</p>
            <p><?= $total_price; ?>€</p>
        </div>
        <div class="cart_total-product">
            <p>Livraison</p>
            <p>3.90€</p>
        </div>
        <div class="cart_total-product">
            <p>Total</p>
            <p><?= $total_price + 3.90; ?>€</p>
        </div>
        <div class="cart_total-button">
        </div>
    </div>
</main>
 


 <?php
get_footer();
?>
