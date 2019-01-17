<?php

include "mysql_connect.php";


$cod = $_GET['cod'];


$exclui = mysql_query("DELETE FROM tbl_banner_topo WHERE id_imagem='$cod'");


if($exclui == TRUE)
{
		echo "<script> alert ('Banner excluido com sucesso') </script>";
		echo "<script> location.href = ('imagens.php') </script>";
		exit();
	
	
}

?>