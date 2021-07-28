<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
			src="https://kit.fontawesome.com/0a3a3e0ecb.js"
			crossorigin="anonymous"
	></script>
    <?php
    wp_head();
    ?>
</head>

<body>
    <div class="header">
        <img class="header_logo" src="<?= get_theme_file_uri('assets/images/IMG_2821.png') ?>" alt="logo">
        <div class="header_wrapper">
            <div class="header_login">
                <ul class="header_login-li">
                    <li><a href="<?= wp_login_url(); ?>">Se connecter</a></li>
                    <li>/</li>
                    <li><a href="<?= wp_registration_url(); ?>"> Créer un compte</a></li>
                </ul>
            </div>
            <div class="header_nav">
                    <?php wp_nav_menu([
                     'theme_location' => 'header',
                     'container' => false,
                     'menu_class' => 'header_ul'])?>
            </div>
        </div>
        <div class="header_wrapper-mobile">
            <div class="header_burger">
                <div class="header_burger-icon">
                    <span class="line1"></span>
                    <span class="line2"></span>
                    <span class="line3"></span>
                </div>
            </div>
            <div class="header_nav-mobile">
                
                    <?php wp_nav_menu([
                     'theme_location' => 'header-mobile',
                     'container' => false,
                     'menu_class' => 'header_ul']) ?>      
            </div>
        </div>
    </div>