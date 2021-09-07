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
    <?php acf_form_head(); ?>
</head>

<body>
    <div class="header">
        <img class="header_logo" src="<?= get_theme_file_uri('assets/images/IMG_2821.png') ?>" alt="logo">
        <div class="header_wrapper">
            <div class="header_login">
                <ul class="header_login-li">
                    <?php if ( is_user_logged_in() ) { ?>
                        <li><a href="http://localhost/apo/il-etait-plusieurs-doigts/public/espace-utilisateur/">Espace Utilisateur</a></li>
                        <li><a href="<?php echo wp_logout_url(); ?>">Déconnexion</a></li>
                    <?php } else { ?>
                        <li><a href="<?= wp_login_url(); ?>">Se connecter</a></li>
                        <li>/</li>
                        <li><a href="<?= wp_registration_url(); ?>"> Créer un compte</a></li>                 
                    <?php } ?>
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
