<?php


function parametresControle($action) {
	// Sélecteur d'actions
	switch ($action) {
		default : 
			parametresControle_defaultAction();
		break;
	}
}

function parametresControle_defaultAction() {
    $titreOnglet="M2L - Paramètres";
    $titrePage="Paramètres";
	require '../page/parametresPage.php';
}
