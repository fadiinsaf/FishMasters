<?php

namespace app\Models;

use Datetime;
use Exception;
use config\Database;


class Prise
{
    private $id;
    private float $poids;
    private float $taille;
    private string $photo;
    private datetime $date_prise;
    private $status_valid;


    // public function getPoids() {}
    // public function getTaille() {}
    // public function getPhotoUrl() {}
    // public function getHeure() {}
    // public function getStqtut() {}

    
    public function __construct($poids, $taille, $photo, $date_prise, $status_valid = 'en attende')

    {
        $this->poids = $poids;
        $this->taille = $taille;
        $this->photo = $photo;
        $this->date_prise = $date_prise;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            throw new Exception("Property '$property' does not exist.");
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            throw new Exception("Cannot set undefined property '$property'.");
        }
    }
}
