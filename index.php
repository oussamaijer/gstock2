
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page protegée par mot de passe :Administrateur</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />

</head>
<body>

<center><h3><marquee align="right" width="700px">Bienvenue Administrateur</marquee></h3></center>
<center><h4 id="blink">Veuillez saisir votre Login et mot de passe</h4></center>
<div id="main_container">
     
         <div class="login_form">
         <form action="index.php" method="POST" name="authentification" class="niceform">
<br />   
                <fieldset>
				<center><h3 class="h3" id="blink">Connexion à la partie Back Office:</h3></center>
				</br>
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="login" id="inpu" size="54" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br/></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="pass" id="inpu" size="54" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br/></dd>
                    </dl>
                     <dl class="submit">
					          <input type="submit" name="connexion"  id="submit" value="Connexion" class="NFButton">
 <input type="reset" name="annuler"  id="submit" value="Annuler" class="NFButton"><br />
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>  
          
	<?php

include('fonctions.php');
mysql_connect("localhost","root","") or die("Impossible d\"accerder auserveur");
mysql_select_db("scoop") or die("Impossible d\"acceder à la base");
$trouve=false;
if(isset($_POST["login"]) and isset($_POST["pass"]))

{
 $login=$_POST["login"];
 $pass=$_POST["pass"];

 $result=mysql_query("select * from administrateur where Login_admin='$login' and Pass_admin='$pass'") ;
 while($ligne=mysql_fetch_array($result))
 {
 $trouve=true;
 $_SESSION["login"]=$ligne[0];
 $_SESSION["pass"]=$ligne[1];
 }
 if($trouve==true)
 {
header( "location: GestionProduit.php");
}
else
{
header("location :index.php");
alerte('Mot de passe incorrecte');

}
}

?>
    
    <div class="footer_login">
    	<div class="left_footer_login">&copy; 2013 , Design: Oussama IJER</div>
    	<div class="right_footer_login">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    </div>

</div>		
</body>
</html>