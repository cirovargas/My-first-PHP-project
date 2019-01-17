<?php


session_start();
include "mysql_connect.php";


$cod = $_GET['cod'];


$exclui = mysql_query("DELETE FROM tbl_evento WHERE cod_evento='$cod'");

$exclui2 = mysql_query("DELETE FROM tbl_matricula WHERE tbl_evento_cod_evento = '$cod'");



if($exclui == TRUE && $exclui2 == TRUE)
{
		echo "<script> alert ('Evento excluido com sucesso') </script>";
		echo "<script> location.href = ('admineventos.php') </script>";
		exit();
}

?>