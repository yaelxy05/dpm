<?php
get_header();
?>

<main class="main">



    <div class="main_box">
        <h1 class="main_h1"><?php single_cat_title('', true) ?></h1>


        <!--<div id="sidebar">
           
            <form>

                <div class="filter">
                    <h3>Age</h3>
                    <div class="product-list">
                        <ul>
                            <li><input type="checkbox" name="age[]" value="0-mois">0 mois</li>
                            <li><input type="checkbox" name="age[]" value="1-mois">1 mois</li>
                            <li><input type="checkbox" name="age[]" value="3-mois">3 mois </li>
                            <li><input type="checkbox" name="age[]" value="6-mois">6 mois </li>
                            <li><input type="checkbox" name="age[]" value="9-mois">9 mois </li>
                            <li><input type="checkbox" name="age[]" value="12-mois">12 mois </li>
                            <li><input type="checkbox" name="age[]" value="18-mois">18 mois </li>
                            <li><input type="checkbox" name="age[]" value="24-mois">24 mois </li>
                            <li><input type="checkbox" name="age[]" value="36-mois">36 mois </li>
                            <li><input type="checkbox" name="age[]" value="3-ans">3 ans </li>
                            <li><input type="checkbox" name="age[]" value="4-ans">4 ans </li>
                            <li><input type="checkbox" name="age[]" value="6-ans">6 ans </li>
                            <li><input type="checkbox" name="age[]" value="8-ans">8 ans </li>
                            <li><input type="checkbox" name="age[]" value="10-ans">10 ans </li>
                            <li><input type="checkbox" name="age[]" value="12-ans">12 ans </li>
                            <li><input type="checkbox" name="age[]" value="14-ans">14 ans </li>
                            <li><input type="checkbox" name="age[]" value="16-ans">16 ans </li>
                        </ul>
                    </div>
                </div>

                <div class="filter">
                 <h3>Type</h3>
                    <div class="product-list">
                        <ul>
                            <li><input type="checkbox" name="type[]" value="hauts-t-shirt">Hauts – T-shirts</li>
                            <li><input type="checkbox" name="type[]" value="pulls-gilets-sweats	">Pulls – Gilets – Sweats</li>
                            <li><input type="checkbox" name="type[]" value="manteaux-vestes	">Manteaux – Vestes</li>
                            <li><input type="checkbox" name="type[]" value="pantalons-shorts	">Pantalons – Shorts</li>
                            <li><input type="checkbox" name="type[]" value="robes-jupes	">Robes – Jupes</li>
                            <li><input type="checkbox" name="type[]" value="salopettes	">Salopettes</li>
                            <li><input type="checkbox" name="type[]" value="pyjamas">Pyjamas</li>
                            <li><input type="checkbox" name="type[]" value="sous-vetements	">Sous-vêtements</li>
                            <li><input type="checkbox" name="type[]" value="puericulture">Puériculture</li>
                            <li><input type="checkbox" name="type[]" value="accessoires">Accessoires</li>
                        </ul>
                    </div>
                </div>

                <button>Filtrer</button>
            </form>
        </div> -->
        


        <div class="main_post">

            <!-- loop for display post product -->
            <?php while (have_posts()) : the_post(); ?>

                <div class="main_wrapper">
                    <!-- display of picture -->
                    <?php the_category() ?>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt' => 'article-product']) ?>
                    <h2 class="main_h2"><?php the_title() ?></h2>
                    <!-- diplay of excerpt -->
                    <p class="prix"><?php the_field('prix') ?></p>
                </div>
            <?php endwhile ?>

        </div>

    </div>
</main>


<?php
get_footer(); ?>