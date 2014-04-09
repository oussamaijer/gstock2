<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Lister  les produits</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />
</head>
<body>
 <div class="right_header">Bienvenue admin, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
<center><H3 id="blink"> Lister les produits par :</H3></center>
<?php  include('fonction.php');?>
<center>
<p>
<form name="trie" action="lister.php" method="post"  ><div class="main_cont">
Catégorie <input type="radio" name="t" value="cat"> &nbsp;&nbsp;
Nom <input type="radio" name="t" value="nom">&nbsp;&nbsp;
Marque <input type="radio" name="t" value="marque">&nbsp;&nbsp;
Prix <input type="radio" name="t" value="prix"> 
</p>
<p>
<input class="NFButton" type="submit" value="Trier">&nbsp;&nbsp;<a href="GestionProduit.php" class="NFButton">Retour</a></p>

<?php
if(isset($_POST['t']))
{
switch($_POST['t']){
case 'cat' :trie('cat');break;
case 'marque' :trie('marque');break;
case 'nom' :trie('nom');break;
case 'prix' :trie('prix');break;
}
}
function trie($var){
connexion();
$sql="select * from produit order by ".$var;
$resultat=mysql_query($sql);
echo "<center><table border=1 id='rounded-corner' width='90%' style='position:absolute;  right:-5%; '>";
echo "<tr><th bgcolor=\"#87CEFA\">Réference</th><th bgcolor=\"#87CEFA\">Catégorie</th><th bgcolor=\"#87CEFA\">Nom</th><th bgcolor=\"#87CEFA\">Prix</th></tr>";
while($enreg=mysql_fetch_array($resultat)){
echo"<tr><td>".$enreg['ref']."</td><td>".$enreg['cat']."</td><td>".$enreg['nom']."</td><td>".$enreg['prix']."</td></tr>";
}
echo "</table></center>";
}
?>
</div>
</form>

</center>
<div class="footer_login">
    
    	<div class="left_footer_login" style="position:absolute;top:80%;">&copy; 2013 , Design: Oussama IJER</div>
    	<div class="right_footer_login" style="position:absolute;top:80%; left:60%;">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>
</body>
</html> 