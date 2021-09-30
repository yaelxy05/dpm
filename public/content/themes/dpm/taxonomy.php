<?php
get_header();
?>

<main class="main">

    <div class="main_box">
        <h1 class="main_h1"><?php single_cat_title('', true) ?></h1>
        <div class="display-sidebar">
            <div class="sidebar">
           
                <form>
                    <div class="container">
                        <button class="accordion">Age</button>
                        <div class="accordion-content">
                            <ul class="accordion_box">
                                <?php 
                                    $ages = get_terms([
                                        'taxonomy' => 'age',
                                        'orderby' => 'name',
                                    ]);

                                    foreach($ages as $age) :
                                ?>
                                    <li><input type="checkbox" name="age[]" value="<?= $age->slug ?>"><?= $age->name ?></li>
                                <?php endforeach; ?>
                               
                            </ul>

                        </div>


                        <button class="accordion">Type de vêtements</button>
                        <div class="accordion-content">
                            <ul class="accordion_box">
                                <?php 
                                        $types = get_terms([
                                            'taxonomy' => 'type',
                                            
                                        ]);

                                        foreach($types as $type) :
                                    ?>
                                        <li><input type="checkbox" name="type[]" value="<?= $type->slug ?>"><?= $type->name ?></li>
                                    <?php endforeach; ?>
                            </ul>

                        </div>

                        <button class="accordion">Couleur</button>
                        <div class="accordion-content">
                            <ul class="accordion_box">
                                    <?php 
                                        $colors = get_terms([
                                            'taxonomy' => 'color',
                                            
                                        ]);

                                        foreach($colors as $color) :
                                    ?>
                                        <li><input type="checkbox" name="color[]" value="<?= $color->slug ?>"><?= $color->name ?></li>
                                    <?php endforeach; ?>
                            </ul>

                        </div>


                        <button class="filter-button">Filtrer</button>

                    </div>

                </form>
            </div>

            <div class="main_post">

                <!-- loop for display post product -->
                <?php while (have_posts()) : the_post(); ?>

                    <div class="main_wrapper">
                        <!-- display of picture -->
                        <?php the_category() ?>
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('product-card', ['class' => 'main_img', 'alt' => 'article-product']) ?>
                            <h2 class="main_h2"><?php the_title() ?> </h2>
                            <div class="main_detail-box">
                                <a href="<?php the_permalink() ?>">
                                    <p class="detail">Afficher les détails</p>
                                </a>
                                <!-- diplay of excerpt -->

                                <p class="prix"><?php the_field('prix') ?> €</p>
                            </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </div>
    </div>


</main>



<?php
get_footer(); ?>