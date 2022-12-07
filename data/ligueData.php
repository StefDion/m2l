<?php
include_once('Connexion.php');

//
// Table : ligue
//
// getAll()
// getLimit()
// findOne()
// count()
// update()
// insert()

function ligueData_getAll(){
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string

    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT * FROM ligue';

    // Execute la requete sur la base grâce à la méthode query() prévu dans la classe Connexion
    $liste=Connexion::query($requete);

    return $liste;
}

