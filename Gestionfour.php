<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestion des fournisseurs</title>
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
    					 <li><a href="Gestionfour.php">Gestion des fournisseurs</a></li>
						 <li><a href="Ajouterfour.php">Ajouter un fournisseur</a></li>
						<!-- <li><a href="Gestioncom.php">Gestion des commandes</a></li>-->
					 
                        
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
            <th  class="rounded">Modifier</th>
            <th  class="rounded-q4">Supprimer</th>
        </tr>
    </thead>
        
    <tbody>
	<?php
    $res=mysql_query("select * from fournisseur order by idfournisseur asc");
                        while ($user = mysql_fetch_assoc($res))
                                    {
                                    ?>
                                        <tr>
                                            <td id="idfournisseur-<?php echo $user['idfournisseur']; ?>"  readonly="readonly" disabled="disabled"><center><?php echo $user['idfournisseur']; ?></center></td>
                                            
                                            <td id="nom-<?php echo $user['Nom']; ?>"><center><?php echo $user['Nom']; ?></center></td>

                                            <td id="prenom-<?php echo $user['Prenom']; ?>"><center><?php echo $user['Prenom']; ?></center></td>

                                           
                                            <td><a href="modifierfour.php?idfournisseur=<?php echo $user['idfournisseur'];?>"><center><img src='images/user_edit.png' alt='' title='' border='0' /></center></a></td>
											
                                            <td><a href="supprimerfour.php?idfournisseur=<?php echo $user['idfournisseur'];?>" name="del_third"><center><img src='images/supprimer.png' alt='' title='' border='0'/></center></a></td>
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
<script type="text/javascript" src="deletefour_ajax.js"></script>
</html>