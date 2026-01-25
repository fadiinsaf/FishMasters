<?php

namespace app\Models;

use config\Database;

class Espece
{
    private int $id_espece;
    private string $nom_espece;
    private float $tailleMin;
    private float $CoefficientPoints;

    public function __construct(string $nom_espece, float $tailleMin, float $CoefficientPoints)
    {
        $this->nom_espece = $nom_espece;
        $this->tailleMin = $tailleMin;
        $this->CoefficientPoints = $CoefficientPoints;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        // 
        throw new \Exception("Property '$name' does not exist in class ");
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        } else {
            throw new \Exception("Property '$name' does not exist in class ");
        }
    }
}
