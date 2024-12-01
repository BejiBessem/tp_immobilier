<?php
session_start();
if (isset($_SESSION['username'])&&$_SESSION['password']) {
    echo "Hello, " . $_SESSION['username'];
} else {
    echo "<script>alert('you must login first');</script>";
    header("location:/../login.php");
    exit;
}
require_once "../model/crud_appartement.php";
require_once "../model/appartement.php";
$crud = new crud_appartement();
if(isset($_POST['send']) && !empty($_POST['search'])){
    $ref=$_POST['search'];
    $lesappartement = $crud->recuperer($ref);
}else{
    $lesappartement = $crud->listerapp();
}


include "../view/lister.php";
