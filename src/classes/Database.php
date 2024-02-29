<?php
namespace App\Classes;

use PDO ;
class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    public $pdo ;

    public function __construct() 
    {
        // Create a new PDO instance    
        $dsn = "mysql:dbname=data;host=$this->host";

        $this->pdo = new PDO($dsn,$this->username,$this->password,
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
                    PDO::ATTR_ORACLE_NULLS => PDO::NULL_TO_STRING,
                    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC ]
                    );
    }

    //public function 
    


}