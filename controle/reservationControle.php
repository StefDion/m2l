<?php
function reservationControle($action) {
	// Choix en fonction de l'action
	switch ($action) {
		default : 
			reservationControle_defaultAction();
		break;
	}
}

function reservationControle_defaultAction() {
    $titreOnglet="M2L - Réservations";
    $titrePage="Réservations";
	require '../page/reservationPage.php';
}

