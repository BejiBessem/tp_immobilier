<?php
require_once "../model/crud_appartement.php";
require_once "../model/appartement.php";
if(isset($_POST['ok3'])){
    if(isset($_GET['ref'])){
$ref=$_GET['ref'];
$pro=htmlspecialchars($_POST['pro']);
$loc=htmlspecialchars($_POST['loc']);
$surf=htmlspecialchars($_POST['surf']);
$nbp=htmlspecialchars($_POST['nbp']);
$du=htmlspecialchars($_POST['du']);
$sec=htmlspecialchars($_POST['sec']);
$nature='Appartement';
$appartement= new appartement($ref,$pro,$loc,$surf,$nbp,$du,$nature,$sec);
$crud = new crud_appartement();
$res=$crud->modifier($appartement);
if($res){
    header("location:lister.php");
}
 }else{
  echo "probleme de modification";
 }

}else{
    include "../view/modifier.php";
}