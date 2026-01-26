<?php

namespace app\Models;
use config\Database;
use app\Models\User;
use app\Models\Fan;
use app\Models\Fishermen;
use App\Repositories\authRepository;
use app\Models\Session;

class authentification {

    private AuthRepository $userRepo;
    private Session $session;

    
    public function __construct(AuthRepository $userRepo, Session $session) {
        $this->userRepo = $userRepo;
        $this->session = $session;
    }

    public function registerFisherman(Fishermen $fisher): bool {
        if ($this->userRepo->findByEmail($fisher->getEmail())) return false;
        return $this->userRepo->saveFisherman($fisher);
    }
    
    public function registerFan(Fan $fan): bool {
        if ($this->userRepo->findByEmail($fan->getEmail())) return false;
        return $this->userRepo->saveFan($fan);
    }

    public function loginn(string $email, string $password): ?User {
        $user = $this->userRepo->findByEmail($email);

        if ($user && password_verify($password, $user->getPasswordHash())) {
            return $user;
        }
        return null;
    }


        public function login(string $email, string $password): ?User {
            $user = $this->userRepo->findByEmail($email);

            if ($user && password_verify($password, $user->getPasswordHash())) {
                // On régénère l'id de session 
                session_regenerate_id(true);
                $this->session->set('user_id', $user->getId());
                $this->session->set('user_role', $user->getRole());
                $this->session->set('is_logged_in', true);
                
                return $user;
            }
            return null;
        }
    public function logout(): void {
        $this->session->destroy();
    }

}

?>