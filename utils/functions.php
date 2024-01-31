<?php 

// On va utiliser ce fichier pour regrouper les fonctions utiles de notre application

function checkExists($field, $param, $pdo) {
    // Vérifier si une personne avec le meme nom ou le meme email n'existe pas déjà en BDD
    // Si c'est le cas on veut le préciser dans un message d'erreur
    $sql = "SELECT * FROM users WHERE $field = ?";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([$param]);

    if ($stmt->rowCount() > 0) {
        return true; 
    } else {
        return false;
    }
}