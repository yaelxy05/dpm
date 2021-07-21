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

        add_filter(
            'registration_errors',
            [$this, 'checkRegistration'],
            10,
            3
        );

        add_filter(
            'user_register',
            [$this, 'customUserRegistration'],
            10,
            3
        );

    }

    public function customizeForm()
    {
        $customFields = '
        <p>
            <label for="user_lastname">Nom</label>
            <input type="lastname" name="user_lastname" id="user_lastname"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
        <p>
            <label for="user_firstname">Prénom</label>
            <input type="firstname" name="user_firstname" id="user_firstname"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
        <p>
            <label for="user_phonenumber">N de téléphone</label>
            <input type="phonenumber" name="user_phonenumber" id="user_phonenumber"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
        <p>
            <label for="user_mail">Email</label>
            <input type="mail" name="user_mail" id="user_mail"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
        <p>
            <label for="user_adress">Adresse</label>
            <input type="adress" name="user_adress" id="user_adress"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
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

    public function checkRegistration($errors,$login, $email)
    {
        // Recuperation du mot de passe de l'utilisateur
        // recovery password user
        $password = filter_input(INPUT_POST, 'user_password');
        // s'il y a pas de role, il faut enregistrer une erreur
        if(!$this->checkPassword($password)) {
            $errors->add(
                // identifiant de l'erreur
                'user_password_invalid',
                // message d'erreur
                'Votre mot de passe est invalide'
            );
        }

        return $errors;
    }

    public function checkPassword($password)
    {
        // un mot de passe doit faire 8 caractere de long
        if(mb_strlen($password) < 8) {
            return false;
        }

        return true;

    }

    // customisation de l'enregistrement de l'utilisateur
    public function customUserRegistration($userId)
    {
        // enregistrement du mot de passe choisi par l'user
        $password = filter_input(INPUT_POST, 'user_password');
        wp_set_password($password, $userId); 
    }
}