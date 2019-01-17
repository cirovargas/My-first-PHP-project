<?php

include "mysql_connect.php";


$evento = $_GET['cod'];
$user = $_GET['user'];


$exclui = mysql_query("DELETE FROM tbl_matricula WHERE tbl_evento_cod_evento ='$evento' AND tbl_usuario_cod_user='$user'");


if($exclui == TRUE)
{
		echo "<script> alert ('Matricula cancelada com sucesso') </script>";
		echo "<script> location.href = ('admineventos.php') </script>";
		exit();

}

?>