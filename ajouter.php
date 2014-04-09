<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ajouter un produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />
</head>
<body>
<?php
include('fonctions.php');
?>
<center>
 <div class="right_header">Bienvenue admin, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
<center><h3 id="blink">Ajouter un nouveau produit</h3></center>
<form action="ajouter.php" method="POST" id="rounded-corner">
<div class="main_cont">
<table border="0" bgcolor="#99CCFF" width="100%">
<tr><th>Catégorie</th><td><select name="cat" class="tabinput"> 
<option value="PC">Ordinateur Personnel</option>
<option value="Souris">Souris</option>
<option value="Carte mere">Carte mere</option>
<option value="Disque Dure">Disque Dure</option>
<option value="Ecran">Ecran</option>
<option value="USB">USB</option>
<option value="Routeur">Routeur</option>
<option value="Clavier">Clavier</option>
</select></td></tr>
<tr><th>Réference:</th><td><input type="text" name="ref" class="tabinput"></td></tr>
<tr><th>Nom:</th><td><input type="text" name="nom" class="tabinput"></td></tr>
<tr><th>Marque:</th><td><input type="text" name="marque" class="tabinput"></td></tr>
<tr><th>Prix:</th><td><input type="text" name="prix"  class="tabinput"></td></tr>
</table>
</br><center>
<input type="submit" class="NFButton"value="Ajouter"> &nbsp;&nbsp;<input type="reset"  class="NFButton" id="submit" value="Effacer">&nbsp;&nbsp;<a href="GestionProduit.php" class="NFButton">Retour</a>
</center>
</div>
</form>
</center>
<?php


if(isset($_POST['cat']) and isset($_POST['ref']) and isset($_POST['nom']) and isset($_POST['marque']) and 
isset($_POST['prix']))
{

if(!empty($_POST['cat']) or !empty($_POST['ref']) or !empty($_POST['nom']) or 
!empty($_POST['marque']) or !empty($_POST['prix']))
{

$sql1="select * from produit where ref='".$_POST['ref']."'";
$resultat=mysql_query($sql1) or die('erreur exec recet');
if(mysql_num_rows($resultat)==0)
{
$sql2="insert into produit 
values('".$_POST['ref']."','".$_POST['cat']."','".$_POST['nom']."','".$_POST['prix']."','".$_POST['marque']."')";
mysql_query($sql2);
deconnexion();
alerte("Le produit ".$_POST['nom']." est ajouté avec succés");
}
else
alerte('le produit existant');
}
else
alerte('Remplir les champs');
}
else
//alerte('Les variables non existants');
?>
<div class="footer_login">
    
    	<div class="left_footer_login" style="position:absolute;top:80%;">&copy; 2013 , Design: Oussama IJER</div>
    	<div class="right_footer_login" style="position:absolute;top:80%; left:60%;">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>
</body>
</html>