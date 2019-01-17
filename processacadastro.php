<?php

include "mysql_connect.php";

$empresa = $_POST['empresa'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$fone = $_POST['fone'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha1 = $_POST['senha1'];
$news = $_POST['news'];
$login = $_POST['login2'];
$data = date('Y-m-d h:i:s');


if($empresa == "" || $cnpj == "" || $endereco == "" || $cidade == "" || $uf == "" || $cep == "" || $fone == "" || $nome == "" || $email == "" || $senha == "" || $senha1 == "" || $news == "" || $login == "")
{
	echo "<script> alert ('Campos em branco, preencha o formulario completamente!') </script>";
	echo "<script> location.href = ('cadastro.php') </script>";
	exit();
	
}

if( $senha <> $senha1)
{
	echo "<script> alert ('A confirmacao de senha nao confere') </script>";
	echo "<script> location.href = ('cadastro.php') </script>";
	exit();
}


$consultalogin = mysql_query("SELECT * FROM tbl_usuario WHERE login_user='$login'");

$linhalogin = mysql_num_rows($consultalogin);

if($linhalogin == TRUE)
{
	echo "<script> alert ('Login ja cadastrado') </script>";
	echo "<script> location.href = ('cadastro.php') </script>";
	exit();
}
$consultaemail = mysql_query("SELECT * FROM tbl_usuario WHERE email_user='$email'");

$linhaemail = mysql_num_rows($consultaemail);

if($linhaemail == TRUE)
{
	echo "<script> alert ('Email ja cadastrado') </script>";
	echo "<script> location.href = ('cadastro.php') </script>";
	exit();
}



include "validacnpj.php";

if (!validaCNPJ($cnpj)){ 
    echo "<script> alert ('CNPJ Invalido') </script>";
	echo "<script> location.href = ('cadastro.php') </script>";
	exit();
} 
else{ 
    
	$cadastro = mysql_query("INSERT INTO tbl_usuario (nome_user,login_user,senha_user,empresa_user,cnpj_user,endereco_user,cidade_user,uf_user,cep_user,fone_user,email_user,data_cadastro)
VALUES ('$nome','$login','$senha','$empresa','$cnpj','$endereco','$cidade','$uf','$cep','$fone','$email','$data')");

	
	if($news == "sim")
	{
		$enviarnews = mysql_query("INSERT INTO tbl_enviar_news(email_enviar,nome_enviar) VALUES ('$email', '$nome')");
	}

	if($cadastro == TRUE && $news == TRUE)
	{
		echo "<script> alert ('Cadastro efetuado com sucesso') </script>";
		echo "<script> location.href = ('cadastro.php') </script>";
		exit();
	}
	else
	{
		echo "<script> alert ('Erro ao cadastrar, tente novamente') </script>";
		echo "<script> location.href = ('cadastro.php') </script>";
		exit();
	}
	
} 
?>