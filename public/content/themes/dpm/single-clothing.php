<?php get_header();?>



    <main class="main">
        <h1 class="main_h1"><?php the_title(); ?></h1>

        <?php while (have_posts()) : the_post(); ?>
            <div class="single_box">
                <div class="single_img-box">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'single_img', 'alt'=> 'article-product'])?> 
                </div>
                <div class="single_description">
                    <p class="single_name"><?php the_title(); ?></p>
                    <p class="single_price"><?php the_field('prix'); ?>€</p>
                    <p class="single_age"><?= the_category() ?></p>
                    <p class="single_category"><?= the_field('age'); ?></p>
                    <button>Ajouter au panier</button>
                </div>
            </div>
        <?php endwhile ?>
    </main>



<?php get_footer();?>