<?php require_once("fonctions.php");?>
<?php
if(isset($_POST['idfournisseur']))
{
  $third_del_id = $_POST['idfournisseur'];
  $sql = 'DELETE FROM `fournisseur` WHERE `idfournisseur` ="'.$third_del_id.'"';
  mysql_query($sql);
  $DB_TABLE_NAME = "produit";
  $sql2 = "SELECT * FROM `" . $DB_TABLE_NAME . "`";
  $req2 = mysql_query($sql2) or die(mysql_error());
?>
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
                                            
                                           

                                            <td id="nom-<?php echo $user['idfournisseur']; ?>"><center><?php echo $user['Nom']; ?></center></td>

                                            <td id="prenom-<?php echo $user['idfournisseur']; ?>" ><center><?php echo $user['Prenom']; ?></center></td>


                                           
                                            <td><a href="modifierfour.php?idfournisseur=<?php echo $user['idfournisseur'];?>"><center><img src='images/user_edit.png' alt='' title='' border='0' /></center></a></td>
                                            <td><a  name="del_third"  onclick="delete_sara('<?php echo $user['idfournisseur']; ?>')"><center><img src='images/supprimer.png' alt='' title='' border='0' /></center></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
    </tbody>
</table> 
<?php }?>
