<?php

 while(have_posts()): the_post(); ?>
    <?php the_title(); ?>
    <br>
    <?php the_field('prix'); ?>€
<?php endwhile ?>