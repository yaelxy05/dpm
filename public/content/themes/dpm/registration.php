<?php
get_header();
?>

<h1>Inscription</h1>

    <form action="" method="get" class="registration-form">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="surname">Nom</label>
            <input type="text" name="surname" id="surname" required>
        </div>
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" required>
        </div>
        <div>
            <label for="phone">N° de téléphone</label>  
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div>
            <label for="address">Adresse de livraison</label>
            <input type="text" name="address" id="address" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>  
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="confirm_password">Confirmez le mot de passe</label>  
            <input type="password" id="confirm_password" name="confirm_password">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>

    <script src="../themes/dpm/assets/js/password-confirmation.js"></script>

<?php
get_footer();
