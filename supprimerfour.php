<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Suppression de fournisseur</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
include('fonctions.php');

$id=$_GET["idfournisseur"];
$sql="delete from fournisseur where idfournisseur='".$_GET["idfournisseur"]."'";
mysql_query($sql) or die('Erreur de suppression d utilisateur');

alerte("Le produit ".$_GET['idfournisseur']." est supprimé aveca succés");

echo'<meta http-equiv="refresh" content="0; url=Gestionfour.php " />';
?>
</body>
</html>