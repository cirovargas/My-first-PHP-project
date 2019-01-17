<?php

include "mysql_connect.php";


$link = $_POST['link'];
$comentario = $_POST['titulo'];


$erro = $config = array();

// Prepara a variável do arquivo
$arquivo = isset($_FILES["imagem"]) ? $_FILES["imagem"] : FALSE;

// Tamanho máximo do arquivo (em bytes)
$config["tamanho"] = 106883;
// Largura máxima (pixels)
$config["largura"] = 500;
// Altura máxima (pixels)
$config["altura"] = 500;

// Formulário postado... executa as ações
if($arquivo)
{ 
// Verifica se o mime-type do arquivo é de imagem
if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $arquivo["type"]))
{
$erro[] = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, 
bmp, gif ou png. Envie outro arquivo";
}
else
{
// Verifica tamanho do arquivo
if($arquivo["size"] > $config["tamanho"])
{
$erro[] = "Arquivo em tamanho muito grande! 
A imagem deve ser de no máximo " . $config["tamanho"] . " bytes. 
Envie outro arquivo";
}

// Para verificar as dimensões da imagem
$tamanhos = getimagesize($arquivo["tmp_name"]);

// Verifica largura
if($tamanhos[0] > $config["largura"])
{
$erro[] = "Largura da imagem não deve 
ultrapassar " . $config["largura"] . " pixels";
}

// Verifica altura
if($tamanhos[1] > $config["altura"])
{
$erro[] = "Altura da imagem não deve 
ultrapassar " . $config["altura"] . " pixels";
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

echo "<script> alert('ERRO! Use outra imagem')</script>";
echo "<script> location.href = ('cadastra_altera_img_news.php')</script>";
}

// Verificação de dados OK, nenhum erro ocorrido, executa então o upload...
else
{
// Pega extensão do arquivo
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

// Gera um nome único para a imagem
$imagem_nome = "banner_index." . $ext[1];

// Caminho de onde a imagem ficará
$imagem_dir = "banner/" .$imagem_nome;

$img_fim = $imagem_dir;


// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $imagem_dir);

$altera = mysql_query("UPDATE tbl_banner_index SET src_img = '$img_fim',coment_img = '$comentario',link_img = '$link' WHERE cod_img =1");



}

if ($altera == true) //confirma a alteracao da noticia
{
echo "<script> alert ('Imagem enviada com sucesso') </script>";
echo "<script> location.href = ('admin.php') </script>";
exit();
}
else
{
echo "<script> alert ('Ocorreu um erro no servidor, tente novamente') </script>";
echo "<script> location.href = ('alterabannerindex.php') </script>";
exit();
}
?>