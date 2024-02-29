<?php

class Periode extends Exercice {
    public $status ;
    public $type_report ;

    public function __construct(int $id, DateTime $dateD, DateTime $dateF, string $type_report){
        parent::__construct($id, $dateD, $dateF);
        $this->type_report= $type_report;
    }

    
}