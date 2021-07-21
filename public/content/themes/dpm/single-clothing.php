<?php

 while(have_posts()): the_post(); ?>
    <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
    <br>
    <?php the_title(); ?>
    <?php the_excerpt('post-excerpt', ['class' => 'main_p']) ?>
    <br>
    <?php the_field('prix'); ?>€
<?php endwhile ?>