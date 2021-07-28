
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
                'posts_per_page' => 3,
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
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
                        <h2 class="main_h2"><?php the_title() ?></h2>
                        <!-- diplay of excerpt -->
                        <?php the_excerpt('post-excerpt', ['class' => 'main_p']) ?>
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
                    <p class="main_select--text">fille</p>
                </div>
            </div>
            <div class="main_select boy">
                <div class="main_img main_img--boy"></div>
                <div class="main_select--textbox boy--text">
                    <p class="main_select--text">garçon</p>
                </div>
            </div>
            <div class="main_select baby">
            <div class="main_img main_img--baby"></div>
                <div class="main_select--textbox baby--text">
                    <p class="main_select--text">bébé</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>
