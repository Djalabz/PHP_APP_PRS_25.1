<?php 

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Variables d'environnement pour PDO
$dbhost = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$dbusername = $_ENV['DB_USERNAME'];
$dbpassword = $_ENV['DB_PASSWORD'];
$dbport = $_ENV['DB_PORT'];

// Variables d'environnement pour PHP_Mailer
$mailhost = $_ENV['SMTP_HOST'];
$mailport = $_ENV['SMTP_PORT'];
$mailusername = $_ENV['SMTP_USERNAME'];
$mailpassword = $_ENV['SMTP_PASSWORD'];
$mailencrypt = $_ENV['SMTP_ENCRYPTION'];