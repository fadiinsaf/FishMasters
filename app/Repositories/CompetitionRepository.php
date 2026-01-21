<?php

namespace App\Repositories;

use App\Models\Competition;
use config\Database;
use PDO;

class CompetitionRepository
{
    public function getAll(): array
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT * FROM competition';
        $stmt = $pdo->prepare($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById(int $id): ?array
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'SELECT * FROM competition WHERE id_competition = :id';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]) ? $stmt->fetch(PDO::FETCH_OBJ) : null;
    }

    public function getByCategorie(int $idCategorie): ?array
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'SELECT * FROM competition WHERE id_categorie = :idCategorie';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':idCategorie' => $idCategorie]) ? $stmt->fetch(PDO::FETCH_OBJ) : null;
    }
}