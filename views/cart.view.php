<?php 

ob_start();

session_start();

// J'inclus la page sur laquelle je fais l'appel API pour récupérer les produits
include "config/curl_products.php";
include "partials/header.php";
include 'utils/functions.php';

// Si dans l'URL on a un paramètre product qui vaut un id alors on crée une variable
// product_id contenant le fameux id
if (isset($_GET['product'])) { $product_id = $_GET['product']; }

?> 

<h1>Cart</h1>

<!-- On vient récupérer l'id du produit que l'on veut ajouter au panier
On l'ajoute ensuite à la session au niveau de la clé cart  -->
<?php foreach($products as $product) : ?>

    <!-- Ici on vérifie qu'il y ait bien un id dans l'URL, qu ecette id correspondeà l'id d'un produit
    Et en dernier on check si ce produit a déjà été ajouté au panier -->
     <?php if ((isset($product_id) && ($product['id'] == $product_id) && (!isset($_SESSION['user']['cart'][$product_id])))) {
        
        // Si c'est la première fois on l'ajoute à notre panier dans les sessions
        // Et on crée la clé quantity avec pour valeur 1
        $_SESSION['user']['cart'][$product_id]  = $product; 
        $_SESSION['user']['cart'][$product_id]['quantity']  = 1; 
        header('Location: cart');
        ob_end_flush();

     } elseif ((isset($product_id) && ($product['id'] == $product_id)) && (isset($_SESSION['user']['cart'][$product_id]))) {
        
        $_SESSION['user']['cart'][$product_id]['quantity']  += 1; 
        header('Location: cart');
        ob_end_flush();} 
    
    ?>
 
 <?php endforeach ?>

 <!-- Si jamais on a bien des éléments dans notre cart alors on les affiche -->
 <?php if (!empty($_SESSION['user']['cart'])) : ?> 

    <?php foreach ($_SESSION['user']['cart'] as $item) : ?>
        <h3><?= $item['title'] ?></h3>
        <p class="description"><?= substr($item['description'], 1, 50) ?> ...</p>
        <p>Prix unitaire : <?= $item['price'] ?> $</p>
        <p>Quantité : <?= $item['quantity'] ?></p>
        <p>Total : <?= $item['quantity'] * $item['price'] ?> $</p>
        <!-- Ici on veut avec unset supprimer l'élément du panier via son id -->
        <a class="delete-btn" href="delete?delete=<?= $item['id'] ?>">Supprimer du panier</a>
    <?php endforeach ?>

    <?php
        $totalCost = 0;
        $totalArticles = 0;

        foreach ($_SESSION['user']['cart'] as $item) {
            $totalCost += ($item['quantity'] * $item['price']);
            $totalArticles += $item['quantity'];
        }

        echo "<br>Il y a $totalArticles articles dans mon panier pour une valeur de $totalCost $";
    ?>

<?php else : ?>

    <h2>Votre panier est vide ...</h2>

<?php endif  ?>

 <!-- Lien vers la page de checkout / paiement -->
 <!-- <a href="checkout">Allez au checkout</a> -->


<?php include "partials/footer.php"; ?>
