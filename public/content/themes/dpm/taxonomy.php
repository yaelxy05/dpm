<?php
get_header();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<main class="main">



    <div class="main_box">
        <h1 class="main_h1"><?php single_cat_title('', true) ?></h1>
    

        <form>
            <div class="container">
                <button class="accordion">Age</button>
                <div class="accordion-content">
                    <ul class="accordion_box">
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

                <button class="accordion">Type de vêtements</button>
                <div class="accordion-content">
                    <ul class="accordion_box">
                        <li><input type="checkbox" name="type[]" value="hauts-t-shirt">Hauts – T-shirts</li>
                        <li><input type="checkbox" name="type[]" value="pulls-gilets-sweats">Pulls – Gilets – Sweats</li>
                        <li><input type="checkbox" name="type[]" value="manteaux-vestes">Manteaux – Vestes</li>
                        <li><input type="checkbox" name="type[]" value="pantalons-shorts">Pantalons – Shorts</li>
                        <li><input type="checkbox" name="type[]" value="robes-jupes">Robes – Jupes</li>
                        <li><input type="checkbox" name="type[]" value="salopettes">Salopettes</li>
                        <li><input type="checkbox" name="type[]" value="pyjamas">Pyjamas</li>
                        <li><input type="checkbox" name="type[]" value="sous-vetements">Sous-vêtements</li>
                        <li><input type="checkbox" name="type[]" value="puericulture">Puériculture</li>
                        <li><input type="checkbox" name="type[]" value="accessoires">Accessoires</li>
                    </ul>
                </div>


                <button class="filter-button">Filtrer</button>
            
            </div>

        </form>
    

     <div class="main_post">

        <!-- loop for display post product -->
        <?php while (have_posts()) : the_post(); ?>

            <div class="main_wrapper">
                <!-- display of picture -->
                <?php the_category() ?>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt' => 'article-product']) ?>
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


</main>



<?php
get_footer(); ?>