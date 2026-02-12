<?php

namespace App\Repositories;
use app\Core;
use app\Core\FollowableCompetition;
use APP\Models\Competition;
use config\Database;
use PDO;

class CompetitionRepository
{
    private PDO $pdo;
    public function __construct(){
        $this->pdo = Database::getInstance()->getConnection();
    }
    public function getAll(): array
    {

        $sql = 'SELECT * FROM competition';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById(int $id): ?Competition
    {

        $sql = 'SELECT * FROM competition WHERE id_competition = :id';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]) ? $stmt->fetch(PDO::FETCH_OBJ) : null;
    }

    public function getByCategorie(int $idCategorie): ?array
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'SELECT * FROM competition WHERE id_categorie = :idCategorie';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':idCategorie' => $idCategorie]) ? $stmt->fetch(PDO::FETCH_OBJ) : null;
    }
    public function createCompetition(Competition $c): ?int
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'INSERT INTO Competition(titre, date_debut, date_fin, lieux_competition, description, type_competition, status, capacite_max, id_categorie)
                VALUES (?,?,?,?,?,?,?,?,?,?)';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $c->titre,
            $c->date_debut,
            $c->date_fin,
            $c->lieux_competition,
            $c->description,
            $c->type_competition,
            $c->status,
            $c->capacite_max,
            $c->id_categorie
        ]) ? $this->pdo->lastInsertId() : null;
    }
    public function likeCompetition(int $id_competition, int $id_fan) {


    }
    public function dislikeCompetition(int $id_competition, int $id_fan) {

    }
    public function updateCompetition(Competition $c, int $id_competition): bool
    {
        $sql = 'UPDATE Competiion
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
        $stmt = $this->pdo->prepare($sql);
        return (bool)$stmt->execute([
            $c->titre,
            $c->date_debut,
            $c->date_fin,
            $c->lieux_competition,
            $c->description,
            $c->type_competition,
            $c->status,
            $c->capacite_max,
            $c->id_competition
        ]);
    }

    public function deleteCompetition(int $id_competition): bool
    {
        $sql = 'DELETE FROM Competition WHERE id_competition = ?';
        $stmt = $this->pdo->prepare($sql);
        return (bool)$stmt->execute([$id_competition]);
    }
    use FollowableCompetition;
}