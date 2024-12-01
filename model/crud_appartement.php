<?php 
require_once "config.php";
require_once "immobiliere.php";
require_once "appartement.php";
class crud_appartement{
    private $pdo;
     function __construct(){
          $connexion = new connexion();
          $this->pdo=$connexion->getconnexion();}
 function listerapp(){
$sql= "SELECT * FROM immobilier WHERE nature='Appartement'";
$res = $this->pdo->query($sql);
return $res->fetchAll(PDO::FETCH_NUM);

 }   
 function add(appartement $appartement){
    $ref=$appartement->getreference();
    $proprietaire=$appartement->getProprietaire();
    $localite=$appartement->getLocalite();
    $surface = $appartement->getSurface();
    $nbpieces=$appartement->getNbpieces();
    $domaineusage=$appartement->getDomaineusage();
    $nature='Appartement';
    $sec=$appartement->getSec();
    $sql = "INSERT INTO immobilier (proprietaire, localite, surface, nbpieces, domaineusage, nature, sec) 
            VALUES ('$proprietaire', '$localite', $surface, $nbpieces, $domaineusage, '$nature', $sec)";
    
    $res = $this->pdo->exec($sql);
    return $res;
 }
 function recuperer($ref){
    $sql = "select * from immobilier where reference=$ref";
    $res = $this->pdo->query($sql);
    return $res->fetchAll(PDO::FETCH_NUM);
 }
 function recuperer1($ref){
   $sql = "select * from immobilier where reference=$ref";
   $res = $this->pdo->query($sql);
   return $res->fetch(PDO::FETCH_NUM);
}
 function supprimer($ref){
    $sql="delete from immobilier where reference = $ref";
    $res=$this->pdo->exec($sql);
    return $res;
 }
 function modifier(appartement $appartement){
    $ref = $appartement->getreference();
    $proprietaire = $appartement->getProprietaire();
    $localite = $appartement->getLocalite();
    $surface = $appartement->getSurface();
    $nbpieces = $appartement->getNbpieces();
    $domaineusage = $appartement->getDomaineusage();
    $nature = 'Appartement';
    $sec = $appartement->getSec();

    // Corrected SQL query
    $sql = "UPDATE immobilier 
            SET proprietaire = '$proprietaire',
                localite = '$localite',
                surface = $surface,
                nbpieces = $nbpieces,
                domaineusage = $domaineusage,
                nature = '$nature',
                sec = $sec 
            WHERE reference = $ref";

    // Execute the query
    $res = $this->pdo->exec($sql);
    return $res;
}

}