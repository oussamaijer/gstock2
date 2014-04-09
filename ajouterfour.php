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
 <div class="right_header">Bienvenue <?php echo  $_SESSION["login"]?>, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
<center>
<h3 id="blink">Ajouter un nouvel fournisseur</h3></br></br>
<form action="ajouterfour.php" method="POST" id="rounded-corner">
<div class="main_cont">
<table border="0" bgcolor="#99CCFF" width="100%">
<tr><th>id:</th><td><input type="text" name="id" class="tabinput"></td></tr>
<tr><th>Nom:</th><td><input type="text" name="nom" class="tabinput"></td></tr>
<tr><th>Prénom:</th><td><input type="text" name="prenom" class="tabinput"></td></tr>

</table>

</br></br></br><center>
<input type="submit" class="NFButton"value="Ajouter"> &nbsp;&nbsp;<input type="reset"  class="NFButton" id="submit" value="Effacer">&nbsp;&nbsp;<a href="Gestionfour.php" class="NFButton" >Retour</a>
</center>
</div>
</form>
</center>
<?php

if(isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']))
{
if(!empty($_POST['id']) or !empty($_POST['nom']) or !empty($_POST['prenom']))
{

$sql1="select * from fournisseur where idfournisseur='".$_POST['id']."'";
$resultat=mysql_query($sql1) or die('erreur exec recet');
if(mysql_num_rows($resultat)==0)
{
$sql2="insert into fournisseur values('".$_POST['id']."','".$_POST['nom']."','".$_POST['prenom']."')";
mysql_query($sql2);
deconnexion();
alerte("Le fournisseur ".$_POST['nom']." est ajouté avec succés");
}
else
alerte('Le fournisseur existe déja\' ');
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