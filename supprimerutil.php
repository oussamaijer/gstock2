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

$id= $_GET["id"];
$sql="delete from Utilisateur where id='".$id."'";
mysql_query($sql) or die('Erreur de suppression d utilisateur');
echo "<center>L'utilisateur:".$_GET['id']." est supprimé avec succés</center>";
?>
</body>
</html>