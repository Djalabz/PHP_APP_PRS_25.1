<?php 

include "../partials/header.php";


if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['password'] === $_POST['confirm']) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm'])) {

        $name = htmlspecialchars($_POST['name']);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        // On vérifie le format de l'email 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Le format de l'email n'est pas bon";
            die();
        }

        
    }

    else {
        $error = "Veuillez remplir tous les champs";
    }

} else if ($_POST['password'] != $_POST['confirm']) {
    $error = "Les mots de passe doivent etre identiques";
}

?>


<h1>SIGNUP</h1>

<form class="signup-form" method="POST">
    <input type="text" name="name" placeholder="Votre pseudo ici ...">
    <input type="email" name="email" placeholder="Votre email ici ...">
    <input type="password" name="password" placeholder="Votre mot de passe ici ...">
    <input type="password" name="confirm" placeholder="Votre confirmation du mot de passe...">
    <input type="submit" name="submit" value="Signup">
</form>

<?php if (isset($error)) : ?> 
    <p><?= $error ?></p>
<?php endif ?>

<?php 

include "../partials/footer.php";

?>