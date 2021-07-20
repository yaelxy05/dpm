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
                    <li>Se connecter</li>
                    <li>/</li>
                    <li> Créer un compte</li>
                </ul>
            </div>
            <div class="header_nav">
                <ul class="header_ul">
                    <li>Accueil</li>
                    <li>Fille</li>
                    <li>Garçon</li>
                    <li>Bébé</li>
                    <li><i class="fas fa-shopping-cart"></i></li>
                </ul>
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
                <ul class="header_ul">
                    <li>Accueil</li>
                    <li>Se connecter</li>
                    <li>Créer un compte</li>
                    <li>Fille</li>
                    <li>Garçon</li>
                    <li>Bébé</li>
                    <li><i class="fas fa-shopping-cart"></i></li>
                </ul>
            </div>
        </div>
    </div>