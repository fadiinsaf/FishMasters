<?php

namespace app\Core;

use config\Database;

trait FollowableCompetition
{
    public function followCompetition(int $id_competition, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'INSERT INTO followed (id_target, fan_id, type_table) 
                VALUES (:id_competition, :id_fan, :type_table)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_competition' => $id_competition,
            'id_fan' => $id_fan,
            'type_table' => 'COMPETITION'
        ]);
    }

    public function unfollowCompetition(int $id_competition, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'DELETE FROM followed
                WHERE id_target = :id_competition
                AND id_fan = :id_fan';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_competition' => $id_competition,
            'id_fan' => $id_fan
        ]);
    }
}

trait FollowableFishermen
{
    public function followFishermen(int $id_fishermen, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'INSERT INTO followed (id_target, fan_id, type_table)
                VALUES (:id_fishemen, :id_fan, :type_table)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_competition' => $id_fishermen,
            'id_fan' => $id_fan,
            'type_table' => 'FISHERMEN'
        ]);
    }

    public function unfollowFishermen(int $id_fishermen, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'DELETE FROM followed
                WHERE id_target = :id_fishermen
                AND id_fan = :id_fan';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_fishermen' => $id_fishermen,
            'id_fan' => $id_fan
        ]);
    }
}

trait FollowableTeam
{
    public function followTeam(int $id_team, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'INSERT INTO followed (id_target, fan_id, type_table)
                VALUES (:id_team, :id_fan, :type_table)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_team' => $id_team,
            'id_fan' => $id_fan,
        ]);
    }

    public function unfollowTeam(int $id_team, int $id_fan)
    {
        $pdo = Database::getInstance()->getConnection();
        $sql = 'DELETE FROM followed
            WHERE id_target = :id_team
            AND id_fan = :id_fan';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_team' => $id_team,
            'id_fan' => $id_fan
        ]);
    }
}