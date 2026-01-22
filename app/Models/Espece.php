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
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}