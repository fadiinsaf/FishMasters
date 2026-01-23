 <?php
require_once '../models/score.php';

class PodiumController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    
    public function show($competitionId) {
        $rankingModel = new Ranking($this->db);

        $topThree = $rankingModel->getTopThree($competitionId);

        $allfisher = $rankingModel->getAllRankings($competitionId);


        if (!$topThree) {
            die("Aucun résultat trouvé pour cette compétition.");
        }

        require '../views/competitionpoduim.php';
    }
}