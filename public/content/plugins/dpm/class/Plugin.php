<?php


namespace DPM;

use DPM\Router;
use DPM\Controllers\CartController;
use DPM\Controllers\CheckoutController;
use DPM\Models\CartModel;
use DPM\Models\CommandLineModel;


class Plugin
{

    /**
     * @var Router
     */
    protected $router;


    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        $registration = new Registration();

        // Handle the cart functionnalities
        new CartController();

        // Handle the checkout functionnalities
        new CheckoutController();

        $this->router = new Router();

        // au moment de l'initialisation de worpress enregistrement du cpt "clothing"
        add_action(
            'init',
            [$this, 'createClothingCustomPostType']
        );

        add_action(
            'init',
            [$this, 'createColorCustomTaxonomy']
        );

        add_action(
            'init',
            [$this, 'createAgeCustomTaxonomy']
        );

        add_action(
            'init',
            [$this, 'createGenderCustomTaxonomy']
        );

        add_action(
            'init',
            [$this, 'createTypeCustomTaxonomy']
        );

        add_action(
            'init',
            [$this, 'createCrushCustomTaxonomy']
        );

        add_action(
            'init',
            [$this, 'createCommandCustomPostType']
        );

        add_action(
            'init',
            [$this, 'createUserProfileCustomPostType']
        );

    }

    public function activate()
    {
        $cartModel = new CartModel();
        $cartModel->createTable();

        $commandLineModel = new CommandLineModel();
        $commandLineModel->createTable();
    }

    public function deactivate()
    {
    }

    public function createColorCustomTaxonomy()
    {
        register_taxonomy(
            'color',
            ['clothing'],
            [
                'label' => 'Couleur',
                'hierarchical' => true,
                'public' => true
            ]
        );
    }

    public function createAgeCustomTaxonomy()
    {
        register_taxonomy(
            'age',
            ['clothing'],
            [
                'label' => 'Age',
                'hierarchical' => true,
                'public' => true
            ]
        );
    }

    public function createGenderCustomTaxonomy()
    {
        register_taxonomy(
            'gender',
            ['clothing'],
            [
                'label' => 'Genre',
                'hierarchical' => true,
                'public' => true,
                'show_ui' => true,
                'show_in_quick_edit' => false,
                'meta_box_cb' => false,
            ]
        );
    }

    public function createTypeCustomTaxonomy()
    {
        register_taxonomy(
            'type',
            ['clothing'],
            [
                'label' => 'Type',
                'hierarchical' => true,
                'public' => true
            ]
        );
    }

    public function createCrushCustomTaxonomy()
    {
        register_taxonomy(
            'crush',
            ['clothing'],
            [
                'label' => 'Coup de coeur',
                'hierarchical' => true,
                'public' => true
            ]
        );
    }

    public function createClothingCustomPostType()
    {
        register_post_type(
            'clothing',
            [
                'label' => 'Vêtements',
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => 'dashicons-universal-access-alt',
                'supports' => [
                    'title',
                    'thumbnail',
                    'editor',
                ]
            ]
        );

    }

    public function createCommandCustomPostType()
    {
        register_post_type(
            'command',
            [
                'label' => 'Commande',
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => 'dashicons-cart',
                'supports' => [
                    'title'
                ]
            ]
        );

    }

    public function createUserProfileCustomPostType()
    {
        register_post_type(
            'user-profile',
            [
                'label' => 'User Profile',
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => 'dashicons-businesswoman',
                'supports' => [
                    'title',
                    'thumbnail',
                    'editor',
                ]
            ]
        );

    } 
}