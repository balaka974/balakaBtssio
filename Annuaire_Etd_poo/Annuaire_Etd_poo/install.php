<?php

/**
 * Ouvrir une connexion via PDO pour créer un
 * nouvelle base de données avec une table structurée.
 *
 */

	$host       = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "dbannuaire";
	$tbl        = "employes";
	$options    = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	  );
	try {
$cnx = new PDO('mysql:host=localhost;dbname=dbannuaire','root','');

if($cnx) echo "connection ok";



} catch(PDOException $event) {
    die('Attention Erreur : '.$event->getMessage());



}



?>