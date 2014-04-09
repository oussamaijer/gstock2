<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Chercher un produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />
</head>
<body>
 <div class="right_header">Bienvenue admin, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
<?php 
include('fonction.php'); ?>
<center>
<h3 id="blink">Rechercher un produit</h3> </br></br>


</center>
<div class="main_cont">
<?php
if(isset($_POST['mc'])) // variable existant
{
if(!empty($_POST['mc'])) //champs non vide
{
connexion();
$sql1="select * from produit where ref='".$_POST['mc'].
"' or nom='".$_POST['mc']."' or marque='".$_POST['mc'].
"' or prix='".$_POST['mc']."' or cat='".$_POST['mc']."'";
$resultat=mysql_query($sql1) or die('erreur dans le requete');
echo "<center> <b>Il y a ".mysql_num_rows($resultat)." Produit(s)</b></center><br><br>";
?>
<center>
<table border="1" id="rounded-corner" width="100%" style="position:absolute;left:-4%;">
<tr 
bgcolor="#99FF33"><th>Catégorie</th><th>Réference</th><th>Nom</th><th>Marque</th><th>Prix</th></tr>
<?php
while($enreg=mysql_fetch_array($resultat))
{//debut de while
?>
<tr><td><?php echo $enreg['cat']; ?></td>
<td><?php echo $enreg['ref']; ?></td>
<td><?php echo $enreg['nom']; ?></td>
<td><?php echo $enreg['marque']; ?></td>
<td><?php echo $enreg['prix']; ?></td>

</tr>

<?php
} // fin de while
echo "</table>";
deconnexion();
} // fin de if de champs vide
else // si le champs mc est vide
alerte('Taper un mot cle');
} //fin de if de variable existants
?>

</center>
<center><a href="GestionProduit.php" class="NFButton">Retour</a></center>
</div>
<div class="footer_login">
    
    	<div class="left_footer_login" style="position:absolute;top:80%;">&copy; 2013 , Design: Oussama IJER</div>
    	<div class="right_footer_login" style="position:absolute;top:80%; left:60%;">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>
</body>
</html>