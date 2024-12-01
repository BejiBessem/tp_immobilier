<?php
require_once "config.php";
require_once "immobiliere.php";
class appartement extends immobiliere{
    private $sec;
    public function __construct( $reference,  $proprietaire,  $localite,  $surface,  $nbpieces,  $domaineusage,$nature ,$sec){
     parent::__construct($reference,  $proprietaire,  $localite,  $surface,  $nbpieces,  $domaineusage,$nature);
     $this->sec=$sec;
    }
    public function getSec() {return $this->sec;}

	public function setSec( $sec): void {$this->sec = $sec;}

	
	
	
}