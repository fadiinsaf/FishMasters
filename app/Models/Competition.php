<?php

namespace app\Models;
use app\Core;
use app\Core\FollowableCompetition;
use Datetime;
use config\Database;

class Competition
{
    private int $id_competition;
    private string $titre;
    private Datetime $date_debut;
    private Datetime $date_fin;
    private int $capacite_max;
    private string $lieux_competition;
    private string $description;
    private string $status;
    private int $id_categorie;
    private string $type_competition;

    public function __construct(string   $titre,
                                Datetime $date_debut,
                                Datetime $date_fin,
                                string   $lieux_competition,
                                string   $description,
                                int      $id_categorie,
                                string   $type_competition,
                                int      $capacite_max)
    {
        $this->titre = $titre;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->lieux_competition = $lieux_competition;
        $this->description = $description;
        $this->type_competition = $type_competition;
        $this->status = 'En attente';
        $this->capacite_max = $capacite_max;
        $this->id_categorie = $id_categorie;
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