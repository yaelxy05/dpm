<?php

// STEP WP PLUGIN Custom router : instanciation of a new router

use DPM\Controllers\UserController;
use DPM\Models\CoreModel;
use DPM\Models\CartModel;

global $router;

$router = new AltoRouter();

// Base URI calcul, because altorouter needs this to work
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
    '/user/home/',

    // fonction qui devra être appelée si la route est validée
    function() {
        // instanciation du controller User
       $controller = new UserController();

       // appel de la méthode home
       $controller->home();
    },
    'user-home'
);


$router->map(
    'GET',
    '/user/delete/',
    function() {
       $controller = new UserController();
       $controller->delete();
    },
    'user-delete'
);


$router->map(
    'GET',
    '/user/panier/',
    function() {
       $controller = new UserController();
       $controller->getCommandByUserId();
    },
    'user-panier'
);



// nous demandons à altorouter de vérifier s'il y a une route valides
$match = $router->match();

// si une route a été validée
if($match) {
    // récuration de la fonction a executer
    $functionToCall = $match['target'];
    // execution de la fonction
    // $functionToCall();

    call_user_func_array( $functionToCall, $match['params'] );

}

