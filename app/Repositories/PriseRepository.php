<?php

namespace app\Repositories;

use app\Models\Prise;
use config\Database;
use DateTime;
use PDO;

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



    public function findByPriseId(int $id): Prise
    {
        $query = "SELECT * from prise where id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $date = new DateTime($row["date_prise"]);
        $prise = new Prise(
            (float) $row['poids'],
            (float) $row['taille'],
            (string) $row['photo'],
            $date,
            (int) $row['fisherman_id'],
            (int) $row['competition_id'],
            (int) $row['espece_id'],
            (string) $row['status_valid']
        );
        $prise->id = $row["id_prise"];
        return $prise;
    }

    public function getAllPrise(): array
    {
        $sql = "SELECT * from prise order by id_prise";
        $stmt = $this->conn->query($sql);
        $prises = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $date = new DateTime($row['date_prise']);

            $newPrise = new Prise(
                (float) $row['poids'],
                (float) $row['taille'],
                (string) $row['photo'],
                $date,
                (int) $row['fisherman_id'],
                (int) $row['competition_id'],
                (int) $row['espece_id'],
                (string) $row['status_valid']
            );
            $newPrise->id = $row["id_prise"];

            $prises[] = $newPrise;
        }

        return $prises;
    }


    public function getPrisesByFisherman(int $fisherId): array
    {
        $sql = "SELECT * from prise where fisherman_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$fisherId]);
        $prises = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $date = new DateTime($row['date_prise']);
            $prise = new Prise(
                (float) $row['poids'],
                (float) $row['taille'],
                (string) $row['photo'],
                $date,
                (int) $row['fisherman_id'],
                (int) $row['competition_id'],
                (int) $row['espece_id'],
                (string) $row['status_valid']
            );
            $prise->id = $row['id_prise'];

            $prises[] = $prise;
        }
        return $prises;
    }



    public function getPrisesByCompetition(int $competitionId): array
    {
        $sql = "SELECT * from prise where competition_id = ? and status_valid = 'approuve' ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$competitionId]);
        $prises = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $date = new DateTime($row['date_prise']);
            $prise = new Prise(
                (float) $row['poids'],
                (float) $row['taille'],
                (string) $row['photo'],
                $date,
                (int) $row['fisherman_id'],
                (int) $row['competition_id'],
                (int) $row['espece_id'],
                (string) $row['status_valid']
            );
            $prise->id = $row['id_prise'];
            $prises[] = $prise ;
        }

        return $prises ;
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
