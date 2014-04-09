<?php
//fonction pour la connexion au serveur et la base
function connexion(){
mysql_connect('localhost','root','') or die('Impossible d\'accerder auserveur');
mysql_select_db('scoop') or die('Imppossible d\'acceder à la base');
}
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