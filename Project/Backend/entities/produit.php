<?php
class Produit
{
	private $Reference;
	private $Nom;
	private $Prix;
	private $Description;
	private $Photo;
	private $Cathegory;
	private $quantite;
	private $garantie;
	

	 function __construct($nom,$reference,$prix,$description,$cathegory,$quantite,$garantie,$photo){
	 
	 	


	 	$this->Reference = $reference;
	 	$this->Nom = $nom;
	 	$this->Prix=$prix;
	 	$this->Description=$description;
	 	$this->Cathegory=$cathegory; 
	 	$this->Quantite=$quantite; 
	 	$this->Garantie=$garantie; 
	 	$this->Photo=$photo; 
	 	

	 }

	 function getReference()
	 {
	 	return $this->Reference;
	 }

	 function getNom()
	 {
	 	return $this->Nom;
	 }

	 function getPrix()
	 {
	 	return $this->Prix;
	 }

	 function getDescription()
	 {
	 	return $this->Description;
	 }

	 function getPhoto()
	 {
	 	return $this->Photo;
	 }

	 function getCathegory()
	 {
	 	return $this->Cathegory;
	 }
	 function getQuantite()
	 {
	 	return $this->Quantite;
	 }
	 function getGarantie()
	 {
	 	return $this->Garantie;
	 }


	 function setReference($reference)
	 {
	 	$this->Reference = $reference;
	 }

	 function setNom($nom)
	 {
	 	$this->Nom = $nom;
	 }

	 function setPrix($prix)
	 {
	 	$this->Prix = $prix;
	 }

	 function setDescription($description)
	 {
	 	$this->Description = $description;
	 }
	 function setCathegory()
	 {
	 	 $this->Cathegory = $cathegory;
	 }
	 function setPhoto($photo)
	 {
	 	$this->Photo = $photo;
	 }
	 function setQuantite($quantite)
	 {
	 	$this->Quantite = $quantite;
	 }
	 function setGarantie($garantie)
	 {
	 	$this->Garantie = $garantie;
	 }

	
}

?>