<?php
namespace app\Models;
use app\Models\User;

class Fan extends User 
{
    private int $loyaltyPoints;


    public function __construct($id, $email, $hash, $points = 0) {
        parent::__construct($id, $email, $hash, 'fan');
        $this->loyaltyPoints = $points;
    }
    public function getLoyaltyPoints(): int{
        return $this->loyaltyPoints;
    }
    public function setLoyaltyPoints(int $loyaltyPoints) {
        $this->loyaltyPoints = $loyaltyPoints;
    }
}
?>