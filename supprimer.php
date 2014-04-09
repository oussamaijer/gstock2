<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Suppression de produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
include('fonctions.php');

$ref= $_GET["ref"];
$sql="delete from produit where ref='".$ref."'";
mysql_query($sql) or die('Erreur de suppression de produit');
alerte("Le produit ".$_GET['ref']." est supprimé aveca succés");

echo'<meta http-equiv="refresh" content="0; url=GestionProduit.php " />';

?>
</body>
</html>