<?php
header('Access-Control-Allow-Origin: *');
$hote = '220.140.173.17';
$port = '1551'; // port par défaut
$service = 'YBHPROD';
$utilisateur = 'IY_ADMAA';
$motdepasse = 'IY_ADMAA';

$lien_base =
"oci:dbname=(DESCRIPTION =
(ADDRESS_LIST =
	(ADDRESS =
		(PROTOCOL = TCP)
		(Host = ".$hote .")
		(Port = ".$port."))
)
(CONNECT_DATA =
	(SERVICE_NAME = ".$service.")
)
)";
echo $lien_base;
try
{
	// connexion à la base Oracle et création de l'objet
	$connexion = new PDO($lien_base, $utilisateur, $motdepasse);
}
catch (PDOException $erreur)
{
	echo $erreur->getMessage();
}
?>