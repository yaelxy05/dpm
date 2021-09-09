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

        add_rewrite_rule('^profil$', 'index.php?is_profile=1', 'top');
        add_rewrite_rule('^panier$', 'index.php?is_cart=1', 'top');
        add_rewrite_rule('^commande$', 'index.php?is_command=1', 'top');
        add_rewrite_rule('^a-propos$', 'index.php?is_about=1', 'top');
        add_rewrite_rule('^espace-utilisateur$', 'index.php?is_userSpace=1', 'top');
        add_rewrite_rule('^contact$', 'index.php?is_contact=1', 'top');

      
        // Wp records routes in Database, we must refresh routes
        flush_rewrite_rules();

        add_filter('query_vars', function($query_vars) {
            // STEP WP PLUGIN ROUTING Wordpress must spy the "virtual" variable custom-route
            $query_vars[] = 'is_profile';
            $query_vars[] = 'is_cart';
            $query_vars[] = 'is_command';
            $query_vars[] = 'is_about';
            $query_vars[] = 'is_userSpace';
            $query_vars[] = 'is_contact';
            return $query_vars;
        });

        add_filter('template_include', function($template) {

            // we get the "virtual" variable custom-route
            // same as :  $customRoute = filter_input(INPUT_GET, 'custom-route');
            $isProfile = get_query_var('is_profile');
            if ($isProfile) {
              
               // we say to Wordpress what touch he has to change
                $template =  get_stylesheet_directory() . '/templates/profile.php';
            }

             // we get the "virtual" variable custom-route
            // same as :  $customRoute = filter_input(INPUT_GET, 'custom-route');
            $isCart = get_query_var('is_cart');
            if ($isCart) {
              
               // we say to Wordpress what touch he has to change
                $template =  get_stylesheet_directory() . '/templates/cart.php';
            }

                 // we get the "virtual" variable custom-route
            // same as :  $customRoute = filter_input(INPUT_GET, 'custom-route');
            $isCart = get_query_var('is_command');
            if ($isCart) {
              
               // we say to Wordpress what touch he has to change
                $template =  get_stylesheet_directory() . '/templates/command.php';
            }

                 // we get the "virtual" variable custom-route
            // same as :  $customRoute = filter_input(INPUT_GET, 'custom-route');
            $isAbout = get_query_var('is_about');
            if ($isAbout) {
              
               // we say to Wordpress what touch he has to change
                $template =  get_stylesheet_directory() . '/templates/about.php';
            }

                 // we get the "virtual" variable custom-route
            // same as :  $customRoute = filter_input(INPUT_GET, 'custom-route');
            $isUserSpace = get_query_var('is_userSpace');
            if ($isUserSpace) {
              
               // we say to Wordpress what touch he has to change
                $template =  get_stylesheet_directory() . '/templates/userSpace.php';
            }

             // we get the "virtual" variable custom-route
            // same as :  $customRoute = filter_input(INPUT_GET, 'custom-route');
            $isContact = get_query_var('is_contact');
            if ($isContact) {
              
               // we say to Wordpress what touch he has to change
                $template =  get_stylesheet_directory() . '/templates/contact.php';
            }



            // we return the template the Wordpress was about to use
            return $template;
        });

    
    }
}
