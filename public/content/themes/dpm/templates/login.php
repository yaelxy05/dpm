<?php

/**
 * Template Name: connexion
 */
?>
<?php
get_header();
?>
<main class="main">
    <h1 class="main_h1">Connexion</h1>
    <div class="main_input-box">
        <div class="main_input name">
            <input id="email" type="email" name="email" placeholder="Email">
        </div>
        <div class="main_input password">
            <input id="password" type="password" name="password" placeholder="Mot de passe">
        </div>
        <div class="main_loginBottom-box">
            <div class="main_link">
                <p>Mot de passe oublié ?</p>
                <p>Pas encore inscrit ?</p>
            </div>
            <button id="button_connexion" type="submit" value="Envoyer">Connexion</button>
        </div>
    </div>
</main>
<?php
get_footer();
?>
