<?php

session_start();

include "mysql_connect.php";


$curso = $_POST['curso'];
$aluno = $_POST['aluno'];
$data = date('Y-m-d h:i:s');


$cadastro = mysql_query("INSERT INTO tbl_matricula(tbl_usuario_cod_user,tbl_evento_cod_evento,data_matricula) VALUES ('$aluno','$curso','$data')");


if ($cadastro == true)
	{
		echo "<script> alert ('Matricula efetuada com sucesso!') </script>";
		echo "<script> location.href = ('agenda.php') </script>";
		exit();
	}
	else
	{
		echo "<script> alert ('Ocorreu um erro no servidor, tente novamente') </script>";
		echo "<script> location.href = ('agenda.php') </script>";
		exit();
	}

?>