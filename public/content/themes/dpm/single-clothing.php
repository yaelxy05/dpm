<?php get_header();?>

<div class="single-product">
<?php
 while(have_posts()): the_post(); ?>
    <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
    <br>
    <div class="title">
    <?php the_title(); ?>
</div>
<div class="content">
    <?php the_excerpt('post-excerpt', ['class' => 'main_p']) ?>
    <br>
    <?php the_field('prix'); ?>€
</div>
<?php endwhile ?>
</div>

<?php get_footer();?>