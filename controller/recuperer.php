<?php
require_once "../model/crud_appartement.php";
if(isset($_GET['ref'])){
    $ref=$_GET['ref'];
    $crud = new crud_appartement();
    $appartement=$crud->recuperer1($ref);
    include "../view/recuperer.php";
}