<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestion des utilisateurs</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />

</head>
<body>
<?php
include("fonctions.php");?>
<div id="main_container">

	<div class="header">

    
    <div class="right_header">Bienvenue <?php echo  $_SESSION["login"]?>, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
    
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="GestionProduit.php">Accueil</a></li>
    					 <li><a href="Gestionutil.php">Gestion des utilisateurs</a></li>
						 <li><a href="Ajouterutil.php">Ajouter un utilisateur</a></li>
					 
                        
                    </div> 
                    
                                                         
    <div class="center_content">  
            
        <div class="right_content">            
        
    <h2 id="blink">Choisir une action:</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	<!--<th scope="col" class="rounded-company"></th>-->
            <th  class="rounded">id</th>
			<th  class="rounded">Nom</th>
            <th  class="rounded">Prénom</th>
            <th  class="rounded">Login</th>
            <th  class="rounded">Password</th>
			  <th  class="rounded">Email</th>
            <th  class="rounded">Modifier</th>
            <th  class="rounded-q4">Supprimer</th>
        </tr>
    </thead>
        
    <tbody>
	 <?php
    $res=mysql_query("select * from utilisateur order by id asc");
                        while ($user = mysql_fetch_assoc($res))
                                    {
                                    ?>
                                        <tr>
                                            <td id="id-<?php echo $user['id']; ?>"  readonly="readonly" disabled="disabled"><center><?php echo $user['id']; ?></center></td>
                                            
                                            <td id="Nom-<?php echo $user['Nom']; ?>"><center><?php echo $user['Nom']; ?></center></td>

                                            <td id="Prenom-<?php echo $user['Prenom']; ?>"><center><?php echo $user['Prenom']; ?></center></td>

                                            <td id="Login-<?php echo $user['Login']; ?>" ><center><?php echo $user['Login']; ?></center></td>


                                            <td id="Password-<?php echo $user['Password']; ?>"><center><?php echo $user['Password']; ?></center></td>
											 <td id="Email-<?php echo $user['Email']; ?>"><center><?php echo $user['Email']; ?></center></td>
                                            <td><a href="modifierutil.php?id=<?php echo$user['id']; ?>"><img src='images/user_edit.png' alt='' title='' border='0' /></a></td>
                                            <td><a  name="del_third"  onclick="delete_sara('<?php echo $user['id']; ?>')"><center><img src='images/supprimer.png' alt='' title='' border='0' /></center></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>



   
        
    </tbody>
</table> 
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                  
                   
       
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer_login">&copy; 2013 , Design: Oussama IJER-</div>
    	<div class="right_footer_login">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>

</div>		
</body>
<script src="deleteutil_ajax.js"></script>
</html>