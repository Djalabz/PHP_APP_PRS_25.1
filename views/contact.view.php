<?php 

include "../partials/header.php"; 

?>

<h1>Page de contact</h1>

    <!-- Notre formulaire de contact avec méthode POST -->
    <form action="#" class="contact-form" method="POST">
        <label for="email">Email :</label>
        <input name="email" type="email">

        <label for="subject">Subject : </label>
        <input name="subject" type="text">

        <label for="body">Message :</label>
        <textarea name="body" cols="30" rows="10"></textarea>

        <input id="contact-sub" name="submit" type="submit">
    </form>

    <!-- Si $error existe, on l'affiche dans un <p> -->
    <?php if (isset($error)) : ?>
        <p class="error"><?= $error ?></p>
    <?php endif ?>

<?php


include "../partials/footer.php"; ?>