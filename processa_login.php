<?php

	session_start();
	include "mysql_connect.php";
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$ip = $_POST["ip"];
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Redirecionando...</title>
<style type="text/css">
body{
	background-image:url(images/bg.jpg);
	background-repeat:repeat-x;
}

#redirecionar {
	position:absolute;
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	font-weight:bold;
	left:50%;
	top:50%;
	margin-left:-435px;
	margin-top:-110px;
	width:870px;
	height:220px;
	z-index:1;
	border: #000 1px solid;
	background-color: #FFFFFF;
}
#redirecionar a{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	color:#006;
	text-decoration:none;
}
#redirecionar a:visited{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	color:#006;
	text-decoration:none;
}
#redirecionar a:hover{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	color:#F60;
	text-decoration:none;
}
	

</style>
</head>

<body>
<div id="redirecionar">
  <table width="100%" height="100%" border="0">
    <tr>
      <td width="84%" height="23" bgcolor="#0000FF">Redirecionando...</td>
      <td colspan="2" bgcolor="#0000FF">IP: <?php echo $ip; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle">
      
      <?php 
	  if( $login == "" || $senha == "")
	  {
		  echo "Login e/ou senha não digitados!";
		  echo "<meta http-equiv='refresh' content='6;URL=login.php' />";
		  echo "<p><a href='login.php' target='_self'>Clique aqui caso o navegador nao lhe redirecione automaticamente...</a></p>";
	  }
	  else
	  {
		  $pesquisa = mysql_query ("SELECT login_admin, senha_admin, nome_admin FROM tbl_admin WHERE
		 	login_admin = '$login'
		 AND
		 	senha_admin = '$senha'");
			
	$linhas = mysql_num_rows ($pesquisa);
		
		if($linhas == TRUE)
			{
				
				$nome = mysql_result ($pesquisa, 0,'nome_admin');
				
				$_SESSION['nome'] = $nome;
				$_SESSION['login'] = $login;
				$_SESSION['ip'] = $ip;
				
				$ipbanco = mysql_query ("UPDATE tbl_admin SET ip_admin = '$ip' WHERE login_admin = '$login'");
				
				echo "<p>Seja bem vindo, ".$nome.".</p>";
				echo "<meta http-equiv='refresh' content='6;URL=admin.php' />";
				echo "<p><a href='admin.php' target='_self'>Clique aqui caso o navegador nao lhe redirecione automaticamente...</a></p>";

			}
			else
			{
				
				echo "Login e/ou senha errados!";
				echo "<meta http-equiv='refresh' content='6;URL=login.php' />";
				echo "<p><a href='login.php' target='_self'>Clique aqui caso o navegador nao lhe redirecione automaticamente...</a></p>";
				
			}
	  
	  }
	  
	   ?>
      
      <td width="16%" align="center" valign="middle">
      <?php
	  if(isset($_SESSION['nome']) && isset($_SESSION['login']) && $ipbanco == TRUE)
	  	echo "<img src='images/busy.gif' width='84' height='84' alt='Redirecionando' />";
	  else
	  	echo "<img src='images/erro.png' width='84' height='84' alt='Erro' />";
	  ?>

      </td>
    </tr>
  </table>
</div>
</body>
</html>