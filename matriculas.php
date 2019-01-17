<?php

include "valida_login.php";


if(isset($_GET['cod']))
{


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios - Classe A</title>
<style type="text/css">
body{
	background-image:url(images/bg.jpg);
	background-repeat:repeat-x;
	background-color:#eef3f7;
	font: 11px "Lucida Sans Unicode", "Lucida Sans", "Lucida Grande", verdana, arial, helvetica;
	color: #282828;
	text-align: center;
}

#topo {
	position:relative;
	margin-top:0px;
	margin-left:0px;
	width:100%;
	height:94px;
	z-index:1;
	background-color: #FFFFFF;
	background-image: url(images/logo.gif);
	background-repeat:no-repeat;
}
#apDiv2 {
	position:absolute;
	left:468px;
	top:211px;
	width:128px;
	height:199px;
	z-index:2;
	background-color: #009966;
}
#container {
	position:absolute;
	left:72px;
	top:44px;
	width:850px;
	height:751px;
	z-index:2;
}
#menu {
	position:relative;
	margin-top:0px;
	margin-left:0px;
	width:850px;
	height:56px;
	z-index:4;
	background-image:url(images/menu.png);
	background-repeat:repeat-x;
}

#menu ul li{
	list-style:none;
	display:block;
	float:left;
	margin-left:10px;

}
#menu a{
	text-transform:uppercase;
	font-family:Verdana, Geneva, sans-serif;
	text-decoration:none;
	color:#003;
	font-size:13px;
	font-weight:bold;
}
#menu a:hover{
	text-transform:uppercase;
	font-family:Verdana, Geneva, sans-serif;
	color:#00F;
	text-decoration:none;
	font-size:13px;
	font-weight:bold;
}
#principal {
	position:relative;
	margin-top:-3px;
	margin-left:0px;
	width:850px;
	height:450px;
	z-index:3;
	background-color: #FFFFFF;
}
#rodape {
	position:relative;
	margin-top:0px;
	margin-left:0px;
	width:850px;
	height:40px;
	z-index:3;
	background-color: #d9e2e9;
}
#esquerda {
	position:relative;
	float:left;
	margin-top:-3px;
	margin-bottom:0px;
	margin-left:0px;
	width:128px;
	height:101%;
	z-index:3;
	background-color: #52c6ce;
}
#direita {
	position:relative;
	float:right;
	margin-top:-3px;
	margin-bottom:0px;
	margin-right:0px;
	width:722px;
	height:101%;
	z-index:3;
}
#sombra {
	position:relative;
	float:left;
	margin-top:0px;
	margin-bottom:0px;
	margin-left:0px;
	width:9px;
	height:100%;
	z-index:3;
	background-image: url(images/sombra.png);
}

a {
	color: #2E9FED;
	text-decoration: none;
}
a:hover {
	color: #1471B1;
}
#listnews {
	position:relative;
	margin-left:25px;
	margin-top:15px;
	width:90%;
	height:90%;
	z-index:3;
	overflow:auto;
}
table.news {
	border-collapse: collapse;
}

table.news tr td{
border:1px solid #000;
}

</style>
</head>

<body>
<div id="listnews">



<table width="100%" class="news">
  <tr>
    <td width="45%" align="center" bgcolor="#a9e0e5">MATRICULADO</td>
    <td width="16%" align="center" bgcolor="#a9e0e5">LOGIN</td>
    <td width="22%" align="center" bgcolor="#a9e0e5">DATA/HORA DA MATRICULA</td>
    <td bgcolor="#a9e0e5">&nbsp;</td>
    </tr>

    <?php
	$cod = $_GET['cod'];
	
	$query = mysql_query("SELECT tbl_usuario_cod_user FROM tbl_matricula WHERE tbl_evento_cod_evento='$cod'");
	

	$linha = mysql_num_rows($query);
	
	for($cont=1;$cont<=$linha;$cont++)
	{
		$coduser = mysql_result($query, $linha-$cont, "tbl_usuario_cod_user");
		
		$querydata = mysql_query("SELECT DATE_FORMAT(data_matricula, '%d/%m/%Y %H:%i:%S') FROM tbl_matricula WHERE tbl_evento_cod_evento ='$cod' AND tbl_usuario_cod_user ='$coduser'");
		
		$datamatricula = mysql_result($querydata, 0);
		$query2 = mysql_query("SELECT nome_user,login_user FROM tbl_usuario WHERE cod_user='$coduser'");
		
		
		
		$nomeuser = mysql_result($query2, 0, "nome_user");
		$loginuser = mysql_result($query2, 0, "login_user");
	
	
	?>
  <tr>
    <td><a href="usuarios.php?user=<?php echo $coduser; ?>" target="_blank" ><?php echo $nomeuser; ?></a></td>
    <td><?php echo $loginuser; ?></td>
    <td align="center"><?php echo $datamatricula; ?></td>
    <td align="center"><a href="cancelamatricula.php?cod=<?php echo $cod; ?>&user=<?php echo $coduser; ?>" >CANCELAR MATRICULA</a></td>
    </tr>
    
    <?php } ?>

   
</table>

</div>

</body>
</html>
<?php
}
else
{

    	header("Location: agenda.php");
	exit();

}



?>