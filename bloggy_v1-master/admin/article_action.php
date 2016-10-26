<?php
	// Récupérer les valeurs des champs
	$titre 		= $_POST['titre'];
	$texte 	= $_POST['texte'];


	require_once("../classes/Article.php");
	$article = new Article();
	
	$article->_titre = $titre;
	$article->_texte = $texte;


	if($article->ajouter())
		$retour = 1;
	else
		$retour = -1;

	header("Location: article.php?retour=$retour");
	/*$a["retour"] = $retour;
	$a["sujet"] = $sujet;
	$a = array("retour" => $retour, "titre" => $titre);
	header('Content-Type: application/json');
	print json_encode($a);*/

