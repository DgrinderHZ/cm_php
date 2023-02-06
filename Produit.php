<?php
/** Classe Produit en PHP */
class Produit{
    /** Nom de  Produit */
    protected $nom;
    protected $prix;
    private $tva;
    private $qte;

    public function __construct($nom, $prix,$tva, $qte){
        $this->nom = $nom; 
        $this->prix =$prix; 
        $this->tva = $tva; 
        $this->qte = $qte; 
    } 

    /**
    * Fonction de comparaison simplifiee entre Produits
    * == comparera id, nom et naissance
    */
    public function equals(Produit  $produit){
        return ($this->getNom() == $produit->getNom());
    }

    public function prixTTC(){
        $resultat = $this->getPrix() + $this->getPrix() * $this->getTva();
        return $resultat;
    }

    public function prixTotTTC(){
        $resultat = $this->prixTTC() * $this->getQte();
        return $resultat;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function getTva(){
        return $this->tva;
    }

    public function getQte(){
        return $this->qte;
    }

    public function __toString(){
       $result = "<td>";
       $result .= $this->getNom();
       $result .= "</td>";
       $result .= "<td>";
       $result .= $this->getPrix();
       $result .= "</td>";
       $result .= "<td>";
       $result .= $this->getTva();
       $result .= "</td>";
       $result .= "<td>";
       $result .= $this->getQte();
       $result .= "</td>";
       $result .= "<td>";
       $result .= $this->prixTotTTC();
       $result .= "</td>";

       return $result;
    }
} 