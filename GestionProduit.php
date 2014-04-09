<?php include("fonctions.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestion des produits</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css"  href="niceforms-default.css" />

</head>
<body>

<div id="main_container">

	<div class="header">

    
    <div class="right_header"> Bienvenue <?php echo  $_SESSION["login"]?>, | <a href="deconnexion.php" class="logout">Déconnexion</a></div>
     </div>
	
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="GestionProduit.php">Accueil</a></li>
                    <li><a href="ajouter.php">Ajout produits</a></li>
                    <li><a href="lister.php">Listes produits</a></li>
					 <!--<li><a href="Gestionutil.php">Gestion des utilisateurs</a></li>-->
					  <li><a href="Gestionfour.php">Gestion des fournisseurs</a></li>
					 
			<Form  method="post" action="chercher.php" name="search">
	    <input type="text" style="position:absolute; left:67%; top:105px; background:#efefef;"  name="mc"/>
		<input type="submit" style=" background: transparent;border: 0px;cursor: pointer; position:absolute; left:80%; top:109px;height:20px;width:50PX;"value="    ";>
		<img src="images/search.png"  border="0" style="position:absolute; left:80%; top:109px;" />
</Form>
                        
                    </div> 
                    
                                                         
    <div class="center_content">  
            
        <div class="right_content">            
        
    <h2 id="blink">Choisir une action:</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	
            <th  class="rounded"><center>Catégorie</center></th>
            <th  class="rounded"><center>Réference:</center></th>
            <th  class="rounded"><center>Nom</center></th>
            <th  class="rounded"><center>Marque</center></th>
			<th  class="rounded"><center>Prix</center></th>
            <th  class="rounded"><center>Modifier</center></th>
            <th  class="rounded-q4"><center>Supprimer</center></th>
        </tr>
    </thead>
        
    <tbody>
    <?php
    $res=mysql_query("select * from produit order by ref asc");
                        while ($user = mysql_fetch_assoc($res))
                                    {
                                    ?>
                                        <tr>
                                            <td id="cat-<?php echo $user['ref']; ?>"  readonly="readonly" disabled="disabled"><center><?php echo $user['cat']; ?></center></td>
                                            
                                            <td id="ref-<?php echo $user['ref']; ?>"><center><?php echo $user['ref']; ?></center></td>

                                            <td id="nom-<?php echo $user['ref']; ?>"><center><?php echo $user['nom']; ?></center></td>

                                            <td id="marque-<?php echo $user['ref']; ?>" ><center><?php echo $user['marque']; ?></center></td>


                                            <td id="prix-<?php echo $user['ref']; ?>"><center><?php echo $user['prix']; ?></center></td>
                                            <td>
											<a href="modifier.php?ref=<?php echo$user['ref']; ?>">
											<center><img src='images/user_edit.png' alt='' title='' border='0' /></center>
											</a>
											</td>
                                            <td><a href="supprimer.php?ref=<?php echo$user['ref']; ?>" name="del_third"  ><center><img src='images/supprimer.png' alt='' title='' border='0' /></center></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
    </tbody>
</table> 
     
     </div><!-- fin de right content-->
            
                    
  </div>   <!--fin de center content -->               
                  
                   
       
    <div class="clear"></div>
    </div> <!--fin de main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer_login">&copy; 2013 , Design: Oussama IJER-</div>
    	<div class="right_footer_login">&middot;<a href="#">Produits</a> &middot; <a href="#">Plan du site</a></p></div>
    
    </div>

</div>		
</body>
<script type="text/javascript" src="delete_ajax.js"></script>
</html>