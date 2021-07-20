<?php


namespace DPM;

class Plugin
{
    public function __construct()
    {
        add_action(
            'init',
            [$this, 'createProjectCustomPostType']
        );

        add_action(
            'init',
            [$this, 'createTechnologyCustomTaxonomy']
        );
    }

    public function activate()
    {
    }

    public function deactivate()
    {
    }

    public function createTechnologyCustomTaxonomy()
    {
        register_taxonomy(
            'technology',
            ['project'],
            [
                'label' => 'Technology',
                'hierarchical' => true,
                'public' => true
            ]
        );
    }

    public function createProjectCustomPostType()
    {
        register_post_type(
            'project',
            [
                'label' => 'Project',
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