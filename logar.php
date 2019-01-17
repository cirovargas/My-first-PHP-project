<?php

	session_start();
	include "mysql_connect.php";
	
	$login = $_POST["usuario"];
	$senha = $_POST["senha"];

	  if( $login == "" || $senha == "")
	  {
			echo "<script> alert ('Login e/ou senha nao digitados') </script>";
			echo "<script> location.href = ('agenda.php') </script>";
			exit();
	  }
	  else
	  {
		  $pesquisa = mysql_query ("SELECT login_user, senha_user, nome_user,cod_user FROM tbl_usuario WHERE
		 	login_user = '$login'
		 AND
		 	senha_user = '$senha'");
			
	$linhas = mysql_num_rows ($pesquisa);
		
		if($linhas == TRUE)
			{
				
				$nome = mysql_result ($pesquisa, 0,'nome_user');
				$codigo = mysql_result ($pesquisa, 0,'cod_user');  
				
				
				$_SESSION['serial'] = $codigo;
				$_SESSION['nome'] = $nome;
				$_SESSION['usuario'] = $login;
				
				echo "<script> alert ('Bem vindo, $nome ') </script>";
				echo "<script> location.href = ('agenda.php') </script>";
				exit();
				

			}
			else
			{
				echo "<script> alert ('Login e/ou senha errados') </script>";
				echo "<script> location.href = ('agenda.php') </script>";
				exit();
			}
	  
	  }
	  
	  ?>
