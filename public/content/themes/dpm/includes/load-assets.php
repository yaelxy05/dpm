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
}

// ==========================================================================================
// display title tag 
// ==========================================================================================
function dpm_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('wp_enqueue_scripts', 'dpm_load_assets');
add_action('after_setup_theme','dpm_supports');
