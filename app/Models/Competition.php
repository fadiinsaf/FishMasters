<?php

namespace app\Models;
use app\Core;
use app\Core\FollowableCompetition;
use Datetime;
use config\Database;

class Competition extends Likable
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

    public function createCompetition(): ?int
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'INSERT INTO Competition(titre, date_debut, date_fin, lieux_competition, description, type_competition, status, capacite_max, id_categorie)
                VALUES (?,?,?,?,?,?,?,?,?,?)';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            $this->titre,
            $this->date_debut,
            $this->date_fin,
            $this->lieux_competition,
            $this->description,
            $this->type_competition,
            $this->status,
            $this->capacite_max,
            $this->id_categorie
        ]) ? $pdo->lastInsertId() : null;
    }
    public function likeCompetition(int $id_competition, int $id_fan) {
        $pdo = Database::getInstance()->getConnection();

    }
    public function dislikeCompetition(int $id_competition, int $id_fan) {
        $pdo = Database::getInstance()->getConnection();
    }
    public function updateCompetition(Competition $c, int $id_competition): bool
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'UPDATE Competition
                SET titre = ?, 
                    date_debut = ?,
                    date_fin = ?,
                    lieux_competition = ?,
                    description = ?,
                    type_competition = ?,
                    status = ?,
                    capacite_max = ?,
                    id_categorie = ?
                WHERE id_competition = ?';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            $c->titre,
            $c->date_debut,
            $c->date_fin,
            $c->lieux_competition,
            $c->description,
            $c->type_competition,
            $c->status,
            $c->capacite_max,
            $c->id_competition
        ]) ? true : false;
    }

    public function deleteCompetition(int $id_competition): bool
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'DELETE FROM Competition WHERE id_competition = ?';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$id_competition]) ? true : false;
    }
    use FollowableCompetition;
}