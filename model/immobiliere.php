<?php
require_once "config.php";
class immobiliere{
protected $reference;
protected $proprietaire;
protected $localite;
protected $surface;
protected $nbpieces;
protected $domaineusage;
protected $nature;
public function __construct( $reference,  $proprietaire,  $localite,  $surface,  $nbpieces,  $domaineusage,$nature)
{$this->reference = $reference;$this->proprietaire = $proprietaire;$this->localite = $localite;
$this->surface = $surface;$this->nbpieces = $nbpieces;$this->domaineusage = $domaineusage;
$this->nature = $nature;}
public function getReference() {return $this->reference;}

public function getProprietaire() {return $this->proprietaire;}

public function getLocalite() {return $this->localite;}

public function getSurface() {return $this->surface;}

public function getNbpieces() {return $this->nbpieces;}

public function getDomaineusage() {return $this->domaineusage;}

public function getnature() {return $this->domaineusage;}


public function setReference( $reference): void {$this->reference = $reference;}

public function setProprietaire( $proprietaire): void {$this->proprietaire = $proprietaire;}

public function setLocalite( $localite): void {$this->localite = $localite;}

public function setSurface( $surface): void {$this->surface = $surface;}

public function setNbpieces( $nbpieces): void {$this->nbpieces = $nbpieces;}

public function setDomaineusage( $domaineusage): void {$this->domaineusage = $domaineusage;}

public function setSec( $nature): void {$this->nature = $nature;}






};
