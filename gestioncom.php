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
include('fonctions.php');?>
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
						 <li><a href="ajoutercommandeappro.php">Ajouter une commande</a></li>
					 
                        
                    </div> 
                    
                                                         
    <div class="center_content">  
            
        <div class="right_content">            
        
    <h2 id="blink">Choisir une action:</h2> 
                    
                    
<table id="rounded-corner">
    <thead>
    	<tr>
        	<!--<th scope="col" class="rounded-company"></th>-->
			<th  class="rounded">Ref_produit :</th>
            <th  class="rounded">Ref_commande :</th>
			
            <th  class="rounded">Ref_fournisseur :</th>
			  <th  class="rounded">Date commande:</th>
			  <th  class="rounded">Quantité:</th>
			
      
        </tr>
    </thead>
        
    <tbody>
	<?php
	$req="select c.idappro, c.idfournisseur, c.date, p.Quantite, p.ref from commandeappro c, contient p where c.idappro = p.idappro order by p.idappro asc";
	$res=mysql_query($req)or die(mysql_error());
	
  while($ligne=mysql_fetch_assoc($res)){
    	echo"<tr>";
        	//echo"<td><input type='checkbox' name="" /></td>";
            echo "<td>".$ligne['ref']."</td>";
		   echo "<td>".$ligne['idappro']."</td>";
			echo "<td>".$ligne['idfournisseur']."</td>";
            echo"<td> ".$ligne['date']."</td>";
			echo"<td> ".$ligne['Quantite']."</td>";
            			
           
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
</html>