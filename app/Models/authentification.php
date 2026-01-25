<?php

namespace app\Models;
use config\Database;
use app\Models\User;
use app\Models\Fisherman;
use App\Repositories\authRepository;

class authentification {

    private AuthRepository $userRepo;

    public function __construct(AuthRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function register(Fisherman $fisherman): bool 
    {
        if ($this->userRepo->findByEmail($fisherman->getEmail())) {
            return false; 
        }
        
        return $this->userRepo->saveFisherman($fisherman);
    }
    

    public function login(string $email, string $password): ?User {
        $user = $this->userRepo->findByEmail($email);

        if ($user && password_verify($password, $user->getPasswordHash())) {
            return $user;
        }
        return null;
    }
}
?>