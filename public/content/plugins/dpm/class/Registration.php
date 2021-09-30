<?php

namespace DPM;

class Registration 
{
    public function __construct()
    {
        // This hooks is used to add custom fields to registration form
        add_action(
            'register_form',
            [$this, 'customizeForm']
        );

        // used to check if there are errors on registratio form
        add_filter(
            'registration_errors',
            [$this, 'checkRegistration'],
            10, // valeur par defaut
            3 // on recupere 3 arguments
        );

        add_filter(
            'user_register',
            [$this, 'customUserRegistration'],
            10,
            3
        );

        // Hooks to add custom field on user edit/create page
        add_action( 
            'show_user_profile', 
            [$this, 'show_extra_profile_fields']
        );
        
        add_action( 
            'edit_user_profile', 
            [$this, 'show_extra_profile_fields']
        );
        

        // Hooks to save custom fields data on profil page
        add_action( 
            'personal_options_update', 
            [$this, 'save_extra_profile_fields']
        );
        add_action( 
            'edit_user_profile_update', 
            [$this, 'save_extra_profile_fields']
        );
    }



/*
 * Save custom user profile data
 *
 */

    public function show_extra_profile_fields($user) {
        ?>
        <h3>Information Personnelles</h3>
    
        <table class="form-table">
            <tr>
                <th><label for="phone_number">Téléphone</label></th>
                <td>
                    <input id="phone_number" name="phone_number" type="text" value="<?php echo esc_html( get_the_author_meta( 'phone_number', $user->ID ) ); ?>">
                </td>
            </tr>
        </table>

        <table class="form-table">
            <tr>
                <th><label for="address">Adresse</label></th>
                <td>
                    <input id="address" name="address" type="text" value="<?php echo esc_html( get_the_author_meta( 'address', $user->ID ) ); ?>">
                </td>
            </tr>
        </table>
        <?php
        
    }

    public function save_extra_profile_fields($user_id) {
        // Verify the wp_nonce on update-user 
        if ( empty( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'update-user_' . $user_id ) ) {
            return;
        }

        // Stop there if current user has no right to edit this profile
        if ( !current_user_can( 'edit_user', $user_id ) ) { 
            return false; 
        }

        update_user_meta( $user_id, 'phone_number', $_POST['phone_number'] );

        update_user_meta( $user_id, 'address', $_POST['address'] );

        
    }


    public function customizeForm()
    {
        $customFields = '
        <p>
            <label for="user_lastname">Nom *</label>
            <input required type="lastname" name="user_lastname" id="user_lastname"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
        <p>
            <label for="user_firstname">Prénom *</label>
            <input required type="firstname" name="user_firstname" id="user_firstname"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
        <p>
            <label for="user_phonenumber">Téléphone *</label>
            <input required type="phonenumber" name="user_phonenumber" id="user_phonenumber"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
       
        <p>
            <label for="user_address">Adresse *</label>
            <input required type="address" name="user_address" id="user_address"
            class="input" value="" size ="20" autocapitalize="off">
        </p>
        <p>
            <label for="user_password">Mot de passe *</label>
            <input required type="password" name="user_password" id="user_password"
            class="input" value="" size ="20" autocapitalize="off">
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

        // Recuperation du numéro de téléphone de l'utilisateur
        // recovery phone number user
        $phoneNumber = filter_input(INPUT_POST, 'user_phonenumber');
        // s'il y a pas de numero de téléphone, il faut enregistrer une erreur
        if(!$this->checkPhoneNumber($phoneNumber)) {
            $errors->add(
                // identifiant de l'erreur
                'user_phonenumber_invalid',
                // message d'erreur
                'Votre numéro de téléphone est invalide'
            );
        }

        return $errors;
    }

    public function checkPassword($password)
    {
        // un mot de passe doit faire 5 caractere de long
        if(mb_strlen($password) < 5) {
            return false;
        }

        return true;

    }

    public function checkPhoneNumber($phoneNumber)
    {
        // the phone number must have 10 caracters
        if(mb_strlen($phoneNumber) < 10) {
            return false;
        }

        return true;

    }


    // customisation de l'enregistrement de l'utilisateur
    public function customUserRegistration($userId)
    {
        // Get the phone number and use update post meta for this user
        $phoneNumber = filter_input(INPUT_POST, 'user_phonenumber');
        update_user_meta( $userId, 'phone_number', $phoneNumber );

        // Get the address and use update post meta for this user
        $address = filter_input(INPUT_POST, 'user_address');
        update_user_meta( $userId, 'address', $address );

        // enregistrement du mot de passe choisi par l'user
        $password = filter_input(INPUT_POST, 'user_password');
        wp_set_password($password, $userId); 

        
    }

}
