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
    private string $status_valid;
    private int $fisherman_id;
    private int $competition_id;
    private int $espece_id;


    // public function getPoids() {}
    // public function getTaille() {}
    // public function getPhotoUrl() {}
    // public function getHeure() {}
    // public function getStqtut() {}


    public function __construct(
        float $poids,
        float $taille,
        string $photo,
        datetime $date_prise,
        int $fisherman_id,
        int $competition_id,
        int $espece_id,
        string $status_valid = 'en attente'
    ) {
        $this->poids = $poids;
        $this->taille = $taille;
        $this->photo = $photo;
        $this->date_prise = $date_prise;
        $this->fisherman_id = $fisherman_id;
        $this->competition_id = $competition_id;
        $this->espece_id = $espece_id;
        $this->status_valid = $status_valid;
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
