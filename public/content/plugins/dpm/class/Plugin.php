<?php


namespace DPM;

use DPM\Router;


class Plugin
{

    /**
     * @var Router
     */
    protected $router;


    public function __construct()
    {

        /*$registration = new Registration();*/

        //$this->router = new Router();

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
            [$this, 'createCommandCustomPostType']
        );
    }

    public function activate()
    {
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
                'label' => 'Color',
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
                'label' => 'Gender',
                'hierarchical' => true,
                'public' => true
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

    public function createClothingCustomPostType()
    {
        register_post_type(
            'clothing',
            [
                'label' => 'Clothing',
                'public' => true,
                'hierarchical' => false,
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
                'label' => 'Command',
                'public' => true,
                'hierarchical' => false,
                'supports' => [
                    'title',
                    'thumbnail',
                    'editor',
                ]
            ]
        );

    }
}