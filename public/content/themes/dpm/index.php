
<?php
get_header();
?>



<main class="main">
    
    <div class="main_box">

        <img class="main_banner" src="<?= get_theme_file_uri('assets/images/banner/IMG_2825.png') ?>" alt="banner home pages">

        <h1 class="main_h1">Nos coups de coeur du moment</h1>

        <div class="main_post">
        <!-- loop for display post product -->
        <?php while(have_posts()): the_post(); ?>
    
            <div class="main_wrapper">
                <!-- display of picture -->
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'main_img', 'alt'=> 'article-product'])?> 
                <h2 class="main_h2"><?php the_title() ?></h2>
                <!-- diplay of excerpt -->
                <?php the_excerpt('post-excerpt', ['class' => 'main_p']) ?>
            </div>
        <?php endwhile ?>
        </div>
        <h1 class="main_h1">Découvrez notre sélection</h1>
        <div class="main_select--box">
            <div class="main_select girl">
                <img class="main_img" src="<?= get_theme_file_uri('assets/images/banner/pexels-eren-li-7168995.jpg') ?>" alt="selection fille">
                <div class="main_select--textbox girl--text">
                    <p class="main_select--text">fille</p>
                </div>
            </div>
            <div class="main_select boy">
                <img class="main_img" src="<?= get_theme_file_uri('assets/images/banner/pexels-ketut-subiyanto-4545166.jpg') ?>" alt="selection garçon">
                <div class="main_select--textbox boy--text">
                    <p class="main_select--text">garçon</p>
                </div>
            </div>
            <div class="main_select baby">
                <img class="main_img" src="<?= get_theme_file_uri('assets/images/banner/pexels-pixabay-265987.jpg') ?>" alt="selection bébé">
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
