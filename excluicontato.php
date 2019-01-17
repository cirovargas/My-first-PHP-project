<?php

include "mysql_connect.php";


$cod = $_GET['cod'];


$exclui = mysql_query("DELETE FROM tbl_contato WHERE cod_contato='$cod'");


if($exclui == TRUE)
{
		echo "<script> alert ('Mensagem excluida com sucesso') </script>";
		echo "<script> location.href = ('admincontatos.php') </script>";
		exit();
	
	
}

?>