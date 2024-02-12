<?php

class Voiture {
    private $brand;
    private $color;
    private $puissance = "v8";
    private $vitesse = 0;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function accelerer() {
        $this->vitesse += 50;
        // équivaut à : $this->vitesse = $this->vitesse + 50;
        return "La $this->brand $this->color roule à $this->vitesse km/h<br>";
    }

    public function freiner() {
        $this->vitesse -= 50;
        return "La $this->brand $this->color roule à $this->vitesse km/h<br>";
    }

    public function getBrand() {
        $this->accelerer();
        return $this->brand;
    }
    
    public function getColor() {
        return $this->color;
    }

    public function setBrand($new) {
        $this->brand = $new;
    } 

    public function accident($voiture) {
        return "La $this->brand s'est crashée avec la $voiture";
    }

    public static function demarrer() {
        echo "On démarre l'engin";
    }
}

Voiture::demarrer();

$renault = new Voiture('Renault', 'verte');
$renault->setBrand('peugeot');
// echo $renault->getBrand();

// echo $renault->accident("hyundai");


