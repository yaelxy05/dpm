<?php
get_header();
?>

<h1>Connexion</h1>

<form action="" method="get" class="login-form">
  <div">
    <label for="name">Nom d'utilisateur</label>
    <input type="text" name="name" id="name" required>
  </div>
  <div">
    <label for="email">Mot de passe</label>
    <input type="email" name="email" id="email" required>
  </div>
  <div">
    <input type="submit" value="Connexion">
  </div>
</form>

<div>
    <a href="url">Mot de passe oublié</a>
    <a href="url">Pas encore inscrit?</a>
</div>

<?php
get_footer();
?>