<?php 

ob_start();

include "../partials/header.php"; 
session_start();

ob_end_flush();

?>

<h1>Profil de <?= $_SESSION['user']['name'] ?></h1>

<!-- Ici afficher un avatar par défaut -->
<img src="../<?= $_SESSION['user']['avatar'] ?>">


<?php 

include "../partials/footer.php"; 

?>