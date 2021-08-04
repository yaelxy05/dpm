<?php

/**
 * Template Name: Apropos
 */
?>
<?php
get_header();
?>

<main class="main">
        <h1 class="main_h1">A propos</h1>
        <div class="contact_box">
            <div class="contact_member">
                <img class="contact_img" src="<?= get_theme_file_uri('assets/images/vignette-dev/T01BJVA2D54-U01BYU3V7RD-6f43116e4d05-512.png') ?>" alt="picture-apropos">
                <p>Yaël HUE</p>
                <p>Scrum-master</p>
                <a href="https://www.linkedin.com/in/hueyael/"><i class="fab fa-linkedin icon"></i></a>
            </div>
            <div class="contact_member">
                <img class="contact_img"  src="<?= get_theme_file_uri('assets/images/vignette-dev/IMG_20160517_102526_1463534307672.JPG') ?>" alt="picture-apropos">
                <p>Marine RAUDIN</p>
                <p>Lead développeur Front</p>
                <a href="#"></a><i class="fab fa-linkedin icon"></i></a>
            </div>
            <div class="contact_member">
                <img class="contact_img" src="<?= get_theme_file_uri('assets/images/vignette-dev/picture_contact2.jpg') ?>" alt="picture-apropos">
                <p>Axelle BODIN-DANGLETTERRE</p>
                <p>Product owner</p>
                <a href="https://www.linkedin.com/in/axelle-bodin-dangleterre-53b72718b/"><i class="fab fa-linkedin icon"></i></a>
            </div>
            <div class="contact_member">
                <img class="contact_img" src="<?= get_theme_file_uri('assets/images/vignette-dev/picture_contact1.jpg') ?>" alt="picture-apropos">
                <p>Anthony CLEMENO</p>
                <p>Lead développeur Back</p>
                <a href="https://www.linkedin.com/in/anthony-clemeno-abb99a218"><i class="fab fa-linkedin icon"></i></a>
            </div>
        </div>
</main>

<?php
get_footer();
?>