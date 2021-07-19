
<?php
get_header();
?>



<main class="main">
    <!-- loop for display post product -->
    <?php while(have_posts()): the_post(); ?>
    
    <div class="main_wrapper">
        <!-- display of picture -->
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
        <h1 class="main_h1"><?php the_title() ?></h1>
        <!-- diplay of excerpt -->
        <?php the_excerpt('post-excerpt', ['class' => 'main_p']) ?>
    </div>
    <?php endwhile ?>
</main>

<?php
get_footer();
?>
