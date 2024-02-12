<?php 

// Classe de connexion DB pour database avec PDO
class DB {
    // Liste des propriétés (private) pour PDO
    private $dsn;
    private $username;
    private $password;
    private $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    private $pdo;

    // Constructeur pour notre classe 
    public function __construct($dsn, $username, $password) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;

        // Je place ma méthode de connexion dans mon constructor pour qu'elle s'éxecute 
        // dès l'instanciation de DB
        $this->connect();
    }

    // Méthode de connexion à la BDD
    public function connect() {
        echo "test";
        try {            
            $this->pdo = new PDO($this->dsn, $this->username, $this->password, $this->options);
            echo 'Connexion réussie !';
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

$connexion = new DB();

