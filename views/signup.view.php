<?php 

include "../partials/header.php";

?>

<h1>SIGNUP</h1>

<form class="signup-form" method="POST">

    <input type="text" name="name" placeholder="Votre pseudo ici ...">
    <input type="email" name="email" placeholder="Votre email ici ...">
    <input type="password" name="password" placeholder="Votre mot de passe ici ...">
    <input type="password" name="confirm" placeholder="Votre confirmation du mot de passe...">
    <input type="submit" name="submit" value="Signup">

</form>








<?php 

include "../partials/footer.php";

?>