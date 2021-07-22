<?php
get_header();
?>

<main class="main">



    <div class="main_box">
        <h1 class="main_h1"><?php single_cat_title('', true) ?></h1>


        <div class="sidebar">
            <h2>Filtrer les résultats</h2>
            <form>

                <div class="dropdown">
                    <button class="dropbtn">Age</button>
                    <div class="dropdown-content">
                        <ul>
                            <li><input type="checkbox" name="age[]" value="toddler"> Toddler</li>
                            <li><input type="checkbox" name="age[]" value="kid"> Kid</li>
                            <li><input type="checkbox" name="age[]" value="old"> Old</li>
                        </ul>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Type</button>
                    <div class="dropdown-content">
                        <ul>
                            <li><input type="checkbox" name="type[]" value="short"> Short</li>
                            <li><input type="checkbox" name="type[]" value="robe"> Robe</li>
                            <li><input type="checkbox" name="type[]" value="roller"> Roller</li>
                            <li><input type="checkbox" name="type[]" value="cape"> Cape</li>
                        </ul>
                    </div>
                </div>

                <button>Filtrer</button>
            </form>
        </div>

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