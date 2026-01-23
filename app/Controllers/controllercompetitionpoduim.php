 <?php
// استيراد الموديل (تأكد من صحة المسار)
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
            die("Aucun résultat trouvé pour cette compétition");
        }

         require '../views/competitionpoduim.php';
    }

    
    public function showRankings() {
        $model = new Ranking($this->db);
        
        $category = isset($_GET['cat']) ? $_GET['cat'] : 'Pro';
        
        $rankings = $model->getRankingsByCategory($category);
        
        require '../views/test.php';
    }
}