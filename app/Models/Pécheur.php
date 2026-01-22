<?php


class fishermen
{
private $club ; 
private $region ;
private $typePecheFavoris;

public function __construct($club , $region , $typePecheFavoris) {
    $this->club = $club;
    $this->region=$region;
    $this->typePecheFavoris;
}    
// getter
public function getClub(){
    return $this->club;
}
public function getRegion(){
    return $this->region;
}
public function getTypePecheFavoris(){
    return $this->typePecheFavoris;
}
// setter
public function setClub($club){
    $this->club=$club;
}
public function setRegion($region){
    $this->region=$region;
}
public function setTypePecheFavris($typePecheFavoris){
    $this->typePecheFavoris=$typePecheFavoris;
}
public function __tostring(){
    return "club :". $this->club . ", region :" . $this->region . ", typePecheFavorisn:" . $this->typePecheFavoris ;
}
public function getAllFisherMen() {
    $sql = "SELECT * FROM fishermen ORDER BY nom ASC";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


}


?>