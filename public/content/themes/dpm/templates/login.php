<?php

/**
 * Template Name: login
 */
?>
<?php
get_header();
if (is_user_logged_in()) {
    echo '<p>Bienvenue vous êtes bien connecté</p>';
} else {
    wp_login_form(
        array(
            'echo' => true,
            'redirect' => (is_ssl() ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
            'form_id' => 'loginform',
            'id_email' => 'email',
            'id_password' => 'password',
            'id_remember' => 'rememberme',
            'id_submit' => 'wp-submit',
            'remember' => true,
            'value_username' => '',
            'value_remember' => false,
        )
    );
}
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
