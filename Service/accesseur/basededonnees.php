<?php 

	$base = "inspiration";
	$hote = "localhost";
	$usager = "root";
	$motdepasse = "Icecold357";
	$dsn = "mysql:dbname=".$base.";host=" . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);

?>
