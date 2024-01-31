<?php 

include "../partials/header.php";
include "../config/db_config.php";

// Coder la logique pour le login 

// 1) Vérifier que le form ait été soumis 
// 2) Vérifier que le mail est bien un mail 
// 3) Chercher en BDD l'email en question, si on ne trouve rien on envoit un message adéquat 
// 4) Si c'est bon on vient comparer les mdp - password_verify(mdp de l'input, hash de la bdd)
// 5) Si tout est bon, on redirige vers une page d'index (ou de profil) 

?>

<h1>LOGIN</h1>

<form class="login-form" method="POST">
    <input type="email" name="email" placeholder="Votre email ici ...">
    <input type="password" name="password" placeholder="Votre mot de passe ici ...">
    <input type="submit" name="submit" value="Login">
</form>


<?php 

include "../partials/footer.php";

?>