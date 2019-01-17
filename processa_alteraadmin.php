<?php

include "mysql_connect.php";


$cod = $_POST['cod'];
$nome = $_POST['nome'];
$senha1 =  $_POST['senha1'];
$senha =  $_POST['senha'];
$data = date('Y-m-d h:i:s');
$login = $_POST['login'];



if( $nome == "" || $senha == "" || $senha1 == "" || $login == "")
{
		echo "<script> alert ('Formulario incompleto, preencha todos os campos') </script>";
		echo "<script> location.href = ('adminadministradores.php') </script>";
		exit();
}

if( $senha == $senha1)
{

		$cadastra = mysql_query("UPDATE tbl_admin SET nome_admin = '$nome',login_admin = '$login',senha_admin = '$senha' WHERE cod_admin ='$cod'");

	
	if ($cadastra == true)
	{
		echo "<script> alert ('Administrador alterado com sucesso!') </script>";
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