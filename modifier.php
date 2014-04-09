<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Modifier un produit</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
 <div class="right_header">Bienvenue admin, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
<?php  include('fonctions.php'); 

if(isset($_GET['ref']))
{

$sql1="select * from produit where ref='".$_GET['ref']."'";
$r1=mysql_query($sql1);
while($enreg=mysql_fetch_array($r1))
{
?>
<center>
<h3 id="blink">Modification du produit : <?php echo $_GET['ref'] ?></h3></br></br></br>

<form action="modifier.php" method="post" id="rounded-corner">
<center> <div class="main_cont"><table border="0"  width="100%"  >
<tr><td bgcolor="#00FF99">ref</td><td><input type="text" name="ref" 
value="<?php echo $enreg['ref']; ?>" class="tabinput"></td></tr>
<tr><td bgcolor="#00FF99">Nom</td><td><input type="text" name="nom" 
value="<?php echo $enreg['nom']; ?>" class="tabinput"></td></tr>
<tr><td bgcolor="#00FF99">Marque</td><td><input type="text" 
name="marque" value="<?php echo $enreg['marque']; ?>" class="tabinput"></td></tr>
<tr><td bgcolor="#00FF99">Prix</td><td><input type="text" name="prix" 
value="<?php echo $enreg['prix']; ?>" class="tabinput"></td></tr>
</table>

</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Modifier" class="NFButton"> &nbsp;&nbsp;<input type="reset" value="Annuler" class="NFButton"> &nbsp;&nbsp;<a href="GestionProduit.php" class="NFButton">Retour</a>
<!--<input type="hidden" name="reference" value="//<?php echo $_GET['ref']; ?>//">-->

</center>
</div>
</form>

</center>
<?php

}
}
// mise à jour de produit
if(isset($_POST['nom']) and isset($_POST['marque']) and isset($_POST['prix']))
{
alerte('connexion avec succés');
$sql="update produit set nom='".$_POST['nom']."', marque='".$_POST['marque']."', prix='".$_POST['prix']."' where ref='".$_POST['ref']."'";
mysql_query($sql);
alerte('La modification est fait avec succés');
 header('location:GestionProduit.php');
 }

deconnexion();
?>
<div class="footer_login">
    
    	<div class="left_footer_login" style="position:absolute;top:80%;">&copy; 2013 , Design: Oussama IJER</div>
    	<div class="right_footer_login" style="position:absolute;top:80%; left:60%;">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>
</body>
</html>