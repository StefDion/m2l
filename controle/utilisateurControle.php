<?php

function utilisateurControle($action) {
	// Sélecteur d'actions.
	switch ($action) {
		case 'deconnecte' :
			utilisateurControle_deconnecteAction();
		break;
		default :
            utilisateurControle_defaultAction();
		break;
	}
}


// Voir la notion de paramètres par défaut dans une fonction PHP !
function utilisateurControle_deconnecteAction($message=null) {
    connexionControle_formAction("Vous pouvez vous reconnecter!");
}


function utilisateurControle_defaultAction($message=null) {
    $titreOnglet="M2L - Utilisateur";
    $titrePage="Utilisateur";
    require '../page/utilisateurPage.php';
}
