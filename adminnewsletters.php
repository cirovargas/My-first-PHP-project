<?php

include "valida_login.php";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newsletters - Classe A</title>
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
    <td><a href="cadastranews.php" title="Cadastrar nova newsletter">Cadastrar Nova</a></td>
  </tr>
  <tr>
    <td><a href="index.php" title="Ver inicial" target="_blank">Ver página</a></td>
  </tr>
</table>

</div>
<div id="direita">
<div id="sombra"></div>
<div id="listnews">
 
 	<?php 
			$consulta = mysql_query ("SELECT cod_news,titulo_news,img_news FROM tbl_newsletter ORDER BY cod_news DESC");
			$linhas = mysql_num_rows ($consulta);
			$consultadata = mysql_query("SELECT DATE_FORMAT(data_cadastro, '%d/%m/%Y %H:%i:%S') FROM tbl_newsletter");
			echo "Newsletter's cadastradas - ".$linhas;
	?>
    
    
<table width="100%" class="news">
  <tr>
    <td width="61%" align="center" bgcolor="#a9e0e5">TITULO</td>
    <td width="9%" align="center" bgcolor="#a9e0e5">IMAGEM</td>
    <td width="13%" align="center" bgcolor="#a9e0e5">DATA/HORA</td>
    <td width="9%" bgcolor="#a9e0e5">&nbsp;</td>
    <td width="8%" bgcolor="#a9e0e5">&nbsp;</td>
  </tr>
  
  <?php 
		  	for ($cont = 0; $cont < $linhas; $cont++)
			{
				$titulo = mysql_result ($consulta, $cont, "titulo_news");
				$cod = mysql_result ($consulta, $cont, "cod_news");
				$img = mysql_result ($consulta, $cont, "img_news");
				$data = mysql_result ($consultadata, $cont);
				
				if (strlen($titulo) > 30)        
				{                
				$titulo = substr($titulo, 0, 30);                
				$titulo = trim($titulo) . "...";
				}
				
				
		  ?>
  
  
  
  <tr>
    <td><?php echo $titulo; ?></td>
    <td align="center">
	<?php 
	if($img)
	echo "Sim";
	else
	echo "N&atilde;o";
	 ?>
    
    </td>
    <td align="center"><?php echo $data; ?></td>
    <td align="center"><a href="alteranews.php?cod=<?php echo $cod; ?>" >ALTERAR</a></td>
    <td align="center"><a href="excluinews.php?cod=<?php echo $cod; ?>" >EXCLUIR</a></td>
  </tr>
  <?php 
		  	}
		  ?>
</table>

</div>

</div>
</div>
<div id="rodape"><div style=" text-align: center; font-size: 11px; vertical-align:middle; margin-top:15px"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div></div>

</div>




</body>
</html>
