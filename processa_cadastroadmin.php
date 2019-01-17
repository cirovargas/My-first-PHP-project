<?php

include "mysql_connect.php";


$nome = $_POST['nome'];
$senha1 =  $_POST['senha1'];
$senha =  $_POST['senha'];
$login = $_POST['login'];



if( $nome == "" || $senha == "" || $senha1 == "" || $login == "")
{
		echo "<script> alert ('Formulario incompleto, preencha todos os campos') </script>";
		echo "<script> location.href = ('adminadministradores.php') </script>";
		exit();
}

if( $senha == $senha1)
{

		$cadastra = mysql_query("INSERT INTO tbl_admin (nome_admin,login_admin,senha_admin) values ('$nome','$login','$senha')");

	
	if ($cadastra == true)
	{
		echo "<script> alert ('Administrador cadastrado com sucesso!') </script>";
		echo "<script> location.href = ('adminadministradores.php') </script>";
		exit();
	}
	else
	{
		echo "<script> alert ('Ocorreu um erro no servidor, tente novamente') </script>";
		echo "<script> location.href = ('adminadministradores.php') </script>";
		exit();
	}
	
}
else
{
		echo "<script> alert ('As senhas nao conferem') </script>";
		echo "<script> location.href = ('adminadministradores.php') </script>";
		exit();
}

?>