<?php get_header();?>



    <main class="main">
        <h1 class="main_h1"><?php the_title(); ?></h1>

        <?php while (have_posts()) : the_post(); ?>
            <div class="single_box">
                <div class="single_img-box">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'single_img', 'alt'=> 'article-product'])?> 
                </div>
                <div class="single_description">
                    <p class="single_age"><?php the_category() ?>1Mois</p>
                    <p class="single_category"><?php the_category(); ?>Bébé</p>
                    <p class="single_price"><?php the_field('prix'); ?> €</p>
                    <button>Ajouter au panier</button>
                </div>
                <div class="single_description--full">
                    <h2>Description</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam incidunt aut voluptate sed autem? Autem minus excepturi, nisi doloribus praesentium ab consequuntur dolorum assumenda! Sequi praesentium alias natus voluptate animi.</p>
                </div>
            </div>
        <?php endwhile ?>
    </main>

<?php get_footer();?>