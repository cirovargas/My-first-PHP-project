<?php

include "mysql_connect.php";


$cod = $_GET['user'];


$exclui = mysql_query("DELETE FROM tbl_usuario WHERE cod_user='$cod'");


if($exclui == TRUE)
{
		echo "<script> alert ('Usuario excluido com sucesso') </script>";
		echo "<script> location.href = ('adminusuarios.php') </script>";
		exit();
	
	
}



?>