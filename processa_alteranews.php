<?php

include "mysql_connect.php";


$cod = $_POST['cod'];
$titulo = $_POST['titulo'];
$texto =  $_POST['texto'];
$data = date('Y-m-d h:i:s');



if( $titulo == "" || $texto == "")
{
		echo "<script> alert ('Você não digitou o titulo e/ou texto') </script>";
		echo "<script> location.href = ('cadastranews.php') </script>";
		exit();
}

	
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
			$cod2 = uniqid(rand(), TRUE);
		
			$imagem_nome = "newsletter_".$cod2 . "." . $ext[1];

			$imagem_dir = "newsletters/" .$imagem_nome;

			$img_fim = $imagem_dir;
	
			move_uploaded_file($arquivo["tmp_name"], $imagem_dir);
		
		
		}
		
		$cadastra = mysql_query("UPDATE tbl_newsletter SET titulo_news = '$titulo',texto_news = '$texto',img_news = '$img_fim' WHERE cod_news ='$cod'");

	}
	else
	{
		$cadastra = mysql_query("UPDATE tbl_newsletter SET titulo_news = '$titulo',texto_news = '$texto' WHERE cod_news ='$cod'");
	}
		
	if ($cadastra == true)
	{
		echo "<script> alert ('Noticia alterada com sucesso!') </script>";
		echo "<script> location.href = ('admin.php') </script>";
		exit();
	}
	else
	{
		echo "<script> alert ('Ocorreu um erro no servidor, tente novamente') </script>";
		echo "<script> location.href = ('cadastranews.php') </script>";
		exit();
	}


?>