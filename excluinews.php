<?php

include "mysql_connect.php";


$cod = $_GET['cod'];


$exclui = mysql_query("DELETE FROM tbl_newsletter WHERE cod_news='$cod'");


if($exclui == TRUE)
{
		echo "<script> alert ('Noticia excluida com sucesso') </script>";
		echo "<script> location.href = ('adminnewsletters.php') </script>";
		exit();
	
	
}



?>