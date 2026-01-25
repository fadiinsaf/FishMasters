<?php

namespace app\Services;

use app\Repositories\PriseRepository;
use app\Repositories\EspeceRepository;

class RankingService
{
    private $priseRepo;
    private $especeRepo;

    public function __construct()
    {
        $this->priseRepo = new PriseRepository();
        $this->especeRepo = new EspeceRepository();
    }

    public function generateRanking(int $competitionId)
    {
        $prises = $this->priseRepo->getPrisesByCompetition($competitionId);
        foreach ($prises as $prise) {
            $espece = $this->especeRepo->findById($prise->espece_id);

            if ($prise->taille < $espece->tailleMin) {
                continue; // 0 point makatkhod walo
            }

            $points = $prise->poids * $espece->CoefficientPoints;

            $fishermanId = $prise->fisherman_id;

            if (!isset($leaderboard[$fishermanId])) {
                $leaderboard[$fishermanId] = [
                    'fisherman_id' => $fishermanId,
                    'total_points' => 0,
                    'largest_fish' => 0, // كنحتاجوها لفك التعادل
                    'fish_count'   => 0
                ];
            }
            $leaderboard[$fishermanId]['total_points'] += $points;
            $leaderboard[$fishermanId]['fish_count']++;


            usort($leaderboard, function ($a, $b) {
                // comparing by total score
                if ($b['total_points'] !== $a['total_points']) {
                    return $b['total_points'] <=> $a['total_points']; // تنازلي (DESC)
                }

                // au cas degalité
                return $b['largest_fish'] <=> $a['largest_fish'];
            });

            $finalRanking = [];
            $rank = 1;
            foreach ($leaderboard as $data) {
                $data['rank'] = $rank++;
                $finalRanking[] = $data;
            }

            return $finalRanking;
        }
    }
}
