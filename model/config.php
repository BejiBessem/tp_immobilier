<?php
class connexion{
    private $pdo;

    function __construct(){
        $dsn="mysql:host=localhost;dbname=gestion_immobiliere";
        $username="root";
        $password="";
        try {
           
            $this->pdo= new PDO($dsn,$username,$password);
        } catch (PDOException $e) {
            echo "erreur  ".$e->getMessage;
        }
    }

function getconnexion(){
    return $this->pdo;
}
}