<?php get_header();?>



    <main class="main">
        <h1 class="main_h1"><?php the_title(); ?></h1>

        
            <div class="single_box">
                <div class="single_box-top">
                    <div class="single_img-box">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'single_img', 'alt'=> 'article-product'])?> 
                    </div>
                    <div class="single_description">
                        <p class="single_age">
                        <?php 
                            $ages = get_the_terms(get_the_id(), 'age');
                            foreach($ages as $age) {
                                echo $age->name;
                            }
                        
                        ?>
                        </p>
                        <p class="single_category"><?php the_category(); ?>Bébé</p>
                        <p class="single_price"><?php the_field('prix'); ?> €</p>
                        <button>Ajouter au panier</button>
                    </div>
                </div>
                <div class="single_description--full">
                    <h2>Description</h2>
                    <p class="single_excerpt"><?php the_excerpt('post-excerpt') ?></p>
                </div>
                
            </div>
       
    </main>


<?php get_footer();?>