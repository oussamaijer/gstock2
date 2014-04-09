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

<center><h3 id="blink">Ajouter une commande</h3></center></br></br>
<form action="ajoutercommandeappro.php" method="POST" id="rounded-corner">
<div class="main_cont">
<table border="0" bgcolor="#99CCFF" width="100%" >

<?php
$rs=mysql_query("select ref from produit  order by ref asc");
echo"<tr><th>Réf_produit :</th><td><select name='ref' class='tabinput'>";
while ($ligne=mysql_fetch_array($rs))
{
 $i=0;
  echo" <option value='".$ligne[$i]."'>".$ligne[$i]."</option>";
$i++;
}
echo "</select></td></tr>";

?>
<tr><th>Ref_commande :</th><td><input type="text" name="com" class="tabinput"></td></tr>
<tr><th>Quantité:</th><td><input type="text" name="quantite" class="tabinput"></td></tr>
<tr><th>Ref_fournisseur :</th><td><input type="text" name="reff" class="tabinput"></td></tr>
<tr><th>Date commnde:</th><td><input type="text" name="date" class="tabinput"></td></tr>
</table>
</br><center>
<input type="submit" class="NFButton"value="Ajouter"> &nbsp;&nbsp;<input type="reset"  class="NFButton" id="submit" value="Effacer">&nbsp;&nbsp;<a href="Gestioncom.php" class="NFButton">Retour</a>
</center>
</div>
</form>
</center>
<?php
if(isset($_POST['ref']) and isset($_POST['com']) and isset($_POST['quantite']) and isset($_POST['reff']) and 
isset($_POST['date']))
{
if(!empty($_POST['ref']) or !empty($_POST['com']) or !empty($_POST['quantite']) or 
!empty($_POST['reff']) and !empty($_POST['date']))
{

$sql1="select * from contient where ref='".$_POST['ref']."'";
$resultat=mysql_query($sql1) or die('erreur exec recet');
if(mysql_num_rows($resultat)==0)
{
$sql2="insert into contient 
values('".$_POST['ref']."','".$_POST['com']."','".$_POST['quantite']."')";
mysql_query($sql2);
mysql_query("insert into commandeappro values('".$_POST['com']."','".$_POST['reff']."','".$_POST['date']."')");
deconnexion();
alerte("Le commande  est effectué avec succés");
}
else
mysql_query("update contient set Quantite='".$_POST['quantite']."' where ref='".$_POST['ref']."'");
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