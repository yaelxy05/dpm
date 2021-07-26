<?php

// ===========================================================================================
// Chargement des assets
// ===========================================================================================

function dpm_load_assets()
{
    wp_enqueue_style(
        'styles',  // "nom du fichier css
        //get_theme_file_uri('assets/scss/dist/style.css') // chemin fichier pour dire à quel endroit est stocké le fichier
        get_theme_file_uri('assets/css/style.css') 
    );

    wp_enqueue_script(
        'app-js',  // "nom du fichier js
        get_theme_file_uri('assets/js/app.js'),
        [],
        null,   
        true    // true pour dire que le javascript sera chargé à la fin de la balise <body>
    );

    wp_enqueue_script(
        'passwordConfirmation-js',  // "nom du fichier js
        get_theme_file_uri('assets/js/password-confirmation.js'),
        [],
        null,   
        true    // true pour dire que le javascript sera chargé à la fin de la balise <body>
    );

    wp_enqueue_script(
        'menuActive-js',  // "nom du fichier js
        get_theme_file_uri('assets/js/menu-active.js'),
        [],
        null,   
        true    // true pour dire que le javascript sera chargé à la fin de la balise <body>
    );
}


add_action('wp_enqueue_scripts', 'dpm_load_assets');

