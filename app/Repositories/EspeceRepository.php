<?php

namespace app\Repositories;

use APP\Models\Espece;
use config\Database;

class EspeceRepository
{
    private $pdo;
    public function __construct(){
        $this->pdo = Database::getInstance()->getConnection();
    }
    public function createEspece(Espece $e): ?int
    {
        $sql = 'INSERT INTO espece(name_espece, min_size, coefficient)
                VALUES (?, ?, ?)';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$e->name_espece,
            $e->min_size,
            $e->coefficient
        ]) ? $this->pdo->lastInsertedId() : null;
    }

    public function updateEspece(Espece $e, int $id_espece): void
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'UPDATE espece 
                SET name_espece = ?,
                    min_size = ?,
                    coefficient = ?
                    WHERE id_espece = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $e->name,
            $e->min_size,
            $e->coefficient,
            $id_espece
        ]);
    }
    public function deleteEspece(int $id_espece): void {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'DELETE FROM espece WHERE id_espece = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id_espece]);
    }
}