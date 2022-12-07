<?php


function connexionControle($action) {
	// Sélecteur d'actions
	switch ($action) {
		case 'connecter' :
			connexionControle_connecterAction();
		break;
		case 'inscrire' :
			connexionControle_inscrireAction();
		break;
		case 'oublier' :
			connexionControle_oublierAction();
		break;
		default : 
			connexionControle_formAction();
		break;
	}
}


// Voir la notion de paramètres par défaut dans une fonction PHP !
function connexionControle_formAction($message=null) {
    $titreOnglet="M2L-Connexion";
    $titrePage='Se connecter à '.Config::APPLI_NAME.' '.Config::APPLI_VERSION;
    $alerte = $message;
	require '../page/connexionPage.php';
}

function connexionControle_connecterAction() {
	
	if (true){
        accueilControle_defaultAction();
	}
	else
	{
		connexionControle_formAction("Identifiants inconnus !");
	}
}

function connexionControle_oublierAction($message=null) {
 
}
function connexionControle_inscrireAction($message=null) {

}


