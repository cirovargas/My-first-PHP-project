<?php

session_start();
include "mysql_connect.php";


if(isset($_SESSION['login']))
{
	
	$login = $_SESSION['login'];
	$sql = mysql_query("SELECT ip_admin FROM tbl_admin WHERE login_admin = '$login'");
	$ip = mysql_result($sql, 0, 'ip_admin');

	if($ip == $_SERVER['REMOTE_ADDR'] && $ip == $_SESSION['ip'])
		{

		echo "<span style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000; font-weight:bold;' >Seja bem vindo, ".$_SESSION["nome"].".</span> <a href='logout.php'>Sair</a>";
		}
		else
		{
			$_SESSION = array();
			session_unset();
			session_destroy();
			header("Location:index.php");
			exit();
		}
}
else
{
			$_SESSION = array();
			session_unset();
			session_destroy();
			header("Location: index.php");
			exit();
}
	
?>