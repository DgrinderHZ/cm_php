<?php
/** Classe Etudiant en PHP */
class Etudiant{
    /** Identification unique d'un etudiant */
    private $etudiant_id;
    /** Nom de l'etudiant */
    protected $nom;
    /** Date de naissance de l'etudiant */
    protected $naissance;

    public function __construct($id, $nom,$naissance){
        $this->etudiant_id = $id; 
        $this->nom = $nom; 
        $this->naissance= $naissance; 
    } 

    /**
    * Fonction de comparaison simplifiee entre etudiants
    * == comparera id, nom et naissance
    */
    public function equals(Etudiant $etudiant){
        return ($this->getId() == $etudiant->getId());
    }

    public function getId(){
        return $this->etudiant_id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getNaissance(){
        return $this->naissance;
    }

    public function __toString(){
        $ne = date("Y-m-d", $this->naissance);
        return 'etudiant: id=' . $this->getId().', nom='.$this->getNom()." $ne";
    }
} 