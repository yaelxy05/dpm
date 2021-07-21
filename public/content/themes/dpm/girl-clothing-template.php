<?php
/**
 * Template Name: Girl clothing page
 */
?>

<?php
get_header();
?>

<main class="main">
    
    <div class="main_box">
        <h1 class="main_h1">Filles</h1>
        <div class="main_post">

        <!-- loop for display post product -->
        <?php while(have_posts()): the_post(); ?>
    
            <div class="main_wrapper">
                <!-- display of picture -->
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
                <h2 class="main_h2"><?php the_title() ?></h2>
                <!-- diplay of excerpt -->
                <?php the_field('prix', ['class' => 'main_p']) ?>
            </div>
        <?php endwhile ?>

        </div>
    </div>
</main>


<?php
get_footer(); ?>