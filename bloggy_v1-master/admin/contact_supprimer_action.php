<?php
	$id = $_GET['id'];

	require_once("../classes/Contact.php");
	$contact = new Contact();
	$contact->_id = $id;

	$contact->supprimer($id);

	header("Location: contact_liste.php");	