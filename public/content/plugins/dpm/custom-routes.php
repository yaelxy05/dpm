<?php

// STEP WP PLUGIN Custom router : instanciation d'un nouveu router


use DPM\Controllers\UserController;
use DPM\Models\CoreModel;

// TIPS nous déclarons le $router comme étant une variable globale. (Attention ce n'est pas très propre)
global $router;

$router = new AltoRouter();

// Calcul du base URI, altorouter en a besoin pour fonctionner
$baseURI = str_replace(
    '/index.php',
    '',
    $_SERVER['SCRIPT_NAME']
);

// configuration d'altorouter
$router->setBasePath($baseURI);

$router->map(
    // methode HTTP a surveiller
    'GET',
    // url à matcher
    '/templates/userSpace/',

    // fonction qui devra être appelée si la route est validée
    function() {
        // instanciation du controller User
       $controller = new UserController();

       // appel de la méthode home
       $controller->home();
    },
    'templates-userSpace'
);

$router->map(
    'GET',
    '/templates/delete/',
    function() {
       $controller = new UserController();
       $controller->delete();
    },
    'templates-delete'
);

// nous demandons à altorouter de vérifier s'il y a une route valides
$match = $router->match();

// si une route a été validée
if($match) {
    // récuration de la fonction a executer
    $functionToCall = $match['target'];

    // execution de la fonction
    $functionToCall();
}
