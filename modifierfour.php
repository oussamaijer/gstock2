<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Modifier un fournisseur:</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
 <div class="right_header">Bienvenue admin, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
<?php  
include('fonctions.php'); 

if(isset($_GET['idfournisseur']))
{

$sql1="select * from fournisseur where idfournisseur='".$_GET['idfournisseur']."'";
$r1=mysql_query($sql1);
while($enreg=mysql_fetch_array($r1))
{
?>
<center>
<h3 id="blink">Modification du fournisseur : <?php echo $_GET['idfournisseur']; ?></h3></br></br></br>

<form  id="rounded-corner" action="modifierfour.php" method="POST">
<center><div class="main_cont"><table border="0" width="100%">
<tr><td bgcolor="#00FF99">ID</td><td><input type="text" name="idfournisseur" value="<?php echo $enreg['idfournisseur']; ?>" class="tabinput"></td></tr>
<tr><td bgcolor="#00FF99">Nom</td><td><input type="text" name="Nom" value="<?php echo $enreg['Nom']; ?>" class="tabinput"></td></tr>
<tr><td bgcolor="#00FF99">Prénom</td><td><input type="text" name="Prenom" value="<?php echo $enreg['Prenom']; ?>" class="tabinput"></td></tr>

</table>

</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Modifier" class="NFButton"> &nbsp;&nbsp;<input type="reset" value="Annuler" class="NFButton">  &nbsp;&nbsp;<a href="Gestionfour.php" class="NFButton">Retour</a>
<!--<input type="hidden" name="id" value="//<?php echo $_GET['idfournisseur']; ?>//">-->
</center>
</div>
</form>
</center>
<?php

}
}?>
<?php
if(isset($_POST['Nom']) and isset($_POST['Prenom']))
{

$sql="update fournisseur set Nom='".$_POST['Nom']."', Prenom='".$_POST['Prenom']."' where idfournisseur='".$_POST['idfournisseur']."'";
mysql_query($sql);
alerte('La modification est fait avec succés');
header('location:Gestionfour.php');

 }
deconnexion();
?>
<br><br>
   <div class="footer_login"> 
    	<div class="left_footer_login" style="position:absolute;top:80%;">&copy; 2013 , Design: Oussama IJER</div>
    	<div class="right_footer_login" style="position:absolute;top:80%; left:60%;">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>
</body>
</html>