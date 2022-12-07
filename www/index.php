<?php

// Penser à mettre un index.php dans www qui redirige vers cet index là !
include('../config/Config.php');
include('../controle/connexionControle.php');
include('../controle/accueilControle.php');
include('../controle/listesControle.php');
include('../controle/reservationControle.php');
include('../controle/parametresControle.php');
include('../controle/utilisateurControle.php');



// remplacer ici les tests sur les GET par une fonction de validation ou de nettoygae par sécurité avant de l'injecter dans un module
// Ici aussi on mettrait le test à la variable de SESSION


// Vérifier les paramètres du GET

$controle='';
if (isset($_GET['controle']))
	{
		$controle=$_GET['controle'];
	}
	
$action='';
if (isset($_GET['action']))
	{
		$action=$_GET['action'];
	}

/*
 * L'action demandée est envoyée vers le controle associé à la page demandée
 * Cette action est orientée métier : ce que souhaite le client comme fonctionalités, indépendament de la notion de tables!
 */
switch ($controle) {
	case 'accueil' :
		accueilControle($action);
	break;
	case 'listes' :
		listesControle($action);
	break;
	case 'reservation' :
		reservationControle($action);
	break;
	case 'parametres' :
		parametresControle($action);
	break;
	case 'utilisateur' :
		utilisateurControle($action);
	break;
	default : // A défaut par sécurité, c'est direct retour à l'authentification
		connexionControle($action);
	break;
}

