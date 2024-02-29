<?php 

class Arreter {
    public $id;
    public $code_exercice;
    public $code_periode;
    public $code_collaborateur;
    public $code_status;
    public $date_arret;
    public $type_activite;

    public function __construct(array $donnees){
        foreach ($donnees as $key => $value) {
            $this->$key = $value;
        }
    }


}