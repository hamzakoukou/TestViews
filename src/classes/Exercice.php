<?php 
require '../../vendor/autoload.php';

use DateTime ;

class Exercice{
    public  $id;
    public $dateD;
    public $dateF;
    public $status;

    public function __construct(int $id , DateTime $dateD, DateTime $dateF) {
        $this->id = $id ;
        $this->dateD = $dateD ;
        $this->dateF = $dateF ;
    }

    public function setStatus(string $statut){
        $this->status = $statut ;
    }

    public function getStatus() : string{
        return $this->status ;
    }

    public function getId() : int{
        return $this->id ;
    }

    public function getdateD() : DateTime{
        return $this->dateD ;
    }
    public function getdateF() : DateTime{
        return $this->dateF ;
    }
}

