<?php

include "valida_login.php";

if($_GET['cod'])
{
	
	$cod = $_GET['cod'];
	
	$consulta = mysql_query("SELECT * FROM tbl_curriculos WHERE cod_curriculo = '$cod'");
	
	$consultadata = mysql_query("SELECT DATE_FORMAT(data_envio, '%d/%m/%Y %H:%i:%S') FROM tbl_curriculos WHERE cod_curriculo= '$cod'");
	
	$nome = mysql_result($consulta, 0, "nome_curriculo");
	$fone = mysql_result($consulta, 0, "fone_curriculo");
	$email = mysql_result($consulta, 0, "email_curriculo");
	$assunto = mysql_result($consulta, 0, "anexo_curriculo");
	$data = mysql_result($consultadata, 0);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Curriculos - Classe A</title>
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

#apDiv1 {
	position:absolute;
	left:314px;
	top:240px;
	width:534px;
	height:309px;
	z-index:3;
}
</style>
</head>

<body>
<div id="container">
<div id="topo"></div>


<div id="menu">
  <ul style="position:relative; margin-top:15px;">
    <?php include "menu.php"; ?>
  </ul>
</div>
<div id="principal">
<div id="esquerda">
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</div>
<div id="direita">
<div id="sombra"></div>
</div>
</div>
<div id="rodape"><div style=" text-align: center; font-size: 11px; vertical-align:middle; margin-top:15px"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div></div>

</div>




<div id="apDiv1">
  <table width="100%" border="0">
    <tr>
      <td width="17%">NOME:</td>
      <td width="83%" align="left"><?php echo $nome; ?></td>
    </tr>
    <tr>
      <td>FONE:</td>
      <td align="left"><?php echo $fone; ?></td>
    </tr>
    <tr>
      <td>EMAIL:</td>
      <td align="left"><?php echo $email; ?></td>
    </tr>
    <tr>
      <td height="34">ANEXO:</td>
      <td align="left"><a href="<?php echo $assunto; ?>" target="_blank">Curriculo Anexado</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right">data:<?php echo $data; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><a href="excluicurriculo.php?cod=<?php echo $cod; ?>">Excluir mensagem</a></td>
    </tr>
  </table>
</div>
</body>
</html>
<?php

}
else
{
	header("Location: admincontatos.php");
			exit();
}
?>


