<?php 
class Collaborateur{
    public $id;
    public $nom;
    public $prenom;
    public $code_P;
    public $code_A;
    public $salaire;
    public $dateDebut;
    public $dateFin;


    public function __construct(int $id ,string $nom , string $prenom,int $code_P, int $code_A,int $salaire,DateTime $dateD) 
    {
        $this->id = $id ;
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->code_P = $code_P ;
        $this->code_A = $code_A ;
        $this->salaire = $salaire ;
        $this->dateDebut = $dateD ;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void 
    {
        $this->id = $id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): void 
    {
        $this->nom = $nom ;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom): void 
    {
        $this->prenom = $prenom ;
    }
    public function getCodeP(): string
    {
        return $this->code_P ;
    }
    public function setCodeP(string $code_P): void 
    {
        $this->code_P = $code_P ;
    }
    public function getCodeA(): string
    {
        return $this->code_A ;
    }
    public function setCodeA(string $code_A): void 
    {
        $this->code_A = $code_A ;
    }
    public function getSalaire(): string
    {
        return $this->salaire ;
    }
    public function setSalaire(string $salaire): void 
    {
        $this->salaire = $salaire ;
    }
}




