<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Modifier un utilisateur</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<?php  
$a=$_GET['id'];
include('fonctions.php'); 

if(isset($_GET['id']))
{
echo "aaa";
$sql1="select * from utilisateur where id='".$_GET['id']."'";
$r1=mysql_query($sql1);
while($enreg=mysql_fetch_array($r1))
{
?>
<center>
 <div class="right_header">Bienvenue <?php echo  $_SESSION["login"]?>, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
<h3 id="blink">Modification d'utilisateur : <?php echo $_GET['id'] ?></h3></br></br>
<form id="rounded-corner" action="modifierutil.php" method="post">
<center><div class="main_cont"><table  border="0" bgcolor="#99CCFF" width="100%">
<tr><td bgcolor="#00FF99">Id</td><td><input type="text" name="id" value="<?php echo $enreg['id']; ?>"></td></tr>
<tr><td bgcolor="#00FF99">Nom</td><td><input type="text" name="Nom" value="<?php echo $enreg['Nom']; ?>"></td></tr>
<tr><td bgcolor="#00FF99">Prénom</td><td><input type="text" name="Prenom" value="<?php echo $enreg['Prenom']; ?>"></td></tr>
<tr><td bgcolor="#00FF99">Login</td><td><input type="text" name="Log" value="<?php echo $enreg['Login']; ?>"></td></tr>
<tr><td bgcolor="#00FF99">Password</td><td><input type="password" name="pass" value="<?php echo $enreg['Password']; ?>"></td></tr>
<tr><td bgcolor="#00FF99">Email</td><td><input type="text" name="Email" value="<?php echo $enreg['Email']; ?>"></td></tr>
</table>

</br></br>

<input type="submit" value="Modifier" class="NFButton"> &nbsp;&nbsp;<input type="reset" value="Annuler" class="NFButton">&nbsp;&nbsp; <a href="Gestionutil.php" class="NFButton">Retour</a>
<!--<input type="hidden" name="id" value="//<?php echo $_GET['id']; ?>//">-->
</center>
</div>
</form>
</center>
<?php

}
}

// mise à jour de produit

if(isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Log']) and isset($_POST['pass']) and isset($_POST['Email']))
{

alerte('connexion avec succés');
$sql="update utilisateur set Nom='".$_POST['Nom']."', Prenom='".$_POST['Prenom']."', Login='".$_POST['Log']."', Password='".$_POST['pass']."', Email='".$_POST['Email']."' where id='".$_POST['id']."'";
mysql_query($sql);
alerte('La modification est fait avec succés');
header('location:Gestionutil.php');
 }
deconnexion();
?>
</br></br>
<div class="footer_login">
    
    	<div class="left_footer_login" style="position:absolute;top:80%;">&copy; 2013 , Design: Oussama IJER</div>
    	<div class="right_footer_login" style="position:absolute;top:80%; left:60%;">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>
</body>
</html>