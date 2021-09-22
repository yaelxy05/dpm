
<?php
get_header();
?>

<main class="main">
    
    <div class="main_box">

        <img class="main_banner" src="<?= get_theme_file_uri('assets/images/banner/IMG_2825.png') ?>" alt="banner home pages">

        <h1 class="main_h1">Nos coups de coeur du moment</h1>

        <div class="main_post">

        <?php 
            $args = [
                'posts_per_page' => 4,
                'post_type' => 'clothing',
                'tax_query' => [
                    [
                        'taxonomy' => 'crush',
                        'field' => 'slug',
                        'terms' => ['coup-de-coeur']
                    ],
                ],
            ];

            $crushClothingQuery = new WP_Query($args); 
            // The Loop
            if ( $crushClothingQuery->have_posts() ) {
                
                while ( $crushClothingQuery->have_posts() ) : $crushClothingQuery->the_post(); ?>
                    <div class="main_wrapper">
                        <!-- display of picture -->
                        <a href="<?php the_permalink()?>"><?php the_post_thumbnail('product-card', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
                        <h2 class="main_h2"><?php the_title() ?></h2>
                        <a href="<?php the_permalink()?>"> </a>
                    </div>
                <?php endwhile; 
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>
    
        </div>
        <h1 class="main_h1">Découvrez notre sélection</h1>
        <div class="main_select--box">
            <div class="main_select girl">
                <div class="main_img main_img--girl"></div>
                <div class="main_select--textbox girl--text">
                    <a href="<?php echo get_term_link('fille', 'gender') ?>"><p class="main_select--text">fille</p></a>
                </div>
            </div>
            <div class="main_select boy">
                <div class="main_img main_img--boy"></div>
                <div class="main_select--textbox boy--text">
                    <a href="<?php echo get_term_link('garcon', 'gender') ?>"><p class="main_select--text">garçon</p></a>
                </div>
            </div>
            <div class="main_select baby">
            <div class="main_img main_img--baby"></div>
                <div class="main_select--textbox baby--text">
                    <a href="<?php echo get_term_link('bebe', 'gender') ?>"><p class="main_select--text">bébé</p></a>
                </div>
            </div>
        </div>

        <h1 class="main_h1">Nouveautés</h1>

<div class="main_post">

<?php 
    $args = [
        'posts_per_page' => 4,
        'post_type' => 'clothing',
    ];

    $newClothingQuery = new WP_Query($args); 
    // The Loop
    if ( $newClothingQuery->have_posts() ) {
        
        while ( $newClothingQuery->have_posts() ) : $newClothingQuery->the_post(); ?>
            <div class="main_wrapper">
                <!-- display of picture -->
                <a href="<?php the_permalink()?>"><?php the_post_thumbnail('product-card', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
                <h2 class="main_h2"><?php the_title() ?></h2>
                <!-- diplay of excerpt -->
                <a href="<?php the_permalink()?>"> </a>
            </div>
        <?php endwhile; 
    } else {
        // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
?>

</div>

    </div>
</main>

<?php
get_footer();
?>
