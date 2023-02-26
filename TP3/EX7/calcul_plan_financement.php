<?php
$fonction = $_POST['fonction'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$montant = floatval($_POST['montant']);
$duree = intval($_POST['duree']);
$assurance = isset($_POST['assurance']);

// Validation des données saisies
if ($nom == '' || $prenom == '') {
	echo "Le nom et le prénom sont obligatoires.";
} elseif (!is_numeric($montant)) {
	echo "Le montant de financement doit être un nombre réel.";
} elseif (!is_int($duree) || $duree < 6 || $duree > 300) {
	echo "La durée doit être un entier entre 6 et 300 mois.";
} else {
	// Calcul du taux en fonction de la fonction du client
	switch ($fonction) {
		case 'salarié':
			$taux = 0.05;
			break;
		case 'fonctionnaire':
			$taux = 0.04;
			break;
		case 'profession_libérale':
			$taux = 0.06;
			break;
	}

	// Calcul de la mensualité
	$taux_mensuel = $taux / 12;
	$mensualite = $montant * $taux_mensuel / (1 - pow(1 + $taux_mensuel, -$duree));

	// Ajout de l'assurance si nécessaire
	if ($assurance) {
		$mensualite += $montant * 0.0004;
	}

	// Affichage du plan de financement
	echo "Plan de financement pour $nom $
