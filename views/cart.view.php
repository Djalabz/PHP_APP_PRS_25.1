<?php 

session_start();

// J'inclus la page sur laquelle je fais l'appel API pour récupérer les produits
include "config/curl_products.php";
include "partials/header.php";

// Si dans l'URL on a un paramètre product qui vaut un id alors on crée une variable
// product_id contenant le fameux id
if (isset($_GET['product'])) {
    $product_id = $_GET['product'];
}

?> 

<h1>Cart</h1>


 <!-- Si jamais on a bien des éléments dans notre cart alors on les affiche -->
 <?php if (!empty($_SESSION['user']['cart'])) : ?> 

    <?php foreach ($_SESSION['user']['cart'] as $item) : ?>

        <h3><?= $item['title'] ?></h3>
        <p>Prix : <?= $item['price'] ?> $</p>
        <p class="description"><?= substr($item['description'], 1, 50) ?> ...</p>

        <!-- Ici on veut avec unset supprimer l'élément du panier via son id -->
        <a class="delete-btn" href="delete?delete=<?= $item['id'] ?>">Supprimer du panier</a>

    <?php endforeach ?>

<?php else : ?>

    <h2>Votre panier est vide ...</h2>

<?php endif  ?>

 <!-- Lien vers la page de checkout / paiement -->
 <a href="checkout">Allez au checkout</a>


<?php include "partials/footer.php"; ?>
