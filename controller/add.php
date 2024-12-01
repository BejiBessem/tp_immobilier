<?php
require_once "../model/appartement.php";
require_once "../model/crud_appartement.php";
if(isset($_POST['ok'])){
$pro=htmlspecialchars($_POST['pro']);
$loc=htmlspecialchars($_POST['loc']);
$surf=htmlspecialchars($_POST['surf']);
$nbp=htmlspecialchars($_POST['nbp']);
$du=htmlspecialchars($_POST['du']);
$sec=htmlspecialchars($_POST['sec']);
$nature='Appartement';
$appartement=new appartement(null,$pro,$loc,$surf,$nbp,$du,$nature,$sec);
$crud=new crud_appartement();
$res=$crud->add($appartement);
if($res){
    header("location:lister.php");

}else{
    echo "probleme d'insertion";
}




}else{
    include "../view/add.php";
}
