<?php
require_once '../Models/Fisherman.php';

class FishermanController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        $model = new Fisherman($this->db);
        
        $fishermen = $model->getAllFisherMen(); 
        
        require '../views/listfisher.php';
    }
}