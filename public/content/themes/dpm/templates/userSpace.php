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
            <?php 
                $user = wp_get_current_user();
                //dd($user);
                $avatar = get_user_meta($user->ID, 'avatar', true);
            ?>

            <a href=" <?php echo get_home_url() . '/create-post'; ?>"><button class="main_sale-box--button">+ Ajoutez un produit</button></a>
            <div class="main_dataUser">
                <h2 class="main_info">Informations du compte</h2>
                <div class="main_boxP">
                    <p><?php echo $user->user_login; ?></p>
                    <p><?php echo $user->user_email; ?></p>
                    <p></p><?php echo get_user_meta($user->ID, 'address', true); ?></p>
                    <p><?php echo get_user_meta($user->ID, 'phone_number', true); ?></p>
                    
                    <p><img src="<?php echo get_user_meta($user->ID, 'image', true); ?>" alt=""></p>
                </div>
            </div>
   
        
</main>

<?php
get_footer();
?>
