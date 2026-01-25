<?php

namespace App\Repositories;
use app\Core;
use APP\Models\authentification;
use config\Database;
use PDO;

class AuthRepository
{
    private PDO $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function findByEmail(string $email): ?User 
    {
        $stmt = $this->pdo->prepare("SELECT * FROM app_user WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) return null;

        if ($data['role']==='fishermen'){
            $stmt = $this->pdo->prepare("SELECT * FROM fisherman WHERE id_user = :id");
            $stmt->execute ('id'=>$data['is-user']);
            $dataF = $stmt->fetch(PDO::FETCH_ASSOC);
        
            return new Fishermen(
                $dataF['id_user'], $dataF['email'], $dataF['password_hash'], 
                $dataF['club'], $dataF['region'], $dataF['type_peche']
            );
        }

        return new User($data['id_user'], $data['email'], $data['password_hash'], $data['role']);
    }

    public function saveFisherman(Fisherman $fisherman): bool 
    {
        $sql = "INSERT INTO fisherman (email, password_hash, role, club, region, type_peche) 
                VALUES (:email, :pass, :role, :club, :region, :type)";
        
        $stmt = $this->pdo->prepare($sql);
        $success = $stmt->execute([
            'email'  => $fisherman->getEmail(),
            'pass'   => $fisherman->getPasswordHash(),
            'role'   => $fisherman->getRole(),
            'club'   => $fisherman->getClub(),
            'region' => $fisherman->getRegion(), 
            'type'   => 'Général'
        ]);

        if ($success) {
            $fisherman->setId((int)$this->pdo->lastInsertId());
        }
        return $success;
    }
}
?>