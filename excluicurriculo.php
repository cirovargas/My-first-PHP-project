<?php

include "mysql_connect.php";


$cod = $_GET['cod'];


$exclui = mysql_query("DELETE FROM tbl_curriculos WHERE cod_curriculo='$cod'");


if($exclui == TRUE)
{
		echo "<script> alert ('Curriculo excluido com sucesso') </script>";
		echo "<script> location.href = ('admincurriculos.php') </script>";
		exit();
	
	
}

?>