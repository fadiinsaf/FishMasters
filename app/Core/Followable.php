<?php

namespace app\Core;

use config\Database;

trait FollowableCompetition
{
    public function followCompetition(int $id_competition, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
    }

    public function unfollowCompetition(int $id_competition, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
    }
}

trait FollowableFishermen
{
    public function followFishermen(int $id_fishermen, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
    }

    public function unfollowFishermen(int $id_fishermen, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
    }

}

trait FollowableTeam
{
    public function followTeam(int $id_team, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
    }

    public function unfollowTeam(int $id_team, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
    }
}