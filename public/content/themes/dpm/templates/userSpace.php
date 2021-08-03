<?php

/**
 * Template Name: UserSpace
 */
?>
<?php
get_header();
?>

<main class="main">
        <h1 class="main_h1">Mon profil</h1>
        
            <h2 class="main_h2">Mes articles en vente</h2>
        <div class="main_wrapper-user">    
<?php
$user_id = get_current_user_id();
$loop = new WP_Query( array( 'post_type' => 'clothing', 'author' => $user_id ) ); 
if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
            <div class="main_sale-box">
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

                    <h2 class="main_sale-box--h2"><?php echo get_the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>" title="<?php htmlentities(get_the_title()); ?>">
                        <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
                    </a>
                    <p class="main_sale-box--p"><?php the_field('prix'); ?> €</p>
                <?php endif; ?>
            </div>          
        
    <?php endwhile;
endif;
wp_reset_postdata();
?> 
        </div>

            <a href=" http://localhost/apo/il-etait-plusieurs-doigts/public/create-post/"><button class="main_sale-box--button">+ Ajoutez un produit</button></a>
            <div class="main_dataUser">
                <h2 class="main_info">Informations du compte</h2>
                <div class="main_boxP">
                    <p>Nom</p>
                    <p>Email</p>
                    <p>Numéro de téléphone</p>
                    <p>Adresse</p>
                </div>
            </div>
   
        
</main>

<?php
get_footer();
?>