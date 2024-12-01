<?php
require_once "../model/crud_appartement.php";
if(isset($_GET['ref'])){
    $ref=$_GET['ref'];
    $crud=new crud_appartement();
    $res=$crud->supprimer($ref);
    if($res){
        header("location:lister.php");
        
    }else {
        echo "probleme de suppression";
    }
}