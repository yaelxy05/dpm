<?php

/**
 * Template Name: Regsiter
 */
?>
<?php
get_header();
?>
<main class="main">
    <h1 class="main_h1">Inscription</h1>
    <div class="main_register--input-box">
        <div class="main_input email">
            <input id="email" type="email" name="email" placeholder="Email">
        </div>
        <div class="main_input firstname">
            <input id="firstname" type="text" name="firstname" placeholder="Nom">
        </div>
        <div class="main_input lastname">
            <input id="lastname" type="text" name="lastname" placeholder="Prénom">
        </div>
        <div class="main_input phone">
            <input id="phone" type="text" name="phone" placeholder="Téléphone">
        </div>
        <div class="main_input address">
            <input id="address" type="text" name="address" placeholder="Adresse">
        </div>
        <div class="main_input password">
            <input id="password" type="password" name="password" placeholder="Mot de passe">
        </div>
        <div class="main_input confirm_password">
            <input id="confirmation_password" type="password" name="password" placeholder="Confirmez le mot de passe">
        </div>
        <div class="main_loginBottom-box">
            <button id="button_connexion" type="submit" value="Envoyer">Envoyer</button>
        </div>
    </div>
</main>
<?php
get_footer();
?>
