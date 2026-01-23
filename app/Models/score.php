<?php
namespace app\Models;
 use config\Database;
class Score {
     private int $id_score;
    private float $totalPoints;
    private float $totalWeight;
    private float $totalLength;
    private int $rankRound;
    private int $rankGeneral;
    private DateTime $lastUpdate;

     public function __construct(
        int $id_score ,
        float $totalPoints ,
        float $totalWeight ,
        float $totalLength ,
        int $rankRound ,
        int $rankGeneral,
        DateTime $lastUpdate 
    ) {
        $this->id_score = $id_score;
        $this->totalPoints = $totalPoints;
        $this->totalWeight = $totalWeight;
        $this->totalLength = $totalLength;
        $this->rankRound = $rankRound;
        $this->rankGeneral = $rankGeneral;
        $this->lastUpdate = $lastUpdate ;
    }

    // getter

    public function getIdScore(): int {
        return $this->id_score;
    }

    public function getTotalPoints(): float {
        return $this->totalPoints;
    }

    public function getTotalWeight(): float {
        return $this->totalWeight;
    }

    public function getTotalLength(): float {
        return $this->totalLength;
    }

    public function getRankRound(): int {
        return $this->rankRound;
    }

    public function getRankGeneral(): int {
        return $this->rankGeneral;
    }

    public function getLastUpdate(): DateTime {
        return $this->lastUpdate;
    }

    // setter

    public function setIdScore(int $id_score): void {
        $this->id_score = $id_score;
    }

    public function setTotalPoints(float $totalPoints): void {
        $this->totalPoints = $totalPoints;
    }

    public function setTotalWeight(float $totalWeight): void {
        $this->totalWeight = $totalWeight;
    }

    public function setTotalLength(float $totalLength): void {
        $this->totalLength = $totalLength;
    }

    public function setRankRound(int $rankRound): void {
        $this->rankRound = $rankRound;
    }

    public function setRankGeneral(int $rankGeneral): void {
        $this->rankGeneral = $rankGeneral;
    }

    public function setLastUpdate(DateTime $lastUpdate): void {
        $this->lastUpdate = $lastUpdate;
    }

 
     public function __toString() {
        return "club : " . $this->club . ", region : " . $this->region . ", typePecheFavoris : " . $this->typePecheFavoris;
    }

    
    public function getTopThree($categorie = 'Solo') {
        $sql = "SELECT * FROM participants WHERE type = :cat ORDER BY score_total DESC LIMIT 3";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['cat' => $categorie]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getAllRankings($categorie = 'Solo') {
        $sql = "SELECT * FROM participants WHERE type = :cat ORDER BY score_total DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['cat' => $categorie]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>