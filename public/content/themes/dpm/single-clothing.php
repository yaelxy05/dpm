<?php get_header();?>



    <main class="main">
        <h1 class="main_h1"><?php the_title(); ?></h1>

        
            <div class="single_box">

                <div class="single_img-box">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'single_img', 'alt'=> 'article-product'])?> 
                </div>
                <div class="single_description">
                    <p class="single_age"><?php the_category() ?>1Mois</p>
                    <p class="single_category"><?php the_category(); ?>Bébé</p>
                    <p class="single_price"><?php the_field('prix'); ?> €</p>
                    <form method="post">
                        <input type="hidden" name="product_id" value="<?php the_id(); ?>">
                        <button name="dpm_add_to_cart" type="submit">Ajouter au panier</button>
                    </form>

                </div>
                <div class="single_description--full">
                    <h2>Description</h2>
                    <p class="single_excerpt"><?php the_excerpt('post-excerpt') ?></p>
                </div>
                
            </div>
       
    </main>


<?php get_footer();?>