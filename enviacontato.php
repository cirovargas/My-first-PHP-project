<?php


	include "mysql_connect.php";
	
	$nome = $_POST["nome"];
	$fone = $_POST["fone"];
	$email = $_POST["email"];
	$assunto = $_POST["assunto"];
	$mensagem = $_POST["mensagem"];	
	$news = $_POST["news"];
	$data = date('Y-m-d h:i:s');
	
	$mensagem2 = "Data: date('d-m-Y h:i:s')\n\n\n";
	$mensagem2 .= "Nome: $nome\n";
	$mensagem2 .= "Telefone: $fone\n";
	$mensagem2 .= "E-mail: $email\n";
	$mensagem2 .= "Assunto: $assunto\n";
	$mensagem2 .= "Mensagem: $mensagem\n";
	$mensagem2 .= "Receber news: $news\n";
	
	mail("classea@classealtda.com", $assunto, $mensagem2, "From: $email" );
	
	
	
	
	$enviar = mysql_query("INSERT INTO tbl_contato (nome_contato, fone_contato, email_contato, assunto_contato, msg_contato, data_contato) VALUES ('$nome','$fone','$email','$assunto','$mensagem','$data')");
	
	if($news == "sim")
		$enviar = mysql_query("INSERT INTO tbl_enviar_news(email_enviar,nome_enviar) VALUES ('$email','$nome')");
																																							
																																							

if ($enviar == true)
{
echo "<script> alert ('Obrigado, em breve responderemos o seu contato') </script>";
echo "<script> location.href = ('index.php') </script>";
exit();
}
else
{
echo "<script> alert ('Ocorreu um erro no servidor, tente novamente') </script>";
echo "<script> location.href = ('contato.php') </script>";
exit();
}

?>