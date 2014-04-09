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
<h3 id="blink">Ajouter un nouvel utilisateur </h3></br></br>
<form action="ajouterutil.php" method="POST" id="rounded-corner">
<div class="main_cont">
<table border="0" bgcolor="#99CCFF" width="100%">
<tr><th>id:</th><td><input type="text" name="id" class="tabinput"></td></tr>
<tr><th>Nom:</th><td><input type="text" name="Nom" class="tabinput"></td></tr>
<tr><th>Prénom:</th><td><input type="text" name="Prénom" class="tabinput"></td></tr>
<tr><th>Login:</th><td><input type="text" name="Log" class="tabinput"></td></tr>
<tr><th>Password:</th><td><input type="password" name="pass" class="tabinput"></td></tr>
<tr><th>Email:</th><td><input type="text" name="Email"  class="tabinput"></td></tr>
</table>
</br><center>
<input type="submit" class="NFButton"value="Ajouter"> &nbsp;&nbsp;<input type="reset"  class="NFButton" id="submit" value="Effacer">&nbsp;&nbsp;<a href="Gestionutil.php" class="NFButton">Retour</a>
</center>
</div>
</form>
</center>
<?php

if(isset($_POST['id']) and isset($_POST['Nom']) and isset($_POST['Prénom']) and isset($_POST['Log']) and isset($_POST['pass']) and 
isset($_POST['Email']))
{
if(!empty($_POST['id']) or !empty($_POST['Nom']) or !empty($_POST['Prénom']) or !empty($_POST['Log']) or 
!empty($_POST['pass']) or !empty($_POST['Email']))
{

$sql1="select * from utilisateur where id='".$_POST['id']."'";
$resultat=mysql_query($sql1) or die('erreur exec recet');
if(mysql_num_rows($resultat)==0)
{
$sql2="insert into utilisateur values('".$_POST['id']."','".$_POST['Nom']."','".$_POST['Prénom']."','".$_POST['Log']."','".$_POST['pass']."','".$_POST['Email']."')";
mysql_query($sql2);
deconnexion();
alerte("L'utilisateur".$_POST['Nom']." est ajouté avec succés");
}
else
alerte('L\'utilisateur existe déja\' ');
}
else
alerte('Remplir les champs');
}
else
//alerte('Les variables non existants');
?>
<div class="footer_login">
    
    	<div class="left_footer_login" style="position:absolute;top:80%;">&copy; 2013 , Design: Ossama IJER</div>
    	<div class="right_footer_login" style="position:absolute;top:80%; left:60%;">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>
</body>
</html>