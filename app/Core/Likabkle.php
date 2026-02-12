<?php

namespace app\Core;

abstract class Likable
{
    abstract public function likeFishermen(int $id_fishermen, int $id_fan);
    abstract public function dislikeFishermen(int $id_fishermen, int $id_fan);
    abstract public function likePrise(int $id_prise, int $id_fan);
    abstract public function dislikePrise(int $id_prise, int $id_fan);
    abstract public function likeCompetition(int $id_competition, int $id_fan);
    abstract public function dislikeCompetition(int $id_competition, int $id_fan);
}