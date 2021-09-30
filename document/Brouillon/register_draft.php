<?php

/**
 * Template Name: Register
 */
?>
<?php
acf_form_head();
get_header();
?>

<?php

	
/**
 * ACF Form Register: Register Form
 */
acf_register_form(array(
    'id'                    => 'hwk_ajax_acf_register',
    'post_id'               => 'hwk_ajax_acf_register',
    'form_attributes'       => array(
        'class' => 'acf-form acf-form-ajax',
    ),
    'field_groups'          => array(18), // ACF Fields Group ID
    'updated_message'       => '',
    'return'                => home_url('account'),
    'submit_value'          => __('Register'),
    'html_submit_button'    => '<input type="submit" class="acf-button button btn btn-secondary btn-lg" value="%s" />',
));
/*     
    if (isset($_POST['user_registration'])) {
        global $reg_errors;
        $reg_errors = new WP_Error; 
        $userLogin =$_POST['user_login'];
        $userEmail =$_POST['user_email'];
        $userFirstname =$_POST['user_firstname'];
        $userLastname =$_POST['user_lastname'];
        $userPhone =$_POST['user_phone'];
        $password =$_POST['password'];
        $confirmPassword =$_POST['confirm_password'];
        $userAddress =$_POST['user_address'];

        // condition for check if the fields is empty
        if(empty($userLogin)||empty($userEmail)||empty($password)) 
            {
                $reg_errors->add('field', 'Un ou plusieurs champs ne sont pas remplis');
            }
        // condition for check if  $userLogin to more 6 character
        if ( 4 > strlen( $userLogin ) )
            {
                $reg_errors->add('username_length', 'Le login est trop court, veuillez choisir un login de minimum 6 caractère' );
            }
        // condition for check if  $password to more 6 character
        if ( 6 > strlen( $password ) )
            {
                $reg_errors->add('password_length', 'Le mot de passe est trop court, veuillez choisir un mot de passe de minimum 6 caractère' );
            }
        // condition for check if the username exist already you
        if ( username_exists( $userLogin ) )
            {
                $reg_errors->add('user_name', 'Le login existe déjà!');
            }
        // condition for check if email is valid
        if ( !is_email( $userEmail ) )
            {
                $reg_errors->add( 'email_invalid', 'L\'adresse email est invalide!' );
            }
        // display the error of submit
        if (is_wp_error( $reg_errors ))
        { 
            foreach ( $reg_errors->get_error_messages() as $error )
            {
             $signUpError='<p style="color:#FF0000; text-aling:center;"><strong>Erreur</strong>: '.$error . '<br /></p>';
            } 
        }

        if ( 1 > count( $reg_errors->get_error_messages() ) )
        {
            // sanitize user form input
            global $userEmail,$userLogin,$userAddress;
            
            $userAddress = sanitize_text_field($_POST['user_address']);
            $userLogin = sanitize_user($_POST['user_login']);
            $userEmail = sanitize_email($_POST['user_email'] );
            $password = esc_attr( $_POST['password'] );
            
            $userdata = array(
               'user_login' => $userLogin,
               'user_email' => $userEmail,
               'user_pass' => $password,
               'user_address' => $userAddress,
               'first_name' => $userFirstname,
               'last_name' => $userLastname,
               );
               
            $user = wp_insert_user( $userdata );
            
            
            update_user_meta( $user, 'user_address', $_POST['user_address'], true );
            
            

        }
    } 
     
   */  
?>

<main class="main">
    <h1 class="main_h1">Inscription</h1>
    <div class="main_register--input-box">
        
        <form action="" method="post" name="register_new_speaker">
        <div class="main_input username">
            <input id="username" type="text" name="user_login" placeholder="Login" required>
        </div>
        <div class="main_input email">
            <input id="email" type="email" name="user_email" placeholder="Email" required>
        </div>
        <div class="main_input firstname">
            <input id="firstname" type="text" name="user_firstname" placeholder="Nom" required>
        </div>
        <div class="main_input lastname">
            <input id="lastname" type="text" name="user_lastname" placeholder="Prénom" required>
        </div>
        <div class="main_input phone">
            <input id="phone" type="text" name="user_phone" placeholder="Téléphone" required>
        </div>
        <div class="main_input address">
            <input id="address" type="text" name="user_address" placeholder="Adresse" required>
        </div>
        <div class="main_input password">
            <input id="password" type="password" name="user_pass" placeholder="Mot de passe" required>
        </div>
        <div class="main_input confirm_password">
            <input id="confirmation_password" type="user_pass" name="confirm_password" placeholder="Confirmez le mot de passe" required>
        </div>
        <div class="main_loginBottom-box">
            <button id="button_connexion" type="submit" value="Envoyer" name="register_new_speaker">Envoyer</button>
        </div>
        </form>
        <?php //if(isset($signUpError)){echo '<div>'.$signUpError.'</div>';}?>
    </div>
</main>
<?php
get_footer();
?>
