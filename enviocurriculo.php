<?php

include "mysql_connect.php";

$nome = $_POST["nome"];
$fone = $_POST["fone"];
$email = $_POST["email"];
$news = $_POST["news"];
$data = date('Y-m-d h:i:s');

$consulta = mysql_query("SELECT * FROM tbl_curriculos WHERE email_curriculo='$email'");

$linha = mysql_num_rows($consulta);

if($linha == TRUE)
{
	echo "<script> alert ('Email já cadastrado no banco de curriculos') </script>";
	echo "<script> location.href = ('curriculos.php') </script>";
	exit();
}


$erro = $config = array();

// Prepara a variável do arquivo
$arquivo = isset($_FILES["curriculo"]) ? $_FILES["curriculo"] : FALSE;

// Tamanho máximo do arquivo (em bytes)
$config["tamanho"] = 400883;

// Formulário postado... executa as ações
if($arquivo)
{ 
// Verifica se o mime-type do arquivo é de imagem
if(!eregi("^application\/(pdf|doc|docx|DOC|DOCX|PDF|msword|MSWORD|vnd.openxmlformats-officedocument.wordprocessingml.document)$", $arquivo["type"]))
{

$erro[] = "Arquivo em formato inválido! A imagem deve ser pdf, doc ou docx. Envie outro arquivo";
}
else
{
// Verifica tamanho do arquivo
if($arquivo["size"] > $config["tamanho"])
{
$erro[] = "Arquivo em tamanho muito grande deve ser de no máximo " . $config["tamanho"] . " bytes. 
Envie outro arquivo";
}

}
}

// Imprime as mensagens de erro
if(sizeof($erro))
{
foreach($erro as $err)
{
echo " - " . $err . "<BR>";
}

echo "<script> alert('ERRO! Use outro curriculo')</script>";
echo "<script> location.href = ('curriculos.php')</script>";
}

// Verificação de dados OK, nenhum erro ocorrido, executa então o upload...
else
{
// Pega extensão do arquivo
preg_match("/\.(pdf|doc|docx|msword|vnd.openxmlformats-officedocument.wordprocessingml.document){1}$/i", $arquivo["name"], $ext);

// Gera um nome único para a imagem
$arquivo_nome = "curriculo_".$email . "." . $ext[1];

// Caminho de onde o arquivo ficará
$arquivo_dir = "curriculos/" .$arquivo_nome;

$arquivo_fim = $arquivo_dir;


// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_dir);

$envia = mysql_query("INSERT INTO tbl_curriculos(nome_curriculo,fone_curriculo,email_curriculo,anexo_curriculo,data_envio)VALUES ('$nome', '$fone','$email', '$arquivo_fim', '$data')");

if($news == "sim")
	
	$enviar = mysql_query("INSERT INTO tbl_enviar_news(email_enviar,nome_enviar) VALUES ('$email','$nome')");



}

if ($envia == true) //confirma a alteracao da noticia
{
echo "<script> alert ('Curriculo enviado com sucesso, em breve entraremos em contato') </script>";
echo "<script> location.href = ('index.php') </script>";
exit();
}
else
{
echo "<script> alert ('Ocorreu um erro no servidor, tente novamente') </script>";
echo "<script> location.href = ('curriculos.php') </script>";
exit();
}
?>