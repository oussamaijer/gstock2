<?php
//fonction pour la connexion au serveur et la base
session_start();
mysql_connect('localhost','root','') or die('Impossible d\'accerder auserveur');
mysql_select_db('scoop') or die('Impossible d\'acceder à la base');

function alerte($ch)
{
$code="<script type=\"text/javascript\">";
$code.="alert('$ch');";
$code.="</script>";
echo $code;
}
function deconnexion()
{
mysql_close();
}
?>