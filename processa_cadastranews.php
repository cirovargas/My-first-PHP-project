<?php

include "mysql_connect.php";


$titulo = $_POST['titulo'];
$texto =  $_POST['texto'];
$data = date('Y-m-d h:i:s');


if( $titulo == "" || $texto == "")
{
		echo "<script> alert ('Você não digitou o titulo e/ou texto') </script>";
		echo "<script> location.href = ('cadastranews.php') </script>";
		exit();
}

$consulta = mysql_query("SELECT titulo_news FROM tbl_newsletter WHERE titulo_news='$titulo'");

$linhas = mysql_num_rows($consulta);

if($linhas == TRUE)
{
	echo "<script> alert ('Titulo já cadastrado') </script>";
	echo "<script> location.href = ('cadastranews.php') </script>";
	exit();
}
else
{
	
		// -------------------------  email -------------------------
	
	
	$query = mysql_query("SELECT * FROM tbl_enviar_news");
	
	$linha = mysql_num_rows($query);
	
	
	for($cont =1;$cont <=$linha;$cont++)
	{
		
		$nome = mysql_result($query, $linha-$cont, "nome_enviar");
		$email = mysql_result($query, $linha-$cont, "email_enviar");
	
	
	$mensagem2 = "Olá $nome \n";
	$mensagem2 .= "Mensagem: $titulo\n\n";
	$mensagem2 .= "Mensagem: $texto\n";
	$mensagem2 .= "Visite: http://www.classealtda.com \n";
	$mensagem2 .= "\n\n\nData: date('d-m-Y h:i:s')";

	$emailclassea = "classea@classealtda.com";
	
	mail($email, "Newsletter: Classe A, Consultoria", $mensagem2, "From: $emailclassea" );
	}
	
	//------------------------------------------
	
	
	
	if($_FILES['imagem']['tmp_name']<> "")
	{
		
		$erro = $config = array();
		$arquivo = isset($_FILES["imagem"]) ? $_FILES["imagem"] : FALSE;
		$config["tamanho"] = 106883;
		$config["largura"] = 500;
		$config["altura"] = 500;

		if($arquivo)
		{ 

			if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $arquivo["type"]))
			{
				$erro[] = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png. Envie outro arquivo";
			}
			else
			{
				if($arquivo["size"] > $config["tamanho"])
				{
					$erro[] = "Arquivo em tamanho muito grande! A imagem deve ser de no máximo " . $config["tamanho"] . " bytes. Envie outro arquivo";
				}

				$tamanhos = getimagesize($arquivo["tmp_name"]);
				if($tamanhos[0] > $config["largura"])
				{
					$erro[] = "Largura da imagem não deve ultrapassar " . $config["largura"] . " pixels";
				}
				if($tamanhos[1] > $config["altura"])
				{
					$erro[] = "Altura da imagem não deve ultrapassar " . $config["altura"] . " pixels";
				}
			}
		}

		if(sizeof($erro))
		{
			foreach($erro as $err)
			{
				echo " - " . $err . "<BR>";
			}

			echo "<script> alert('ERRO! Use outra imagem')</script>";
			echo "<script> location.href = ('cadastranews.php')</script>";
		}
		else
		{
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);
			$cod = uniqid(rand(), TRUE);
		
			$imagem_nome = "newsletter_".$cod . "." . $ext[1];

			$imagem_dir = "newsletters/" .$imagem_nome;

			$img_fim = $imagem_dir;
	
			move_uploaded_file($arquivo["tmp_name"], $imagem_dir);
		
			$cadastra = mysql_query("INSERT INTO tbl_newsletter (titulo_news,texto_news,img_news,data_cadastro) VALUES('$titulo','$texto','$img_fim','$data')");
		
		
		}

	}
	else
	{
		$cadastra = mysql_query("INSERT INTO tbl_newsletter (titulo_news,texto_news,data_cadastro) VALUES('$titulo','$texto','$data')");
	}
		
	if ($cadastra == true)
	{
		echo "<script> alert ('Noticia cadastrada com sucesso!') </script>";
		echo "<script> location.href = ('admin.php') </script>";
		exit();
	}
	else
	{
		echo "<script> alert ('Ocorreu um erro no servidor, tente novamente') </script>";
		echo "<script> location.href = ('cadastranews.php') </script>";
		exit();
	}
	
}


?>