<?php 

include "dotenv.php";

// Classe de connexion DB pour database avec PDO
class DB {
    // Liste des propriétés (private) pour PDO
    private $dbname;
    private $host;
    private $port;
    private $username;
    private $password;
    private $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    public $pdo;

    // Constructeur pour notre classe 
    public function __construct($dbname, $host, $port, $username, $password) {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;

        // Je place ma méthode de connexion dans mon constructor pour qu'elle s'éxecute 
        // dès l'instanciation de DB
        $this->connect();
    }

    // Méthode de connexion à la BDD
    public function connect() {
        try {            
            $this->pdo = new PDO("mysql:dbname=$this->dbname;host=$this->host:$this->port", $this->username, $this->password, $this->options);
            // echo 'Connexion réussie !';
            return $this->pdo;
        } catch (PDOException $error) {
            echo "Il y a une erreur : $error";
            exit();
        }
    }

    // Méthode de déconnexion 
    public function disconnect() {
        try {
            $this->pdo= null;
        } catch (PDOException $error) {
            echo "Il y a une erreur : $error";
            exit();
        }
    }
}

// On instancie notre classe DB et on créeun objet connexion
$connexion = new DB($dbname, $dbhost, $dbport, $dbusername, $dbpassword);

// On attribue à $pdo lecontenu de lapropriété pdo de notre classe
$pdo = $connexion->pdo;



