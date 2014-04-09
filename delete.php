<?php require_once("fonctions.php");?>
<?php
if(isset($_POST['ref']))
{
  $third_del_id = $_POST['ref'];
  $sql = 'DELETE FROM `produit` WHERE `ref` ="'.$third_del_id.'"';
  mysql_query($sql);
  $DB_TABLE_NAME = "produit";
  $sql2 = "SELECT * FROM `" . $DB_TABLE_NAME . "`";
  $req2 = mysql_query($sql2) or die(mysql_error());
?>
<table id="rounded-corner">
    <thead>
      <tr>
          <!--<th scope="col" class="rounded-company"></th>-->
            <th  class="rounded">Catégorie</th>
            <th  class="rounded">Réference:</th>
            <th  class="rounded">Nom</th>
            <th  class="rounded">Marque</th>
      <th  class="rounded">Prix</th>
            <th  class="rounded">Modifier</th>
            <th  class="rounded-q4">Supprimer</th>
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
                                            <td><a href="modifier.php?ref=<?php echo $user['ref'];?>"><img src='images/user_edit.png' alt='' title='' border='0' /></a></td>
                                            <td><a  name="del_third"  onclick="delete_sara('<?php echo $user['ref']; ?>')"><img src='images/supprimer.png' alt='' title='' border='0' /></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
    </tbody>
</table> 
<?php }?>
