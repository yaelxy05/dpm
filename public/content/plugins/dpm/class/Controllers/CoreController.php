<?php

namespace DPM\Controllers;

use AltoRouter;

class CoreController
{

    /**
     * @var AltoRouter
     */
    protected $router;

    public function __construct()
    {
        // get router (scope) global
        global $router;
        $this->router = $router;
    }

    // This method verifies if the user is connected. If he's not connected, the visitor is redirected to the "login page"
    protected function mustBeConnected()
    {
        if(!is_user_logged_in()) {
            wp_redirect(
                wp_login_url()
            );
            return false;
        }

        return true;
    }


    protected function isAdmin()
    {
        $user = wp_get_current_user();
        $roles = $user->roles;


        // TIPS PHP in_array https://www.php.net/in_array
        // we verifiy if the "administrator" value exists in the array : $role
        if(in_array('administrator', $roles)) {
            return true;
        }
        else {
            return false;
        }

    }


    protected function show($viewName, $viewVars = [])
    {

        // we pass "router" to the "view"
        $viewVars['router'] = $this->router;

    
        echo get_template_part(
            $viewName,
            null,
            $viewVars
        );
    }
}
