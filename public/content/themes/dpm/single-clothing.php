<?php get_header();
global $post;
$author_id = $post->post_author;
?>

    <main class="main">
        <h1 class="main_h1"><?php the_title(); ?></h1>

        
            <div class="single_box">

                <div class="single_box-top">
                    <div class="single_img-box">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'single_img', 'alt'=> 'article-product'])?> 
                    </div>
                    <div class="single_description">
                        <?php 
                            $ages = get_the_terms(get_the_id(), 'age');  
                            if($ages) :
                        ?>
                            <p class="single_age">
                            <?php 
                            
                                foreach($ages as $age) {
                                    echo $age->name;
                                }
                            
                            ?>
                        </p>
                        <?php endif; ?>
                            
                        <?php 
                            $genders = get_the_terms(get_the_id(), 'gender');
                            if($genders) :
                        ?>
                            <p class="single_category">
                                <?php 
                                
                                    foreach($genders as $gender) {
                                        echo $gender->name;
                                    }
                                
                                ?>
                            </p>
                        <?php endif; ?>

                        <p class="single_author"><?php the_author_meta( 'display_name', $author_id ); ?></p>  

                        <p class="single_price"><?php the_field('prix'); ?> €</p>
                         <form method="post">
                        <input type="hidden" name="product_id" value="<?php the_id(); ?>">
                        <button name="dpm_add_to_cart" type="submit">Ajouter au panier</button>
                    </form>
                    </div>
              
                </div>
                <div class="single_description--full">
                    <h2>Description</h2>
                    <p class="single_excerpt"><?php the_excerpt('post-excerpt') ?></p>
                </div>
                
            </div>
       
    </main>


<?php get_footer();?>
