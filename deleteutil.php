<?php require_once("fonctions.php");?>
<?php
if(isset($_POST['id']))
{
  $third_del_id = $_POST['id'];
  $sql = 'DELETE FROM `utilisateur` WHERE `id` ="'.$third_del_id.'"';
  mysql_query($sql);
  $DB_TABLE_NAME = "utilisateur";
  $sql2 = "SELECT * FROM `" . $DB_TABLE_NAME . "`";
  $req2 = mysql_query($sql2) or die(mysql_error());
?>
<table id="rounded-corner">
    <thead>
      <tr>
          <!--<th scope="col" class="rounded-company"></th>-->
            <th  class="rounded">id</th>
            <th  class="rounded">Nom:</th>
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

                                            <td id="Prénom-<?php echo $user['Prenom']; ?>"><center><?php echo $user['Prenom']; ?></center></td>

                                            <td id="Login-<?php echo $user['Login']; ?>" ><center><?php echo $user['Login']; ?></center></td>


                                            <td id="Password-<?php echo $user['Password']; ?>"><center><?php echo $user['Password']; ?></center></td>
											<td id="Email-<?php echo$user['Email']; ?>"><center><?php echo $user['Email']; ?></center></td>
                                       <td><a href="modifierutil.php?id=<?php echo$user['id']; ?>"><img src='images/user_edit.png' alt='' title='' border='0' /></a></td>
                                            <td><a  name="del_third"  onclick="delete_sara('<?php echo $user['id']; ?>')"><center><img src='images/supprimer.png' alt='' title='' border='0' /></center></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
    </tbody>
</table> 
<?php }?>
