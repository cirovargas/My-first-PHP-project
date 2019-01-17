<?php

include "mysql_connect.php";


$cod = $_GET['cod'];


$exclui = mysql_query("DELETE FROM tbl_admin WHERE cod_admin='$cod'");


if($exclui == TRUE)
{
		echo "<script> alert ('Administrador excluido com sucesso') </script>";
		echo "<script> location.href = ('adminadministradores.php') </script>";
		exit();
	
	
}

?>