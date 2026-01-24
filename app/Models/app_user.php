<?php
namespace Entity;

class App_user 
{
    public function __construct(
        protected ?int $id_user = null,
        protected string $email = '',
        protected string $password_hash = '',
        protected string $role = '',
        protected ?string $photo_profil = null
    ) {}

    
    public function getId(): ?int { return $this->id_user; }
    public function getEmail(): string { return $this->email; }
    public function getPasswordHash(): string { return $this->password_hash; }
    public function getRole(): string { return $this->role; }
    public function getPhoto(): string { return $this->role; }
    
    public function setId(int $id): void { $this->id_user = $id; }
}

?>