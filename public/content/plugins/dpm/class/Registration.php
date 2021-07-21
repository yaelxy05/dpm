<?php

namespace DPM;

class Registration 
{
    public function __construct()
    {
        add_action(
            'register_form',
            [$this, 'customizeForm']
        );

        add_action(
            'registration_errors',
            [$this, 'checkRegistration']
        );
    }

    public function customizeForm()
    {
        $customFields = '
        <p>
            <label for="user_password">Password</label>
            <input type="password" name="user_password" id="user_password"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
        <p>
            <label>Vous êtes : </label>
            <div>
                <label>
                    <input type="radio" name="user_role" value="customer" /> Un vendeur
                </label>
                <label>
                    <input type="radio" name="user_role" value="customer" /> Un acheteur
                </label
            </div
        </p>

        ';
        

        echo $customFields;
    }

    public function checkRegistration()
    {

    }
}