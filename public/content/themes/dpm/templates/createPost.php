<?php

/**
 * Template Name: Create-post
 */
?>
<?php
get_header();
?>

<main class="main">
    <h1 class="main_h1">Mise à la vente</h1>
    <div class="main_create--input-box">
        <form action="" method="post">
            <div class="main_input-upload picture_upload">
                <label for="description">Ajoutez une image</label>
                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" required>
            </div>
            <div class="main_textarea description">
                <label for="description">description</label>
                <textarea id="description" name="description"
                rows="5" cols="33" required>
                </textarea>
            </div>
            <div class="main_input-create price">
                <label for="price">prix</label>
                <input type="text" id="price" name="price" placeholder="prix" required>
            </div>
            <div class="main_loginBottom-box">
                <button id="button_connexion" type="submit" value="Envoyer">Ajoutez l'article'</button>
            </div>
        </form>
    </div>
</main>

<?php
get_footer();
?>