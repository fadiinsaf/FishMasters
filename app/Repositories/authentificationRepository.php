<?php

namespace App\Repositories;
use app\Core;
use APP\Models\authentification;
use config\Database;
use PDO;

class authentificationRepository 
{
    private PDO $pdo;
    public function __construct($pdo){
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function findByEmail(string $email): ?object
    {
        $stmt = $this->pdo->prepare("SELECT * FROM app_user WHERE email = ?");
        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_OBJ);

        return $user ?: null;
    }

    public function findByEmail(string $email): ?User {
        $stmt = $this->pdo->prepare("SELECT * FROM app_user WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) return null;

        if ($data['role']==='fishermen'){
            $stmt = $this->pdo->prepare("SELECT * FROM fisherman WHERE id_user = :id");
            $stmt->execute ('id'=>$data['is-user']);
            $dataF = $stmt->fetch(PDO::FETCH_ASSOC);
            return new fishermen($dataF['id_user'], $dataF['email'], $dataF['password_hash'], $dataF['role']);
        }

        return new User($data['id_user'], $data['email'], $data['password_hash'], $data['role']);
    }
}
?>