<?php

namespace app\Repositories;

use app\Models\Espece;
use config\Database;
use PDO;


class EspeceRepository
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }
    public function createEspece(Espece $e): ?int
    {
        $sql = 'INSERT INTO espece(name_espece, min_size, coefficient)
                VALUES (?, ?, ?)';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $e->name_espece,
            $e->min_size,
            $e->coefficient
        ]) ? $this->pdo->lastInsertId() : null;
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
    public function deleteEspece(int $id_espece): void
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'DELETE FROM espece WHERE id_espece = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id_espece]);
    }

    public function findById($id)
    {
        $sql = "SELECT * from espece where id_espece = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $espece = new Espece(
            (string) $row["name_espece"],
            (float) $row["min_size"],
            (float) $row["coefficient"]
        );
        $espece->id_espece = $row["id_espece"];
        return $espece;
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM espece";
        $stmt = $this->pdo->query($sql);

        $especes = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Hydrate logic (reuse what you have in findById)
            $e = new Espece(
                (string)$row['name_espece'],
                (float)$row['min_size'],
                (float)$row['coefficient'],

            );
            $especes[] = $e;
        }
        return $especes;
    }
}
