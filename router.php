<?php 

// Notre fichier pour les routes 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// On associe dans ce tableau des uri à des pages de notre app
$routes = [
    '/' => 'views/index.view.php', 
    '/login' => 'views/login.view.php',
    '/signup' => 'views/signup.view.php',
    '/products' => 'views/products.view.php',
    '/product' => 'views/product.view.php',
    '/profile' => 'views/profile.view.php',
    '/signup-success' => 'views/signup-success.view.php',
    '/logout' => 'views/logout.php',
    '/contact' => 'views/contact.view.php',
    '/delete' => 'views/delete.php',
    '/cart' => 'views/cart.view.php'
];

// On vient vérifier dans le tableau $routes si une des clés correspond au chemin de l'URL ($uri)
array_key_exists($uri, $routes) ? require $routes[$uri] : require 'views/404.view.php';