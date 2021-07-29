<?php

namespace DPM\Controllers;

use DPM\Models\CommandModel;
use DPM\Models\CartModel;

use WP_Query;

class UserController extends CoreController
{


    public function getProfile($user)
    {
        // nous demandons à wordpress de nous selectionner le psot de type "user" dont l'auteur est le $user demandé

        // définition des options de recherche
        $options = [

            // pour récupérer le profil d'un utlisateur, nous cherchons le "post" dont l'auteur est l'utilisateur passé en paramètre
            'author' => $user->ID,
            // https://developer.wordpress.org/reference/classes/wp_query/#post-type-parameters
            // nous cherchons dans les CPT de type 'user'
            'post_type' => 'user'
        ];

        // IMPORTANT WP PLUGIN interroger la bdd worpdress
        $query = new WP_Query( $options );

        $query->have_posts();

        // si la requete ne renvoie pas de post, le profile de l'utilisateur est "corrompu"
        if(count($query->posts) === 0) {
            // TODO gérer message d'erreur
            echo "Le compte utilisateur est corrompu";
            exit();
        }
        else {
            return $query->posts[0];
        }

    }


    public function home()
    {
        // vérification : est ce que le visiteur est connecté
        // s'il n'est pas connecté, nous le redirigeons vers la page de login
        $this->mustBeConnected();

        // récupération de l'utilisateur wordpress actuel
        $user = wp_get_current_user();

        // récupération du profil de l'utilisateur
        $dpm = $this->getProfile($user);

        // récupération du panier de l'utilisateur
        $model = new CartModel();
        $cart = $model->getProductByUserId($user->ID)

        // récupération des commandes l'utilisateur
        $model = new CommandLineModel();
        $command = $model->getCommandByUserId($user->ID);


        // passage de la "variable" currentUser à la vue
        $this->show('views/user/home', [
            'currentUser' => $user,
            'profile' => $profile,
            'clothing' => $clothing,
            'command' => $command,
            'cart_products' => $cartProducts

        ]);

    }

    public function hello()
    {
        $this->show('views/user/hello', [
            'hello' => 'hello world',
        ]);
    }

    public function delete()
    {
        // avant de supprimer l'utilisateur, nous nous assurons que le le visiteur est bien connecté
        if(!$this->mustBeConnected()) {
            // si l'utilisateur n'est pas connecté, nous faisons un return pour nous assurer qu'aucun traitements ultérieur ne soit exécutés
            return;
        }

        if($this->isAdmin()) {
            echo 'Attention, vous allez supprimer votre compte admin !';
            exit();
        }

        // récupération de l'utilisateur
        $user = wp_get_current_user();
        // suppresion de l'utilisateur
        // WARNING WP User il faut faire un include manuel des fonction de gestion des utilisateurs avant de pouvoir appeler la fonction wp_delete_user
        require_once(ABSPATH.'wp-admin/includes/user.php');
        wp_delete_user($user->ID);

        // redirection de l'utilisateur sur la home page une fois que son compte est supprimée
        wp_redirect(
            get_home_url()
        );
    }
}

