<?php
namespace app\Models;
use app\Models\Prise;
use config\Database;

class PriseRepository
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnexion();
    }

    public function createPrise(Prise $prise)
    {
        $sql = "INSERT INTO prise (poids , taille , date_prise , status_valid , photo , fisherman_id, competition_id, espece_id)
        VALUES (:poids, :taille , :date_prise ,:status_valid ,:photo ,:fid ,:cid ,:eid)  ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':poids' => $prise->poids,
            ':taille' => $prise->taille,
            ':date_prise' => $prise->date_prise->format('Y-m-d H:i:s'),
            ':status_valid' => $prise->status_valid,
            ':photo' => $prise->photo,
            ':fid' => $prise->fisherman_id,
            ':cid' => $prise->competition_id,
            ':eid' => $prise->espece_id
        ]);
        return $this->conn->lastInsertId(); // preferance to return the ID of the new catch
    }

    public function validatePriseStatus($id)
    {
        $sql = "UPDATE prise set status_valid = 'approuve' where id = ? ";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function rejectPriseStatus($id)
    {
        $sql = "UPDATE prise set status_valid = 'rejete' where id = ? ";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
