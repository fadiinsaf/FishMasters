<?php
require_once '../models/Competition.php';

class CalendarController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        $model = new Competition($this->db);
        $competitions = $model->getCalendrier();

        
        require '../views/competitionclander.php';
    }
}