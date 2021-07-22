

<?php
get_header();
?>

<main class="main">

    <div class="main_box">
        <h1 class="main_h1"><?php single_cat_title('' , true )?></h1>
        <div class="main_post">
        
        <!-- loop for display post product -->
        <?php while(have_posts()): the_post(); ?>
    
            <div class="main_wrapper">
                <!-- display of picture -->
                <?php the_category()?>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
                <h2 class="main_h2"><?php the_title() ?></h2>
                <!-- diplay of excerpt -->
                <p class="prix"><?php the_field('prix') ?></p>
            </div>
        <?php endwhile ?>

        </div>
        <div class="sidebar">
            <form>
                Age
                <label>
                <input type="checkbox" name="age[]" value="toddler"> Toddler
                </label>
                <input type="checkbox" name="age[]" value="kid"> Kid
                <br>
                Type
                <label>
                <input type="checkbox" name="type[]" value="short"> Short
                </label>
                <input type="checkbox" name="type[]" value="robe"> Robe
                <br>
                <button>Filtrer</button>
            </form>
        </div>
    </div>
</main>


<?php
get_footer(); ?>