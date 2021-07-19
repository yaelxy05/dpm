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
    }

    public function activate()
    {
    }

    public function deactivate()
    {
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