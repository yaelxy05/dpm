<?php
get_header();

use DPM\Models\CartModel;

$cartModel = new CartModel();
$cartProducts = $cartModel->getUserCart(get_current_user_id());

?>

<main class="main">
    <h1 class="main_h1">Panier</h1>
    <div class="cart_wrapper">
        <?php if(empty($cartProducts)) : ?>
            <p>Il n'y a aucun produit dans votre panier. </p>
        <?php else : ?>

            <?php $total_price = 0; ?>
            <?php foreach($cartProducts as $post) : setup_postdata($post); 
            $total_price += get_field('prix'); ?>
                <div class="cart_product">
                    <img class="cart_picture" src="<?php the_post_thumbnail('post-thumbnail', ['class' => 'single_img', 'alt'=> 'article-product']);?>
                    <p class="cart_description"><?php the_title(); ?></p>
                    <p class="cart_price"><?php the_field('prix'); ?> €</p>
                    <form method="post">
                        <input type="hidden" name="product_id" value="<?php the_id(); ?>">
                        <button type="submit" name="dpm_delete_to_cart"><i  class="fas fa-trash-alt"></i></button>
                    </form>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>

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
                    <a href="<?php echo get_home_url() . '/commande'; ?>">Procéder à la commande</a>
                </div>
            </div>

        <?php endif; ?>
    </div>

  
</main>
 


 <?php
get_footer();
?>
