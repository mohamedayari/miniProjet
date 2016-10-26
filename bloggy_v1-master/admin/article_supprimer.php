<?php
include("../classes/Article.php");
$art = new article();
$art->_id = $_REQUEST['id'];
$art->supprimer();
$retour = 10;
header("Location: article_liste.php?retoursup=$retour");
?>