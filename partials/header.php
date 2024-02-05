<?php

session_start();

parse_url($_SERVER['REQUEST_URI'])['path'] === '/index.php' ? $path = '' : $path = '../';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon eshop en PHP</title>
    <link rel="stylesheet" href="../views/style/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="<?= $path ?>/views/contact.view.php">Contact</a></li>

            <?php if (isset($_SESSION['user']) && $_SESSION['user']['logged']) :  ?> 

                <li><a href="<?= $path ?>views/products.view.php">Products</a></li>
                <li><a href="<?= $path ?>views/cart.view.php">Cart</a></li>
                <li><a href="<?= $path ?>views/profile.view.php">Profile</a></li>
                <li><a href="<?= $path ?>views/logout.php">Logout</a></li>
            
            <?php else : ?>
                <li><a href="<?= $path ?>views/signup.view.php">Signup</a></li>
                <li><a href="<?= $path ?>views/login.view.php">Login</a></li>
            <?php endif ?>
        </ul>
    </nav>
<div class="wrapper">