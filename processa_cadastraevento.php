<?php


include "mysql_connect.php";


$nome = $_POST['nome'];
$instrutor = $_POST['instrutor'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$local = $_POST['local'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$ch = $_POST['ch'];
$inscricao = $_POST['inscricao'];
$sintese = $_POST['sintese'];
$topicos = $_POST['topicos'];
$data = date('Y-m-d h:i:s');

$dataevento = $ano."-".$mes."-".$dia;


if($nome == "" || $instrutor == "" || $dia == "" || $mes == "" || $ano == "" || $local == "" || $endereco == "" || $cidade == "" || $estado == "" || $ch == "" || $inscricao == "" || $sintese == "" || $topicos == "")
{
	echo "<script> alert ('Campos em branco, preencha o formulario completamente!') </script>";
	echo "<script> location.href = ('cadastraevento.php') </script>";
	exit();
}


$consulta = mysql_query("SELECT nome_evento FROM tbl_evento WHERE nome_evento='$nome'");

$linhas = mysql_num_rows($consulta);

if($linhas == TRUE)
{
	echo "<script> alert ('Nome de evento já cadastrado') </script>";
	echo "<script> location.href = ('cadastraevento.php') </script>";
	exit();
}
else
{
		if($_FILES['conteudo']['tmp_name']<> "")
		{

		$erro = $config = array();

// Prepara a variável do arquivo
$conteudo = isset($_FILES["conteudo"]) ? $_FILES["conteudo"] : FALSE;

// Tamanho máximo do arquivo (em bytes)
$config["tamanho"] = 400883;

// Formulário postado... executa as ações
if($conteudo)
{
// Verifica se o mime-type do arquivo é de imagem
if(!eregi("^application\/(pdf|doc|docx|DOC|DOCX|PDF|msword|MSWORD|vnd.openxmlformats-officedocument.wordprocessingml.document)$", $conteudo["type"]))
{

$erro[] = "Arquivo em formato inválido! A imagem deve ser pdf, doc ou docx. Envie outro arquivo";
}
else
{
// Verifica tamanho do arquivo
if($conteudo["size"] > $config["tamanho"])
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

echo "<script> alert('ERRO! Use outro conteudo')</script>";
echo "<script> location.href = ('curriculos.php')</script>";
}

// Verificação de dados OK, nenhum erro ocorrido, executa então o upload...
else
{
// Pega extensão do arquivo
preg_match("/\.(pdf|doc|docx|msword|vnd.openxmlformats-officedocument.wordprocessingml.document){1}$/i", $conteudo["name"], $ext);

// Gera um nome único para a imagem
$conteudo_nome = "conteudo_".$nome . "." . $ext[1];

// Caminho de onde o arquivo ficará
$conteudo_dir = "conteudo/" .$conteudo_nome;

$conteudo_fim = $conteudo_dir;


// Faz o upload da imagem
move_uploaded_file($conteudo["tmp_name"], $conteudo_dir);
}
 }


// -----------------------  AQUI   AGORA O MATERIAL ---------------------------

	if($_FILES['material']['tmp_name']<> "")
		{

		$erro = $config = array();

// Prepara a variável do arquivo
$material = isset($_FILES["material"]) ? $_FILES["material"] : FALSE;

// Tamanho máximo do arquivo (em bytes)
$config["tamanho"] = 400883;

// Formulário postado... executa as ações
if($material)
{
// Verifica se o mime-type do arquivo é de imagem
if(!eregi("^application\/(pdf|doc|docx|DOC|DOCX|PDF|msword|MSWORD|vnd.openxmlformats-officedocument.wordprocessingml.document)$", $material["type"]))
{

$erro[] = "Arquivo em formato inválido! A imagem deve ser pdf, doc ou docx. Envie outro arquivo";
}
else
{
// Verifica tamanho do arquivo
if($material["size"] > $config["tamanho"])
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

echo "<script> alert('ERRO! Use outro conteudo')</script>";
echo "<script> location.href = ('curriculos.php')</script>";
}

// Verificação de dados OK, nenhum erro ocorrido, executa então o upload...
else
{
// Pega extensão do arquivo
preg_match("/\.(pdf|doc|docx|msword|vnd.openxmlformats-officedocument.wordprocessingml.document){1}$/i", $material["name"], $ext);

// Gera um nome único para a imagem
$material_nome = "material_".$nome . "." . $ext[1];

// Caminho de onde o arquivo ficará
$material_dir = "material/" .$material_nome;

$material_fim = $material_dir;


// Faz o upload da imagem
move_uploaded_file($material["tmp_name"], $material_dir);
}
}


if($material_fim <> "" && $conteudo_fim == "")
{
    $cadastra = mysql_query("INSERT INTO tbl_evento (nome_evento,instrutor_evento,data_evento,local_evento,endereco_evento,cidade_evento,horaaula_evento,estado_evento,inscricao_evento,sintese_evento,topicos_eventos,material_evento,data_cadastro) VALUES ('$nome','$instrutor','$dataevento','$local','$endereco','$cidade','$ch','$estado', '$inscricao', '$sintese', '$topicos','$material_fim','$data')");
	

}
if($material_fim == "" && $conteudo_fim <> "")
{
	
	$cadastra = mysql_query("INSERT INTO tbl_evento (nome_evento,instrutor_evento,data_evento,local_evento,endereco_evento,cidade_evento,horaaula_evento,estado_evento,inscricao_evento,sintese_evento,topicos_eventos,conteudo_evento,data_cadastro) VALUES ('$nome','$instrutor','$dataevento','$local','$endereco','$cidade','$ch','$estado', '$inscricao', '$sintese', '$topicos','$conteudo_fim','$data')");
	


}
if($material_fim <> "" && $conteudo_fim <> "")
{
	
	$cadastra = mysql_query("INSERT INTO tbl_evento (nome_evento,instrutor_evento,data_evento,local_evento,endereco_evento,cidade_evento,horaaula_evento,estado_evento,inscricao_evento,sintese_evento,topicos_eventos,conteudo_evento,material_evento,data_cadastro) VALUES ('$nome','$instrutor','$dataevento','$local','$endereco','$cidade','$ch','$estado', '$inscricao', '$sintese', '$topicos','$conteudo_fim','$material_fim','$data')");
	


}
if($material_fim == "" && $conteudo_fim == "")
{
	$cadastra = mysql_query("INSERT INTO tbl_evento (nome_evento,instrutor_evento,data_evento,local_evento,endereco_evento,cidade_evento,horaaula_evento,estado_evento,inscricao_evento,sintese_evento,topicos_eventos,data_cadastro) VALUES ('$nome','$instrutor','$dataevento','$local','$endereco','$cidade','$ch','$estado', '$inscricao', '$sintese', '$topicos', '$data')");
	

	
}


if ($cadastra == true)
	{
		echo "<script> alert ('Evento cadastrado com sucesso!') </script>";
		echo "<script> location.href = ('admineventos.php') </script>";
		exit();
	}
	else
	{
		echo "<script> alert ('Ocorreu um erro no servidor, tente novamente') </script>";
		echo "<script> location.href = ('cadastraevento.php') </script>";
		exit();
	}


} 


?>