<?php
namespace DPM;

class Router
{
    public function __construct()
    {
        add_action(
            'init',
            [$this, 'registerRoutes']
        );


    }


    public function registerRoutes()
    {
        // DOC WP PLUGIN Custom route https://developer.wordpress.org/reference/functions/add_rewrite_rule/

        // STEP WP PLUGIN ROUTING we declare a new custom route
        add_rewrite_rule(
            // regexp to validate the url requested by the visitor
            'user/?.*',

            // "virtual URL " understood by Wordpress
            // so, we can call a variable "$_GET" custom-route=true
            'index.php?newRoad=true',

            // the rule will be on the top of the proroties
            'top'
        );

        add_rewrite_rule(
            'test/?.*',
            'index.php?newRoad=true',
            'top'
        );

        // Route : User Profile
        add_rewrite_rule(
            'user-profile/?.*',
            'index.php?newRoad=true',
            'top'
        );



        // STEP WP PLUGIN ROUTING refresh the browser cache from the routing rules of WordPress
        // Wp records routes in Database, we must refresh routes
        flush_rewrite_rules();

        // STEP WP PLUGIN ROUTING we ask to Wordpress to spy some "variables" which go to "virtual URL"

        add_filter('query_vars', function($query_vars) {
            // STEP WP PLUGIN ROUTING Wordpress must spy the "virtual" variable custom-route
            $query_vars[] = 'newRoad';
            return $query_vars;
        });

        // STEP WP PLUGIN ROUTING we verify that the custom route has been detected

        add_filter('template_include', function($template) {

            // we get the "virtual" variable custom-route
            // same as :  $customRoute = filter_input(INPUT_GET, 'custom-route');
            $newRoad = get_query_var('newRoad');
            if($newRoad) {
               //  STEP WP PLUGIN ROUTING a custom route has been detected, we take the control
               // we say to Wordpress what touch he has to change
               return __DIR__ .'/../custom-routes.php';
            }

            // we return the template the Wordpress was about to use
            return $template;
        });
    }
}
