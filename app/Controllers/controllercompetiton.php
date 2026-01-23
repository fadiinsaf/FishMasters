 <?php
 require_once '../Models/score.php';
 require_once '../Modles/competition.php';
class PodiumController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    
    public function show($id_competition) {
        $rankingModel = new Ranking($this->db);

         $topThree = $rankingModel->getTopThree($id_competition);

         $allfisher = $rankingModel->getAllRankings($id_competition);

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

    public function list() {
        $model = new Competition($this->db);

         $milieu = $_GET['milieu'] ?? '';
        $region = $_GET['region'] ?? '';
        $categorie = $_GET['categorie'] ?? '';

         $competitions = $model->getFilteredCompetitions($milieu, $region, $categorie);

         require '../views/competition.php';
    }
}